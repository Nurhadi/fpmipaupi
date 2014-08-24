<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Promo extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Promo_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Promo';

			

			$p=$this->Promo_model->get_page2(4);

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
			
			$pr=$this->Promo_model->get_promo();
			$data['pr']=$pr;
			
			$this->load->helper('string');

			$this->load->view('promo_view',$data);

		}

	}

	function upload_promo(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/promo/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/promo/'.$random_digit.'.'.$exts;
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
	
	function save_promo(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$keyword=$this->input->post('keyword');
		$description=$this->input->post('description');
		$date_limit=$this->input->post('date_limit');
		$content=$this->input->post('content');
		$note=$this->input->post('note');
		$date_create = date('Y-m-d H:i:s');

		$destinasi=$this->input->post('destinasi');
		$deskripsi=$this->input->post('deskripsi');
		$term=$this->input->post('term');
		$budget=$this->input->post('budget');
		
		$img_thumbnail=$this->input->post('img_thumbnail');
		if(empty($img_thumbnail)){
			$img_thumbnail="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_promo=$this->input->post('id_promo');
		}
		if($acti=='add'){
			$res=$this->Promo_model->ins_promo($title,$keyword,$description,$content,$note,$img_thumbnail,$date_create,$date_limit,$user_id,$destinasi,$deskripsi,$term,$budget);
		}else{
			$res=$this->Promo_model->upd_promo($id_promo,$title,$keyword,$description,$content,$note,$img_thumbnail,$date_create,$date_limit,$user_id,$destinasi,$deskripsi,$term,$budget);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function get_data_promo(){
		$id_promo=$this->input->post('id_promo');
		$pr=$this->Promo_model->get_promo1($id_promo);
		if($pr->num_rows()==1){
			foreach($pr->result() as $promo){
				$dpath=$promo->img_thumbnail;
				if(! file_exists('../'.$promo->img_thumbnail)){
					$this->Promo_model->upd_promo1($id_promo,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$promo->title."!-delimiter-!".$promo->meta_keyword."!-delimiter-!".$promo->meta_description."!-delimiter-!".$promo->content."!-delimiter-!".$promo->img_thumbnail."!-delimiter-!".$promo->note."!-delimiter-!".$promo->date_limit."!-delimiter-!".$promo->destinasi."!-delimiter-!".$promo->description."!-delimiter-!".$promo->term."!-delimiter-!".$promo->budget;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function detail_promo($id_promo=0){
		$pr=$this->Promo_model->get_promo1($id_promo);
		if($pr->num_rows()==1){
			foreach($pr->result() as $promo){
				echo "<h1>".$promo->title."</h1>";
				echo "<b>ID Destinasi</b> : ".$id_promo."<br/>";
				echo "<b>Title</b> : ".strip_tags($promo->title)."<br/>";
				echo "<b>Meta Keyword</b> : ".$promo->meta_keyword."<br/>";
				echo "<b>Meta Desription</b> : ".$promo->meta_description."<br/>";
				echo "<b>Date Limit</b> : ".date('d-M-Y', strtotime($promo->date_limit))."<br/>";
				echo "<b>Isi Promo</b> : ".$promo->content."<br/>";
				echo "<b>Budget</b> : ".$promo->budget."<br/>";
				echo "<b>Destinasi</b> : ".$promo->destinasi."<br/>";
				echo "<b>Deskripsi</b> : ".$promo->description."<br/>";
				echo "<b>Term & Conditions</b> : ".$promo->term."<br/>";
				echo "<b>Note</b> : ".$promo->note."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($promo->date_create))."<br/>";
				echo "<b>Status</b> : ".$promo->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar promo</a></div><br>";
			}
		}else{
			echo "tidak ada data promo";	
		}
	}
	
	function delete_promo(){		
		$id_promo = $this->input->post('id');
		$res2=$this->Promo_model->get_mypath($id_promo);
		if($res2->num_rows()>0){
			$path=$res2->row()->img_thumbnail;	
		}
		$this->db->trans_start();
		$this->Promo_model->delete_promo($id_promo);
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



/* End of file promo.php */

/* Location: ./application/controllers/promo.php */