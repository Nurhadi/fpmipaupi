<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Laboran_teknisi extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Laboran_teknisi_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Laboran / Teknisi';
		
			$p=$this->Laboran_teknisi_model->get_page2(13);

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
			$jt=$this->Laboran_teknisi_model->get_laboran_teknisi();
			$data['jt']=$jt;
			
			$jr=$this->Laboran_teknisi_model->get_laboratorium();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('laboran_teknisi_view',$data);

		}

	}

	function detail_laboran_teknisi($id_laboran_teknisi=0){
		$jt=$this->Laboran_teknisi_model->get_laboran_teknisi1($id_laboran_teknisi);
		if($jt->num_rows()==1){
			foreach($jt->result() as $laboran_teknisi){
				if($laboran_teknisi->id_laboratorium != '0000000'){
					$laboratorium = $this->Laboran_teknisi_model->get_nama_laboratorium($laboran_teknisi->id_laboratorium);
				}
				else
				{
					$laboratorium = '-';
				}
				echo "<h1>".$laboran_teknisi->nama."</h1>";
				echo "<b>NIP</b> : ".$laboran_teknisi->nip."<br/>";
				echo "<b>Alamat</b> : ".$laboran_teknisi->alamat."<br/>";
				echo "<b>Telepon</b> : ".$laboran_teknisi->telepon."<br/>";
				echo "<b>Golongan</b> : ".$laboran_teknisi->golongan."<br/>";
				echo "<b>Laboratorium</b> : ".$laboratorium."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($laboran_teknisi->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($laboran_teknisi->status)."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$laboran_teknisi->image_path."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar laboran teknisi</a></div><br>";
			}
		}else{
			echo "tidak ada data laboran teksini";	
		}
	}
	
	function delete_laboran_teknisi(){		
		$id_laboran_teknisi = $this->input->post('id');
		$res2=$this->Laboran_teknisi_model->get_mypath($id_laboran_teknisi);
		if($res2->num_rows()>0){
			$path=$res2->row()->image_path;	
		}
		$this->db->trans_start();
		$this->Laboran_teknisi_model->delete_laboran_teknisi($id_laboran_teknisi);
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
	
	function upload_laboran_teknisi(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/laboran_teknisi/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/laboran_teknisi/'.$random_digit.'.'.$exts;
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
	
	function save_laboran_teknisi(){
		$user_id=$this->session->userdata('user_id');
		$nip=$this->input->post('nip');
		$nama=$this->input->post('name');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$golongan=$this->input->post('golongan');
		$id_laboratorium=$this->input->post('lab');
		$date_create = date('Y-m-d H:i:s');
		
		$image_path=$this->input->post('image_path');
		if(empty($image_path)){
			$image_path="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_laboran_teknisi=$this->input->post('id_laboran_teknisi');
		}
		if($acti=='add'){
			$res=$this->Laboran_teknisi_model->ins_laboran_teknisi($nip,$nama,$alamat,$telepon,$golongan,$id_laboratorium,$image_path,$date_create,$user_id);
		}else{
			$res=$this->Laboran_teknisi_model->upd_laboran_teknisi($id_laboran_teknisi,$nip,$nama,$alamat,$telepon,$golongan,$id_laboratorium,$image_path,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_laboran_teknisi(){
		$id_laboran_teknisi=$this->input->post('id_laboran_teknisi');
		$jd=$this->Laboran_teknisi_model->get_laboran_teknisi1($id_laboran_teknisi);
		if($jd->num_rows()==1){
			foreach($jd->result() as $laboran_teknisi){
				$dpath=$laboran_teknisi->image_path;
				if(! file_exists('../'.$laboran_teknisi->image_path)){
					$this->Laboran_teknisi_model->upd_laboran_teknisi1($id_laboran_teknisi,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$laboran_teknisi->nip."!-delimiter-!".$laboran_teknisi->nama."!-delimiter-!".$laboran_teknisi->alamat."!-delimiter-!".$laboran_teknisi->telepon."!-delimiter-!".$laboran_teknisi->golongan."!-delimiter-!".$laboran_teknisi->id_laboratorium."!-delimiter-!".$laboran_teknisi->image_path;
				echo $ec;
			}
		}else{
			echo "tidak ada data laboran_teknisi";	
		}
	}
	
}



/* End of file laboran_teknisi.php */

/* Location: ./application/controllers/laboran_teknisi.php */