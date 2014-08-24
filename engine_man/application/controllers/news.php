<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class News extends CI_Controller {



	public function __construct(){

		parent::__construct();

		$this->load->model('News_model');
		$this->load->model('Beranda_model');
		//$this->output->enable_profiler(true);
	}

	

	function index(){

		if(!$this->session->userdata('log_in')){

			redirect('login');

		}else{

			$data['title']='News';

			

			$p=$this->News_model->get_page2(3);

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
			
			$nw=$this->News_model->get_news();
			$data['nw']=$nw;
			
			$this->load->helper('string');

			$this->load->view('news_view',$data);

		}

	}

	function upload_news(){
		$user_id=$this->session->userdata('user_id');
		$destination_path = '../data/news/';
		$random_digit=rand(0000000000,9999999999);
		$file_name=$_FILES['myfile']['name'];
		$file_up=pathinfo($file_name);
		$exts=$file_up['extension'];
		$dir_s=$_FILES['myfile']['tmp_name'];  
		$target_path = $destination_path .$random_digit.'.'.$exts;
		$link_doc='data/news/'.$random_digit.'.'.$exts;
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
	
	function save_news(){
		$user_id=$this->session->userdata('user_id');
		$title=$this->input->post('title');
		$keyword=$this->input->post('keyword');
		$description=$this->input->post('description');
		$content=$this->input->post('content');
		$tags=$this->input->post('tags');
		$date_create = date('Y-m-d H:i:s');
		
		$img_thumbnail=$this->input->post('img_thumbnail');
		if(empty($img_thumbnail)){
			$img_thumbnail="data/def_slider.png";	
		}
		$acti=$this->input->post('acti');
		if($acti=='edit'){
			$id_news=$this->input->post('id_news');
		}
		if($acti=='add'){
			$res=$this->News_model->ins_news($title,$keyword,$description,$content,$tags,$img_thumbnail,$date_create,$user_id);
		}else{
			$res=$this->News_model->upd_news($id_news,$title,$keyword,$description,$content,$tags,$img_thumbnail,$date_create,$user_id);
		}
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}
	
	function get_data_news(){
		$id_news=$this->input->post('id_news');
		$nw=$this->News_model->get_news1($id_news);
		if($nw->num_rows()==1){
			foreach($nw->result() as $news){
				$dpath=$news->img_thumbnail;
				if(! file_exists('../'.$news->img_thumbnail)){
					$this->News_model->upd_news1($id_news,'data/def_slider.png');
					$dpath='data/def_slider.png';
				}					
				$ec=$news->title."!-delimiter-!".$news->meta_keyword."!-delimiter-!".$news->meta_description."!-delimiter-!".$news->content."!-delimiter-!".$news->img_thumbnail."!-delimiter-!".$news->tags;
				echo $ec;
			}
		}else{
			echo "tidak ada data destinasi";	
		}
	}
	
	function detail_news($id_news=0){
		$nw=$this->News_model->get_news1($id_news);
		if($nw->num_rows()==1){
			foreach($nw->result() as $news){
				echo "<h1>".$news->title."</h1>";
				echo "<b>ID Destinasi</b> : ".$id_news."<br/>";
				echo "<b>Title</b> : ".strip_tags($news->title)."<br/>";
				echo "<b>Meta Keyword</b> : ".$news->meta_keyword."<br/>";
				echo "<b>Meta Desription</b> : ".$news->meta_description."<br/>";
				echo "<b>Isi Berita</b> : ".$news->content."<br/>";
				echo "<b>Tags</b> : ".$news->tags."<br/>";
				echo "<b>Date Create</b> : ".date('d-M-Y', strtotime($news->date_create))."<br/>";
				echo "<b>Status</b> : ".$news->status."<br/>";
				echo "<div id='bbutton_container'><a href='#' id='bbutton'>kembali ke daftar news</a></div><br>";
			}
		}else{
			echo "tidak ada data news";	
		}
	}
	
	function delete_news(){		
		$id_news = $this->input->post('id');
		$res2=$this->News_model->get_mypath($id_news);
		if($res2->num_rows()>0){
			$path=$res2->row()->img_thumbnail;	
		}
		$this->db->trans_start();
		$this->News_model->delete_news($id_news);
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



/* End of file news.php */

/* Location: ./application/controllers/news.php */