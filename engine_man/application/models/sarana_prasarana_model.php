<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Sarana_prasarana_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_sarana_prasarana()
	{
		$this->db->select('id_sarana_prasarana,nama,sarana_prasarana.id_jurusan,sarana_prasarana.description,sarana_prasarana.jumlah,sarana_prasarana.status,sarana_prasarana.date_create,jurusan.nama_jurusan');
		$this->db->join('jurusan','jurusan.id_jurusan = sarana_prasarana.id_jurusan');
		$this->db->order_by('id_sarana_prasarana','desc');
		$result = $this->db->get('sarana_prasarana');
		return $result;
	}
	
	function get_sarana_prasarana1($id_sarana_prasarana)
	{
		$this->db->select('id_sarana_prasarana,nama,id_jurusan,description,jumlah,status,date_create');
		$this->db->where('id_sarana_prasarana',$id_sarana_prasarana);
		$result = $this->db->get('sarana_prasarana');
		return $result;
	}
	
	function delete_sarana_prasarana($id_sarana_prasarana=0){
		$where=array('id_sarana_prasarana'=>$id_sarana_prasarana);
		$result=$this->db->delete('sarana_prasarana',$where);
		return $result;
	}
	
	function ins_sarana_prasarana($nama,$description,$id_jurusan,$jumlah,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'description'=>$description,
			'jumlah'=>$jumlah,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$result = $this->db->insert('sarana_prasarana',$data);
		return $result;
	}
	
	function upd_sarana_prasarana($id_sarana_prasarana,$nama,$description,$id_jurusan,$jumlah,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'description'=>$description,
			'jumlah'=>$jumlah,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		$this->db->where('id_sarana_prasarana',$id_sarana_prasarana);
		$result = $this->db->update('sarana_prasarana',$data);
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



/* End of file sarana_prasarana_model.php */

/* Location: ./application/models/sarana_prasarana_model.php */