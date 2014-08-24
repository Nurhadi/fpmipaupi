<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Peralatan_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_peralatan()
	{
		$this->db->select('id_peralatan,nama,peralatan.id_jurusan,peralatan.description,peralatan.jumlah,peralatan.status,peralatan.date_create,jurusan.nama_jurusan');
		$this->db->join('jurusan','jurusan.id_jurusan = peralatan.id_jurusan');
		$this->db->order_by('id_peralatan','desc');
		$result = $this->db->get('peralatan');
		return $result;
	}
	
	function get_peralatan1($id_peralatan)
	{
		$this->db->select('id_peralatan,nama,id_jurusan,description,jumlah,status,date_create');
		$this->db->where('id_peralatan',$id_peralatan);
		$result = $this->db->get('peralatan');
		return $result;
	}
	
	function delete_peralatan($id_peralatan=0){
		$where=array('id_peralatan'=>$id_peralatan);
		$result=$this->db->delete('peralatan',$where);
		return $result;
	}
	
	function ins_peralatan($nama,$description,$id_jurusan,$jumlah,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'description'=>$description,
			'jumlah'=>$jumlah,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$result = $this->db->insert('peralatan',$data);
		return $result;
	}
	
	function upd_peralatan($id_peralatan,$nama,$description,$id_jurusan,$jumlah,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'description'=>$description,
			'jumlah'=>$jumlah,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		$this->db->where('id_peralatan',$id_peralatan);
		$result = $this->db->update('peralatan',$data);
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



/* End of file peralatan_model.php */

/* Location: ./application/models/peralatan_model.php */