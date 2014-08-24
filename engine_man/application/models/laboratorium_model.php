<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Laboratorium_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_laboratorium()
	{
		$this->db->select('id_laboratorium,nama,laboratorium.id_jurusan,laboratorium.status,laboratorium.date_create,jurusan.nama_jurusan');
		$this->db->join('jurusan','jurusan.id_jurusan = laboratorium.id_jurusan');
		$this->db->order_by('id_laboratorium','desc');
		$result = $this->db->get('laboratorium');
		return $result;
	}
	
	function get_laboratorium1($id_laboratorium)
	{
		$this->db->select('id_laboratorium,nama,id_jurusan,status,date_create');
		$this->db->where('id_laboratorium',$id_laboratorium);
		$result = $this->db->get('laboratorium');
		return $result;
	}
	
	function delete_laboratorium($id_laboratorium=0){
		$where=array('id_laboratorium'=>$id_laboratorium);
		$result=$this->db->delete('laboratorium',$where);
		return $result;
	}
	
	function ins_laboratorium($nama,$id_jurusan,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$result = $this->db->insert('laboratorium',$data);
		return $result;
	}
	
	function upd_laboratorium($id_laboratorium,$nama,$id_jurusan,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		$this->db->where('id_laboratorium',$id_laboratorium);
		$result = $this->db->update('laboratorium',$data);
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



/* End of file laboratorium_model.php */

/* Location: ./application/models/laboratorium_model.php */