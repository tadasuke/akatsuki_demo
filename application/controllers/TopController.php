<?php

class TopController extends BaseController{
	
	public function indexAction() {
		
		echo( 'hello akatsuki!!<br/>' );
		
		$name = $this -> getGetParam( 'name' );
		echo( $name . '<br/>' );
		
	}
	
	
}