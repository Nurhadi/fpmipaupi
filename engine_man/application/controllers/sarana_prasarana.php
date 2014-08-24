<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Sarana_prasarana extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Sarana_prasarana_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title'] = 'Sarana Prasarana';
		
			$p=$this->Sarana_prasarana_model->get_page2(16);

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
			$jt=$this->Sarana_prasarana_model->get_sarana_prasarana();
			$data['jt']=$jt;
			
			$jr=$this->Sarana_prasarana_model->get_jurusan();
			$data['jr']=$jr;
			
			$this->load->helper('string');

			$this->load->view('sarana_prasarana_view',$data);

		}

	}

	function detail_sarana_prasarana($id_sarana_prasarana=0){
		$jt=$this->Sarana_prasarana_model->get_sarana_prasarana1($id_sarana_prasarana);
		if($jt->num_rows()==1){
			foreach($jt->result() as $sarana_prasarana){
				if($sarana_prasarana->id_jurusan != '0000000'){
					$jurusan = $this->Sarana_prasarana_model->get_nama_jurusan($sarana_prasarana->id_jurusan);
				}
				else
				{
					$jurusan = '-';
				}
				echo "<h1>".$sarana_prasarana->nama."</h1>";
				echo "<b>Deskripsi</b> : ".$sarana_prasarana->description."<br/>";
				echo "<b>Jumlah</b> : ".$sarana_prasarana->jumlah."<br/>";
				echo "<b>Jurusan</b> : ".$jurusan."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($sarana_prasarana->date_create))."<br/>";
				echo "<b>Status</b> : ".UCFirst($sarana_prasarana->status)."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar sarana prasarana</a></div><br>";
			}
		}else{
			echo "tidak ada data sarana_prasarana";	
		}
	}
	
	function delete_sarana_prasarana(){		
		$id_sarana_prasarana = $this->input->post('id');
		$this->db->trans_start();
		$this->Sarana_prasarana_model->delete_sarana_prasarana($id_sarana_prasarana);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function save_sarana_prasarana(){
		$user_id=$this->session->userdata('user_id');
		$nama=$this->input->post('name');
		$description=$this->input->post('description');
		$id_jurusan=$this->input->post('jurusan');
		$jumlah=$this->input->post('jumlah');
		$date_create = date('Y-m-d H:i:s');
		
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_sarana_prasarana=$this->input->post('id_sarana_prasarana');
		}
		if($acti=='add'){
			$res=$this->Sarana_prasarana_model->ins_sarana_prasarana($nama,$description,$id_jurusan,$jumlah,$date_create,$user_id);
		}else{
			$res=$this->Sarana_prasarana_model->upd_sarana_prasarana($id_sarana_prasarana,$nama,$description,$id_jurusan,$jumlah,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_sarana_prasarana(){
		$id_sarana_prasarana=$this->input->post('id_sarana_prasarana');
		$jd=$this->Sarana_prasarana_model->get_sarana_prasarana1($id_sarana_prasarana);
		if($jd->num_rows()==1){
			foreach($jd->result() as $sarana_prasarana){
				$ec=$sarana_prasarana->nama."!-delimiter-!".$sarana_prasarana->description."!-delimiter-!".$sarana_prasarana->id_jurusan."!-delimiter-!".$sarana_prasarana->jumlah;
				echo $ec;
			}
		}else{
			echo "tidak ada data sarana_prasarana";	
		}
	}
	
}



/* End of file sarana_prasarana.php */

/* Location: ./application/controllers/sarana_prasarana.php */