<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('berita_model');
	}

	function index()
	{
		$page = $this->home_model->get_page('0000031');
		if($page->num_rows() > 0)
		{
			foreach($page->result() as $data_page)
			{
				$data['title'] = $data_page->title;
				$data['meta_keywords'] = $data_page->meta_keywords;
				$data['meta_description'] = $data_page->meta_description;
				$data['content'] = $data_page->content;
			}
		}

		$data['berita'] = '';
		$berita = $this->berita_model->get_berita();
		if($berita->num_rows() > 0)
		{
			foreach($berita->result() as $data_berita)
			{
				$id_berita = $data_berita->id_berita;
				$title = $data_berita->title;
				$content = $data_berita->content;
				$content_limiter = character_limiter($content, 200);
				$data['berita'] .= '<div class="box_berita" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.9em;">
										<a href="'.site_url('berita/'.url_title($title).'/'.$id_berita).'"><h5>'.$title.'</h5></a>
										<p>'.$content_limiter.' <a href="'.site_url('berita/'.url_title($title).'/'.$id_berita).'">(Selengkapnya...)</a></p>
									</div>';
			}
		}
		else
		{
			$data['berita'] .= '<div class="box_berita" style="padding:20px; padding-bottom:2px; padding-top:0px; font-size:0.9em;">
									<h5 style="color:red;">Empty Page</h5>
								</div>';
		}

		$this->load->view('berita_view',$data);
	}

	function detail_berita()
	{
		$id_berita = $this->uri->segment(3);
		$data['id_berita'] = $id_berita;
		$detail_berita = $this->berita_model->get_detail_berita($id_berita);
		if($detail_berita->num_rows() > 0)
		{
			foreach($detail_berita->result() as $data_detail_berita)
			{
				$data['title'] = $data_detail_berita->title;
				$data['meta_keywords'] = $data_detail_berita->meta_keywords;
				$data['meta_description'] = $data_detail_berita->meta_description;
				$data['content'] = $data_detail_berita->content;
			}
		}
		else
		{
			$data['title'] = 'Berita tidak ditemukan';
			$data['meta_keywords'] = '';
			$data['meta_description'] = '';
			$data['content'] = 'Berita tidak ditemukan';
		}

		$this->load->view('detail_berita_view',$data);
	}
}

/* End of File : berita.php */
/* Location : ./controllers/berita.php */