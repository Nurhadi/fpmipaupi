<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Research extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Research_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Research Activity';
			
			$p=$this->Research_model->get_page2(30);
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
			$data['d']=$this->Research_model->get_research_project();
			
			$data['p']=$this->Research_model->get_participant();
			
			$this->load->view('research_view',$data);
		}
	}
	
	function save_research(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$id_participant=$this->input->post('participant');
		$path=$this->input->post('path');
		$desc=$this->input->post('desc');
		$act=$this->input->post('act');
		if($act=='edit'){
			$research_id=$this->input->post('research_id');	
		}
		if($act=='add'){
			$res=$this->Research_model->ins_research($id_participant,$title,$desc,$path,$user_id);
		}else{
			$res=$this->Research_model->upd_research($research_id,$id_participant,$title,$desc,$path,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function del_fl_rp(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../data/research_project/".$link_doc)){
			echo "1";	
		}else{
			echo "0";	
		}
	}
	
	function delete_research(){
		$id=$this->input->post('id');
		$d=$this->Research_model->get_path($id);
		if($d->num_rows()>0){
			$path=$d->row()->path;	
		}
		$sql="delete from research_item where research_id='$id'";
		$res=$this->Research_model->delete_research($id);
		if($res){
			$path="../data/research_project/".$path;
			if(file_exists($path)){
				unlink($path);
			}
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function detail_research($research_id=0){
		$this->load->library('encryption');
		$d=$this->Research_model->get_detail_research($research_id);
		if($d->num_rows()==1){
			foreach($d->result() as $research){
				$title=str_replace(' ','_',$research->title);
				echo "<b>Title</b> : ".$research->title."<br/>";
				echo "<b>Participant</b> : ".$research->nama."<br/>";
				//$param=$this->encryption->encode($research->path.'|'.$title.'|'.$research->research_id);
				//echo "<b>File</b> : <a href='".base_url('get_file/'.$param)."' target='_blank'>".$title.".pdf</a><br/>";
				echo "<b>File</b> : ".$title.".pdf<br/>";
				echo "<b>Description</b> :<br/>".$research->mydesc."<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar file research project</a></div>";
			}
		}else{
			echo "tidak ada data research project";	
		}
	}
	
	function get_detail_research(){
		$this->load->library('encryption');
		$research_id=$this->input->post('research_id');
		$d=$this->Research_model->get_detail_research($research_id);
		if($d->num_rows()==1){
			foreach($d->result() as $research){
				$dpath=$research->path;
				if(! file_exists('../data/research_project/'.$dpath)){
					$this->Research_model->upd_down_path($di_id,'');
					$dpath='';
				}
				$title=str_replace(' ','_',$research->title);
				//$param=$this->encryption->encode($research->path.'|'.$title.'|'.$research->research_id);
				$param = '';
				$ec=$research->title."!-delimiter-!".$research->mydesc."!-delimiter-!".$dpath."!-delimiter-!".$title."!-delimiter-!".$param."!-delimiter-!".$research->id_participant;
				echo $ec;
			}
		}else{
			echo "tidak ada data research";	
		}
	}
	
	function get_file($param=''){
		$this->load->library('encryption');
		$param=$this->encryption->decode($param);
		$p=explode('|',$param);
		$source=$p[0];
		$filename=$p[1];
		$di_id=$p[2];
		$this->db->trans_start();
		$this->Research_model->update_counter($di_id);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
		}else{
			header("Content-type: application/octet-stream");
			header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
			readfile(base_url('../data/'.$source));
		}
		$this->db->trans_complete();
	}
	
	function upload_research(){
		$destination_path = '../data/research_project/';
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

/* End of file research.php */
/* Location: ./application/controllers/research.php */