<?php

/**
 * @group API
 * @group Database
 * @group medium
 *
 * @covers ApiLogin
 */
class ApiLoginTest extends ApiTestCase {

	/**
	 * Test result of attempted login with an empty username
	 */
	public function testApiLoginNoName() {
		$session = array(
			'wsTokenSecrets' => array( 'login' => 'foobar' ),
		);
		$data = $this->doApiRequest( array( 'action' => 'login',
			'lgname' => '', 'lgpassword' => self::$users['sysop']->password,
			'lgtoken' => (string)( new MediaWiki\Session\Token( 'foobar', '' ) )
		), $session );
		$this->assertEquals( 'NoName', $data[0]['login']['result'] );
	}

	public function testApiLoginBadPass() {
		global $wgServer;

		$user = self::$users['sysop'];
		$user->getUser()->logOut();

		if ( !isset( $wgServer ) ) {
			$this->markTestIncomplete( 'This test needs $wgServer to be set in LocalSettings.php' );
		}
		$ret = $this->doApiRequest( array(
			"action" => "login",
			"lgname" => $user->username,
			"lgpassword" => "bad",
		) );

		$result = $ret[0];

		$this->assertNotInternalType( "bool", $result );
		$a = $result["login"]["result"];
		$this->assertEquals( "NeedToken", $a );

		$token = $result["login"]["token"];

		$ret = $this->doApiRequest(
			array(
				"action" => "login",
				"lgtoken" => $token,
				"lgname" => $user->username,
				"lgpassword" => "badnowayinhell",
			),
			$ret[2]
		);

		$result = $ret[0];

		$this->assertNotInternalType( "bool", $result );
		$a = $result["login"]["result"];

		$this->assertEquals( "WrongPass", $a );
	}

	public function testApiLoginGoodPass() {
		global $wgServer;

		if ( !isset( $wgServer ) ) {
			$this->markTestIncomplete( 'This test needs $wgServer to be set in LocalSettings.php' );
		}

		$user = self::$users['sysop'];
		$user->getUser()->logOut();

		$ret = $this->doApiRequest( array(
				"action" => "login",
				"lgname" => $user->username,
				"lgpassword" => $user->password,
			)
		);

		$result = $ret[0];
		$this->assertNotInternalType( "bool", $result );
		$this->assertNotInternalType( "null", $result["login"] );

		$a = $result["login"]["result"];
		$this->assertEquals( "NeedToken", $a );
		$token = $result["login"]["token"];

		$ret = $this->doApiRequest(
			array(
				"action" => "login",
				"lgtoken" => $token,
				"lgname" => $user->username,
				"lgpassword" => $user->password,
			),
			$ret[2]
		);

		$result = $ret[0];

		$this->assertNotInternalType( "bool", $result );
		$a = $result["login"]["result"];

		$this->assertEquals( "Success", $a );
	}

	/**
	 * @group Broken
	 */
	public function testApiLoginGotCookie() {
		$this->markTestIncomplete( "The server can't do external HTTP requests, "
			. "and the internal one won't give cookies" );

		global $wgServer, $wgScriptPath;

		if ( !isset( $wgServer ) ) {
			$this->markTestIncomplete( 'This test needs $wgServer to be set in LocalSettings.php' );
		}
		$user = self::$users['sysop'];

		$req = MWHttpRequest::factory( self::$apiUrl . "?action=login&format=xml",
			array( "method" => "POST",
				"postData" => array(
					"lgname" => $user->username,
					"lgpassword" => $user->password
				)
			),
			__METHOD__
		);
		$req->execute();

		libxml_use_internal_errors( true );
		$sxe = simplexml_load_string( $req->getContent() );
		$this->assertNotInternalType( "bool", $sxe );
		$this->assertThat( $sxe, $this->isInstanceOf( "SimpleXMLElement" ) );
		$this->assertNotInternalType( "null", $sxe->login[0] );

		$a = $sxe->login[0]->attributes()->result[0];
		$this->assertEquals( ' result="NeedToken"', $a->asXML() );
		$token = (string)$sxe->login[0]->attributes()->token;

		$req->setData( array(
			"lgtoken" => $token,
			"lgname" => $user->username,
			"lgpassword" => $user->password ) );
		$req->execute();

		$cj = $req->getCookieJar();
		$serverName = parse_url( $wgServer, PHP_URL_HOST );
		$this->assertNotEquals( false, $serverName );
		$serializedCookie = $cj->serializeToHttpRequest( $wgScriptPath, $serverName );
		$this->assertNotEquals( '', $serializedCookie );
		$this->assertRegexp(
			'/_session=[^;]*; .*UserID=[0-9]*; .*UserName=' . $user->userName . '; .*Token=/',
			$serializedCookie
		);
	}

