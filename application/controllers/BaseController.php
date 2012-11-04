<?php

class BaseController extends AK_BaseController {
	
	public function beforeRun() {
		
		parent::beforeRun();
		
		// ƒƒOÝ’è
		AK_Log::setAkLoggingClass( '/tmp/log/akatsuki_demo', AK_Log::DEBUG );
		
	}
	
}