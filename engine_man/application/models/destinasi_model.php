<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Destinasi_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('page_id'=>$page_id);

		$this->db->select('title,description,keyword,text');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_destinasi()
	{
		$this->db->select('id_destinasi,title,budget,spend_time,img_thumbnail,destinasi,description,term,date_create,user_id,status');
		$this->db->order_by('id_destinasi','desc');
		$result = $this->db->get('destinasi');
		return $result;
	}
	
	function get_destinasi1($id_destinasi)
	{
		$this->db->select('id_destinasi,title,budget,spend_time,img_thumbnail,destinasi,description,term,date_create,user_id,status');
		$this->db->where('id_destinasi',$id_destinasi);
		$this->db->order_by('id_destinasi','desc');
		$result = $this->db->get('destinasi');
		return $result;
	}

	function upd_destinasi1($id_destinasi=0,$img_thumbnail=''){
		$data=array('img_thumbnail'=>$img_thumbnail);
		$where=array('id_destinasi'=>$id_destinasi);
		$result=$this->db->update('destinasi',$data,$where);
		return $result;
	}
	
	function ins_destinasi($title,$budget,$spend_time,$destinasi,$deskripsi,$term,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'budget'=>$budget,
			'spend_time'=>$spend_time,
			'destinasi'=>$destinasi,
			'description'=>$deskripsi,
			'term'=>$term,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		
		$result = $this->db->insert('destinasi',$data);
		return $result;
	}
	
	function upd_destinasi($id_destinasi,$title,$budget,$spend_time,$destinasi,$deskripsi,$term,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'budget'=>$budget,
			'spend_time'=>$spend_time,
			'destinasi'=>$destinasi,
			'description'=>$deskripsi,
			'term'=>$term,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		$this->db->where('id_destinasi',$id_destinasi);
		$result = $this->db->update('destinasi',$data);
		return $result;
	}
	
	function get_mypath($id_destinasi=0){
		$where=array('id_destinasi'=>$id_destinasi);
		$this->db->select('img_thumbnail');
		$result=$this->db->get_where('destinasi',$where);
		return $result;
	}
	
	function delete_destinasi($id_destinasi=0){
		$where=array('id_destinasi'=>$id_destinasi);
		$result=$this->db->delete('destinasi',$where);
		return $result;
	}
}



/* End of file destinasi_model.php */

/* Location: ./application/models/destinasi_model.php */