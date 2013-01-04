<?php

define( 'AKATSUKI_PATH', '/work/akatsuki/' );
set_include_path( get_include_path() . PATH_SEPARATOR . AKATSUKI_PATH );

require_once 'AK_Core.php';
require_once 'AK_Registry.php';
require_once 'AK_Log.php';
require_once 'AK_Db.php';
require_once 'AK_Mem.php';
require_once 'AK_Ini.php';

require_once '../application/models/UserData.class.php';
require_once '../application/models/ini/DbIni.class.php';

AK_Registry::set( 'MODE', 'DEVELOP' );

// 設定ファイル読み込み
AK_Ini::setConfigFromArray( DbIni::$configArray );

// インスタンス取得
$akCoreClass = AK_Core::getInstance();
// コントローラディレクトリ設定
$akCoreClass -> setControllerDir( '/work/akatsuki_demo/application/controllers' );
// 処理開始
$akCoreClass -> run();
