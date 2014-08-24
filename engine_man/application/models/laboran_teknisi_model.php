<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Laboran_teknisi_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_laboran_teknisi()
	{
		$this->db->select('id_laboran_teknisi,nip,nama,alamat,telepon,golongan,id_laboratorium,image_path,status,date_create');
		$this->db->order_by('id_laboran_teknisi','desc');
		$result = $this->db->get('laboran_teknisi');
		return $result;
	}
	
	function get_laboran_teknisi1($id_laboran_teknisi)
	{
		$this->db->select('id_laboran_teknisi,nip,nama,alamat,telepon,golongan,id_laboratorium,image_path,status,date_create');
		$this->db->where('id_laboran_teknisi',$id_laboran_teknisi);
		$result = $this->db->get('laboran_teknisi');
		return $result;
	}
	
	function get_mypath($id_laboran_teknisi=0){
		$where=array('id_laboran_teknisi'=>$id_laboran_teknisi);
		$this->db->select('image_path');
		$result=$this->db->get_where('laboran_teknisi',$where);
		return $result;
	}
	
	function delete_laboran_teknisi($id_laboran_teknisi=0){
		$where=array('id_laboran_teknisi'=>$id_laboran_teknisi);
		$result=$this->db->delete('laboran_teknisi',$where);
		return $result;
	}
	
	function ins_laboran_teknisi($nip,$nama,$alamat,$telepon,$golongan,$id_laboratorium,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nip'=>$nip,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'golongan'=>$golongan,
			'id_laboratorium'=>$id_laboratorium,
			'image_path'=>$image_path,
			'date_create'=>$date_create
		);
		
		$result = $this->db->insert('laboran_teknisi',$data);
		return $result;
	}
	
	function upd_laboran_teknisi($id_laboran_teknisi,$nip,$nama,$alamat,$telepon,$golongan,$id_laboratorium,$image_path,$date_create,$user_id)
	{
		$data = array(
			'nip'=>$nip,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'telepon'=>$telepon,
			'golongan'=>$golongan,
			'id_laboratorium'=>$id_laboratorium,
			'image_path'=>$image_path,
			'date_create'=>$date_create
		);
		$this->db->where('id_laboran_teknisi',$id_laboran_teknisi);
		$result = $this->db->update('laboran_teknisi',$data);
		return $result;
	}
	
	function upd_laboran_teknisi1($id_laboran_teknisi=0,$image_path=''){
		$data=array('image_path'=>$image_path);
		$where=array('id_laboran_teknisi'=>$id_laboran_teknisi);
		$result=$this->db->update('laboran_teknisi',$data,$where);
		return $result;
	}
	
	function get_nama_laboratorium($id_laboratorium)
	{
		$this->db->select('nama');
		$this->db->where('id_laboratorium',$id_laboratorium);
		$this->db->limit('1');
		$result = $this->db->get('laboratorium');
		$row = $result->row();
		return $row->nama;
	}
	
	function get_laboratorium()
	{
		$this->db->select('id_laboratorium,nama');
		$this->db->where('status','active');
		$this->db->order_by('id_laboratorium','asc');
		$result = $this->db->get('laboratorium');
		return $result;
	}
}



/* End of file laboran_teknisi_model.php */

/* Location: ./application/models/laboran_teknisi_model.php */