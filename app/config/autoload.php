<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	//customized autoload
	$autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
	$autoload['libraries'] = array("database", "session", "twig");
	$autoload['helper'] = array("url", "form", "security", "language", "base");
	$autoload['config'] = array();
	$autoload['language'] = array();
	$autoload['model'] = array();
