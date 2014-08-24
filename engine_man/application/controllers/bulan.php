<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Bulan extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Bulan_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Bulan';
			
			$bl=$this->Bulan_model->get_bulan();
			$data['bl']=$bl;
			
			$this->load->helper('string');

			$this->load->view('bulan_view',$data);

		}

	}

	function save_bulan(){
		$bulan=$this->input->post('nama_bulan');
		$tahun=$this->input->post('tahun');
		$id_user=$this->session->userdata('user_id');
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_bulan=$this->input->post('id_bulan');
		}
		if($acti=='add'){
			$res=$this->Bulan_model->ins_bulan($bulan,$tahun,$id_user);
		}else{
			$res=$this->Bulan_model->upd_bulan($id_bulan,$bulan,$tahun,$id_user);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_bulan(){
		$id_bulan=$this->input->post('id_bulan');
		$bl=$this->Bulan_model->get_bulan2($id_bulan);
		if($bl->num_rows()==1){
			foreach($bl->result() as $bulan){
				$ec=$bulan->nama."!-delimiter-!".$bulan->tahun;
				echo $ec;
			}
		}else{
			echo "tidak ada data bulan";	
		}
	}
	
	function delete_bulan(){		
		$id_bulan=$this->input->post('id');
		$delete = $this->Bulan_model->delete_bulan($id_bulan);
		if($delete)
		{
			echo "1";
		}else{
			echo "0";
		}
	}

}



/* End of file bulan.php */

/* Location: ./application/controllers/bulan.php */