	public function testRunLogin() {
		$sysopUser = self::$users['sysop'];
		$data = $this->doApiRequest( array(
			'action' => 'login',
			'lgname' => $sysopUser->username,
			'lgpassword' => $sysopUser->password ) );

		$this->assertArrayHasKey( "login", $data[0] );
		$this->assertArrayHasKey( "result", $data[0]['login'] );
		$this->assertEquals( "NeedToken", $data[0]['login']['result'] );
		$token = $data[0]['login']['token'];

		$data = $this->doApiRequest( array(
			'action' => 'login',
			"lgtoken" => $token,
			"lgname" => $sysopUser->username,
			"lgpassword" => $sysopUser->password ), $data[2] );

		$this->assertArrayHasKey( "login", $data[0] );
		$this->assertArrayHasKey( "result", $data[0]['login'] );
		$this->assertEquals( "Success", $data[0]['login']['result'] );
		$this->assertArrayHasKey( 'lgtoken', $data[0]['login'] );
	}

	public function testBotPassword() {
		global $wgServer, $wgSessionProviders;

		if ( !isset( $wgServer ) ) {
			$this->markTestIncomplete( 'This test needs $wgServer to be set in LocalSettings.php' );
		}

		$this->setMwGlobals( array(
			'wgSessionProviders' => array_merge( $wgSessionProviders, array(
				array(
					'class' => 'MediaWiki\\Session\\BotPasswordSessionProvider',
					'args' => array( array( 'priority' => 40 ) ),
				)
			) ),
			'wgEnableBotPasswords' => true,
			'wgBotPasswordsDatabase' => false,
			'wgCentralIdLookupProvider' => 'local',
			'wgGrantPermissions' => array(
				'test' => array( 'read' => true ),
			),
		) );

		// Make sure our session provider is present
		$manager = TestingAccessWrapper::newFromObject( MediaWiki\Session\SessionManager::singleton() );
		if ( !isset( $manager->sessionProviders['MediaWiki\\Session\\BotPasswordSessionProvider'] ) ) {
			$tmp = $manager->sessionProviders;
			$manager->sessionProviders = null;
			$manager->sessionProviders = $tmp + $manager->getProviders();
		}
		$this->assertNotNull(
			MediaWiki\Session\SessionManager::singleton()->getProvider(
				'MediaWiki\\Session\\BotPasswordSessionProvider'
			),
			'sanity check'
		);

		$user = self::$users['sysop'];
		$centralId = CentralIdLookup::factory()->centralIdFromLocalUser( $user->getUser() );
		$this->assertNotEquals( 0, $centralId, 'sanity check' );

		$passwordFactory = new PasswordFactory();
		$passwordFactory->init( RequestContext::getMain()->getConfig() );
		// A is unsalted MD5 (thus fast) ... we don't care about security here, this is test only
		$passwordFactory->setDefaultType( 'A' );
		$pwhash = $passwordFactory->newFromPlaintext( 'foobaz' );

		$dbw = wfGetDB( DB_MASTER );
		$dbw->insert(
			'bot_passwords',
			array(
				'bp_user' => $centralId,
				'bp_app_id' => 'foo',
				'bp_password' => $pwhash->toString(),
				'bp_token' => '',
				'bp_restrictions' => MWRestrictions::newDefault()->toJson(),
				'bp_grants' => '["test"]',
			),
			__METHOD__
		);

		$lgName = $user->username . BotPassword::getSeparator() . 'foo';

		$ret = $this->doApiRequest( array(
			'action' => 'login',
			'lgname' => $lgName,
			'lgpassword' => 'foobaz',
		) );

		$result = $ret[0];
		$this->assertNotInternalType( 'bool', $result );
		$this->assertNotInternalType( 'null', $result['login'] );

		$a = $result['login']['result'];
		$this->assertEquals( 'NeedToken', $a );
		$token = $result['login']['token'];

		$ret = $this->doApiRequest( array(
			'action' => 'login',
			'lgtoken' => $token,
			'lgname' => $lgName,
			'lgpassword' => 'foobaz',
		), $ret[2] );

		$result = $ret[0];
		$this->assertNotInternalType( 'bool', $result );
		$a = $result['login']['result'];

		$this->assertEquals( 'Success', $a );
	}

}
