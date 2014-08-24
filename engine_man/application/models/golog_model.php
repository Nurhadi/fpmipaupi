<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Golog_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	function log_pro($username='',$password=''){
		$where=array('username'=>$username,'userpass'=>MD5($password));
		$this->db->select('user_id,username');
		$this->db->limit(1);
		$result=$this->db->get_where('user',$where);
		return $result;
	}
	
	function check_em($email=''){
		$where=array('email'=>$email);
		$this->db->select('username');
		$result=$this->db->get_where('user',$where);
		return $result;
	}
	
	function upd_pass($email='',$password=''){
		$where=array('email'=>$email);
		$data=array('userpass'=>MD5($password));
		$result=$this->db->update('user',$data,$where);
		return $result;
	}

}

/* End of file golog_model.php */
/* Location: ./application/controllers/golog_model.php */
