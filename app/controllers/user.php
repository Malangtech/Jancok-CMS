<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	//****************************************************************
	// bag. index pengguna
	//****************************************************************
	public function index() {
		$this->load->model("user_model");

		$user = $this->user_model->get_all();

		$this->twig->display("_backend/user.html", array(
			"title" => "Jancok CMS - User Management",
			"user" => $user,
			"success" => $this->session->flashdata("success"),
			"info" => $this->session->flashdata("info"),
			"warning" => $this->session->flashdata("warning"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	//****************************************************************
	// bag. tambah pengguna
	//****************************************************************
	public function tambah_user() {
		$this->twig->display("_backend/tambah_user.html", array(
			"title" => "Jancok CMS - Tambah User Baru",
			"success" => $this->session->flashdata("success"),
			"danger" => $this->session->flashdata("danger")
		));
	}

	//****************************************************************
	// bag. proses data tambah pengguna
	//****************************************************************
	public function user_submit() {
		$this->load->model("user_model");
		$this->load->library(array("form_validation", "encrypt"));

		$this->form_validation->set_rules("username", "Username", "trim|required|xss_clean");
		$this->form_validation->set_rules("email", "Alamat Email", "trim|required|valid_email|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|xss_clean");
		$this->form_validation->set_rules("passconf", "Konfirmasi Password", "trim|required|matches[password]|xss_clean");
		$this->form_validation->set_rules("kodepin", "Kode PIN", "trim|required|max_length[6]|min_length[6]|numeric|xss_clean");
		$this->form_validation->set_rules("masterkey", "Master Key", "trim|required|min_length[4]|max_length[4]|numeric|xss_clean");
		$this->form_validation->set_rules("secretkey", "Secret Key", "trim|required|min_length[8]|xss_clean");
		$this->form_validation->set_message("required", "%s tidak boleh kosong !");
		$this->form_validation->set_message("matches", "%s tidak sama !");
		$this->form_validation->set_message("valid_email", "%s tidak valid !");
		$this->form_validation->set_message("min_length", "%s tidak valid !");
		$this->form_validation->set_message("max_length", '%s tidak valid !');

		if($this->form_validation->run() == false) {
			$this->session->set_flashdata("danger", validation_errors());
		}

		$username = $this->input->post("username", true);
		$email = $this->input->post("email", true);
		$password = $this->encrypt->sha1($this->input->post("password", true));
		$kodepin = $this->input->post("kodepin", true);
		$masterkey = $this->input->post("masterkey", true);
		$secretkey = $this->input->post("secretkey", true);

		$id = $this->user_model->add(array(
			"username" => $username,
			"password" => $password,
			"email" => $email,
			"kodepin" => $kodepin,
			"masterkey" => $masterkey,
			"secretkey" => $secretkey,
			"tgl_register" => date("Y-m-d"),
			"online" => 0,
			"aktif" => 0,
			"banned" => 0
		)) > 0 ? true:false;

		if($id == true) {
			$this->session->set_flashdata("success", "Pengguna baru telah ditambahkan.");
			redirect(site_url("user/index"));
		}

		$this->session->set_flashdata("danger", "terjadi kesalahan saat menambahkan user !");
	}

	//****************************************************************
	// bag. edit informasi data pengguna
	//****************************************************************
	public function edit_user($username="") {
		$this->load->model("user_model");

		$username = (string) $username;

		$user = $this->user_model->see(array("username" => $username));

		if($user) {
			$this->twig->display("_backend/edit_user.html", array(
				"title" => "Edit Informasi Pengguna ".$user["username"],
				"user" => $user
			));
		}

		$this->session->set_flashdata("danger", "Parameter pengguna tidak valid !");
		redirect(site_url("user/index"));
	}

	//****************************************************************
	// bag. proses perubahan informasi data pengguna
	//****************************************************************
	public function user_submit() {
		$this->load->model("user_model");
		$this->load->library("form_validation");

		$this->form_validation->set_rules("email", "Alamat Email", "trim|required|valid_email|xss_clean");
		$this->form_validation->set_rules("kodepin", "Kode PIN", "trim|required|max_length[6]|min_length[6]|numeric|xss_clean");
		$this->form_validation->set_rules("masterkey", "Master Key", "trim|required|min_length[4]|max_length[4]|numeric|xss_clean");
		$this->form_validation->set_rules("secretkey", "Secret Key", "trim|required|min_length[8]|xss_clean");
		$this->form_validation->set_message("required", "%s tidak boleh kosong !");
		$this->form_validation->set_message("matches", "%s tidak sama !");
		$this->form_validation->set_message("valid_email", "%s tidak valid !");
		$this->form_validation->set_message("min_length", "%s tidak valid !");
		$this->form_validation->set_message("max_length", '%s tidak valid !');

		if($this->input->post("password", true) && $this->input->post("passconf", true) !== "") {
			$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|xss_clean");
			$this->form_validation->set_rules("passconf", "Konfirmasi Password", "trim|required|matches[password]|xss_clean");
		}

		if($this->form_validation->run == false) {
			$this->session->set_flashdata("danger", validation_errors());
		}

		$username = $this->input->post("username", true);
		$password = $this->encrypt->sha1($this->input->post("password", true));
		$email = $this->input->post("email", true);
		$kodepin = $this->input->post("kodepin", true);
		$masterkey = $this->input->post("masterkey", true);
		$secretkey = $this->input->post("secretkey", true);

		$user = $this->user_model->see(array("username" => $username));

		if($user) {
			$user["email"] = $email;

			if($password !== "") {
				$user["password"] = $password;
			}

			$user["kodepin"] = $kodepin;
			$user["masterkey"] = $masterkey;
			$user["secretkey"] = $secretkey;

			$update = $this->user_model->apply($user) > 0 ? true:false;

			if($update == true) {
				$this->session->set_flashdata("success", "Informasi data pengguna telah diubah.");
				redirect(site_url("user/index"));
			}

			$this->session->set_flashdata("danger", "Terjadi kesalahan saat mengubah informasi data pengguna !");
		}
	}

	//****************************************************************
	// bag. melihat informasi detail user
	//****************************************************************
	public function lihat_user($username="") {
		$this->load->model("user_model");

		$username = (string) $username;

		$user = $this->user_model->see(array("username" => $username));

		if($user) {
			$this->twig->display("_backend/lhat_user.html", array(
				"title" => "Jancok CMS - Informasi Detail user ".$user["username"],
				"user" => $user
			));
		}

		$this->session->set_flashdata("danger", "Parameter pengguna tidak valid !");
		redirect(site_url("user/index"));
	}

	//****************************************************************
	// bag. menghapus informasi dan data user
	//****************************************************************
	public function hapus_user($username="") {
		$this->load->model("user_model");

		$username = (string) $username;

		$user = $this->user_model->see(array("username" => $username));

		if($user) {
			$this->user_model->remove($user);
			$this->session->set_flashdata("success", "Pengguna telah dihapus.");
			redirect(site_url("user/index"));
		}

		$this->session->set_flashdata("danger", "Parameter pengguna tidak valid !");
		redirect(site_url("user/index"));
	}
}