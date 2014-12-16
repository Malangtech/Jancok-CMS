<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sec extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->twig->display("_sec/app.html", array(
			"title" => "Jancok CMS - Web Security",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}
}
