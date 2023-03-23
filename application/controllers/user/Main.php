<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Personas', 'mp');
	}

	public function index()
	{
		$data['personas'] = $this->mp->get()->result();
		$this->load->view('user/main', $data);
	} 
}
