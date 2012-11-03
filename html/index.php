<?php

define( 'AKATSUKI_PATH', '/work/akatsuki/' );
set_include_path( get_include_path() . PATH_SEPARATOR . AKATSUKI_PATH );

require_once 'AK_Core.php';
require_once 'AK_BaseController.php';

// インスタンス取得
$akCoreClass = AK_core::getInstance();
// コントローラパス設定
$akCoreClass -> setControllerDir( '/work/akatsuki_demo/application/controllers' );
// 処理実行
$akCoreClass -> run();
