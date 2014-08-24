<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Tata_usaha_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_tata_usaha()
	{
		$this->db->select('id_tata_usaha,nip,nama,alamat,telepon,golongan,id_unit_kerja,bidang_tugas,image_path,status,date_create');
		$this->db->order_by('id_tata_usaha','desc');
		$result = $this->db->get('tata_usaha');
		return $result;
	}
	
	function get_tata_usaha1($id_tata_usaha)
	{
		$this->db->select('id_tata_usaha,nip,nama,alamat,telepon,golongan,id_unit_kerja,bidang_tugas,image_path,status,date_create');
		$this->db->where('id_tata_usaha',$id_tata_usaha);
		$result = $this->db->get('tata_usaha');
		return $result;
	}
	
	function get_mypath($id_tata_usaha=0){
		$where=array('id_tata_usaha'=>$id_tata_usaha);
		$this->db->select('image_path');
		$result=$this->db->get_where('tata_usaha',$where);
		return $result;
	}
	
	function delete_tata_usaha($id_tata_usaha=0){
		$where=array('id_tata_usaha'=>$id_tata_usaha);
		$result=$this->db->delete('tata_usaha',$where);
		return $result;
	}
	
	function ins_tata_usaha($nip,$nama,$alamat,$telepon,$golongan,$id_unit_kerja,$bidang,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nip'=>$nip,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'golongan'=>$golongan,
			'id_unit_kerja'=>$id_unit_kerja,
			'bidang_tugas'=>$bidang,
			'image_path'=>$image_path,
			'date_create'=>$date_create
		);
		
		$result = $this->db->insert('tata_usaha',$data);
		return $result;
	}
	
	function upd_tata_usaha($id_tata_usaha,$nip,$nama,$alamat,$telepon,$golongan,$id_unit_kerja,$bidang,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nip'=>$nip,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'golongan'=>$golongan,
			'id_unit_kerja'=>$id_unit_kerja,
			'bidang_tugas'=>$bidang,
			'image_path'=>$image_path,
			'date_create'=>$date_create
		);
		$this->db->where('id_tata_usaha',$id_tata_usaha);
		$result = $this->db->update('tata_usaha',$data);
		return $result;
	}
	
	function upd_tata_usaha1($id_tata_usaha=0,$image_path=''){
		$data=array('image_path'=>$image_path);
		$where=array('id_tata_usaha'=>$id_tata_usaha);
		$result=$this->db->update('tata_usaha',$data,$where);
		return $result;
	}
	
	function get_nama_unit_kerja($id_unit_kerja)
	{
		$this->db->select('nama_unit_kerja');
		$this->db->where('id_unit_kerja',$id_unit_kerja);
		$this->db->limit('1');
		$result = $this->db->get('unit_kerja');
		$row = $result->row();
		return $row->nama_unit_kerja;
	}
	
	function get_unit_kerja()
	{
		$this->db->select('id_unit_kerja,nama_unit_kerja');
		$this->db->where('status','active');
		$this->db->order_by('id_unit_kerja','asc');
		$result = $this->db->get('unit_kerja');
		return $result;
	}
}



/* End of file tata_usaha_model.php */

/* Location: ./application/models/tata_usaha_model.php */