<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->twig->display("_frontend/app.html", array(
			"title" => "Jancok CMS - Homepage",
			"success" => $this->session->flashdata("success"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	public function tentang() {
		$this->twig->display("_frontend/about.html", array(
			"title" => "Jancok CMS - About"
		));
	}

	public function berita() {
		$this->twig->display("_frontend/berita.html", array(
			"title" => "Jancok CMS - Berita"
		));
	}

	public function toko() {
		$this->twig->display("_frontend/toko.html", array(
			"title" => "Jancok CMS - Toko"
		));
	}

	public function kategori() {
		$this->load->model("kategori_model");

		$kategori = $this->kategori_model->get_all();

		$this->twig->display("_frontend/kategori.html", array(
			"title" => "Jancok CMS - Kategori",
			"kategori" => $kategori,
			"danger" => $this->session->flashdata("danger")
		));
	}

	public function id_k($id=0) {
		$this->load->model("kategori_model");

		$id = (int) $id;

		$kategori = $this->kategori_model->see(array("id" => $id));

		if($kategori) {
			$this->twig->display("_frontend/kategori.html", array(
				"title" => "Jancok CMS - Kategori",
				"kategori" => $kategori
			));
		}

		$this->session->set_flashdata("danger", "Parameter kategori tidak valid !");
		redirect(site_url("web/kategori"));
	}
}
