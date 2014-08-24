<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Report_model');
	}
	
	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Report Activity';
			
			$p=$this->Report_model->get_page2(28);
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
			$data['d']=$this->Report_model->get_report_activity();
			
			$data['p']=$this->Report_model->get_participant();
			
			$this->load->view('report_view',$data);
		}
	}
	
	function save_report(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$id_participant=$this->input->post('participant');
		$path=$this->input->post('path');
		$desc=$this->input->post('desc');
		$act=$this->input->post('act');
		if($act=='edit'){
			$report_id=$this->input->post('report_id');	
		}
		if($act=='add'){
			$res=$this->Report_model->ins_report($id_participant,$title,$desc,$path,$user_id);
		}else{
			$res=$this->Report_model->upd_report($report_id,$id_participant,$title,$desc,$path,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function del_fl(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../data/report_activity/".$link_doc)){
			echo "1";	
		}else{
			echo "0";	
		}
	}
	
	function delete_report(){
		$id=$this->input->post('id');
		$d=$this->Report_model->get_path($id);
		if($d->num_rows()>0){
			$path=$d->row()->path;	
		}
		$sql="delete from report_item where report_id='$id'";
		$res=$this->Report_model->delete_report($id);
		if($res){
			$path="../data/report_activity/".$path;
			if(file_exists($path)){
				unlink($path);
			}
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function detail_report($report_id=0){
		$this->load->library('encryption');
		$d=$this->Report_model->get_detail_report($report_id);
		if($d->num_rows()==1){
			foreach($d->result() as $report){
				$title=str_replace(' ','_',$report->title);
				echo "<b>Title</b> : ".$report->title."<br/>";
				echo "<b>Participant</b> : ".$report->nama."<br/>";
				//$param=$this->encryption->encode($report->path.'|'.$title.'|'.$report->report_id);
				//echo "<b>File</b> : <a href='".base_url('get_file/'.$param)."' target='_blank'>".$title.".pdf</a><br/>";
				echo "<b>File</b> : ".$title.".pdf<br/>";
				echo "<b>Description</b> :<br/>".$report->mydesc."<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar file report activity</a></div>";
			}
		}else{
			echo "tidak ada data report activity";	
		}
	}
	
	function get_detail_report(){
		$this->load->library('encryption');
		$report_id=$this->input->post('report_id');
		$d=$this->Report_model->get_detail_report($report_id);
		if($d->num_rows()==1){
			foreach($d->result() as $report){
				$dpath=$report->path;
				if(! file_exists('../data/report_activity/'.$dpath)){
					$this->Report_model->upd_down_path($di_id,'');
					$dpath='';
				}
				$title=str_replace(' ','_',$report->title);
				//$param=$this->encryption->encode($report->path.'|'.$title.'|'.$report->report_id);
				$param = '';
				$ec=$report->title."!-delimiter-!".$report->mydesc."!-delimiter-!".$dpath."!-delimiter-!".$title."!-delimiter-!".$param."!-delimiter-!".$report->id_participant;
				echo $ec;
			}
		}else{
			echo "tidak ada data report";	
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
		$this->Report_model->update_counter($di_id);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
		}else{
			header("Content-type: application/octet-stream");
			header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
			readfile(base_url('../data/'.$source));
		}
		$this->db->trans_complete();
	}
	
	function upload_report(){
		$destination_path = '../data/report_activity/';
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

/* End of file report.php */
/* Location: ./application/controllers/report.php */