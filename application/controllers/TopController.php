<?php

class TopController extends BaseController{
	
	public function indexAction() {
		
		$userDataClass = new UserData( 'augustus' );
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