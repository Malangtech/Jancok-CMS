<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

	//customized twig
	$config["template_dir"] = [
		APPPATH."views", 
		APPPATH."views".DIRECTORY_SEPARATOR."_backend",
		APPPATH."views".DIRECTORY_SEPARATOR."_backend/base",
		APPPATH."views".DIRECTORY_SEPARATOR."_frontend"
	];

	$config["cache_dir"] = APPPATH."cache/t";
