<?php

error_reporting(-1);

define('DIR_BASE', '');

define('DIR_CORE', DIR_BASE . 'core');
define('DIR_CONFIG', DIR_BASE . 'config');
define('DIR_CONTROL', DIR_BASE . 'controllers');
define('DIR_MODEL', DIR_BASE . 'models');
define('DIR_VIEW', DIR_BASE . 'views');

define('URL', '/');
define('URL_ASSETS', URL . 'assets' );

require_once DIR_CORE . '/AutoLoad.php';
require_once DIR_CORE . '/Controller.php';
require_once DIR_CORE . '/View.php';
require_once DIR_CORE . '/Model.php';
require_once DIR_CORE . '/Authentication.php';
require_once 'DBConnection.php';

$autoLoad = new AutoLoad();
$autoLoad->run();