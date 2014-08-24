<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Agenda_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_agenda()
	{
		$this->db->select('id_agenda,title,content');
		$this->db->order_by('id_agenda','desc');
		$result = $this->db->get('agenda');
		return $result;
	}
	
	function get_detail_agenda($id_agenda)
	{
		$this->db->select('title,meta_keywords,meta_description,content');
		$this->db->where('id_agenda',$id_agenda);
		$result = $this->db->get('agenda');
		return $result;
	}
}

/* End of File : agenda_model.php */
/* Location : ./models/agenda_model.php */