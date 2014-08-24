<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Pimpinan_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_pimpinan()
	{
		$this->db->select('id_pimpinan,nama,jabatan,id_jurusan,image_path,status,date_create');
		$this->db->order_by('id_pimpinan','desc');
		$result = $this->db->get('pimpinan');
		return $result;
	}
	
	function get_pimpinan1($id_pimpinan)
	{
		$this->db->select('id_pimpinan,nama,jabatan,id_jurusan,image_path,status,date_create');
		$this->db->where('id_pimpinan',$id_pimpinan);
		$result = $this->db->get('pimpinan');
		return $result;
	}
	
	function get_mypath($id_pimpinan=0){
		$where=array('id_pimpinan'=>$id_pimpinan);
		$this->db->select('image_path');
		$result=$this->db->get_where('pimpinan',$where);
		return $result;
	}
	
	function delete_pimpinan($id_pimpinan=0){
		$where=array('id_pimpinan'=>$id_pimpinan);
		$result=$this->db->delete('pimpinan',$where);
		return $result;
	}
	
	function get_bulan()
	{
		$this->db->select('id_bulan,bulan,tahun');
		$this->db->where('status','active');
		$this->db->order_by('id_bulan','asc');
		$result = $this->db->get('bulan');
		return $result;
	}
	
	function ins_pimpinan($nama,$jabatan,$id_jurusan,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'jabatan'=>$jabatan,
			'id_jurusan'=>$id_jurusan,
			'image_path'=>$image_path,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$result = $this->db->insert('pimpinan',$data);
		return $result;
	}
	
	function upd_pimpinan($id_pimpinan,$nama,$jabatan,$id_jurusan,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'jabatan'=>$jabatan,
			'id_jurusan'=>$id_jurusan,
			'image_path'=>$image_path,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$this->db->where('id_pimpinan',$id_pimpinan);
		$result = $this->db->update('pimpinan',$data);
		return $result;
	}
	
	function upd_pimpinan1($id_pimpinan=0,$image_path=''){
		$data=array('image_path'=>$image_path);
		$where=array('id_pimpinan'=>$id_pimpinan);
		$result=$this->db->update('pimpinan',$data,$where);
		return $result;
	}
	
	function get_nama_jurusan($id_jurusan)
	{
		$this->db->select('nama_jurusan');
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->limit('1');
		$result = $this->db->get('jurusan');
		$row = $result->row();
		return $row->nama_jurusan;
	}
	
	function get_jurusan()
	{
		$this->db->select('id_jurusan,nama_jurusan');
		$this->db->where('status','active');
		$this->db->order_by('id_jurusan','asc');
		$result = $this->db->get('jurusan');
		return $result;
	}
}



/* End of file pimpinan_model.php */

/* Location: ./application/models/pimpinan_model.php */