<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Laboratorium extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Laboratorium_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Laboratorium';
		
			$p=$this->Laboratorium_model->get_page2(14);

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
			$jt=$this->Laboratorium_model->get_laboratorium();
			$data['jt']=$jt;
			
			$jr=$this->Laboratorium_model->get_jurusan();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('laboratorium_view',$data);

		}

	}

	function detail_laboratorium($id_laboratorium=0){
		$jt=$this->Laboratorium_model->get_laboratorium1($id_laboratorium);
		if($jt->num_rows()==1){
			foreach($jt->result() as $laboratorium){
				if($laboratorium->id_jurusan != '0000000'){
					$jurusan = $this->Laboratorium_model->get_nama_jurusan($laboratorium->id_jurusan);
				}
				else
				{
					$jurusan = '-';
				}
				echo "<h1>".$laboratorium->nama."</h1>";
				echo "<b>Jurusan</b> : ".$jurusan."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($laboratorium->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($laboratorium->status)."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar laboratorium</a></div><br>";
			}
		}else{
			echo "tidak ada data laboratorium";	
		}
	}
	
	function delete_laboratorium(){		
		$id_laboratorium = $this->input->post('id');
		$this->db->trans_start();
		$this->Laboratorium_model->delete_laboratorium($id_laboratorium);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function save_laboratorium(){
		$user_id=$this->session->userdata('user_id');
		$nama=$this->input->post('name');
		$id_jurusan=$this->input->post('jurusan');
		$date_create = date('Y-m-d H:i:s');
		
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_laboratorium=$this->input->post('id_laboratorium');
		}
		if($acti=='add'){
			$res=$this->Laboratorium_model->ins_laboratorium($nama,$id_jurusan,$date_create,$user_id);
		}else{
			$res=$this->Laboratorium_model->upd_laboratorium($id_laboratorium,$nama,$id_jurusan,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_laboratorium(){
		$id_laboratorium=$this->input->post('id_laboratorium');
		$jd=$this->Laboratorium_model->get_laboratorium1($id_laboratorium);
		if($jd->num_rows()==1){
			foreach($jd->result() as $laboratorium){
				$ec=$laboratorium->nama."!-delimiter-!".$laboratorium->id_jurusan;
				echo $ec;
			}
		}else{
			echo "tidak ada data laboratorium";	
		}
	}
	
}



/* End of file laboratorium.php */

/* Location: ./application/controllers/laboratorium.php */