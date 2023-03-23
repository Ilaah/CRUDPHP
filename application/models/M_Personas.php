<?php

class M_Personas extends CI_Model
{
    protected $table = 'users';

	function __construct()
	{
		parent::__construct();
		$this->db = $this->load->database('default', TRUE);
	}

    public function get($where=null)
    {
        if($where!=null) {
            $this->db->where($where);
        }
        $this->db->select('*');
		$this->db->from($this->table);
		return $this->db->get();
    }
    public function update($where,$data){
        $this->db->where($where);
        $this->db->update($this->table, $data);
    }
}