<?php

class BaseController extends AK_BaseController {
	
	public function beforeRun() {
		
		// ログ出力設定
		AK_Log::setAkLoggingClass( '/var/log/akatsuki_demo', AK_Log::DEBUG );
		
		// DB接続設定
		$databaseName = 'akatsuki_db';
		$host         = 'localhost';
		$user         = 'akatsuki';
		$password     = 'hJ5mN7XQ7s8h';
		
		$akDbConfig = new AK_DbConfig( $databaseName, $host, $user, $password );
		AK_DaoFactory::addDbConfig( $akDbConfig );
		
	}
	
}