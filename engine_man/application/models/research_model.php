<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Research_model extends CI_Model {

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
	
	function ins_research($id_participant,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('id_participant'=>$id_participant,'title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->insert('research_project',$data);
		return $result;
	}
	
	function upd_research($research_id,$id_participant,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$where=array('research_id'=>$research_id);
		$data=array('id_participant'=>$id_participant,'title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->update('research_project',$data,$where);
		return $result;
	}
	
	function delete_research($research_id=0){
		$where=array('research_id'=>$research_id);
		$result=$this->db->delete('research_project',$where);
		return $result;
	}
	
	function get_path($research_id=0){
		$where=array('research_id'=>$research_id);
		$this->db->select('path');
		$result=$this->db->get_where('research_project',$where);
		return $result;
	}
	
	function get_detail_research($research_id=0){
		$where=array('research_id'=>$research_id);
		$this->db->select('research_project.research_id,research_project.title,research_project.path,research_project.mydesc,participant.id_participant,participant.nama');
		$this->db->join('participant','participant.id_participant = research_project.id_participant');
		$result=$this->db->get_where('research_project',$where);
		return $result;
	}
	
	function upd_down_path($research_id=0,$path=''){
		$data=array('path'=>$path);
		$where=array('research_id'=>$research_id);
		$result=$this->db->update('research_project',$data,$where);
		return $result;
	}
	
	function update_counter($research_id=0){
		$this->db->query('update research_project set counter=counter+1 where research_id='.$research_id);
	}
	
	function get_research_project(){
		$this->db->select('research_project.research_id,research_project.title,research_project.path,research_project.counter,participant.nama');
		$this->db->join('participant','participant.id_participant = research_project.id_participant');
		$this->db->order_by('research_id','desc');
		$result=$this->db->get('research_project');
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

/* End of file research_model.php */
/* Location: ./application/controllers/research_model.php */