<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Bulan_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){

		$where=array('page_id'=>$page_id);

		$this->db->select('title,description,keyword,text');

		$result=$this->db->get_where('page',$where);

		return $result;

	}

	function get_bulan()
	{
		$this->db->select('id_bulan,bulan,tahun');
		$this->db->where('status','active');
		$result = $this->db->get('bulan');
		return $result;
	}
	
	function get_bulan2($id_bulan)
	{
		$this->db->select('id_bulan,bulan,tahun,user_id,status');
		$this->db->where('id_bulan',$id_bulan);
		$result = $this->db->get('bulan');
		return $result;
	}
	
	function ins_bulan($bulan,$tahun,$id_user)
	{
		$data = array('bulan'=>$bulan,'tahun'=>$tahun,'user_id'=>$id_user);
		
		$result = $this->db->insert('bulan',$data);
		return $result;
	}
	
	function upd_bulan($id_bulan,$bulan,$tahun,$id_user)
	{
		$data = array('bulan'=>$bulan,'tahun'=>$tahun,'user_id'=>$id_user);
		$this->db->where('id_bulan',$id_bulan);
		$result = $this->db->update('bulan',$data);
		return $result;
	}
	
	function delete_bulan($id_bulan)
	{
		$this->db->where('id_bulan',$id_bulan);
		$result = $this->db->delete('bulan');
		return $result;
	}
}



/* End of file bulan_model.php */

/* Location: ./application/controllers/bulan_model.php */