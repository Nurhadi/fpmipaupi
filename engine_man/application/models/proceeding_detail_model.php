<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proceeding_detail_model extends CI_Model {

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
	
	function ins_proceeding_detail($title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->insert('proceeding_detail',$data);
		return $result;
	}
	
	function upd_proceeding_detail($proceeding_detail_id,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$where=array('proceeding_detail_id'=>$proceeding_detail_id);
		$data=array('title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->update('proceeding_detail',$data,$where);
		return $result;
	}
	
	function delete_proceeding_detail($proceeding_detail_id=0){
		$where=array('proceeding_detail_id'=>$proceeding_detail_id);
		$result=$this->db->delete('proceeding_detail',$where);
		return $result;
	}
	
	function get_path($proceeding_detail_id=0){
		$where=array('proceeding_detail_id'=>$proceeding_detail_id);
		$this->db->select('path');
		$result=$this->db->get_where('proceeding_detail',$where);
		return $result;
	}
	
	function get_detail_proceeding_detail($proceeding_detail_id=0){
		$where=array('proceeding_detail_id'=>$proceeding_detail_id);
		$this->db->select('proceeding_detail.proceeding_detail_id,proceeding_detail.title,proceeding_detail.path,proceeding_detail.mydesc');
		$result=$this->db->get_where('proceeding_detail',$where);
		return $result;
	}
	
	function upd_down_path($proceeding_detail_id=0,$path=''){
		$data=array('path'=>$path);
		$where=array('proceeding_detail_id'=>$proceeding_detail_id);
		$result=$this->db->update('proceeding_detail',$data,$where);
		return $result;
	}
	
	function update_counter($proceeding_detail_id=0){
		$this->db->query('update proceeding_detail set counter=counter+1 where proceeding_detail_id='.$proceeding_detail_id);
	}
	
	function get_proceeding_detail(){
		$this->db->select('proceeding_detail.proceeding_detail_id,proceeding_detail.title,proceeding_detail.path');
		$this->db->order_by('proceeding_detail_id','desc');
		$result=$this->db->get('proceeding_detail');
		return $result;
	}
	
	function get_participant()
	{
		$this->db->select('id_participant,nama');
		$this->db->where('status','active');
		$this->db->order_by('nama','asc');
		$result = $this->db->get('participant');
		return $result;
	}
}

/* End of file proceeding_detail_model.php */
/* Location: ./application/controllers/proceeding_detail_model.php */