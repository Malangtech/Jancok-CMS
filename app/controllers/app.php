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
	//bag. user management
	//****************************************************************
	public function user() {
		$this->twig->display("_backend/user.html", array(
			"title" => "Jancok CMS - User Management",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	//****************************************************************
	//bag. menu management
	//****************************************************************
	public function menu() {
		$this->twig->display("_backend/menu.html", array(
			"title" => "Jancok CMS - Menu Management",
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

	//****************************************************************
	//bag. berita
	//****************************************************************
	public function berita() {
		$this->twig->display("_backend/berita.html", array(
			"title" => "Jancok CMS - Berita Management",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	//****************************************************************
	//bag. kategori
	//****************************************************************
	public function kategori() {
		$this->twig->display("_backend/kategori.html", array(
			"title" => "Jancok CMS - Kategori Management",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	public function subkategori() {
		$this->twig->display("_backend/subkategori.html", array(
			"title" => "Jancok CMS - Sub Kategori Management",
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}
}

