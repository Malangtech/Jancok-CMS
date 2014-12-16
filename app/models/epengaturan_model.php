<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Epengaturan_Model extends MY_Model {
	public function __construct() {
		parent::__construct();

		$this->set_table("e_pengaturan");
		$this->set_index(array("id"));
	}
}
