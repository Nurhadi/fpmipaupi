<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Prestasi_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_prestasi()
	{
		$this->db->select('id_prestasi,nama,id_jurusan,prestasi,tahun,tingkat,status,date_create');
		$this->db->order_by('id_prestasi','desc');
		$result = $this->db->get('prestasi');
		return $result;
	}
	
	function get_prestasi1($id_prestasi)
	{
		$this->db->select('id_prestasi,nama,id_jurusan,prestasi,tahun,tingkat,status,date_create');
		$this->db->where('id_prestasi',$id_prestasi);
		$result = $this->db->get('prestasi');
		return $result;
	}
	
	function delete_prestasi($id_prestasi=0){
		$where=array('id_prestasi'=>$id_prestasi);
		$result=$this->db->delete('prestasi',$where);
		return $result;
	}
	
	function ins_prestasi($nama,$id_jurusan,$prestasi,$tingkat,$tahun,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'prestasi'=>$prestasi,
			'tingkat'=>$tingkat,
			'tahun'=>$tahun,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$result = $this->db->insert('prestasi',$data);
		return $result;
	}
	
	function upd_prestasi($id_prestasi,$nama,$id_jurusan,$prestasi,$tingkat,$tahun,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'id_jurusan'=>$id_jurusan,
			'prestasi'=>$prestasi,
			'tingkat'=>$tingkat,
			'tahun'=>$tahun,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		$this->db->where('id_prestasi',$id_prestasi);
		$result = $this->db->update('prestasi',$data);
		return $result;
	}
	
	function upd_prestasi1($id_prestasi=0,$image_path=''){
		$data=array('image_path'=>$image_path);
		$where=array('id_prestasi'=>$id_prestasi);
		$result=$this->db->update('prestasi',$data,$where);
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



/* End of file prestasi_model.php */

/* Location: ./application/models/prestasi_model.php */