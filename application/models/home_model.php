<?php

class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_seminar()
	{
		$this->db->select('id_seminar,title,content');
		$this->db->order_by('id_seminar','desc');
		$this->db->limit(4);
		$result = $this->db->get('seminar');
		return $result;
	}

	function get_agenda()
	{
		$this->db->select('id_agenda,title');
		$this->db->order_by('id_agenda','desc');
		$this->db->limit(1);
		$result = $this->db->get('agenda');
		return $result;
	}

	function get_lowongan_kerja()
	{
		$this->db->select('id_lowongan_kerja,title');
		$this->db->where('status','active');
		$this->db->order_by('id_lowongan_kerja','desc');
		$this->db->limit(1);
		$result = $this->db->get('lowongan_kerja');
		return $result;
	}

	function get_lowongan_kerja_cycle()
	{
		$this->db->select('id_lowongan_kerja,title,content,thumbnail');
		$this->db->where('status','active');
		$this->db->order_by('id_lowongan_kerja','desc');
		$this->db->limit(4);
		$result = $this->db->get('lowongan_kerja');
		return $result;
	}

	function get_page($id_page)
	{
		$this->db->select('id_page,title,meta_keywords,meta_description,content');
		$this->db->where('id_page',$id_page);
		$result = $this->db->get('page');
		return $result;
	}

	function get_berita()
	{
		$this->db->select('id_berita,title,content,thumbnail');
		$this->db->order_by('id_berita','desc');
		$result = $this->db->get('berita',8,0);
		return $result;
	}

	function get_slider()
	{
		$this->db->select('title,link,img_path');
		$this->db->order_by('id_slider','desc');
		$result = $this->db->get('slider_home');
		return $result;
	}

	function get_jurusan()
	{
		$this->db->select('nama_jurusan,link_jurusan');
		$this->db->where('status','active');
		$this->db->order_by('id_jurusan','asc');
		$result = $this->db->get('jurusan');
		return $result;
	}

	function get_elearning()
	{
		$this->db->select('nama,link');
		$this->db->where('status','active');
		$this->db->order_by('id_elearning','asc');
		$result = $this->db->get('elearning');
		return $result;
	}

	function get_fasilitas()
	{
		$this->db->select('id_fasilitas,nama');
		$this->db->where('status','active');
		$this->db->limit(8);
		$this->db->order_by('id_fasilitas','desc');
		$result = $this->db->get('fasilitas');
		return $result;
	}

	function get_tautan()
	{
		$this->db->select('title,link');
		$this->db->where('status','active');
		$this->db->limit(8);
		$this->db->order_by('id_tautan','desc');
		$result = $this->db->get('tautan');
		return $result;
	}

	function get_berita_terbaru()
	{
		$this->db->select('id_berita,title,thumbnail,content');
		$this->db->order_by('id_berita','desc');
		$this->db->limit(1);
		$result = $this->db->get('berita');
		return $result;
	}

	function get_galeri()
	{
		$this->db->select('image_title,image_path');
		$this->db->order_by('id_image','RANDOM');
		$this->db->limit(4);
		$result = $this->db->get('galeri');
		return $result;
	}

	/*
	function get_seminar_terbaru()
	{
		$this->db->select('id_seminar,title,content,thumbnail,date');
		$this->db->order_by('id_seminar','desc');
		$this->db->limit(1);
		$result = $this->db->get('seminar');
		return $result;
	}
	*/

	function get_agenda_terbaru()
	{
		$this->db->select('id_agenda,title,content,thumbnail,date');
		$this->db->order_by('id_agenda','desc');
		$this->db->limit(1);
		$result = $this->db->get('agenda');
		return $result;
	}

	function get_layanan_pelatihan()
	{
		$this->db->select('id_layanan_pelatihan,title,content,thumbnail,date');
		$this->db->order_by('id_layanan_pelatihan','desc');
		$this->db->limit(1);
		$result = $this->db->get('layanan_pelatihan');
		return $result;
	}
}

/* End of File : home_model.php */
/* Location : ./models/home_model.php */