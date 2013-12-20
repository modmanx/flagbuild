<?php

define('DS', DIRECTORY_SEPARATOR);

$dir = dirname(__FILE__);
$def_config = include('config.default.php');
$config = [];
if(file_exists('config.php')){
	$config = include('config.php');	
}
$config = array_merge($def_config, $config);

if(!file_exists($config['build_path'])){
	mkdir($config['build_path']);
}


echo '<pre>';
print_r($config);
