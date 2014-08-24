<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publication_model extends CI_Model {

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
	
	function ins_publication($id_participant,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('id_participant'=>$id_participant,'title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->insert('publication',$data);
		return $result;
	}
	
	function upd_publication($publication_id,$id_participant,$title,$desc,$path,$user_id){
		date_default_timezone_set('Asia/Jakarta');
		$where=array('publication_id'=>$publication_id);
		$data=array('id_participant'=>$id_participant,'title'=>$title,'mydesc'=>$desc,'path'=>$path,'user_id'=>$user_id,'tanggal'=>date('Y-m-d H:i:s'));
		$result=$this->db->update('publication',$data,$where);
		return $result;
	}
	
	function delete_publication($publication_id=0){
		$where=array('publication_id'=>$publication_id);
		$result=$this->db->delete('publication',$where);
		return $result;
	}
	
	function get_path($publication_id=0){
		$where=array('publication_id'=>$publication_id);
		$this->db->select('path');
		$result=$this->db->get_where('publication',$where);
		return $result;
	}
	
	function get_detail_publication($publication_id=0){
		$where=array('publication_id'=>$publication_id);
		$this->db->select('publication.publication_id,publication.title,publication.path,publication.mydesc,participant.id_participant,participant.nama');
		$this->db->join('participant','participant.id_participant = publication.id_participant');
		$result=$this->db->get_where('publication',$where);
		return $result;
	}
	
	function upd_down_path($publication_id=0,$path=''){
		$data=array('path'=>$path);
		$where=array('publication_id'=>$publication_id);
		$result=$this->db->update('publication',$data,$where);
		return $result;
	}
	
	function update_counter($publication_id=0){
		$this->db->query('update publication set counter=counter+1 where publication_id='.$publication_id);
	}
	
	function get_publication(){
		$this->db->select('publication.publication_id,publication.title,publication.path,publication.counter,participant.nama');
		$this->db->join('participant','participant.id_participant = publication.id_participant');
		$this->db->order_by('publication_id','desc');
		$result=$this->db->get('publication');
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

/* End of file publication_model.php */
/* Location: ./application/controllers/publication_model.php */