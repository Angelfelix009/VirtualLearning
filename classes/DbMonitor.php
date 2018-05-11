<?php

	require_once('../server_lib/ActiveRecord/ActiveRecord.php');
	
	ActiveRecord\Config::initialize(function($cfg){
		$cfg->set_model_directory(__DIR__ . '/models');
		$cfg->set_connections(array('development'=>'mysql://root:olajide1@localhost/web_based_mobile'));
	});
	
?>