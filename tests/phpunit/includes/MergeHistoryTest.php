<?php

/**
 * @group Database
 */
class MergeHistoryTest extends MediaWikiTestCase {

	/**
	 * Make some pages to work with
	 */
	public function addDBData() {
		// Pages that won't actually be merged
		$this->insertPage( 'Test' );
		$this->insertPage( 'Test2' );

		// Pages that will be merged
		$this->insertPage( 'Merge1' );
		$this->insertPage( 'Merge2' );
	}

	/**
	 * @dataProvider provideIsValidMerge
	 * @covers MergeHistory::isValidMerge
	 * @param $source string Source page
	 * @param $dest string Destination page
	 * @param $timestamp string|bool Timestamp up to which revisions are merged (or false for all)
	 * @param $error string|bool Expected error for test (or true for no error)
	 */
	public function testIsValidMerge( $source, $dest, $timestamp, $error ) {
		$this->setMwGlobals( 'wgContentHandlerUseDB', false );
		$mh = new MergeHistory(
			Title::newFromText( $source ),
			Title::newFromText( $dest ),
			$timestamp
		);
		$status = $mh->isValidMerge();
		if ( $error === true ) {
			$this->assertTrue( $status->isGood() );
		} else {
			$this->assertTrue( $status->hasMessage( $error ) );
		}
	}

	public static function provideIsValidMerge() {
		return array(
			// for MergeHistory::isValidMerge
			array( 'Test', 'Test2', false, true ),
			// Although this timestamp is after the latest timestamp of both pages,
			// MergeHistory should select the latest source timestamp up to this which should
			// still work for the merge.
			array( 'Test', 'Test2', strtotime( 'tomorrow' ), true ),
			array( 'Test', 'Test', false, 'mergehistory-fail-self-merge' ),
			array( 'Nonexistant', 'Test2', false, 'mergehistory-fail-invalid-source' ),
			array( 'Test', 'Nonexistant', false, 'mergehistory-fail-invalid-dest' ),
			array(
				'Test',
				'Test2',
				'This is obviously an invalid timestamp',
				'mergehistory-fail-bad-timestamp'
			),
		);
	}

	/**
	 * Test merge revision limit checking
	 * @covers MergeHistory::isValidMerge
	 */
	public function testIsValidMergeRevisionLimit() {
		$limit = MergeHistory::REVISION_LIMIT;

		$mh = $this->getMockBuilder( 'MergeHistory' )
			->setMethods( array( 'getRevisionCount' ) )
			->setConstructorArgs( array(
				Title::newFromText( 'Test' ),
				Title::newFromText( 'Test2' ),
			) )
			->getMock();
		$mh->expects( $this->once() )
			->method( 'getRevisionCount' )
			->will( $this->returnValue( $limit + 1 ) );

		$status = $mh->isValidMerge();
		$this->assertTrue( $status->hasMessage( 'mergehistory-fail-toobig' ) );
		$errors = $status->getErrorsByType( 'error' );
		$params = $errors[0]['params'];
		$this->assertEquals( $params[0], Message::numParam( $limit ) );
	}

	/**
	 * Test user permission checking
	 * @covers MergeHistory::checkPermissions
	 */
	public function testCheckPermissions() {
		$mh = new MergeHistory(
			Title::newFromText( 'Test' ),
			Title::newFromText( 'Test2' )
		);

		// Sysop with mergehistory permission
		$sysop = User::newFromName( 'UTSysop' );
		$status = $mh->checkPermissions( $sysop, '' );
		$this->assertTrue( $status->isOK() );

		// Normal user
		$notSysop = User::newFromName( 'UTNotSysop' );
		$notSysop->addToDatabase();
		$status = $mh->checkPermissions( $notSysop, '' );
		$this->assertTrue( $status->hasMessage( 'mergehistory-fail-permission' ) );
	}

	/**
	 * Test merged revision count
	 * @covers MergeHistory::getMergedRevisionCount
	 */
	public function testGetMergedRevisionCount() {
		$mh = new MergeHistory(
			Title::newFromText( 'Merge1' ),
			Title::newFromText( 'Merge2' )
		);

		$mh->merge( User::newFromName( 'UTSysop' ) );
		$this->assertEquals( $mh->getMergedRevisionCount(), 1 );
	}
}
