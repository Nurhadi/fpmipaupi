<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sejarah_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	function get_page2($page_id=0){
		$where=array('id_page'=>$page_id);
		$this->db->select('title,meta_description,meta_keywords,content');
		$result=$this->db->get_where('page',$where);
		return $result;
	}
}

/* End of file sejarah_model.php */
/* Location: ./application/controllers/sejarah_model.php */