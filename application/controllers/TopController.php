<?php

class TopController extends BaseController{
	
	public function indexAction() {
		
		/*
		$userDataClass = new UserData( 'augustus' );
		$userDataClass = new UserData();
		$valueArray = $userDataClass -> getDataByUserId( 1 );
		
		$userDataArray = array(
			  'user_id' => $valueArray[0]['user_id']
			, 'name'    => $valueArray[0]['name']
		);
		
		$this -> returnJsonResponse( $userDataArray );
		
		*/
		
		//$mao = AK_Mem::getInstance( new AK_MemConfig( 'localhost' ) );
		$mao = AK_Mem::getInstance();
		$mao -> addServer( new AK_MemConfig( 'localhost' ) );
		
		$key = 'tadasuke';
		$mao -> set( $key, 'fuck!!' );
		
		$value = $mao -> get( $key );
		echo( $value );
		
		
	}
	
	
}