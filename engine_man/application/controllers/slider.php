<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Slider extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Slider_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}



	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Slider';

			$data['ptitle']='Slider Home';

			$sl=$this->Slider_model->get_slider();
			$data['sl']=$sl;

			$this->load->helper('string');

			$this->load->view('slider_view',$data);

		}

	}

	function upload_slider_home(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/slider/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/slider/'.$random_digit.'.'.$exts;
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

	function save_slider_home(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$link=$this->input->post('link');
		$date_create = date('Y-m-d H:i:s');

		$img_path=$this->input->post('img_path');
		if(empty($img_path)){
			$img_path="data/def_slider.png";
		}

		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_slider=$this->input->post('id_slider');
		}
		if($acti=='add'){
			$res=$this->Slider_model->ins_slider($title,$link,$img_path,$date_create,$user_id);
		}else{
			$res=$this->Slider_model->upd_slider($id_slider,$title,$link,$img_path,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}

	function get_data_slider(){
		$id_slider=$this->input->post('id_slider');
		$sl=$this->Slider_model->get_slider1($id_slider);
		if($sl->num_rows()==1){
			foreach($sl->result() as $slider){
				$dpath=$slider->img_path;
				if(! file_exists('../'.$slider->img_path)){
					$this->Slider_model->upd_slider1($id_slider,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}

				$ec=$slider->title."!-delimiter-!".$slider->link."!-delimiter-!".$dpath;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";
		}
	}

	function detail_slider_home($id_slider=0){
		$gl=$this->Slider_model->get_slider1($id_slider);
		if($gl->num_rows()==1){
			foreach($gl->result() as $slider){
				echo "<h1>".$slider->title."</h1>";
				echo "<b>ID Slider</b> : ".$id_slider."<br/>";
				echo "<b>Title</b> : ".strip_tags($slider->title)."<br/>";
				echo "<b>Link</b> : ".$slider->link."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><b>Image Slider</b><br><img src='../".$slider->img_path."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($slider->date_create))."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar slider</a></div><br>";
			}
		}else{
			echo "tidak ada data slider";
		}
	}

	function delete_slider_home(){
		$id_slider = $this->input->post('id');

		$res=$this->Slider_model->get_mypath($id_slider);
		if($res->num_rows()>0){
			$path=$res->row()->img_path;
		}

		$this->db->trans_start();
		$this->Slider_model->delete_slider($id_slider);
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
}



/* End of file slider.php */

/* Location: ./application/controllers/slider.php */