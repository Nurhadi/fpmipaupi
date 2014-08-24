<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Seminar_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_seminar()
	{
		$this->db->select('id_seminar,title,content');
		$this->db->order_by('id_seminar','desc');
		$result = $this->db->get('seminar');
		return $result;
	}
	
	function get_detail_seminar($id_seminar)
	{
		$this->db->select('title,meta_keywords,meta_description,content');
		$this->db->where('id_seminar',$id_seminar);
		$result = $this->db->get('seminar');
		return $result;
	}
}

/* End of File : seminar_model.php */
/* Location : ./models/seminar_model.php */