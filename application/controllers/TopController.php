<?php

class TopController extends BaseController{
	
	public function indexAction() {
		
		AK_log::getLogClass() -> log( AK_Log::INFO, __METHOD__, __LINE__, 'FUCK' );
		
		$userDataClass = new UserData();
		$valeuArray = $userDataClass -> getDataByUserId( 1 );
		
		var_dump( $valeuArray );
		exit;
		
		echo( 'hello akatsuki!!<br/>' );
		
		$name = $this -> getGetParam( 'name' );
		echo( $name . '<br/>' );
		
		echo( AK_Registry::get( 'MODE' ) . '<br/>' );
		
	}
	
	
}