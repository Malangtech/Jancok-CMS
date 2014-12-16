<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

	//customized twig
	$config["t_D"] = [
		APPPATH."views", 
		APPPATH."views".DIRECTORY_SEPARATOR."_backend",
		APPPATH."views".DIRECTORY_SEPARATOR."_frontend",
	];

	$config["cache_dir"] = APPPATH."cache/t";
