<?php

/**
 * @group Database
 */
class RecentChangeTest extends MediaWikiTestCase {
	protected $title;
	protected $target;
	protected $user;
	protected $user_comment;
	protected $context;

	public function setUp() {
		parent::setUp();

		$this->title = Title::newFromText( 'SomeTitle' );
		$this->target = Title::newFromText( 'TestTarget' );
		$this->user = User::newFromName( 'UserName' );

		$this->user_comment = '<User comment about action>';
		$this->context = RequestContext::newExtraneousContext( $this->title );
	}

	/**
	 * @covers RecentChange::newFromRow
	 * @covers RecentChange::loadFromRow
	 */
	public function testNewFromRow() {
		$row = new stdClass();
		$row->rc_foo = 'AAA';
		$row->rc_timestamp = '20150921134808';
		$row->rc_deleted = 'bar';

		$rc = RecentChange::newFromRow( $row );

		$expected = array(
			'rc_foo' => 'AAA',
			'rc_timestamp' => '20150921134808',
			'rc_deleted' => 'bar',
		);
		$this->assertEquals( $expected, $rc->getAttributes() );
	}

	/**
	 * @covers RecentChange::parseParams
	 */
	public function testParseParams() {
		$params = array(
			'root' => array(
				'A' => 1,
				'B' => 'two'
			)
		);

		$this->assertParseParams(
			$params,
			'a:1:{s:4:"root";a:2:{s:1:"A";i:1;s:1:"B";s:3:"two";}}'
		);

		$this->assertParseParams(
			null,
			null
		);

		$this->assertParseParams(
			null,
			serialize( false )
		);

		$this->assertParseParams(
			null,
			'not-an-array'
		);
	}

	/**
	 * @param array $expectedParseParams
	 * @param string|null $rawRcParams
	 */
	protected function assertParseParams( $expectedParseParams, $rawRcParams ) {
		$rc = new RecentChange;
		$rc->setAttribs( array( 'rc_params' => $rawRcParams ) );

		$actualParseParams = $rc->parseParams();

		$this->assertEquals( $expectedParseParams, $actualParseParams );
	}

	/**
	 * 50 mins and 100 mins are used here as the tests never take that long!
	 * @return array
	 */
	public function provideIsInRCLifespan() {
		return array(
			array( 6000, time() - 3000, 0, true ),
			array( 3000, time() - 6000, 0, false ),
			array( 6000, time() - 3000, 6000, true ),
			array( 3000, time() - 6000, 6000, true ),
		);
	}

	/**
	 * @covers RecentChange::isInRCLifespan
	 * @dataProvider provideIsInRCLifespan
	 */
	public function testIsInRCLifespan( $maxAge, $timestamp, $tolerance, $expected ) {
		$this->setMwGlobals( 'wgRCMaxAge', $maxAge );
		$this->assertEquals( $expected, RecentChange::isInRCLifespan( $timestamp, $tolerance ) );
	}

	public function provideRCTypes() {
		return array(
			array( RC_EDIT, 'edit' ),
			array( RC_NEW, 'new' ),
			array( RC_LOG, 'log' ),
			array( RC_EXTERNAL, 'external' ),
			array( RC_CATEGORIZE, 'categorize' ),
		);
	}

	/**
	 * @dataProvider provideRCTypes
	 * @covers RecentChange::parseFromRCType
	 */
	public function testParseFromRCType( $rcType, $type ) {
		$this->assertEquals( $type, RecentChange::parseFromRCType( $rcType ) );
	}

	/**
	 * @dataProvider provideRCTypes
	 * @covers RecentChange::parseToRCType
	 */
	public function testParseToRCType( $rcType, $type ) {
		$this->assertEquals( $rcType, RecentChange::parseToRCType( $type ) );
	}

}
