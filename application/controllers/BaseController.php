<?php

class BaseController extends AK_BaseController {
	
	public function beforeRun() {
		
		parent::beforeRun();
		
		// ログ出力設定
		AK_Log::setAkLoggingClass( '/tmp/log/akatsuki_demo', AK_Log::DEBUG );
		
		// DB接続設定
		$dsn      = 'mysql:dbname=akatsuki_db;host=localhost';
		$user     = 'akatsuki';
		$password = 'hJ5mN7XQ7s8h';
		AK_Db::setDsn( $dsn );
		AK_Db::setUser( $user );
		AK_Db::setPassword( $password );
		
		
	}
	
}