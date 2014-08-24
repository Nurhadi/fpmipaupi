<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Layanan_pelatihan_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_layanan_pelatihan()
	{
		$this->db->select('id_layanan_pelatihan,title,content');
		$this->db->order_by('id_layanan_pelatihan','desc');
		$result = $this->db->get('layanan_pelatihan');
		return $result;
	}
	
	function get_detail_layanan_pelatihan($id_layanan_pelatihan)
	{
		$this->db->select('title,meta_keywords,meta_description,content');
		$this->db->where('id_layanan_pelatihan',$id_layanan_pelatihan);
		$result = $this->db->get('layanan_pelatihan');
		return $result;
	}
}

/* End of File : layanan_pelatihan_model.php */
/* Location : ./models/layanan_pelatihan_model.php */