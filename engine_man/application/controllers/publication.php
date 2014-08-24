<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publication extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Publication_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Publication Activity';
			
			$p=$this->Publication_model->get_page2(29);
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
			$data['d']=$this->Publication_model->get_publication();
			
			$data['p']=$this->Publication_model->get_participant();
			
			$this->load->view('publication_view',$data);
		}
	}
	
	function save_publication(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$id_participant=$this->input->post('participant');
		$path=$this->input->post('path');
		$desc=$this->input->post('desc');
		$act=$this->input->post('act');
		if($act=='edit'){
			$publication_id=$this->input->post('publication_id');	
		}
		if($act=='add'){
			$res=$this->Publication_model->ins_publication($id_participant,$title,$desc,$path,$user_id);
		}else{
			$res=$this->Publication_model->upd_publication($publication_id,$id_participant,$title,$desc,$path,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function del_fl_pb(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../data/publication/".$link_doc)){
			echo "1";	
		}else{
			echo "0";	
		}
	}
	
	function delete_publication(){
		$id=$this->input->post('id');
		$d=$this->Publication_model->get_path($id);
		if($d->num_rows()>0){
			$path=$d->row()->path;	
		}
		$sql="delete from publication_item where publication_id='$id'";
		$res=$this->Publication_model->delete_publication($id);
		if($res){
			$path="../data/publication/".$path;
			if(file_exists($path)){
				unlink($path);
			}
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function detail_publication($publication_id=0){
		$this->load->library('encryption');
		$d=$this->Publication_model->get_detail_publication($publication_id);
		if($d->num_rows()==1){
			foreach($d->result() as $publication){
				$title=str_replace(' ','_',$publication->title);
				echo "<b>Title</b> : ".$publication->title."<br/>";
				echo "<b>Participant</b> : ".$publication->nama."<br/>";
				//$param=$this->encryption->encode($publication->path.'|'.$title.'|'.$publication->publication_id);
				//echo "<b>File</b> : <a href='".base_url('get_file_pb/'.$param)."' target='_blank'>".$title.".pdf</a><br/>";
				echo "<b>File</b> : ".$title.".pdf<br/>";
				echo "<b>Description</b> :<br/>".$publication->mydesc."<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar file publication</a></div>";
			}
		}else{
			echo "tidak ada data publication";	
		}
	}
	
	function get_detail_publication(){
		$this->load->library('encryption');
		$publication_id=$this->input->post('publication_id');
		$d=$this->Publication_model->get_detail_publication($publication_id);
		if($d->num_rows()==1){
			foreach($d->result() as $publication){
				$dpath=$publication->path;
				if(! file_exists('../data/publication/'.$dpath)){
					$this->Publication_model->upd_down_path($di_id,'');
					$dpath='';
				}
				$title=str_replace(' ','_',$publication->title);
				//$param=$this->encryption->encode($publication->path.'|'.$title.'|'.$publication->publication_id);
				$param = '';
				$ec=$publication->title."!-delimiter-!".$publication->mydesc."!-delimiter-!".$dpath."!-delimiter-!".$title."!-delimiter-!".$param."!-delimiter-!".$publication->id_participant;
				echo $ec;
			}
		}else{
			echo "tidak ada data publication";	
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
		$this->Publication_model->update_counter($di_id);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
		}else{
			header("Content-type: application/octet-stream");
			header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
			readfile(base_url('../data/'.$source));
		}
		$this->db->trans_complete();
	}
	
	function upload_publication(){
		$destination_path = '../data/publication/';
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

/* End of file publication.php */
/* Location: ./application/controllers/publication.php */