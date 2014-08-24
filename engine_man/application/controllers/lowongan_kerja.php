<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lowongan_kerja extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Lowongan_kerja_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	function index(){
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title'] = 'Lowongan Kerja';
			$p=$this->Lowongan_kerja_model->get_page2(34);
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
			$jt=$this->Lowongan_kerja_model->get_lowongan_kerja();
			$data['jt']=$jt;

			$this->load->helper('string');

			$this->load->view('lowongan_kerja_view',$data);
		}
	}

	function detail_lowongan_kerja($id_lowongan_kerja=0){
		$jt=$this->Lowongan_kerja_model->get_detail_lowongan_kerja($id_lowongan_kerja);
		if($jt->num_rows()==1){
			foreach($jt->result() as $lowongan_kerja){
				echo "<h1>".$lowongan_kerja->title."</h1>";
				echo "<b>Meta Keywords</b> : ".$lowongan_kerja->meta_keywords."<br/>";
				echo "<b>Meta Description</b> : ".$lowongan_kerja->meta_description."<br/>";
				echo "<b>Content</b> : ".$lowongan_kerja->content."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($lowongan_kerja->date_create))."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$lowongan_kerja->thumbnail."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar lowongan kerja</a></div><br>";
			}
		}else{
			echo "tidak ada data lowongan_kerja";
		}
	}

	function delete_lowongan_kerja(){
		$id_lowongan_kerja = $this->input->post('id');
		$res2=$this->Lowongan_kerja_model->get_mypath($id_lowongan_kerja);
		if($res2->num_rows()>0){
			$path=$res2->row()->thumbnail;
		}
		$this->db->trans_start();
		$this->Lowongan_kerja_model->delete_lowongan_kerja($id_lowongan_kerja);
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

	function upload_lowongan_kerja(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/lowongan_kerja_thumbnail/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/lowongan_kerja_thumbnail/'.$random_digit.'.'.$exts;
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

	function save_lowongan_kerja(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$meta_keywords=$this->input->post('meta_keywords');
		$meta_description=$this->input->post('meta_description');
		$content=$this->input->post('content');
		$date_create = date('Y-m-d H:i:s');

		$thumbnail=$this->input->post('thumbnail');
		if(empty($thumbnail)){
			$thumbnail="data/def_slider.png";
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_lowongan_kerja=$this->input->post('id_lowongan_kerja');
		}
		if($acti=='add'){
			$res=$this->Lowongan_kerja_model->ins_lowongan_kerja($title,$meta_keywords,$meta_description,$thumbnail,$content,$date_create,$user_id);
		}else{
			$res=$this->Lowongan_kerja_model->upd_lowongan_kerja($id_lowongan_kerja,$title,$meta_keywords,$meta_description,$thumbnail,$content,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}

	function get_data_lowongan_kerja(){
		$id_lowongan_kerja=$this->input->post('id_lowongan_kerja');
		$jd=$this->Lowongan_kerja_model->get_detail_lowongan_kerja($id_lowongan_kerja);
		if($jd->num_rows()==1){
			foreach($jd->result() as $lowongan_kerja){
				$dpath=$lowongan_kerja->thumbnail;
				if(! file_exists('../'.$lowongan_kerja->thumbnail)){
					$this->Lowongan_kerja_model->upd_lowongan_kerja1($id_lowongan_kerja,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}
				$ec=$lowongan_kerja->title."!-delimiter-!".$lowongan_kerja->meta_keywords."!-delimiter-!".$lowongan_kerja->meta_description."!-delimiter-!".$lowongan_kerja->thumbnail."!-delimiter-!".$lowongan_kerja->content;
				echo $ec;
			}
		}else{
			echo "tidak ada data lowongan kerja";
		}
	}

}



/* End of file lowongan_kerja.php */

/* Location: ./application/controllers/lowongan_kerja.php */