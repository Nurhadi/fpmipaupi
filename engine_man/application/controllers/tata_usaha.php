<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Tata_usaha extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Tata_usaha_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Tata Usaha';
		
			$p=$this->Tata_usaha_model->get_page2(10);

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
			$jt=$this->Tata_usaha_model->get_tata_usaha();
			$data['jt']=$jt;
			
			$jr=$this->Tata_usaha_model->get_unit_kerja();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('tata_usaha_view',$data);

		}

	}

	function detail_tata_usaha($id_tata_usaha=0){
		$jt=$this->Tata_usaha_model->get_tata_usaha1($id_tata_usaha);
		if($jt->num_rows()==1){
			foreach($jt->result() as $tata_usaha){
				if($tata_usaha->id_unit_kerja != '0000000'){
					$unit_kerja = $this->Tata_usaha_model->get_nama_unit_kerja($tata_usaha->id_unit_kerja);
				}
				else
				{
					$unit_kerja = '-';
				}
				echo "<h1>".$tata_usaha->nama."</h1>";
				echo "<b>NIP</b> : ".$tata_usaha->nip."<br/>";
				echo "<b>Alamat</b> : ".$tata_usaha->alamat."<br/>";
				echo "<b>Telepon</b> : ".$tata_usaha->telepon."<br/>";
				echo "<b>Golongan</b> : ".$tata_usaha->golongan."<br/>";
				echo "<b>Unit Kerja</b> : ".$unit_kerja."<br/>";
				echo "<b>Bidang Tugas</b> : ".$tata_usaha->bidang_tugas."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($tata_usaha->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($tata_usaha->status)."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$tata_usaha->image_path."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar tata usaha</a></div><br>";
			}
		}else{
			echo "tidak ada data tata usaha";	
		}
	}
	
	function delete_tata_usaha(){		
		$id_tata_usaha = $this->input->post('id');
		$res2=$this->Tata_usaha_model->get_mypath($id_tata_usaha);
		if($res2->num_rows()>0){
			$path=$res2->row()->image_path;	
		}
		$this->db->trans_start();
		$this->Tata_usaha_model->delete_tata_usaha($id_tata_usaha);
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
	
	function upload_tata_usaha(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/tata_usaha/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/tata_usaha/'.$random_digit.'.'.$exts;
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
	
	function save_tata_usaha(){
		$user_id=$this->session->userdata('user_id');
		$nip=$this->input->post('nip');
		$nama=$this->input->post('name');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$golongan=$this->input->post('golongan');
		$id_unit_kerja=$this->input->post('unit');
		$bidang=$this->input->post('bidang');
		$date_create = date('Y-m-d H:i:s');
		
		$image_path=$this->input->post('image_path');
		if(empty($image_path)){
			$image_path="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_tata_usaha=$this->input->post('id_tata_usaha');
		}
		if($acti=='add'){
			$res=$this->Tata_usaha_model->ins_tata_usaha($nip,$nama,$alamat,$telepon,$golongan,$id_unit_kerja,$bidang,$image_path,$date_create,$user_id);
		}else{
			$res=$this->Tata_usaha_model->upd_tata_usaha($id_tata_usaha,$nip,$nama,$alamat,$telepon,$golongan,$id_unit_kerja,$bidang,$image_path,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_tata_usaha(){
		$id_tata_usaha=$this->input->post('id_tata_usaha');
		$jd=$this->Tata_usaha_model->get_tata_usaha1($id_tata_usaha);
		if($jd->num_rows()==1){
			foreach($jd->result() as $tata_usaha){
				$dpath=$tata_usaha->image_path;
				if(! file_exists('../'.$tata_usaha->image_path)){
					$this->Tata_usaha_model->upd_tata_usaha1($id_tata_usaha,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$tata_usaha->nip."!-delimiter-!".$tata_usaha->nama."!-delimiter-!".$tata_usaha->alamat."!-delimiter-!".$tata_usaha->telepon."!-delimiter-!".$tata_usaha->golongan."!-delimiter-!".$tata_usaha->id_unit_kerja."!-delimiter-!".$tata_usaha->bidang_tugas."!-delimiter-!".$tata_usaha->image_path;
				echo $ec;
			}
		}else{
			echo "tidak ada data tata_usaha";	
		}
	}
	
}



/* End of file tata_usaha.php */

/* Location: ./application/controllers/tata_usaha.php */