<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Jadwal extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Jadwal_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Jadwal Trip';

			

			$p=$this->Jadwal_model->get_page2(7);

			if($p->num_rows()>0){

				$data['ptitle']=$p->row()->title;

				$data['keyword']=$p->row()->keyword;

				$data['description']=$p->row()->description;

				$data['text']=$p->row()->text;

			}else{

				$data['ptitle']='';

				$data['keyword']='';

				$data['description']='';

				$data['text']='';

			}
			
			$jt=$this->Jadwal_model->get_jadwal();
			$data['jt']=$jt;

			$bl=$this->Jadwal_model->get_bulan();
			$data['bl']=$bl;
			
			$this->load->helper('string');

			$this->load->view('jadwal_view',$data);

		}

	}

	function detail_jadwal($id_jadwal=0){
		$jt=$this->Jadwal_model->get_jadwal1($id_jadwal);
		if($jt->num_rows()==1){
			foreach($jt->result() as $jadwal){
				echo "<h1>".$jadwal->title."</h1>";
				echo "<b>ID Jadwal</b> : ".$id_jadwal."<br/>";
				echo "<b>Title</b> : ".strip_tags($jadwal->title)."<br/>";
				echo "<b>Budget</b> : Rp ".number_format($jadwal->budget,0,'','.')."<br/>";
				echo "<b>Spend Time</b> : ".$jadwal->spend_time."<br/>";
				echo "<b>Destinasi</b> : ".$jadwal->destinasi."<br/>";
				echo "<b>Deskripsi</b> : ".$jadwal->description."<br/>";
				echo "<b>Term</b> : ".$jadwal->term."<br/>";
				echo "<b>Date Start</b> : ".date('d-M-Y', strtotime($jadwal->date_start))."<br/>";
				echo "<b>Date End</b> : ".date('d-M-Y', strtotime($jadwal->date_end))."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($jadwal->date_create))."<br/>";
				echo "<b>Status</b> : ".$jadwal->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar slider</a></div><br>";
			}
		}else{
			echo "tidak ada data jadwal trip";	
		}
	}
	
	function delete_jadwal(){		
		$id_jadwal = $this->input->post('id');
		$res2=$this->Jadwal_model->get_mypath($id_jadwal);
		if($res2->num_rows()>0){
			$path=$res2->row()->img_thumbnail;	
		}
		$this->db->trans_start();
		$this->Jadwal_model->delete_jadwal($id_jadwal);
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
	
	function upload_jadwal(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/jadwal_trip/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/jadwal_trip/'.$random_digit.'.'.$exts;
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
	
	function save_jadwal(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$id_bulan=$this->input->post('id_bulan');
		$budget=$this->input->post('budget');
		$spend_time=$this->input->post('spend_time');
		$destinasi=$this->input->post('destinasi');
		$deskripsi=$this->input->post('deskripsi');
		$term=$this->input->post('term');
		$date_start=$this->input->post('date_start');
		$date_end=$this->input->post('date_end');
		$date_create = date('Y-m-d H:i:s');
		
		$img_thumbnail=$this->input->post('img_thumbnail');
		if(empty($img_thumbnail)){
			$img_thumbnail="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_jadwal=$this->input->post('id_jadwal');
		}
		if($acti=='add'){
			$res=$this->Jadwal_model->ins_jadwal($title,$id_bulan,$budget,$spend_time,$destinasi,$deskripsi,$term,$date_start,$date_end,$date_create,$img_thumbnail,$user_id);
		}else{
			$res=$this->Jadwal_model->upd_jadwal($id_jadwal,$title,$id_bulan,$budget,$spend_time,$destinasi,$deskripsi,$term,$date_start,$date_end,$date_create,$img_thumbnail,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_jadwal(){
		$id_jadwal=$this->input->post('id_jadwal');
		$jd=$this->Jadwal_model->get_jadwal1($id_jadwal);
		if($jd->num_rows()==1){
			foreach($jd->result() as $jadwal){
				$dpath=$jadwal->img_thumbnail;
				if(! file_exists('../'.$jadwal->img_thumbnail)){
					$this->Jadwal_model->upd_jadwal1($id_jadwal,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$jadwal->title."!-delimiter-!".$jadwal->id_bulan."!-delimiter-!".$jadwal->budget."!-delimiter-!".$jadwal->spend_time."!-delimiter-!".$jadwal->img_thumbnail."!-delimiter-!".$jadwal->date_start."!-delimiter-!".$jadwal->date_end."!-delimiter-!".$jadwal->destinasi."!-delimiter-!".$jadwal->description."!-delimiter-!".$jadwal->term;
				echo $ec;
			}
		}else{
			echo "tidak ada data slider";	
		}
	}
	
}



/* End of file jadwal.php */

/* Location: ./application/controllers/jadwal.php */