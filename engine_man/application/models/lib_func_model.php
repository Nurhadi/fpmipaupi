<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lib_func_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	function save_keyword($keyword='',$user_id=0,$page_id=0){
		$where=array('id_page'=>$page_id);
		date_default_timezone_set('Asia/Jakarta');
		$data=array('meta_keywords'=>$keyword,'date_create'=>date('Y-m-d H:i:s'),'id_user'=>$user_id);
		$result=$this->db->update('page',$data,$where);
		return $result;
	}
	
	function save_description($description='',$user_id=0,$page_id=0){
		$where=array('id_page'=>$page_id);
		date_default_timezone_set('Asia/Jakarta');
		$data=array('meta_description'=>$description,'date_create'=>date('Y-m-d H:i:s'),'id_user'=>$user_id);
		$result=$this->db->update('page',$data,$where);
		return $result;
	}
	
	function save_title($title='',$user_id=0,$page_id=0){
		$where=array('id_page'=>$page_id);
		date_default_timezone_set('Asia/Jakarta');
		$data=array('title'=>$title,'date_create'=>date('Y-m-d H:i:s'),'id_user'=>$user_id);
		$result=$this->db->update('page',$data,$where);
		return $result;
	}
	
	function save_text($text='',$user_id=0,$page_id=0){
		$where=array('id_page'=>$page_id);
		date_default_timezone_set('Asia/Jakarta');
		$data=array('content'=>$text,'date_create'=>date('Y-m-d H:i:s'),'id_user'=>$user_id);
		$result=$this->db->update('page',$data,$where);
		return $result;
	}		function save_address($address)	{			$data = array('address'=>$address);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_yahoo1($yahoo_1)	{			$data = array('yahoo_1'=>$yahoo_1);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_yahoo2($yahoo_2)	{			$data = array('yahoo_2'=>$yahoo_2);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_facebook($facebook)	{			$data = array('facebook'=>$facebook);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_twitter($twitter)	{			$data = array('twitter'=>$twitter);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_blackberry($blackberry)	{			$data = array('blackberry'=>$blackberry);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_gmail($gmail)	{			$data = array('gmail'=>$gmail);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_whatsapp($whatsapp)	{			$data = array('whatsapp'=>$whatsapp);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_handphone($handphone)	{			$data = array('handphone'=>$handphone);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}		function save_teks($teks)	{			$data = array('teks_berjalan'=>$teks);				$this->db->where('contact_id','1');				$result = $this->db->update('contact_item',$data);				return $result;		}
}

/* End of file lib_func_model.php */
/* Location: ./application/controllers/lib_func_model.php */