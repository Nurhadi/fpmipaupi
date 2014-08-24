<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }
	
	function ins_ol_count(){
		$this->db->query('insert into ol_count (ip,stringip,country,countrycode,city,dt) select ip,stringip,country,countrycode,city,dt from ol_vis where dt<SUBTIME(NOW(),"0 0:10:0")');
	}	
	
	function del_ol_vis(){
		$this->db->query('DELETE FROM ol_vis WHERE dt<SUBTIME(NOW(),"0 0:10:0")');
	}
	
	function get_ol_vis(){
		$this->db->select('stringip,countryCode,country, COUNT(*) AS total');
		$this->db->group_by('countryCode');
		$this->db->order_by('total','desc');
		$this->db->limit(10);
		$result=$this->db->get('ol_vis');
		return $result;
	}
	
	function get_ol_count($limit=0){
		$this->db->select('country,countrycode,stringip');
		$this->db->limit($limit);
		$this->db->order_by('id','desc');
		$result=$this->db->get('ol_count');
		return $result;
	}
	
	function get_ol_count2(){
		$this->db->select('id');
		$result=$this->db->get('ol_count');
		return $result;
	}
	
	function get_unread(){
		$where=array('status'=>'unread');
		$this->db->select('inbox_id,nama,email,tanggal');
		$this->db->order_by('inbox_id','desc');
		$result=$this->db->get_where('inbox',$where);
		return $result;
	}
	
	function get_unread_comment(){
		$where=array('status'=>'unread');
		$this->db->select('comment_id,comment.nama,comment.email,comment.tanggal,artikel.title,artikel.artikel_id');
		$this->db->from('comment');
		$this->db->join('artikel','artikel.artikel_id=comment.artikel_id');
		$this->db->where($where);
		$this->db->order_by('comment_id','desc');
		$result=$this->db->get();
		return $result;
	}
}

/* End of file main_model.php */
/* Location: ./application/controllers/main_model.php */