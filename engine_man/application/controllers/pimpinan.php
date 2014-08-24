<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Pimpinan extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Pimpinan_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Pimpinan';
		
			$p=$this->Pimpinan_model->get_page2(5);

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
			$jt=$this->Pimpinan_model->get_pimpinan();
			$data['jt']=$jt;
			
			$jr=$this->Pimpinan_model->get_jurusan();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('pimpinan_view',$data);

		}

	}

	function detail_pimpinan($id_pimpinan=0){
		$jt=$this->Pimpinan_model->get_pimpinan1($id_pimpinan);
		if($jt->num_rows()==1){
			foreach($jt->result() as $pimpinan){
				if($pimpinan->id_jurusan != '0000000'){
					$jurusan = $this->Pimpinan_model->get_nama_jurusan($pimpinan->id_jurusan);
				}
				else
				{
					$jurusan = '-';
				}
				echo "<h1>".$pimpinan->nama."</h1>";
				echo "<b>Jabatan</b> : ".$pimpinan->jabatan."<br/>";
				echo "<b>Jurusan</b> : ".$jurusan."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($pimpinan->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($pimpinan->status)."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$pimpinan->image_path."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar pimpinan</a></div><br>";
			}
		}else{
			echo "tidak ada data pimpinan";	
		}
	}
	
	function delete_pimpinan(){		
		$id_pimpinan = $this->input->post('id');
		$res2=$this->Pimpinan_model->get_mypath($id_pimpinan);
		if($res2->num_rows()>0){
			$path=$res2->row()->image_path;	
		}
		$this->db->trans_start();
		$this->Pimpinan_model->delete_pimpinan($id_pimpinan);
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
	
	function upload_pimpinan(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/pimpinan/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/pimpinan/'.$random_digit.'.'.$exts;
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
	
	function save_pimpinan(){
		$user_id=$this->session->userdata('user_id');
		$nama=$this->input->post('name');
		$jabatan=$this->input->post('jabatan');
		$id_jurusan=$this->input->post('jurusan');
		$date_create = date('Y-m-d H:i:s');
		
		$image_path=$this->input->post('image_path');
		if(empty($image_path)){
			$image_path="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_pimpinan=$this->input->post('id_pimpinan');
		}
		if($acti=='add'){
			$res=$this->Pimpinan_model->ins_pimpinan($nama,$jabatan,$id_jurusan,$image_path,$date_create,$user_id);
		}else{
			$res=$this->Pimpinan_model->upd_pimpinan($id_pimpinan,$nama,$jabatan,$id_jurusan,$image_path,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_pimpinan(){
		$id_pimpinan=$this->input->post('id_pimpinan');
		$jd=$this->Pimpinan_model->get_pimpinan1($id_pimpinan);
		if($jd->num_rows()==1){
			foreach($jd->result() as $pimpinan){
				$dpath=$pimpinan->image_path;
				if(! file_exists('../'.$pimpinan->image_path)){
					$this->Pimpinan_model->upd_pimpinan1($id_pimpinan,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$pimpinan->nama."!-delimiter-!".$pimpinan->jabatan."!-delimiter-!".$pimpinan->id_jurusan."!-delimiter-!".$pimpinan->image_path;
				echo $ec;
			}
		}else{
			echo "tidak ada data pimpinan";	
		}
	}
	
}



/* End of file pimpinan.php */

/* Location: ./application/controllers/pimpinan.php */