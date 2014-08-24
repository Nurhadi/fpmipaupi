<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Berita_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function get_berita()
	{
		$this->db->select('id_berita,title,content');
		$this->db->order_by('id_berita','desc');
		$result = $this->db->get('berita');
		return $result;
	}
	
	function get_detail_berita($id_berita)
	{
		$this->db->select('title,meta_keywords,meta_description,content');
		$this->db->where('id_berita',$id_berita);
		$result = $this->db->get('berita');
		return $result;
	}
}

/* End of File : seminar_model.php */
/* Location : ./models/seminar_model.php */