<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Euser_Model extends MY_Model {
	public function __construct() {
		parent::__construct();

		$this->set_table("e_user");
		$this->set_index("username");
	}

	public function cek($username, $password, $kodepin) {
		return parent::count(array("username" => $username, "password" => $password, "kodepin" => $kodepin));
	}
}
