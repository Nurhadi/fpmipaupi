<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Participant extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Participant_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Participant';
		
			$p=$this->Participant_model->get_page2(27);

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
			$jt=$this->Participant_model->get_participant();
			$data['jt']=$jt;

			$bl=$this->Participant_model->get_bulan();
			$data['bl']=$bl;
			
			$this->load->helper('string');

			$this->load->view('participant_view',$data);

		}

	}

	function detail_participant($id_participant=0){
		$jt=$this->Participant_model->get_participant1($id_participant);
		if($jt->num_rows()==1){
			foreach($jt->result() as $participant){
				echo "<h1>".$participant->nama."</h1>";
				echo "<b>Tanggal Lahir</b> : ".date('d-M-Y',strtotime($participant->tanggal_lahir))."<br/>";
				echo "<b>Jenis Kelamin</b> : ".$participant->jenis_kelamin."<br/>";
				echo "<b>Kewarganegaraan</b> : ".$participant->kewarganegaraan."<br/>";
				//echo "<b>Foto</b> : ".$participant->image_thumbnail."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($participant->date_create))."<br/>";
				echo "<b>Status</b> : ".$participant->status."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$participant->image_thumbnail."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar participant</a></div><br>";
			}
		}else{
			echo "tidak ada data participant trip";	
		}
	}
	
	function delete_participant(){		
		$id_participant = $this->input->post('id');
		$res2=$this->Participant_model->get_mypath($id_participant);
		if($res2->num_rows()>0){
			$path=$res2->row()->image_thumbnail;	
		}
		$this->db->trans_start();
		$this->Participant_model->delete_participant($id_participant);
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
	
	function upload_participant(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/participant/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/participant/'.$random_digit.'.'.$exts;
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
	
	function save_participant(){
		$user_id=$this->session->userdata('user_id');
		$nama=$this->input->post('name');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$jenis_kelamin=$this->input->post('jenis_kelamin');
		$kewarganegaraan=$this->input->post('kewarganegaraan');
		$date_create = date('Y-m-d H:i:s');
		
		$image_thumbnail=$this->input->post('image_thumbnail');
		if(empty($img_thumbnail)){
			$img_thumbnail="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_participant=$this->input->post('id_participant');
		}
		if($acti=='add'){
			$res=$this->Participant_model->ins_participant($nama,$tanggal_lahir,$jenis_kelamin,$kewarganegaraan,$image_thumbnail,$date_create,$user_id);
		}else{
			$res=$this->Participant_model->upd_participant($id_participant,$nama,$tanggal_lahir,$jenis_kelamin,$kewarganegaraan,$image_thumbnail,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_participant(){
		$id_participant=$this->input->post('id_participant');
		$jd=$this->Participant_model->get_participant1($id_participant);
		if($jd->num_rows()==1){
			foreach($jd->result() as $participant){
				$dpath=$participant->image_thumbnail;
				if(! file_exists('../'.$participant->image_thumbnail)){
					$this->Participant_model->upd_participant1($id_participant,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$participant->nama."!-delimiter-!".$participant->tanggal_lahir."!-delimiter-!".$participant->jenis_kelamin."!-delimiter-!".$participant->kewarganegaraan."!-delimiter-!".$participant->image_thumbnail;
				echo $ec;
			}
		}else{
			echo "tidak ada data slider";	
		}
	}
	
}



/* End of file participant.php */

/* Location: ./application/controllers/participant.php */