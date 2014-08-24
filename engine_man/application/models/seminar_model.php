<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seminar_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

	function get_page2($page_id=0){
		$where=array('id_page'=>$page_id);
		$this->db->select('title,meta_description,meta_keywords,content');
		$result=$this->db->get_where('page',$where);
		return $result;
	}

	function get_seminar()
	{
		$this->db->select('id_seminar,title,meta_keywords,meta_description,thumbnail,content,date,date_create,id_user');
		$this->db->order_by('id_seminar','desc');
		$result = $this->db->get('seminar');
		return $result;
	}

	function get_detail_seminar($id_seminar)
	{
		$this->db->select('id_seminar,title,meta_keywords,meta_description,thumbnail,content,date,date_create,id_user');
		$this->db->where('id_seminar',$id_seminar);
		$result = $this->db->get('seminar');
		return $result;
	}

	function get_mypath($id_seminar=0){
		$where=array('id_seminar'=>$id_seminar);
		$this->db->select('thumbnail');
		$result=$this->db->get_where('seminar',$where);
		return $result;
	}

	function delete_seminar($id_seminar=0){
		$where=array('id_seminar'=>$id_seminar);
		$result=$this->db->delete('seminar',$where);
		return $result;
	}

	function ins_seminar($title,$meta_keywords,$meta_description,$thumbnail,$content,$date,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'meta_keywords'=>$meta_keywords,
			'meta_description'=>$meta_description,
			'thumbnail'=>$thumbnail,
			'content'=>$content,
			'date'=>$date,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);

		$result = $this->db->insert('seminar',$data);
		return $result;
	}

	function upd_seminar($id_seminar,$title,$meta_keywords,$meta_description,$thumbnail,$content,$date,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'meta_keywords'=>$meta_keywords,
			'meta_description'=>$meta_description,
			'thumbnail'=>$thumbnail,
			'content'=>$content,
			'id_user'=>$user_id
		);

		$this->db->where('id_seminar',$id_seminar);
		$result = $this->db->update('seminar',$data);
		return $result;
	}

	function upd_seminar1($id_seminar=0,$thumbnail=''){
		$data=array('thumbnail'=>$thumbnail);
		$where=array('id_seminar'=>$id_seminar);
		$result=$this->db->update('seminar',$data,$where);
		return $result;
	}
}



/* End of file seminar_model.php */

/* Location: ./application/models/seminar_model.php */