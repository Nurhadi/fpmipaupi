<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Lowongan_kerja_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_lowongan_kerja()
	{
		$this->db->select('id_lowongan_kerja,title,content');
		$this->db->order_by('id_lowongan_kerja','desc');
		$result = $this->db->get('lowongan_kerja');
		return $result;
	}
	
	function get_detail_lowongan_kerja($id_lowongan_kerja)
	{
		$this->db->select('title,meta_keywords,meta_description,content');
		$this->db->where('id_lowongan_kerja',$id_lowongan_kerja);
		$result = $this->db->get('lowongan_kerja');
		return $result;
	}
}

/* End of File : lowongan_kerja_model.php */
/* Location : ./models/lowongan_kerja_model.php */