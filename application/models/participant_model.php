<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class participant_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_participant()
	{
		$this->db->select('id_participant,nama,image_thumbnail');
		$this->db->where('status','active');
		$this->db->order_by('nama','asc');
		$result = $this->db->get('participant');
		return $result;
	}
	
	function get_detail_participant($id_participant)
	{
		$this->db->select('nama,tanggal_lahir,jenis_kelamin,kewarganegaraan,image_thumbnail,date_create');
		$this->db->where('id_participant',$id_participant);
		$result = $this->db->get('participant');
		return $result;
	}
	
	function get_report_activity($id_participant)
	{
		$this->db->select('report_id,title,path');
		$this->db->where('id_participant',$id_participant);
		$result = $this->db->get('report_activity');
		return $result;
	}
	
	function get_publication($id_participant)
	{
		$this->db->select('publication_id,title,path');
		$this->db->where('id_participant',$id_participant);
		$result = $this->db->get('publication');
		return $result;
	}
	
	function get_research_project($id_participant)
	{
		$this->db->select('research_id,title,path');
		$this->db->where('id_participant',$id_participant);
		$result = $this->db->get('research_project');
		return $result;
	}
}

/* End of File : participant_model.php */
/* Location : ./models/participant_model.php */