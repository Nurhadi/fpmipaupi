<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Fasilitas_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	/*
	function get_fasilitas()
	{
		$this->db->select('id_fasilitas,nama');
		$this->db->order_by('id_fasilitas','desc');
		$result = $this->db->get('fasilitas');
		return $result;
	}
	*/
	
	function get_detail_fasilitas($id_fasilitas)
	{
		$this->db->select('nama,meta_keywords,meta_description,content');
		$this->db->where('id_fasilitas',$id_fasilitas);
		$result = $this->db->get('fasilitas');
		return $result;
	}
}

/* End of File : fasilitas_model.php */
/* Location : ./models/fasilitas_model.php */