<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eguser_Model extends MY_Model {
	public function __construct() {
		parent::__construct();

		$this->set_table("e_guser");
		$this->set_index(array("id"));
	}
}
