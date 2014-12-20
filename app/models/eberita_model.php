<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eberita_Model extends MY_Model {
	public function __construct() {
		parent::__construct();

		$this->set_table("e_berita");
		$this->set_index(array("id"));
	}
}
