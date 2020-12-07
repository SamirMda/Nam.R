<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->database();
		$this->load->helper('assets');
		//$this->load->helper('url');
		$this->load->Model('Data');
	}

	public function index() {
		$response = $this->Data->getList();
		$data = json_decode($response, true);

		$this->load->view('accueil', $data);
	}
}
