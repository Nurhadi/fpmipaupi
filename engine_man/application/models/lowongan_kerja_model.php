<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lowongan_kerja_model extends CI_Model {
    public function __construct(){
        parent::__construct();
    }

	function get_page2($page_id=0){
		$where=array('id_page'=>$page_id);
		$this->db->select('title,meta_description,meta_keywords,content');
		$result=$this->db->get_where('page',$where);
		return $result;
	}

	function get_lowongan_kerja()
	{
		$this->db->select('id_lowongan_kerja,title,meta_keywords,meta_description,thumbnail,content,date_create,id_user');
		$this->db->order_by('id_lowongan_kerja','desc');
		$result = $this->db->get('lowongan_kerja');
		return $result;
	}

	function get_detail_lowongan_kerja($id_lowongan_kerja)
	{
		$this->db->select('id_lowongan_kerja,title,meta_keywords,meta_description,thumbnail,content,date_create,id_user');
		$this->db->where('id_lowongan_kerja',$id_lowongan_kerja);
		$result = $this->db->get('lowongan_kerja');
		return $result;
	}

	function get_mypath($id_lowongan_kerja=0){
		$where=array('id_lowongan_kerja'=>$id_lowongan_kerja);
		$this->db->select('thumbnail');
		$result=$this->db->get_where('lowongan_kerja',$where);
		return $result;
	}

	function delete_lowongan_kerja($id_lowongan_kerja=0){
		$where=array('id_lowongan_kerja'=>$id_lowongan_kerja);
		$result=$this->db->delete('lowongan_kerja',$where);
		return $result;
	}

	function ins_lowongan_kerja($title,$meta_keywords,$meta_description,$thumbnail,$content,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'meta_keywords'=>$meta_keywords,
			'meta_description'=>$meta_description,
			'thumbnail'=>$thumbnail,
			'content'=>$content,
			'date_create'=>$date_create,
			'id_user'=>$user_id
		);

		$result = $this->db->insert('lowongan_kerja',$data);
		return $result;
	}

	function upd_lowongan_kerja($id_lowongan_kerja,$title,$meta_keywords,$meta_description,$thumbnail,$content,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'meta_keywords'=>$meta_keywords,
			'meta_description'=>$meta_description,
			'thumbnail'=>$thumbnail,
			'content'=>$content,
			'id_user'=>$user_id
		);

		$this->db->where('id_lowongan_kerja',$id_lowongan_kerja);
		$result = $this->db->update('lowongan_kerja',$data);
		return $result;
	}

	function upd_lowongan_kerja1($id_lowongan_kerja=0,$thumbnail=''){
		$data=array('thumbnail'=>$thumbnail);
		$where=array('id_lowongan_kerja'=>$id_lowongan_kerja);
		$result=$this->db->update('lowongan_kerja',$data,$where);
		return $result;
	}
}



/* End of file lowongan_kerja_model.php */

/* Location: ./application/models/lowongan_kerja_model.php */