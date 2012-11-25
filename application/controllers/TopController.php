<?php

class TopController extends BaseController{
	
	public function indexAction() {
		
		$userDataClass = new UserData( 'augustus' );
		$userDataClass = new UserData();
		$valeuArray = $userDataClass -> getDataByUserId( 1 );
		
		var_dump( $valeuArray );
		
		echo( 'hello akatsuki!!<br/>' );
		
		$name = $this -> getGetParam( 'name' );
		echo( $name . '<br/>' );
		
		echo( AK_Registry::get( 'MODE' ) . '<br/>' );
		
		$version = $this -> userParam[0];
		$method  = $this -> userParam[1];
		echo( $version . '<br/>' );
		echo( $method  . '<br/>' );
		
	}
	
	
}