<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Peralatan extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Peralatan_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Peralatan';
		
			$p=$this->Peralatan_model->get_page2(15);

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
			$jt=$this->Peralatan_model->get_peralatan();
			$data['jt']=$jt;
			
			$jr=$this->Peralatan_model->get_jurusan();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('peralatan_view',$data);

		}

	}

	function detail_peralatan($id_peralatan=0){
		$jt=$this->Peralatan_model->get_peralatan1($id_peralatan);
		if($jt->num_rows()==1){
			foreach($jt->result() as $peralatan){
				if($peralatan->id_jurusan != '0000000'){
					$jurusan = $this->Peralatan_model->get_nama_jurusan($peralatan->id_jurusan);
				}
				else
				{
					$jurusan = '-';
				}
				echo "<h1>".$peralatan->nama."</h1>";
				echo "<b>Deskripsi</b> : ".$peralatan->description."<br/>";
				echo "<b>Jumlah</b> : ".$peralatan->jumlah."<br/>";
				echo "<b>Jurusan</b> : ".$jurusan."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($peralatan->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($peralatan->status)."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar peralatan</a></div><br>";
			}
		}else{
			echo "tidak ada data peralatan";	
		}
	}
	
	function delete_peralatan(){		
		$id_peralatan = $this->input->post('id');
		$this->db->trans_start();
		$this->Peralatan_model->delete_peralatan($id_peralatan);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function save_peralatan(){
		$user_id=$this->session->userdata('user_id');
		$nama=$this->input->post('name');
		$description=$this->input->post('description');
		$id_jurusan=$this->input->post('jurusan');
		$jumlah=$this->input->post('jumlah');
		$date_create = date('Y-m-d H:i:s');
		
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_peralatan=$this->input->post('id_peralatan');
		}
		if($acti=='add'){
			$res=$this->Peralatan_model->ins_peralatan($nama,$description,$id_jurusan,$jumlah,$date_create,$user_id);
		}else{
			$res=$this->Peralatan_model->upd_peralatan($id_peralatan,$nama,$description,$id_jurusan,$jumlah,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_peralatan(){
		$id_peralatan=$this->input->post('id_peralatan');
		$jd=$this->Peralatan_model->get_peralatan1($id_peralatan);
		if($jd->num_rows()==1){
			foreach($jd->result() as $peralatan){
				$ec=$peralatan->nama."!-delimiter-!".$peralatan->description."!-delimiter-!".$peralatan->id_jurusan."!-delimiter-!".$peralatan->jumlah;
				echo $ec;
			}
		}else{
			echo "tidak ada data peralatan";	
		}
	}
	
}



/* End of file peralatan.php */

/* Location: ./application/controllers/peralatan.php */