<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda_model extends CI_Model {

    public function __construct(){
        parent::__construct();
    }	function get_page2($page_id=0){		$where=array('page_id'=>$page_id);		$this->db->select('title,description,keyword,text');		$result=$this->db->get_where('page',$where);		return $result;	}	function get_contact_item()	{		$this->db->select('yahoo_1,yahoo_2,gmail,facebook,twitter,blackberry,handphone,whatsapp,address,teks_berjalan');		$result = $this->db->get('contact_item');		return $result;	}	
	function get_image($id=0){
		$where=array('beranda_id'=>$id);
		$this->db->select('title,desc,text_content,text_content2,path');
		$result=$this->db->get_where('beranda_item',$where);
		return $result;
	}
	
	function get_slider(){
		$this->db->select('slider_id,mytitle');
		$result=$this->db->get('slider_item');
		return $result;
	}
	
	function get_slider2($slider_id=0){
		$where=array('slider_id'=>$slider_id);
		$this->db->select('mytitle,mykeyword,mypath,mydesc,mylink');
		$result=$this->db->get_where('slider_item',$where);
		return $result;
	}
	
	function get_page(){
		$where=array('page_id !='=>'2');
		$this->db->select('title');
		$result=$this->db->get_where('page',$where);
		return $result;
	}
	
	function ins_slider($mytitle='',$mylink='',$mykeyword='',$mydesc='',$mypath='',$user_id=0){
		$data=array('mytitle'=>$mytitle,'mylink'=>$mylink,'mykeyword'=>$mykeyword,'mydesc'=>$mydesc,'mypath'=>$mypath,'user_id'=>$user_id);
		$result=$this->db->insert('slider_item',$data);
		return $result;
	}
	
	function upd_slider($mytitle='',$mylink='',$mykeyword='',$mydesc='',$mypath='',$user_id=0,$slider_id=0){
		$data=array('mytitle'=>$mytitle,'mylink'=>$mylink,'mykeyword'=>$mykeyword,'mydesc'=>$mydesc,'mypath'=>$mypath,'user_id'=>$user_id);
		$where=array('slider_id'=>$slider_id);
		$result=$this->db->update('slider_item',$data,$where);
		return $result;
	}
	
	function upd_slider2($slider_id=0,$mypath=''){
		$data=array('mypath'=>$mypath);
		$where=array('slider_id'=>$slider_id);
		$result=$this->db->update('slider_item',$data,$where);
		return $result;
	}

	function upd_data2($title='',$description='',$user_id=0,$beranda_id=0){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('title'=>$title,'desc'=>$description,'tanggal'=>date('Y-m-d H:i:s'),'user_id'=>$user_id);
		$where=array('beranda_id'=>$beranda_id);
		$result=$this->db->update('beranda_item',$data,$where);
		return $result;
	}
	
	function upd_data($title='',$description='',$link_doc='',$user_id=0,$beranda_id=0){
		date_default_timezone_set('Asia/Jakarta');
		$data=array('title'=>$title,'desc'=>$description,'path'=>$link_doc,'tanggal'=>date('Y-m-d H:i:s'),'user_id'=>$user_id);
		$where=array('beranda_id'=>$beranda_id);
		$result=$this->db->update('beranda_item',$data,$where);
		return $result;
	}
	
	function get_mypath($slider_id=0){
		$where=array('slider_id'=>$slider_id);
		$this->db->select('mypath');
		$result=$this->db->get_where('slider_item',$where);
		return $result;
	}
	
	function delete_slider($slider_id=0){
		$where=array('slider_id'=>$slider_id);
		$result=$this->db->delete('slider_item',$where);
		return $result;
	}	function delete_img_um($link_doc)	{		$this->db->where('image_filename',$link_doc);				$result = $this->db->delete('user_manual');		return $result;	}		function save_content($content='',$beranda_id=0){		$where=array('beranda_id'=>$beranda_id);		$data=array('text_content'=>$content);		$result=$this->db->update('beranda_item',$data,$where);		return $result;	}		function save_content2($content='',$beranda_id=0){		$where=array('beranda_id'=>$beranda_id);		$data=array('text_content2'=>$content);		$result=$this->db->update('beranda_item',$data,$where);		return $result;	}		function get_image_filename($id_page)	{		$this->db->select('image_filename');		$this->db->where('id_page',$id_page);		$result = $this->db->get('image_page');		$row = $result->row();		return $row->image_filename;	}		function save_image_path($id_page,$link_doc)	{		$data = array('image_filename'=>$link_doc);		$this->db->where('id_page',$id_page);		$result = $this->db->update('image_page',$data);		return $result;	}	
}

/* End of file beranda_model.php */
/* Location: ./application/controllers/beranda_model.php */