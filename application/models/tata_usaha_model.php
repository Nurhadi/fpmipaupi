<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Tata_usaha_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_unit_kerja()
	{
		$this->db->select('id_unit_kerja,nama_unit_kerja');
		$this->db->where('status','active');
		$this->db->order_by('id_unit_kerja','asc');
		$result = $this->db->get('unit_kerja');
		return $result;
	}
	
	function get_tata_usaha($id_unit_kerja)
	{
		$this->db->select('id_tata_usaha,nama,bidang_tugas');
		$this->db->where('id_unit_kerja',$id_unit_kerja);
		$this->db->order_by('id_tata_usaha','asc');
		$result = $this->db->get('tata_usaha');
		return $result;
	}
	
	function get_detail_staff($id_tata_usaha)
	{
		$this->db->select('nama,alamat,telepon,bidang_tugas,image_path');
		$this->db->where('id_tata_usaha',$id_tata_usaha);
		$result = $this->db->get('tata_usaha');
		return $result;
	}
}

/* End of File : tata_usaha_model.php */
/* Location : ./models/tata_usaha_model.php */