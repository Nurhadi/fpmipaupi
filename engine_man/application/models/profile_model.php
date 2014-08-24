<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	function get_email($user_id=0){
		$where=array('user_id'=>$user_id);
		$this->db->select('email');
		$result=$this->db->get_where('user',$where);
		return $result;
	}
	
	function get_user($user_id='',$old_password=''){
		$where=array('user_id'=>$user_id,'userpass'=>MD5($old_password));
		$this->db->select('user_id');
		$result=$this->db->get_where('user',$where);
		return $result;
	}
	
	function update_wop($email='',$user_id=0){
		$where=array('user_id'=>$user_id);
		$data=array('email'=>$email);
		$result=$this->db->update('user',$data,$where);
		return $result;
	}
	
	function update_wp($new_password='',$email='',$user_id=0){
		$where=array('user_id'=>$user_id);
		$data=array('email'=>$email,'userpass'=>MD5($new_password));
		$result=$this->db->update('user',$data,$where);
		return $result;
	}
}

/* End of file profile_model.php */
/* Location: ./application/controllers/profile_model.php */