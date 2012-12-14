<?php

class TopController extends AK_BaseController{
	
	/**
	 * 前処理
	 */
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
	
	
	
	/**
	 * メイン処理
	 */
	public function indexAction() {
		
		// Memcacheインスタンス取得
		$mao = AK_Mem::getInstance( new AK_MemConfig( 'localhost' ) );
		
		// Memcacheから値を取得
		$name = $mao -> get( 'name' );
		
		// 値が取得できなかった場合
		if ( $name === FALSE ) {
		
			// DBからデータを取得
			$userDataClass = new UserData( 'augustus' );
			$userDataClass = new UserData();
			$valueArray = $userDataClass -> getDataByUserId( 1 );
			
			$name = (count( $valueArray ) > 0) ? $valueArray[0]['name'] : '';
			
			// Memcacheに登録
			$mao -> set( 'name', $name );
		} else {
			;
		}
		
		$returnArray = array( 'name' => $name );
		
		$this -> setResponseParam( $returnArray );
		return;
		
	}
	
	
	/**
	 * 後処理
	 */
	public function afterRun() {
	
		// DBコミット
		AK_DaoFactory::allCommit();
		
		// Memcacheコミット
		AK_Mem::getInstance() -> commit();
	
	}
	
}