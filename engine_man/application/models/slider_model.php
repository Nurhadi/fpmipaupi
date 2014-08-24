<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Slider_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){
		$where=array('page_id'=>$page_id);
		$this->db->select('title,description,keyword,text');
		$result=$this->db->get_where('page',$where);
		return $result;

	}

	function get_slider()
	{
		$this->db->select('id_slider,title,link,img_path,date_create');
		$this->db->order_by('id_slider','desc');
		$result = $this->db->get('slider_home');
		return $result;
	}
	
	function get_slider1($id_slider)
	{
		$this->db->select('id_slider,title,link,img_path,date_create');
		$this->db->where('id_slider',$id_slider);
		$this->db->order_by('id_slider','desc');
		$result = $this->db->get('slider_home');
		return $result;
	}

	function upd_slider1($id_slider=0,$img_path=''){
		$data=array('img_path'=>$img_path);
		$where=array('id_slider'=>$id_slider);
		$result=$this->db->update('slider_home',$data,$where);
		return $result;
	}
	
	function ins_slider($title,$link,$img_path,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'link'=>$link,
			'img_path'=>$img_path,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);
		
		$result = $this->db->insert('slider_home',$data);
		return $result;
	}
	
	function upd_slider($id_slider,$title,$link,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'link'=>$link,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		$this->db->where('id_slider',$id_slider);
		$result = $this->db->update('slider',$data);
		return $result;
	}
	
	function get_mypath($id_slider=0){
		$where=array('id_slider'=>$id_slider);
		$this->db->select('img_path');
		$result=$this->db->get_where('slider_home',$where);
		return $result;
	}
	
	function delete_slider($id_slider=0){
		$where=array('id_slider'=>$id_slider);
		$result=$this->db->delete('slider_home',$where);
		return $result;
	}
}



/* End of file slider_model.php */

/* Location: ./application/models/slider_model.php */