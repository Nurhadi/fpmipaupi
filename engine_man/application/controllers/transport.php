<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Transport extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Transport_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Transport dan Akomodasi';

			

			$p=$this->Transport_model->get_page2(1);

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
			
			$tr=$this->Transport_model->get_transport();
			$data['tr']=$tr;
			
			$this->load->helper('string');

			$this->load->view('transport_view',$data);

		}

	}

	function upload_transport(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/transport/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/transport/'.$random_digit.'.'.$exts;
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
	
	function save_transport(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$harga=$this->input->post('harga');
		$per=$this->input->post('per');
		$deskripsi=$this->input->post('deskripsi');
		$date_create = date('Y-m-d H:i:s');
		
		$img_thumbnail=$this->input->post('img_thumbnail');
		if(empty($img_thumbnail)){
			$img_thumbnail="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_transport=$this->input->post('id_transport');
		}
		if($acti=='add'){
			$res=$this->Transport_model->ins_transport($title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id);
		}else{
			$res=$this->Transport_model->upd_transport($id_transport,$title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_transport(){
		$id_transport=$this->input->post('id_transport');
		$tr=$this->Transport_model->get_transport1($id_transport);
		if($tr->num_rows()==1){
			foreach($tr->result() as $transport){
				$dpath=$transport->img_thumbnail;
				if(! file_exists('../'.$transport->img_thumbnail)){
					$this->Transport_model->upd_transport1($id_transport,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$transport->title."!-delimiter-!".$transport->harga."!-delimiter-!".$transport->satuan."!-delimiter-!".$transport->description."!-delimiter-!".$transport->img_thumbnail;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function detail_transport($id_transport=0){
		$tr=$this->Transport_model->get_transport1($id_transport);
		if($tr->num_rows()==1){
			foreach($tr->result() as $transport){
				echo "<h1>".$transport->title."</h1>";
				echo "<b>ID Destinasi</b> : ".$id_transport."<br/>";
				echo "<b>Title</b> : ".strip_tags($transport->title)."<br/>";
				echo "<b>Harga</b> : Rp ".number_format($transport->harga,0,'','.')." / ".$transport->satuan."<br/>";
				echo "<b>Deskripsi</b> : ".$transport->description."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($transport->date_create))."<br/>";
				echo "<b>Status</b> : ".$transport->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar transport</a></div><br>";
			}
		}else{
			echo "tidak ada data transport";	
		}
	}
	
	function delete_transport(){		
		$id_transport = $this->input->post('id');
		$res2=$this->Transport_model->get_mypath($id_transport);
		if($res2->num_rows()>0){
			$path=$res2->row()->img_thumbnail;	
		}
		$this->db->trans_start();
		$this->Transport_model->delete_transport($id_transport);
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



/* End of file transport.php */

/* Location: ./application/controllers/transport.php */