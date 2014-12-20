<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	//****************************************************************
	//bag. konstruksi utama
	//****************************************************************
	public function __construct() {
		parent::__construct();
	}

	//****************************************************************
	//bag. panel dashboard
	//****************************************************************
	public function index() {

		$this->twig->display("_backend/app.html", array(
			"title" => "Jancok CMS - Dashboard",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	//****************************************************************
	//bag. pengaturan
	//****************************************************************
	public function pengaturan() {
		$this->twig->display("_backend/pengaturan.html", array(
			"title" => "Jancok CMS - Pengaturan",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}

}

