<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Transport_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){
		$where=array('page_id'=>$page_id);
		$this->db->select('title,description,keyword,text');
		$result=$this->db->get_where('page',$where);
		return $result;

	}

	function get_transport()
	{
		$this->db->select('id_transport,title,harga,satuan,img_thumbnail,description,date_create,status');
		$this->db->where('status','active');
		$this->db->order_by('id_transport','desc');
		$result = $this->db->get('transport');
		return $result;
	}
	
	function get_transport1($id_transport)
	{
		$this->db->select('id_transport,title,harga,satuan,img_thumbnail,description,date_create,status');
		$this->db->where('status','active');
		$this->db->where('id_transport',$id_transport);
		$this->db->order_by('id_transport','desc');
		$result = $this->db->get('transport');
		return $result;
	}

	function upd_transport1($id_transport=0,$img_thumbnail=''){
		$data=array('img_thumbnail'=>$img_thumbnail);
		$where=array('id_transport'=>$id_transport);
		$result=$this->db->update('transport',$data,$where);
		return $result;
	}
	
	function ins_transport($title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'harga'=>$harga,
			'satuan'=>$per,
			'description'=>$deskripsi,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		
		$result = $this->db->insert('transport',$data);
		return $result;
	}
	
	function upd_transport($id_transport,$title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'harga'=>$harga,
			'satuan'=>$per,
			'description'=>$deskripsi,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		$this->db->where('id_transport',$id_transport);
		$result = $this->db->update('transport',$data);
		return $result;
	}
	
	function get_mypath($id_transport=0){
		$where=array('id_transport'=>$id_transport);
		$this->db->select('img_thumbnail');
		$result=$this->db->get_where('transport',$where);
		return $result;
	}
	
	function delete_transport($id_transport=0){
		$where=array('id_transport'=>$id_transport);
		$result=$this->db->delete('transport',$where);
		return $result;
	}
}



/* End of file transport_model.php */

/* Location: ./application/models/transport_model.php */