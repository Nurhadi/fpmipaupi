<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Store_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){
		$where=array('page_id'=>$page_id);
		$this->db->select('title,description,keyword,text');
		$result=$this->db->get_where('page',$where);
		return $result;

	}

	function get_store()
	{
		$this->db->select('id_store,title,harga,satuan,img_thumbnail,description,date_create,status');
		$this->db->where('status','active');
		$this->db->order_by('id_store','desc');
		$result = $this->db->get('store');
		return $result;
	}
	
	function get_store1($id_store)
	{
		$this->db->select('id_store,title,harga,satuan,img_thumbnail,description,date_create,status');
		$this->db->where('status','active');
		$this->db->where('id_store',$id_store);
		$this->db->order_by('id_store','desc');
		$result = $this->db->get('store');
		return $result;
	}

	function upd_store1($id_store=0,$img_thumbnail=''){
		$data=array('img_thumbnail'=>$img_thumbnail);
		$where=array('id_store'=>$id_store);
		$result=$this->db->update('store',$data,$where);
		return $result;
	}
	
	function ins_store($title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id)
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
		
		$result = $this->db->insert('store',$data);
		return $result;
	}
	
	function upd_store($id_store,$title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id)
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
		$this->db->where('id_store',$id_store);
		$result = $this->db->update('store',$data);
		return $result;
	}
	
	function get_mypath($id_store=0){
		$where=array('id_store'=>$id_store);
		$this->db->select('img_thumbnail');
		$result=$this->db->get_where('store',$where);
		return $result;
	}
	
	function delete_store($id_store=0){
		$where=array('id_store'=>$id_store);
		$result=$this->db->delete('store',$where);
		return $result;
	}
}



/* End of file store_model.php */

/* Location: ./application/models/store_model.php */