<?php

require_once __DIR__ . '/../vendor/autoload.php';

ActiveRecord\Config::initialize(function($config){
	$config->set_connections([
		'development' => 'mysql://root:root@192.168.64.3/designpattern'
	]);
});