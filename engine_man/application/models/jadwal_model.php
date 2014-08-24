<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Jadwal_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('page_id'=>$page_id);

		$this->db->select('title,description,keyword,text');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_jadwal()
	{
		$this->db->select('id_jadwal,title,budget,spend_time,img_thumbnail,date_start,date_end,date_create,user_id,status');
		$this->db->order_by('id_jadwal','desc');
		$result = $this->db->get('jadwal_trip');
		return $result;
	}
	
	function get_jadwal1($id_jadwal)
	{
		$this->db->select('id_jadwal,id_bulan,title,budget,spend_time,destinasi,description,term,img_thumbnail,date_start,date_end,date_create,user_id,status');
		$this->db->where('id_jadwal',$id_jadwal);
		$result = $this->db->get('jadwal_trip');
		return $result;
	}
	
	function get_mypath($id_jadwal=0){
		$where=array('id_jadwal'=>$id_jadwal);
		$this->db->select('img_thumbnail');
		$result=$this->db->get_where('jadwal_trip',$where);
		return $result;
	}
	
	function delete_jadwal($id_jadwal=0){
		$where=array('id_jadwal'=>$id_jadwal);
		$result=$this->db->delete('jadwal_trip',$where);
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
	
	function ins_jadwal($title,$id_bulan,$budget,$spend_time,$destinasi,$deskripsi,$term,$date_start,$date_end,$date_create,$img_thumbnail,$user_id)
	{
		$data = array(
			'title'=>$title,
			'id_bulan'=>$id_bulan,
			'budget'=>$budget,
			'spend_time'=>$spend_time,
			'destinasi'=>$destinasi,
			'description'=>$deskripsi,
			'term'=>$term,
			'date_start'=>$date_start,
			'date_end'=>$date_end,
			'date_create'=>$date_create,
			'img_thumbnail'=>$img_thumbnail,
			'user_id'=>$user_id
		);
		
		$result = $this->db->insert('jadwal_trip',$data);
		return $result;
	}
	
	function upd_jadwal($id_jadwal,$title,$id_bulan,$budget,$spend_time,$destinasi,$deskripsi,$term,$date_start,$date_end,$date_create,$img_thumbnail,$user_id)
	{
		$data = array(
			'title'=>$title,
			'id_bulan'=>$id_bulan,
			'budget'=>$budget,
			'spend_time'=>$spend_time,
			'destinasi'=>$destinasi,
			'description'=>$deskripsi,
			'term'=>$term,
			'date_start'=>$date_start,
			'date_end'=>$date_end,
			'date_create'=>$date_create,
			'img_thumbnail'=>$img_thumbnail,
			'user_id'=>$user_id
		);
		$this->db->where('id_jadwal',$id_jadwal);
		$result = $this->db->update('jadwal_trip',$data);
		return $result;
	}
	
	function upd_jadwal1($id_jadwal=0,$img_thumbnail=''){
		$data=array('img_thumbnail'=>$img_thumbnail);
		$where=array('id_jadwal'=>$id_jadwal);
		$result=$this->db->update('jadwal_trip',$data,$where);
		return $result;
	}
}



/* End of file jadwal_model.php */

/* Location: ./application/models/jadwal_model.php */