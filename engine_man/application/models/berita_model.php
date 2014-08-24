<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }

	function get_page(){
		$where=array('page_id !='=>'2');
		$this->db->select('title');
		$result=$this->db->get_where('page',$where);
		return $result;
	}

	function get_page2($page_id=0){
		$where=array('id_page'=>$page_id);
		$this->db->select('title,meta_description,meta_keywords,content');
		$result=$this->db->get_where('page',$where);
		return $result;
	}

	function ins_berita($title,$keywords,$description,$thumbnail,$content,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('title'=>$title,'meta_keywords'=>$keywords,'meta_description'=>$description,'thumbnail'=>$thumbnail,'content'=>$content,'date_create'=>date('Y-m-d H:i:s'),'id_user'=>$user_id);
		$result=$this->db->insert('berita',$data);
		return $result;
	}

	function upd_berita($id_berita,$title,$keywords,$description,$thumbnail,$content,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$where=array('id_berita'=>$id_berita);
		$data=array('title'=>$title,'meta_keywords'=>$keywords,'meta_description'=>$description,'thumbnail'=>$thumbnail,'content'=>$content,'date_create'=>date('Y-m-d H:i:s'),'id_user'=>$user_id);
		$result=$this->db->update('berita',$data,$where);
		return $result;
	}

	function delete_berita($id_berita=0){
		$where=array('id_berita'=>$id_berita);
		$result=$this->db->delete('berita',$where);
		return $result;
	}

	function get_path($id_berita=0){
		$where=array('id_berita'=>$id_berita);
		$this->db->select('thumbnail');
		$result=$this->db->get_where('berita',$where);
		return $result;
	}

	function get_detail_berita($id_berita=0){
		$where=array('id_berita'=>$id_berita);
		$this->db->select('id_berita,thumbnail,title,meta_keywords,meta_description,thumbnail,content,date_create,id_user');
		$result=$this->db->get_where('berita',$where);
		return $result;
	}

	function upd_down_path($id_berita=0,$path=''){
		$data=array('path'=>$path);
		$where=array('id_berita'=>$id_berita);
		$result=$this->db->update('berita',$data,$where);
		return $result;
	}

	function update_counter($id_berita=0){
		$this->db->query('update berita set counter=counter+1 where id_berita='.$id_berita);
	}

	function get_berita(){
		$this->db->select('id_berita,title,meta_keywords,meta_description,content,date_create');
		$this->db->order_by('id_berita','desc');
		$result=$this->db->get('berita');
		return $result;
	}
}

/* End of file berita_model.php */
/* Location: ./application/controllers/berita_model.php */