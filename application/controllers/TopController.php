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
		
		$value = 'tadasuke!!';
		$array = array( 'value' => $value );
		$this -> setResponseParam( $array );
		return;
		
		//$mao -> commit();
		
	}
	
	
}