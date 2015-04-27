<?php

if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }

spl_autoload_register(function($class){
    require_once $_SERVER['DOCUMENT_ROOT'].'/GitHub/storelocator/classes/'. $class .'.php';
});

//Require functions 
require_once $_SERVER['DOCUMENT_ROOT'].'/GitHub/storelocator/functions/sanitize.php';


$GLOBALS['path']= array();


//Setting global configuration settings to be used by the config class
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'shopfinderdb'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 1209600
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

date_default_timezone_set('Europe/Berlin');
