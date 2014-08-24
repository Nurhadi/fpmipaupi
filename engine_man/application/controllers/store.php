<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Store extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Store_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Store';

			

			$p=$this->Store_model->get_page2(2);

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
			
			$st=$this->Store_model->get_store();
			$data['st']=$st;
			
			$this->load->helper('string');

			$this->load->view('store_view',$data);

		}

	}

	function upload_store(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/store/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/store/'.$random_digit.'.'.$exts;
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
	
	function save_store(){
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
			$id_store=$this->input->post('id_store');
		}
		if($acti=='add'){
			$res=$this->Store_model->ins_store($title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id);
		}else{
			$res=$this->Store_model->upd_store($id_store,$title,$harga,$per,$deskripsi,$img_thumbnail,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function get_data_store(){
		$id_store=$this->input->post('id_store');
		$st=$this->Store_model->get_store1($id_store);
		if($st->num_rows()==1){
			foreach($st->result() as $store){
				$dpath=$store->img_thumbnail;
				if(! file_exists('../'.$store->img_thumbnail)){
					$this->Store_model->upd_store1($id_store,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$store->title."!-delimiter-!".$store->harga."!-delimiter-!".$store->satuan."!-delimiter-!".$store->description."!-delimiter-!".$store->img_thumbnail;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function detail_store($id_store=0){
		$st=$this->Store_model->get_store1($id_store);
		if($st->num_rows()==1){
			foreach($st->result() as $store){
				echo "<h1>".$store->title."</h1>";
				echo "<b>ID Destinasi</b> : ".$id_store."<br/>";
				echo "<b>Title</b> : ".strip_tags($store->title)."<br/>";
				echo "<b>Harga</b> : Rp ".number_format($store->harga,0,'','.')." / ".$store->satuan."<br/>";
				echo "<b>Deskripsi</b> : ".$store->description."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($store->date_create))."<br/>";
				echo "<b>Status</b> : ".$store->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar store</a></div><br>";
			}
		}else{
			echo "tidak ada data store";	
		}
	}
	
	function delete_store(){		
		$id_store = $this->input->post('id');
		$res2=$this->Store_model->get_mypath($id_store);
		if($res2->num_rows()>0){
			$path=$res2->row()->img_thumbnail;	
		}
		$this->db->trans_start();
		$this->Store_model->delete_store($id_store);
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



/* End of file store.php */

/* Location: ./application/controllers/store.php */