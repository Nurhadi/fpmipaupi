<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
		//$this->output->enable_profiler(true);
	}
	
	function index()
	{
		if(!$this->session->userdata('log_in')){
			redirect('login');
		}else{
			$data['title']='Home';
			
			$p=$this->Beranda_model->get_page2(6);
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
			
			$contact_item = $this->Beranda_model->get_contact_item();
			if($contact_item->num_rows() > 0)
			{
				foreach($contact_item->result() as $data_ci)
				{
					$data['yahoo1'] = $data_ci->yahoo_1;
					$data['yahoo2'] = $data_ci->yahoo_2;
					$data['gmail'] = $data_ci->gmail;
					$data['facebook'] = $data_ci->facebook;
					$data['twitter'] = $data_ci->twitter;
					$data['blackberry'] = $data_ci->blackberry;
					$data['handphone'] = $data_ci->handphone;
					$data['whatsapp'] = $data_ci->whatsapp;
					$data['address'] = $data_ci->address;
					$data['teks'] = $data_ci->teks_berjalan;
				}
			}
		
			$si=$this->Beranda_model->get_slider();
			$data['si']=$si;
			
			$this->load->helper('string');
			$this->load->view('beranda_view',$data);
		}
	}
	
	function save_slider(){
		$user_id=$this->session->userdata('user_id');
		$mytitle=$this->input->post('mytitle');
		$mykeyword=$this->input->post('mykeyword');
		$mydesc=$this->input->post('mydesc');
		$mylink=$this->input->post('mylink');
		$mypath=$this->input->post('mypath');
		if(empty($mypath)){
			$mypath="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$slider_id=$this->input->post('slider_id');
		}
		if($acti=='add'){
			$res=$this->Beranda_model->ins_slider($mytitle,$mylink,$mykeyword,$mydesc,$mypath,$user_id);
		}else{
			$res=$this->Beranda_model->upd_slider($mytitle,$mylink,$mykeyword,$mydesc,$mypath,$user_id,$slider_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";	
		}
	}
	
	function save_text_content(){
		$content=$this->input->post('text');
		$res=$this->Beranda_model->save_text_content($content);
		if($res){
			echo '1';
		}else{
			echo '0';
		}
	}
	
	function upload_slider(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/slider/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/slider/'.$random_digit.'.'.$exts;
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
	
	function load_image($path='',$path_dir='',$image='',$lebar=0,$tinggi=0){
		ob_start();
		echo '<img src="'.base_url('addscripts/ubah_ukuran_gambar.php?image=http://fpmipa.upi.edu/'.$path.'/'.$path_dir.'/'.$image.'&lebar='.$lebar.'&tinggi='.$tinggi).'">';
		ob_end_flush();
	}
	
	function upload_bi(){
		$user_id=$this->session->userdata('user_id');
		$beranda_id=$this->input->post('beranda_id');
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		if(isset($_FILES['myfile'])){
			$destination_path = '../data/';
			$random_digit=rand(0000000000,9999999999);
			$file_name=$_FILES['myfile']['name'];
			$file_up=pathinfo($file_name);
			$exts=$file_up['extension'];
			$dir_s=$_FILES['myfile']['tmp_name'];  
			$target_path = $destination_path .$random_digit.'.'.$exts;
			$link_doc='data/'.$random_digit.'.'.$exts;
			$ext =array('jpeg','jpg','png','gif');
		}
		
		$error=0;
		$error_title=0;
		$error_desc=0;
		$error_image=0;
		
		if(empty($title)){
			$error=1;
			$error_title=1;
		}
		
		if(empty($description)){
			$error=1;
			$error_desc=1;
		}
		
		if(isset($_FILES['myfile'])){
			if(!in_array(($exts),$ext)){
				$error=1;
				$error_image=1;
			}
		}
		
		if($error){
			echo '0|'.$error_title.'|'.$error_desc.'|'.$error_image;
		}else{
			if(isset($_FILES['myfile'])){
				if(move_uploaded_file($dir_s, $target_path)){
					
					$size=getimagesize($target_path);
					if($size[0]>163 OR $size[1]>163){
						$this->load->library('image_lib');
						$max_width=163;
						$max_height=163;
						$width=$size[0];
						$height=$size[1];
						$x_ratio=$max_width/$width;
						$y_ratio=$max_height/$height;
						if(($width<=$max_width)&&($height<=$max_height)){
						$tn_width=$width;
						$tn_height=$height;
						}
						else if(($x_ratio*$height)<$max_height){
						$tn_height=ceil($x_ratio*$height);
						$tn_width=$max_width;
						}
						else{
						$tn_width=ceil($y_ratio*$width);
						$tn_height=$max_height;
						}
						
						if($tn_width<163){
							$config['master_dim']='width';
						}else{
							$config['master_dim']='height';
						}
						
						$config['source_image'] = $target_path;
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = TRUE;
						$config['width'] = 163;
						$config['height'] = 163;
						$config['quality'] = '80%';
						$this->image_lib->initialize($config);
						$this->image_lib->resize();
						
						if($tn_width!=$tn_height){
							$myfl=pathinfo($target_path);
							$src = $target_path;
							$newname = $target_path;
							if(($myfl['extension']=='jpg')||($myfl['extension']=='jpeg'))
							$img_r = imagecreatefromjpeg($src);
							else if($myfl['extension']=='png')
							$img_r = imagecreatefrompng($src);
							else if($myfl['extension']=='gif')
							$img_r = imagecreatefromgif($src);
							$dst_r = imagecreatetruecolor( 163, 163 );

							imagecopyresampled($dst_r,$img_r,0,0,0,0,163,163,163,163);
							if(($myfl['extension']=='jpg')||($myfl['extension']=='jpeg'))
							imagejpeg($dst_r,$newname,100);
							else if($myfl['extension']=='png')
							imagepng($dst_r,$newname);
							else if($myfl['extension']=='gif')
							imagegif($dst_r,$newname);
							imagedestroy($dst_r);
							imagedestroy($img_r);
						}
					}
					
					$res=$this->Beranda_model->upd_data($title,$description,$link_doc,$user_id,$beranda_id);
					if($res){
						echo '1|'.$beranda_id;
					}else{
						echo '3';	
					}
				}else{
					echo '2';
				}
			}else{
				$res=$this->Beranda_model->upd_data2($title,$description,$user_id,$beranda_id);
				if($res){
					echo '1|'.$beranda_id;
				}else{
					echo '3';	
				}
			}
		}
	}
	
	function detail_slider($slider_id=0){
		$si=$this->Beranda_model->get_slider2($slider_id);
		if($si->num_rows()==1){
			foreach($si->result() as $slider){
				echo "<h1>".$slider->mytitle."</h1>";
				echo "<div id=img_prev><img src='".base_url('addscripts/ubah_ukuran_gambar.php?image=http://localhost/fpmipa2_server/'.$slider->mypath.'&lebar=872&tinggi=872')."' /></div>";
				echo "<b>Slider ID</b> : ".$slider_id."<br/>";
				echo "<b>Title</b> : ".strip_tags($slider->mytitle)."<br/>";
				echo "<b>Link To</b> : <a href='../".$slider->mylink."' target='_blank'>".$slider->mylink."</a><br/>";
				echo "<b>Keyword</b> : ".$slider->mykeyword."<br/>";
				echo "<b>Short Description</b> : <br/>".$slider->mydesc."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar slider</a></div>";
			}
		}else{
			echo "tidak ada data slider";	
		}
	}
	
	function get_data_slider(){
		$slider_id=$this->input->post('slider_id');
		$si=$this->Beranda_model->get_slider2($slider_id);
		if($si->num_rows()==1){
			foreach($si->result() as $slider){
				$dpath=$slider->mypath;
				if(! file_exists('../'.$slider->mypath)){
					$this->Beranda_model->upd_slider2($slider_id,'data/slider/def_slider.png');
					$dpath='data/slider/def_slider.png';
				}					
				$ec=$slider->mytitle."!-delimiter-!".$slider->mykeyword."!-delimiter-!".$dpath."!-delimiter-!".$slider->mydesc."!-delimiter-!".$slider->mylink;
				echo $ec;
			}
		}else{
			echo "tidak ada data slider";	
		}
	}
	
	function del_img(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../".$link_doc)){
			echo "1";	
		}else{
			echo "0";	
		}
	}
	
	function del_img_um(){
		$link_doc=$this->input->post('link_doc');
		$del_img_um = $this->Beranda_model->delete_img_um($link_doc);
		if(unlink("../".$link_doc)){			
			echo "1";	
		}else{
			echo "0";	
		}
	}

	function del_img_um_ins(){
		$link_doc=$this->input->post('link_doc');
		if(unlink("../".$link_doc)){
			echo "1";	
		}else{
			echo "0";	
		}
	}
	
	function delete_slider(){		
		$slider_id=$this->input->post('id');
		$res2=$this->Beranda_model->get_mypath($slider_id);
		if($res2->num_rows()>0){
			$path=$res2->row()->mypath;	
		}
		$this->db->trans_start();
		$this->Beranda_model->delete_slider($slider_id);
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
	
	function save_beranda_text(){
		$beranda_id=$this->input->post('beranda_id');
		$content=$this->input->post('text');
		$res=$this->Beranda_model->save_content($content,$beranda_id);
		if($res){
			echo '1';
		}else{
			echo '0';
		}
	}
	
	function save_beranda_text2(){
		$beranda_id=$this->input->post('beranda_id');
		$content=$this->input->post('text2');
		$res=$this->Beranda_model->save_content2($content,$beranda_id);
		if($res){
			echo '1';
		}else{
			echo '0';
		}
	}
	
	function upload_big_image(){
		if(isset($_FILES['myfile'])){
			$destination_path = '../data/big_image/';
			$random_digit=rand(0000000000,9999999999);
			$file_name=$_FILES['myfile']['name'];
			$id_page=$_POST['id_page'];
			$file_up=pathinfo($file_name);
			$exts=$file_up['extension'];
			$dir_s=$_FILES['myfile']['tmp_name'];  
			$target_path = $destination_path .$random_digit.'.'.$exts;
			$link_doc='data/big_image/'.$random_digit.'.'.$exts;
			$ext =array('jpeg','jpg','png','gif');
		}
		
		if(empty($file_name))
		{ 
			$result=0;
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
					$img_filename = $this->Beranda_model->get_image_filename($id_page);
					$path = '../'.$img_filename;
					if(file_exists($path)){
						unlink($path);
					}
					$res=$this->Beranda_model->save_image_path($id_page,$link_doc);
				
					if($res){
						$result=1;
					}else{
						$result=5;	
					}
				}			
				else
					$result=0;
			}
		}

		echo $result.','.$link_doc;
	}
}

/* End of file beranda.php */
/* Location: ./application/controllers/beranda.php */