<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class News_model extends CI_Model {



    public function __construct(){

        parent::__construct();

    }

	

	function get_page2($page_id=0){
		$where=array('page_id'=>$page_id);
		$this->db->select('title,description,keyword,text');
		$result=$this->db->get_where('page',$where);
		return $result;

	}

	function get_news()
	{
		$this->db->select('id_news,title,meta_keyword,meta_description,content,img_thumbnail,tags,date_create,status');
		$this->db->where('status','active');
		$this->db->order_by('id_news','desc');
		$result = $this->db->get('news');
		return $result;
	}
	
	function get_news1($id_news)
	{
		$this->db->select('id_news,title,meta_keyword,meta_description,content,img_thumbnail,tags,date_create,status');
		$this->db->where('status','active');
		$this->db->where('id_news',$id_news);
		$this->db->order_by('id_news','desc');
		$result = $this->db->get('news');
		return $result;
	}

	function upd_news1($id_news=0,$img_thumbnail=''){
		$data=array('img_thumbnail'=>$img_thumbnail);
		$where=array('id_news'=>$id_news);
		$result=$this->db->update('news',$data,$where);
		return $result;
	}
	
	function ins_news($title,$keyword,$description,$content,$tags,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'meta_keyword'=>$keyword,
			'meta_description'=>$description,
			'content'=>$content,
			'tags'=>$tags,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		
		$result = $this->db->insert('news',$data);
		return $result;
	}
	
	function upd_news($id_news,$title,$keyword,$description,$content,$tags,$img_thumbnail,$date_create,$user_id)
	{
		$data = array(
			'title'=>$title,
			'meta_keyword'=>$keyword,
			'meta_description'=>$description,
			'content'=>$content,
			'tags'=>$tags,
			'img_thumbnail'=>$img_thumbnail,
			'date_create'=>$date_create,
			'user_id'=>$user_id
		);
		$this->db->where('id_news',$id_news);
		$result = $this->db->update('news',$data);
		return $result;
	}
	
	function get_mypath($id_news=0){
		$where=array('id_news'=>$id_news);
		$this->db->select('img_thumbnail');
		$result=$this->db->get_where('news',$where);
		return $result;
	}
	
	function delete_news($id_news=0){
		$where=array('id_news'=>$id_news);
		$result=$this->db->delete('news',$where);
		return $result;
	}
}



/* End of file news_model.php */

/* Location: ./application/models/news_model.php */