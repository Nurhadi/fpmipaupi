<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Gallery extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('Gallery_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='Gallery';

			

			$p=$this->Gallery_model->get_page2(5);

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
			
			$gl=$this->Gallery_model->get_gallery();
			$data['gl']=$gl;
			
			$this->load->helper('string');

			$this->load->view('gallery_view',$data);

		}

	}

	function upload_gallery1(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/gallery/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/gallery/'.$random_digit.'.'.$exts;
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
	
	function upload_gallery2(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/gallery/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/gallery/'.$random_digit.'.'.$exts;
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
	
	function upload_gallery3(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/gallery/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/gallery/'.$random_digit.'.'.$exts;
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
	
	function upload_gallery4(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/gallery/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/gallery/'.$random_digit.'.'.$exts;
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
	
	function upload_gallery5(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/gallery/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/gallery/'.$random_digit.'.'.$exts;
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
	
	function save_gallery(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$date_create = date('Y-m-d H:i:s');
		
		$img_thumbnail1=$this->input->post('img_thumbnail1');
		if(empty($img_thumbnail1)){
			$img_thumbnail1="data/def_slider.png";	
		}

		$img_thumbnail2=$this->input->post('img_thumbnail2');
		if(empty($img_thumbnail2)){
			$img_thumbnail2="data/def_slider.png";	
		}
		
		$img_thumbnail3=$this->input->post('img_thumbnail3');
		if(empty($img_thumbnail3)){
			$img_thumbnail3="data/def_slider.png";	
		}
		
		$img_thumbnail4=$this->input->post('img_thumbnail4');
		if(empty($img_thumbnail4)){
			$img_thumbnail4="data/def_slider.png";	
		}
		
		$img_thumbnail5=$this->input->post('img_thumbnail5');
		if(empty($img_thumbnail5)){
			$img_thumbnail5="data/def_slider.png";	
		}
		
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_gallery=$this->input->post('id_gallery');
		}
		if($acti=='add'){
			$res=$this->Gallery_model->ins_gallery($title,$img_thumbnail1,$img_thumbnail2,$img_thumbnail3,$img_thumbnail4,$img_thumbnail5,$date_create,$user_id);
		}else{
			$res=$this->Gallery_model->upd_gallery($id_gallery,$title,$img_thumbnail1,$img_thumbnail2,$img_thumbnail3,$img_thumbnail4,$img_thumbnail5,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function get_data_gallery(){
		$id_gallery=$this->input->post('id_gallery');
		$gl=$this->Gallery_model->get_gallery1($id_gallery);
		if($gl->num_rows()==1){
			foreach($gl->result() as $gallery){
				$dpath1=$gallery->img_thumbnail1;
				if(! file_exists('../'.$gallery->img_thumbnail1)){
					$this->Gallery_model->upd_gallery1($id_gallery,'data/def_slider.png');
					$dpath1='data/def_slider.png';
				}

				$dpath2=$gallery->img_thumbnail2;
				if(! file_exists('../'.$gallery->img_thumbnail2)){
					$this->Gallery_model->upd_gallery2($id_gallery,'data/def_slider.png');
					$dpath2='data/def_slider.png';
				}

				$dpath3=$gallery->img_thumbnail3;
				if(! file_exists('../'.$gallery->img_thumbnail3)){
					$this->Gallery_model->upd_gallery3($id_gallery,'data/def_slider.png');
					$dpath3='data/def_slider.png';
				}

				$dpath4=$gallery->img_thumbnail4;
				if(! file_exists('../'.$gallery->img_thumbnail4)){
					$this->Gallery_model->upd_gallery4($id_gallery,'data/def_slider.png');
					$dpath4='data/def_slider.png';
				}

				$dpath5=$gallery->img_thumbnail5;
				if(! file_exists('../'.$gallery->img_thumbnail5)){
					$this->Gallery_model->upd_gallery5($id_gallery,'data/def_slider.png');
					$dpath5='data/def_slider.png';
				}
				
				$ec=$gallery->title."!-delimiter-!".$dpath1."!-delimiter-!".$dpath2."!-delimiter-!".$dpath3."!-delimiter-!".$dpath4."!-delimiter-!".$dpath5;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function detail_gallery($id_gallery=0){
		$gl=$this->Gallery_model->get_gallery1($id_gallery);
		if($gl->num_rows()==1){
			foreach($gl->result() as $gallery){
				echo "<h1>".$gallery->title."</h1>";
				echo "<b>ID Destinasi</b> : ".$id_gallery."<br/>";
				echo "<b>Title</b> : ".strip_tags($gallery->title)."<br/>";
				echo "<div style='margin:0 auto; text-align:center;'><b>Image 1</b><br><img src='../".$gallery->img_thumbnail1."' style='width:300px; margin-top:8px;'/></div><br/>";
				echo "<div style='margin:0 auto; text-align:center;'><b>Image 2</b><br><img src='../".$gallery->img_thumbnail2."' style='width:300px; margin-top:8'/></div><br/>";
				echo "<div style='margin:0 auto; text-align:center;'><b>Image 3</b><br><img src='../".$gallery->img_thumbnail3."' style='width:300px; margin-top:8'/></div><br/>";
				echo "<div style='margin:0 auto; text-align:center;'><b>Image 4</b><br><img src='../".$gallery->img_thumbnail4."' style='width:300px; margin-top:8'/></div><br/>";
				echo "<div style='margin:0 auto; text-align:center;'><b>Image 5</b><br><img src='../".$gallery->img_thumbnail5."' style='width:300px; margin-top:8'/></div><br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($gallery->date_create))."<br/>";
				echo "<b>Status</b> : ".$gallery->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar gallery</a></div><br>";
			}
		}else{
			echo "tidak ada data gallery";	
		}
	}
	
	function delete_gallery(){		
		$id_gallery = $this->input->post('id');
		
		$res1=$this->Gallery_model->get_mypath1($id_gallery);
		if($res1->num_rows()>0){
			$path1=$res1->row()->img_thumbnail1;	
		}

		$res2=$this->Gallery_model->get_mypath2($id_gallery);
		if($res2->num_rows()>0){
			$path2=$res2->row()->img_thumbnail2;	
		}
		
		$res3=$this->Gallery_model->get_mypath3($id_gallery);
		if($res3->num_rows()>0){
			$path3=$res3->row()->img_thumbnail3;	
		}
		
		$res4=$this->Gallery_model->get_mypath4($id_gallery);
		if($res4->num_rows()>0){
			$path4=$res4->row()->img_thumbnail4;
		}
		
		$res5=$this->Gallery_model->get_mypath5($id_gallery);
		if($res5->num_rows()>0){
			$path5=$res5->row()->img_thumbnail5;	
		}
		
		$this->db->trans_start();
		$this->Gallery_model->delete_gallery($id_gallery);
		$this->db->trans_complete();
		if ($this->db->trans_status() !== FALSE){
			if($path1!='data/def_slider.png'){
				$path1="../".$path1;
				if(file_exists($path1)){
					unlink($path1);
				}
			}
			
			if($path2!='data/def_slider.png'){
				$path2="../".$path2;
				if(file_exists($path2)){
					unlink($path2);
				}
			}
			
			if($path3!='data/def_slider.png'){
				$path3="../".$path3;
				if(file_exists($path3)){
					unlink($path3);
				}
			}
			
			if($path4!='data/def_slider.png'){
				$path4="../".$path4;
				if(file_exists($path4)){
					unlink($path4);
				}
			}
			
			if($path5!='data/def_slider.png'){
				$path5="../".$path5;
				if(file_exists($path5)){
					unlink($path5);
				}
			}
			
			echo "1";
		}else{
			echo "0";
		}
	}
}



/* End of file gallery.php */

/* Location: ./application/controllers/gallery.php */