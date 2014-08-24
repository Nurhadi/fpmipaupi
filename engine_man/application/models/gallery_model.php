<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Gallery_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){
		$where=array('page_id'=>$page_id);
		$this->db->select('title,description,keyword,text');
		$result=$this->db->get_where('page',$where);
		return $result;

	}

	function get_gallery()
	{
		$this->db->select('id_gallery,title,img_thumbnail1,img_thumbnail2,img_thumbnail3,img_thumbnail4,img_thumbnail5,date_create,status');
		$this->db->where('status','active');
		$this->db->order_by('id_gallery','desc');
		$result = $this->db->get('gallery');
		return $result;
	}
	
	function get_gallery1($id_gallery)
	{
		$this->db->select('id_gallery,title,img_thumbnail1,img_thumbnail2,img_thumbnail3,img_thumbnail4,img_thumbnail5,date_create,status');
		$this->db->where('status','active');
		$this->db->where('id_gallery',$id_gallery);
		$this->db->order_by('id_gallery','desc');
		$result = $this->db->get('gallery');
		return $result;
	}

	function upd_gallery1($id_gallery=0,$img_thumbnail=''){
		$data=array('img_thumbnail1'=>$img_thumbnail);
		$where=array('id_gallery'=>$id_gallery);
		$result=$this->db->update('gallery',$data,$where);
		return $result;
	}

	function upd_gallery2($id_gallery=0,$img_thumbnail=''){
		$data=array('img_thumbnail2'=>$img_thumbnail);
		$where=array('id_gallery'=>$id_gallery);
		$result=$this->db->update('gallery',$data,$where);
		return $result;
	}

	function upd_gallery3($id_gallery=0,$img_thumbnail=''){
		$data=array('img_thumbnail3'=>$img_thumbnail);
		$where=array('id_gallery'=>$id_gallery);
		$result=$this->db->update('gallery',$data,$where);
		return $result;
	}

	function upd_gallery4($id_gallery=0,$img_thumbnail=''){
		$data=array('img_thumbnail4'=>$img_thumbnail);
		$where=array('id_gallery'=>$id_gallery);
		$result=$this->db->update('gallery',$data,$where);
		return $result;
	}
	
	function upd_gallery5($id_gallery=0,$img_thumbnail=''){
		$data=array('img_thumbnail5'=>$img_thumbnail);
		$where=array('id_gallery'=>$id_gallery);
		$result=$this->db->update('gallery',$data,$where);
		return $result;
	}
	
	function ins_gallery($title,$img_thumbnail1,$img_thumbnail2,$img_thumbnail3,$img_thumbnail4,$img_thumbnail5,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'img_thumbnail1'=>$img_thumbnail1,
			'img_thumbnail2'=>$img_thumbnail2,
			'img_thumbnail3'=>$img_thumbnail3,
			'img_thumbnail4'=>$img_thumbnail4,
			'img_thumbnail5'=>$img_thumbnail5,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		
		$result = $this->db->insert('gallery',$data);
		return $result;
	}
	
	function upd_gallery($id_gallery,$title,$img_thumbnail1,$img_thumbnail2,$img_thumbnail3,$img_thumbnail4,$img_thumbnail5,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'img_thumbnail1'=>$img_thumbnail1,
			'img_thumbnail2'=>$img_thumbnail2,
			'img_thumbnail3'=>$img_thumbnail3,
			'img_thumbnail4'=>$img_thumbnail4,
			'img_thumbnail5'=>$img_thumbnail5,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		$this->db->where('id_gallery',$id_gallery);
		$result = $this->db->update('gallery',$data);
		return $result;
	}
	
	function get_mypath1($id_gallery=0){
		$where=array('id_gallery'=>$id_gallery);
		$this->db->select('img_thumbnail1');
		$result=$this->db->get_where('gallery',$where);
		return $result;
	}

	function get_mypath2($id_gallery=0){
		$where=array('id_gallery'=>$id_gallery);
		$this->db->select('img_thumbnail2');
		$result=$this->db->get_where('gallery',$where);
		return $result;
	}
	
	function get_mypath3($id_gallery=0){
		$where=array('id_gallery'=>$id_gallery);
		$this->db->select('img_thumbnail3');
		$result=$this->db->get_where('gallery',$where);
		return $result;
	}
	
	function get_mypath4($id_gallery=0){
		$where=array('id_gallery'=>$id_gallery);
		$this->db->select('img_thumbnail4');
		$result=$this->db->get_where('gallery',$where);
		return $result;
	}
	
	function get_mypath5($id_gallery=0){
		$where=array('id_gallery'=>$id_gallery);
		$this->db->select('img_thumbnail5');
		$result=$this->db->get_where('gallery',$where);
		return $result;
	}
	
	function delete_gallery($id_gallery=0){
		$where=array('id_gallery'=>$id_gallery);
		$result=$this->db->delete('gallery',$where);
		return $result;
	}
}



/* End of file gallery_model.php */

/* Location: ./application/models/gallery_model.php */