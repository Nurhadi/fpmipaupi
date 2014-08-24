<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Dosen_model extends CI_Model
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
	
	function get_dosen($id_jurusan)
	{
		$this->db->select('id_dosen,nama,kompetensi_mata_kuliah');
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->order_by('id_dosen','asc');
		$result = $this->db->get('dosen');
		return $result;
	}
	
	function get_detail_dosen($id_dosen)
	{
		$this->db->select('nip,nidn,kode_dosen,nama,alamat,telepon,golongan,id_jurusan,riwayat_pendidikan,kompetensi_mata_kuliah,image_path');
		$this->db->where('id_dosen',$id_dosen);
		$result = $this->db->get('dosen');
		return $result;
	}
	
	function get_nama_jurusan($id_jurusan)
	{
		$this->db->select('nama_jurusan');
		$this->db->where('id_jurusan',$id_jurusan);
		$result = $this->db->get('jurusan');
		$row = $result->row();
		return $row->nama_jurusan;
	}
}

/* End of File : dosen_model.php */
/* Location : ./models/dosen_model.php */