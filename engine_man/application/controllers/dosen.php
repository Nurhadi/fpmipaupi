<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dosen extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Dosen_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}



	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Dosen';

			$p=$this->Dosen_model->get_page2(12);

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
			$jt=$this->Dosen_model->get_dosen();
			$data['jt']=$jt;

			$jr=$this->Dosen_model->get_jurusan();
			$data['jr']=$jr;

			$this->load->helper('string');

			$this->load->view('dosen_view',$data);

		}

	}

	function detail_dosen($id_dosen=0){
		$jt=$this->Dosen_model->get_dosen1($id_dosen);
		if($jt->num_rows()==1){
			foreach($jt->result() as $dosen){
				if($dosen->id_jurusan != '0000000'){
					$jurusan = $this->Dosen_model->get_nama_jurusan($dosen->id_jurusan);
				}
				else
				{
					$jurusan = '-';
				}
				echo "<h1>".$dosen->nama."</h1>";
				echo "<b>NIP</b> : ".$dosen->nip."<br/>";
				echo "<b>NIDN</b> : ".$dosen->nidn."<br/>";
				echo "<b>Kode Dosen</b> : ".$dosen->kode_dosen."<br/>";
				echo "<b>Alamat</b> : ".$dosen->alamat."<br/>";
				echo "<b>Telepon</b> : ".$dosen->telepon."<br/>";
				echo "<b>Golongan</b> : ".$dosen->golongan."<br/>";
				echo "<b>Jurusan</b> : ".$jurusan."<br/>";
				echo "<b>Riwayat Pendidikan</b> : ".$dosen->riwayat_pendidikan."<br/>";
				echo "<b>Kompetensi Mata Kuliah</b> : ".$dosen->kompetensi_mata_kuliah."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($dosen->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($dosen->status)."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><br><img src='../".$dosen->image_path."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar dosen</a></div><br>";
			}
		}else{
			echo "tidak ada data dosen";
		}
	}

	function delete_dosen(){
		$id_dosen = $this->input->post('id');
		$res2=$this->Dosen_model->get_mypath($id_dosen);
		if($res2->num_rows()>0){
			$path=$res2->row()->image_path;
		}
		$this->db->trans_start();
		$this->Dosen_model->delete_dosen($id_dosen);
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

	function upload_dosen(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/dosen/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/dosen/'.$random_digit.'.'.$exts;
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

	function save_dosen(){
		$user_id=$this->session->userdata('user_id');
		$nip=$this->input->post('nip');
		$nidn=$this->input->post('nidn');
		$kode_dosen=$this->input->post('kodo');
		$nama=$this->input->post('name');
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$golongan=$this->input->post('golongan');
		$id_jurusan=$this->input->post('jurusan');
		$riwayat_pendidikan=$this->input->post('ripen');
		$kompetensi=$this->input->post('kompetensi');
		$date_create = date('Y-m-d H:i:s');

		$image_path=$this->input->post('image_path');
		if(empty($image_path)){
			$image_path="data/def_slider.png";
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_dosen=$this->input->post('id_dosen');
		}
		if($acti=='add'){
			$res=$this->Dosen_model->ins_dosen($nip,$nidn,$kode_dosen,$nama,$alamat,$telepon,$golongan,$id_jurusan,$riwayat_pendidikan,$kompetensi,$image_path,$date_create,$user_id);
		}else{
			$res=$this->Dosen_model->upd_dosen($id_dosen,$nip,$nidn,$kode_dosen,$nama,$alamat,$telepon,$golongan,$id_jurusan,$riwayat_pendidikan,$kompetensi,$image_path,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}

	function get_data_dosen(){
		$id_dosen=$this->input->post('id_dosen');
		$jd=$this->Dosen_model->get_dosen1($id_dosen);
		if($jd->num_rows()==1){
			foreach($jd->result() as $dosen){
				$dpath=$dosen->image_path;
				if(! file_exists('../'.$dosen->image_path)){
					$this->Dosen_model->upd_dosen1($id_dosen,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}
				$ec=$dosen->nip."!-delimiter-!".$dosen->nidn."!-delimiter-!".$dosen->kode_dosen."!-delimiter-!".$dosen->nama."!-delimiter-!".$dosen->alamat."!-delimiter-!".$dosen->telepon."!-delimiter-!".$dosen->golongan."!-delimiter-!".$dosen->id_jurusan."!-delimiter-!".$dosen->riwayat_pendidikan."!-delimiter-!".$dosen->kompetensi_mata_kuliah."!-delimiter-!".$dosen->image_path;
				echo $ec;
			}
		}else{
			echo "tidak ada data dosen";
		}
	}

}



/* End of file dosen.php */

/* Location: ./application/controllers/dosen.php */