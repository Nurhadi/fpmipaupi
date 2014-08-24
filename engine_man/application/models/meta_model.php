<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meta_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	function get_meta_item($meta_id=0){
		$where=array('meta_id'=>$meta_id);
		$result=$this->db->get_where('meta_item',$where);
		return $result;
	}
	
	function upd_meta_item($meta_id=0,$content=''){
		$where=array('meta_id'=>$meta_id);
		$data=array('content'=>$content);
		$result=$this->db->update('meta_item',$data,$where);
		return $result;
	}
}

/* End of file meta_model.php */
/* Location: ./application/controllers/meta_model.php */