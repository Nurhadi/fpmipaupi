<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Destinasi extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Destinasi_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Destinasi';

			

			$p=$this->Destinasi_model->get_page2(8);

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
			
			$ds=$this->Destinasi_model->get_destinasi();
			$data['ds']=$ds;
			
			$this->load->helper('string');

			$this->load->view('destinasi_view',$data);

		}

	}

	function upload_destinasi(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/destinasi/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/destinasi/'.$random_digit.'.'.$exts;
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
	
	function save_destinasi(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$budget=$this->input->post('budget');
		$spend_time=$this->input->post('spend_time');
		$destinasi=$this->input->post('destinasi');
		$deskripsi=$this->input->post('deskripsi');
		$term=$this->input->post('term');
		$date_create = date('Y-m-d H:i:s');
		
		$img_thumbnail=$this->input->post('img_thumbnail');
		if(empty($img_thumbnail)){
			$img_thumbnail="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_destinasi=$this->input->post('id_destinasi');
		}
		if($acti=='add'){
			$res=$this->Destinasi_model->ins_destinasi($title,$budget,$spend_time,$destinasi,$deskripsi,$term,$img_thumbnail,$date_create,$user_id);
		}else{
			$res=$this->Destinasi_model->upd_destinasi($id_destinasi,$title,$budget,$spend_time,$destinasi,$deskripsi,$term,$img_thumbnail,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_destinasi(){
		$id_destinasi=$this->input->post('id_destinasi');
		$ds=$this->Destinasi_model->get_destinasi1($id_destinasi);
		if($ds->num_rows()==1){
			foreach($ds->result() as $destinasi){
				$dpath=$destinasi->img_thumbnail;
				if(! file_exists('../'.$destinasi->img_thumbnail)){
					$this->Destinasi_model->upd_destinasi1($id_destinasi,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$destinasi->title."!-delimiter-!".$destinasi->budget."!-delimiter-!".$destinasi->spend_time."!-delimiter-!".$destinasi->img_thumbnail."!-delimiter-!".$destinasi->destinasi."!-delimiter-!".$destinasi->description."!-delimiter-!".$destinasi->term;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function detail_destinasi($id_destinasi=0){
		$ds=$this->Destinasi_model->get_destinasi1($id_destinasi);
		if($ds->num_rows()==1){
			foreach($ds->result() as $destinasi){
				echo "<h1>".$destinasi->title."</h1>";
				echo "<b>ID Destinasi</b> : ".$id_destinasi."<br/>";
				echo "<b>Title</b> : ".strip_tags($destinasi->title)."<br/>";
				echo "<b>Budget</b> : Rp ".number_format($destinasi->budget,0,'','.')."<br/>";
				echo "<b>Spend Time</b> : ".$destinasi->spend_time."<br/>";
				echo "<b>Destinasi</b> : ".$destinasi->destinasi."<br/>";
				echo "<b>Deskripsi</b> : ".$destinasi->description."<br/>";
				echo "<b>Term</b> : ".$destinasi->term."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($destinasi->date_create))."<br/>";
				echo "<b>Status</b> : ".$destinasi->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar destinasi</a></div><br>";
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function delete_destinasi(){		
		$id_destinasi = $this->input->post('id');
		$res2=$this->Destinasi_model->get_mypath($id_destinasi);
		if($res2->num_rows()>0){
			$path=$res2->row()->img_thumbnail;	
		}
		$this->db->trans_start();
		$this->Destinasi_model->delete_destinasi($id_destinasi);
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



/* End of file destinasi.php */

/* Location: ./application/controllers/destinasi.php */