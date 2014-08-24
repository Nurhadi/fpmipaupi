<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proceeding_detail extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Proceeding_detail_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Proceeding Detail';
			
			$p=$this->Proceeding_detail_model->get_page2(20);
			if($p->num_rows()>0){
				$data['ptitle']=$p->row()->title;
				$data['keyword']=$p->row()->meta_keywords;
				$data['description']=$p->row()->meta_description;
				$data['text']=$p->row()->content;
			}else{
				$data['ptitle']='';
				$data['keyword']='';
				$data['description']='';
				$data['text']='';
			}
			
			$this->load->library('encryption');
			$data['d']=$this->Proceeding_detail_model->get_proceeding_detail();
			
			$this->load->view('proceeding_detail_view',$data);
		}
	}
	
	function save_proceeding_detail(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$path=$this->input->post('path');
		$desc=$this->input->post('desc');
		$act=$this->input->post('act');
		if($act=='edit'){
			$proceeding_detail_id=$this->input->post('proceeding_detail_id');	
		}
		if($act=='add'){
			$res=$this->Proceeding_detail_model->ins_proceeding_detail($title,$desc,$path,$user_id);
		}else{
			$res=$this->Proceeding_detail_model->upd_proceeding_detail($proceeding_detail_id,$title,$desc,$path,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function del_fl_pb(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../data/proceeding_detail/".$link_doc)){
			echo "1";	
		}else{
			echo "0";	
		}
	}
	
	function delete_proceeding_detail(){
		$id=$this->input->post('id');
		$d=$this->Proceeding_detail_model->get_path($id);
		if($d->num_rows()>0){
			$path=$d->row()->path;	
		}
		$sql="delete from proceeding_detail_item where proceeding_detail_id='$id'";
		$res=$this->Proceeding_detail_model->delete_proceeding_detail($id);
		if($res){
			$path="../data/proceeding_detail/".$path;
			if(file_exists($path)){
				unlink($path);
			}
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function detail_proceeding_detail($proceeding_detail_id=0){
		$this->load->library('encryption');
		$d=$this->Proceeding_detail_model->get_detail_proceeding_detail($proceeding_detail_id);
		if($d->num_rows()==1){
			foreach($d->result() as $proceeding_detail){
				$title=str_replace(' ','_',$proceeding_detail->title);
				echo "<b>Title</b> : ".$proceeding_detail->title."<br/>";
				//$param=$this->encryption->encode($proceeding_detail->path.'|'.$title.'|'.$proceeding_detail->proceeding_detail_id);
				//echo "<b>File</b> : <a href='".base_url('get_file_pb/'.$param)."' target='_blank'>".$title.".pdf</a><br/>";
				echo "<b>File</b> : ".$title.".pdf<br/>";
				echo "<b>Description</b> :<br/>".$proceeding_detail->mydesc."<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar file proceeding detail</a></div>";
			}
		}else{
			echo "tidak ada data proceeding detail";	
		}
	}
	
	function get_detail_proceeding_detail(){
		$this->load->library('encryption');
		$proceeding_detail_id=$this->input->post('proceeding_detail_id');
		$d=$this->Proceeding_detail_model->get_detail_proceeding_detail($proceeding_detail_id);
		if($d->num_rows()==1){
			foreach($d->result() as $proceeding_detail){
				$dpath=$proceeding_detail->path;
				if(! file_exists('../data/proceeding_detail/'.$dpath)){
					$this->Proceeding_detail_model->upd_down_path($di_id,'');
					$dpath='';
				}
				$title=str_replace(' ','_',$proceeding_detail->title);
				//$param=$this->encryption->encode($proceeding_detail->path.'|'.$title.'|'.$proceeding_detail->proceeding_detail_id);
				$param = '';
				$ec=$proceeding_detail->title."!-delimiter-!".$proceeding_detail->mydesc."!-delimiter-!".$dpath."!-delimiter-!".$title."!-delimiter-!".$param;
				echo $ec;
			}
		}else{
			echo "tidak ada data proceeding_detail";	
		}
	}
	
	function get_file_pb($param=''){
		$this->load->library('encryption');
		$param=$this->encryption->decode($param);
		$p=explode('|',$param);
		$source=$p[0];
		$filename=$p[1];
		$di_id=$p[2];
		$this->db->trans_start();
		$this->Proceeding_detail_model->update_counter($di_id);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
		}else{
			header("Content-type: application/octet-stream");
			header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
			readfile(base_url('../data/'.$source));
		}
		$this->db->trans_complete();
	}
	
	function upload_proceeding_detail(){
		$destination_path = '../data/proceeding_detail/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc=$random_digit.'.'.$exts;
		$ext =array('pdf');
		if(empty($file_name))
		{ 
			$result=3;
		}        
		else
		{
			if(!in_array(($exts),$ext))
			{			  
				$result=2;	
			}			
			else 
			{
				if(move_uploaded_file($dir_s, $target_path))
				{
					$result=1;
				}			
				else
					$result=0;
			}
		}
		echo $result.','.$file_name.','.$link_doc;
	}
}

/* End of file proceeding_detail.php */
/* Location: ./application/controllers/proceeding_detail.php */