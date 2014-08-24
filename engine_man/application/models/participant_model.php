<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Participant_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('id_page'=>$page_id);

		$this->db->select('title,meta_description,meta_keywords,content');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_participant()
	{
		$this->db->select('id_participant,nama,tanggal_lahir,jenis_kelamin,kewarganegaraan,image_thumbnail,date_create,status');
		$this->db->order_by('id_participant','desc');
		$result = $this->db->get('participant');
		return $result;
	}
	
	function get_participant1($id_participant)
	{
		$this->db->select('id_participant,nama,tanggal_lahir,jenis_kelamin,kewarganegaraan,image_thumbnail,date_create,status,user_id');
		$this->db->where('id_participant',$id_participant);
		$result = $this->db->get('participant');
		return $result;
	}
	
	function get_mypath($id_participant=0){
		$where=array('id_participant'=>$id_participant);
		$this->db->select('image_thumbnail');
		$result=$this->db->get_where('participant',$where);
		return $result;
	}
	
	function delete_participant($id_participant=0){
		$where=array('id_participant'=>$id_participant);
		$result=$this->db->delete('participant',$where);
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
	
	function ins_participant($nama,$tanggal_lahir,$jenis_kelamin,$kewarganegaraan,$image_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'jenis_kelamin'=>$jenis_kelamin,
			'kewarganegaraan'=>$kewarganegaraan,
			'image_thumbnail'=>$image_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		
		$result = $this->db->insert('participant',$data);
		return $result;
	}
	
	function upd_participant($id_participant,$nama,$tanggal_lahir,$jenis_kelamin,$kewarganegaraan,$image_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'jenis_kelamin'=>$jenis_kelamin,
			'kewarganegaraan'=>$kewarganegaraan,
			'image_thumbnail'=>$image_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		$this->db->where('id_participant',$id_participant);
		$result = $this->db->update('participant',$data);
		return $result;
	}
	
	function upd_participant1($id_participant=0,$image_thumbnail=''){
		$data=array('image_thumbnail'=>$image_thumbnail);
		$where=array('id_participant'=>$id_participant);
		$result=$this->db->update('participant',$data,$where);
		return $result;
	}
}



/* End of file participant_model.php */

/* Location: ./application/models/participant_model.php */