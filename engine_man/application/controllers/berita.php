<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Berita_model');
	}

	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Berita';

			$p=$this->Berita_model->get_page2(31);
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
			$data['d']=$this->Berita_model->get_berita();

			$this->load->view('berita_view',$data);
		}
	}

	function save_berita(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$keywords=$this->input->post('keywords');
		$description=$this->input->post('description');
		$thumbnail=$this->input->post('thumbnail');
		$content=$this->input->post('content');
		$act=$this->input->post('act');
		if($act=='edit'){
			$id_berita = $this->input->post('id_berita');
		}
		if($act=='add'){
			$res=$this->Berita_model->ins_berita($title,$keywords,$description,$thumbnail,$content,$user_id);
		}else{
			$res=$this->Berita_model->upd_berita($id_berita,$title,$keywords,$description,$thumbnail,$content,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}

	function del_fl_pb(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../data/berita/".$link_doc)){
			echo "1";
		}else{
			echo "0";
		}
	}

	function delete_berita(){
		$id=$this->input->post('id');

		$d=$this->Berita_model->get_path($id);
		if($d->num_rows()>0){
			$path=$d->row()->thumbnail;
		}
		$sql="delete from berita_item where berita_id='$id'";
		$res=$this->Berita_model->delete_berita($id);
		if($res){
			$path="../data/berita_thumbnail/".$path;
			if(file_exists($path)){
				unlink($path);
			}
			echo "1";
		}else{
			echo "0";
		}
	}

	function detail_berita($berita_id=0){
		$this->load->library('encryption');
		$d=$this->Berita_model->get_detail_berita($berita_id);
		if($d->num_rows()==1){
			foreach($d->result() as $berita){
				echo "<b>Title</b> : ".$berita->title."<br/>";
				echo "<b>Meta Keywords</b> : ".$berita->meta_keywords."<br/>";
				echo "<b>Meta Description</b> : ".$berita->meta_description."<br/>";
				echo "<b>Date Create</b> : ".$berita->date_create."<br/>";
				echo "<b>ID User</b> : ".$berita->id_user."<br/>";
				echo "<b>Content</b> : ".$berita->content."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$berita->thumbnail."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar berita</a></div>";
			}
		}else{
			echo "tidak ada data berita";
		}
	}

	function get_detail_berita(){
		$this->load->library('encryption');
		$berita_id=$this->input->post('berita_id');
		$d=$this->Berita_model->get_detail_berita($berita_id);
		if($d->num_rows()==1){
			foreach($d->result() as $berita){
				$ec=$berita->title."!-delimiter-!".$berita->meta_keywords."!-delimiter-!".$berita->meta_description."!-delimiter-!".$berita->thumbnail."!-delimiter-!".$berita->content;
				echo $ec;
			}
		}else{
			echo "tidak ada data berita";
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
		$this->Berita_model->update_counter($di_id);
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
		}else{
			header("Content-type: application/octet-stream");
			header('Content-Disposition: attachment; filename="'.$filename.'.pdf"');
			readfile(base_url('../data/'.$source));
		}
		$this->db->trans_complete();
	}

	function upload_berita(){
		$destination_path = '../data/berita_thumbnail/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/berita_thumbnail/'.$random_digit.'.'.$exts;
		$ext =array('jpeg','jpg','png','gif');
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
		echo $result.','.$link_doc;
	}
}

/* End of file berita.php */
/* Location: ./application/controllers/berita.php */