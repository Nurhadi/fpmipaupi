<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Prestasi extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Prestasi_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Prestasi';
		
			$p=$this->Prestasi_model->get_page2(7);

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
			$jt=$this->Prestasi_model->get_prestasi();
			$data['jt']=$jt;
			
			$jr=$this->Prestasi_model->get_jurusan();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('prestasi_view',$data);

		}

	}

	function detail_prestasi($id_prestasi=0){
		$jt=$this->Prestasi_model->get_prestasi1($id_prestasi);
		if($jt->num_rows()==1){
			foreach($jt->result() as $prestasi){
				if($prestasi->id_jurusan != '0000000'){
					$jurusan = $this->Prestasi_model->get_nama_jurusan($prestasi->id_jurusan);
				}
				else
				{
					$jurusan = '-';
				}
				echo "<h1>".$prestasi->nama."</h1>";
				echo "<b>Jurusan</b> : ".$jurusan."<br/>";
				echo "<b>Prestasi</b> : ".$prestasi->prestasi."<br/>";
				echo "<b>Tingkat</b> : ".$prestasi->tingkat."<br/>";
				echo "<b>Tahun</b> : ".$prestasi->tahun."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($prestasi->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($prestasi->status)."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar prestasi</a></div><br>";
			}
		}else{
			echo "tidak ada data prestasi";	
		}
	}
	
	function delete_prestasi(){		
		$id_prestasi = $this->input->post('id');
		$this->db->trans_start();
		$this->Prestasi_model->delete_prestasi($id_prestasi);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function save_prestasi(){
		$user_id=$this->session->userdata('user_id');
		$nama=$this->input->post('name');
		$id_jurusan=$this->input->post('jurusan');
		$prestasi=$this->input->post('prestasi');
		$tingkat=$this->input->post('tingkat');
		$tahun=$this->input->post('tahun');
		$date_create = date('Y-m-d H:i:s');
		
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_prestasi=$this->input->post('id_prestasi');
		}
		if($acti=='add'){
			$res=$this->Prestasi_model->ins_prestasi($nama,$id_jurusan,$prestasi,$tingkat,$tahun,$date_create,$user_id);
		}else{
			$res=$this->Prestasi_model->upd_prestasi($id_prestasi,$nama,$id_jurusan,$prestasi,$tingkat,$tahun,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_prestasi(){
		$id_prestasi=$this->input->post('id_prestasi');
		$jd=$this->Prestasi_model->get_prestasi1($id_prestasi);
		if($jd->num_rows()==1){
			foreach($jd->result() as $prestasi){
				$ec=$prestasi->nama."!-delimiter-!".$prestasi->id_jurusan."!-delimiter-!".$prestasi->prestasi."!-delimiter-!".$prestasi->tingkat."!-delimiter-!".$prestasi->tahun;
				echo $ec;
			}
		}else{
			echo "tidak ada data prestasi";	
		}
	}
	
}



/* End of file prestasi.php */

/* Location: ./application/controllers/prestasi.php */