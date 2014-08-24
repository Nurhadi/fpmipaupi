<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seminar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Seminar_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title'] = 'Seminar';
			$p=$this->Seminar_model->get_page2(33);
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

			$jt = '';
			$jt=$this->Seminar_model->get_seminar();
			$data['jt']=$jt;

			$this->load->helper('string');

			$this->load->view('seminar_view',$data);
		}
	}

	function detail_seminar($id_seminar=0){
		$jt=$this->Seminar_model->get_detail_seminar($id_seminar);
		if($jt->num_rows()==1){
			foreach($jt->result() as $seminar){
				echo "<h1>".$seminar->title."</h1>";
				echo "<b>Meta Keywords</b> : ".$seminar->meta_keywords."<br/>";
				echo "<b>Meta Description</b> : ".$seminar->meta_description."<br/>";
				echo "<b>Content</b> : ".$seminar->content."<br/>";
				echo "<b>Tanggal Pelaksanaan</b> : ".date('d-M-Y', strtotime($seminar->date))."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($seminar->date_create))."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$seminar->thumbnail."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar seminar</a></div><br>";
			}
		}else{
			echo "tidak ada data seminar";
		}
	}

	function delete_seminar(){
		$id_seminar = $this->input->post('id');
		$res2=$this->Seminar_model->get_mypath($id_seminar);
		if($res2->num_rows()>0){
			$path=$res2->row()->thumbnail;
		}
		$this->db->trans_start();
		$this->Seminar_model->delete_seminar($id_seminar);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE){
			if($path!='data/def_slider.png'){
				$path="../".$path;
				if(file_exists($path)){
					unlink($path);
				}
			}
			echo "1";
		}else{
			echo "0";
		}
	}

	function upload_seminar(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/seminar_thumbnail/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/seminar_thumbnail/'.$random_digit.'.'.$exts;
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

	function save_seminar(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$meta_keywords=$this->input->post('meta_keywords');
		$meta_description=$this->input->post('meta_description');
		$content=$this->input->post('content');
		$date=$this->input->post('date');
		$date_create = date('Y-m-d H:i:s');

		$thumbnail=$this->input->post('thumbnail');
		if(empty($thumbnail)){
			$thumbnail="data/def_slider.png";
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_seminar=$this->input->post('id_seminar');
		}
		if($acti=='add'){
			$res=$this->Seminar_model->ins_seminar($title,$meta_keywords,$meta_description,$thumbnail,$content,$date,$date_create,$user_id);
		}else{
			$res=$this->Seminar_model->upd_seminar($id_seminar,$title,$meta_keywords,$meta_description,$thumbnail,$content,$date,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}

	function get_data_seminar(){
		$id_seminar=$this->input->post('id_seminar');
		$jd=$this->Seminar_model->get_detail_seminar($id_seminar);
		if($jd->num_rows()==1){
			foreach($jd->result() as $seminar){
				$dpath=$seminar->thumbnail;
				if(! file_exists('../'.$seminar->thumbnail)){
					$this->Seminar_model->upd_seminar1($id_seminar,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}
				$ec=$seminar->title."!-delimiter-!".$seminar->meta_keywords."!-delimiter-!".$seminar->meta_description."!-delimiter-!".$seminar->thumbnail."!-delimiter-!".$seminar->content."!-delimiter-!".$seminar->date;
				echo $ec;
			}
		}else{
			echo "tidak ada data seminar";
		}
	}

}



/* End of file seminar.php */

/* Location: ./application/controllers/seminar.php */