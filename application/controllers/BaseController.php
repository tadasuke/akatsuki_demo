<?php

class BaseController extends AK_BaseController {
	
	public function beforeRun() {
		
		parent::beforeRun();
		
		// ���O�ݒ�
		AK_Log::setAkLoggingClass( '/tmp/log/akatsuki_demo', AK_Log::DEBUG );
		
	}
	
}