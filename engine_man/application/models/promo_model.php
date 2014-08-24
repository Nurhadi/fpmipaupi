<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Promo_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){
		$where=array('page_id'=>$page_id);
		$this->db->select('title,description,keyword,text');
		$result=$this->db->get_where('page',$where);
		return $result;

	}

	function get_promo()
	{
		$this->db->select('id_promo,title,meta_keyword,meta_description,content,img_thumbnail,note,date_limit,date_create,status,destinasi,description,term,budget');
		$this->db->where('status','active');
		$this->db->order_by('id_promo','desc');
		$result = $this->db->get('promo');
		return $result;
	}
	
	function get_promo1($id_promo)
	{
		$this->db->select('id_promo,title,meta_keyword,meta_description,content,img_thumbnail,note,date_limit,date_create,status,destinasi,description,term,budget');
		$this->db->where('status','active');
		$this->db->where('id_promo',$id_promo);
		$this->db->order_by('id_promo','desc');
		$result = $this->db->get('promo');
		return $result;
	}

	function upd_promo1($id_promo=0,$img_thumbnail=''){
		$data=array('img_thumbnail'=>$img_thumbnail);
		$where=array('id_promo'=>$id_promo);
		$result=$this->db->update('promo',$data,$where);
		return $result;
	}
	
	function ins_promo($title,$keyword,$description,$content,$note,$img_thumbnail,$date_create,$date_limit,$user_id,$destinasi,$deskripsi,$term,$budget)
	{
		$data = array(
			'title'=>$title,
			'meta_keyword'=>$keyword,
			'meta_description'=>$description,
			'content'=>$content,
			'note'=>$note,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'date_limit'=>$date_limit,
			'user_id'=>$user_id,
			'destinasi'=>$destinasi,
			'description'=>$deskripsi,
			'term'=>$term,
			'budget'=>$budget
		);
		
		$result = $this->db->insert('promo',$data);
		return $result;
	}
	
	function upd_promo($id_promo,$title,$keyword,$description,$content,$note,$img_thumbnail,$date_create,$date_limit,$user_id,$destinasi,$deskripsi,$term,$budget)
	{
		$data = array(
			'title'=>$title,
			'meta_keyword'=>$keyword,
			'meta_description'=>$description,
			'content'=>$content,
			'note'=>$note,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'date_limit'=>$date_limit,
			'user_id'=>$user_id,
			'destinasi'=>$destinasi,
			'description'=>$deskripsi,
			'term'=>$term,
			'budget'=>$budget
		);
		$this->db->where('id_promo',$id_promo);
		$result = $this->db->update('promo',$data);
		return $result;
	}
	
	function get_mypath($id_promo=0){
		$where=array('id_promo'=>$id_promo);
		$this->db->select('img_thumbnail');
		$result=$this->db->get_where('promo',$where);
		return $result;
	}
	
	function delete_promo($id_promo=0){
		$where=array('id_promo'=>$id_promo);
		$result=$this->db->delete('promo',$where);
		return $result;
	}
}



/* End of file promo_model.php */

/* Location: ./application/models/promo_model.php */