<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_model extends CI_Model {

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
	
	function ins_report($id_participant,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('id_participant'=>$id_participant,'title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->insert('report_activity',$data);
		return $result;
	}
	
	function upd_report($report_id,$id_participant,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$where=array('report_id'=>$report_id);
		$data=array('id_participant'=>$id_participant,'title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->update('report_activity',$data,$where);
		return $result;
	}
	
	function delete_report($report_id=0){
		$where=array('report_id'=>$report_id);
		$result=$this->db->delete('report_activity',$where);
		return $result;
	}
	
	function get_path($report_id=0){
		$where=array('report_id'=>$report_id);
		$this->db->select('path');
		$result=$this->db->get_where('report_activity',$where);
		return $result;
	}
	
	function get_detail_report($report_id=0){
		$where=array('report_id'=>$report_id);
		$this->db->select('report_activity.report_id,report_activity.title,report_activity.path,report_activity.mydesc,participant.id_participant,participant.nama');
		$this->db->join('participant','participant.id_participant = report_activity.id_participant');
		$result=$this->db->get_where('report_activity',$where);
		return $result;
	}
	
	function upd_down_path($report_id=0,$path=''){
		$data=array('path'=>$path);
		$where=array('report_id'=>$report_id);
		$result=$this->db->update('report_activity',$data,$where);
		return $result;
	}
	
	function update_counter($report_id=0){
		$this->db->query('update report_activity set counter=counter+1 where report_id='.$report_id);
	}
	
	function get_report_activity(){
		$this->db->select('report_activity.report_id,report_activity.title,report_activity.path,report_activity.counter,participant.nama');
		$this->db->join('participant','participant.id_participant = report_activity.id_participant');
		$this->db->order_by('report_id','desc');
		$result=$this->db->get('report_activity');
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

/* End of file report_model.php */
/* Location: ./application/controllers/report_model.php */