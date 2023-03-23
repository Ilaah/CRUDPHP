<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Personas', 'mp');
	}

	public function index()
	{
		$data['personas'] = $this->mp->get(['activo'=>1])->result();
		$this->load->view('welcome_message', $data);
	}
	public function delete(){
		$usuarioid=$this->input->post("usuarioid");
		$this->mp->update(['id'=>$usuarioid],['activo'=>0]);
	}

	public function update(){
		$usuarioid=$this->input->post("usuarioid");
		$this->mp->update(['id'=>$usuarioid],['activo'=>0]);
	}
  
}
