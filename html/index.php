<?php

define( 'AKATSUKI_PATH', '/work/akatsuki/' );
set_include_path( get_include_path() . PATH_SEPARATOR . AKATSUKI_PATH );

require_once 'AK_Core.php';
require_once 'AK_BaseController.php';

// �C���X�^���X�擾
$akCoreClass = AK_core::getInstance();
// �R���g���[���p�X�ݒ�
$akCoreClass -> setControllerDir( '/work/akatsuki_demo/application/controllers' );
// �������s
$akCoreClass -> run();
