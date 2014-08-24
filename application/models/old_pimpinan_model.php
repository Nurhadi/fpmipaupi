<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Pimpinan_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_jurusan()
	{
		$this->db->select('id_jurusan,nama_jurusan');
		$this->db->where('status','active');
		$this->db->order_by('id_jurusan','asc');
		$result = $this->db->get('jurusan');
		return $result;
	}

	function get_pimpinan_fakultas()
	{
		$this->db->select('id_pimpinan,nama,jabatan,image_path');
		$this->db->where('id_jurusan','0000000');
		$this->db->order_by('id_pimpinan','asc');
		$result = $this->db->get('pimpinan');
		return $result;
	}
	
	function get_pimpinan($id_jurusan)
	{
		$this->db->select('id_pimpinan,nama,jabatan,image_path');
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->order_by('id_pimpinan','asc');
		$result = $this->db->get('pimpinan');
		return $result;
	}
}

/* End of File : pimpinan_model.php */
/* Location : ./models/pimpinan_model.php */