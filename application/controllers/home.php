<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		//$this->output->enable_profiler(true);
	}

	function index()
	{
		$page = $this->home_model->get_page('0000001');
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
		$berita = $this->home_model->get_berita();
		$data['berita'] = $berita;
		// if($berita->num_rows() > 0)
		// {
		// 	foreach($berita->result() as $data_berita)
		// 	{
		// 		$id_berita = $data_berita->id_berita;
		// 		$title = $data_berita->title;
				// $data['berita'] .= '<div style="border-bottom:1px solid #bbb;"><a href="'.site_url('berita/'.url_title($title).'/'.$id_berita).'" class="list_link">'.$title.'</a></div>';
		// 	}
		// }

		$data['slider'] = '';
		$slider = $this->home_model->get_slider();
		if($slider->num_rows() > 0)
		{
			foreach($slider->result() as $data_slider)
			{
				$title_slider = $data_slider->title;
				$link_slider = $data_slider->link;
				$img_path = $data_slider->img_path;
				$data['slider'] .= '<a href="'.$link_slider.'"><img src="'.base_url($img_path).'"/></a>';
			}
		}

		$data['jurusan'] = '';
		$jurusan = $this->home_model->get_jurusan();
		if($jurusan->num_rows() > 0)
		{
			foreach($jurusan->result() as $data_jurusan)
			{
				$nama_jurusan = $data_jurusan->nama_jurusan;
				$link_jurusan = $data_jurusan->link_jurusan;
				$data['jurusan'] .= '<div class="child_mainmenu2"><a href="'.$link_jurusan.'" target="_blank">'.$nama_jurusan.'</a></div>';
			}
		}

		$data['elearning'] = '';
		$elearning = $this->home_model->get_elearning();
		if($elearning->num_rows() > 0)
		{
			foreach($elearning->result() as $data_elearning)
			{
				$nama = $data_elearning->nama;
				$link = $data_elearning->link;
				$data['elearning'] .= '<div class="child_mainmenu2"><a href="'.$link.'" target="_blank">'.$nama.'</a></div>';
			}
		}

		$data['fasilitas'] = '';
		$fasilitas = $this->home_model->get_fasilitas();
		if($fasilitas->num_rows() > 0)
		{
			foreach($fasilitas->result() as $data_fasilitas)
			{
				$id_fasilitas = $data_fasilitas->id_fasilitas;
				$nama = $data_fasilitas->nama;
				$data['fasilitas'] .= '<div class="child_mainmenu2"><a href="'.site_url('fasilitas/'.url_title($nama).'/'.$id_fasilitas).'" target="_blank">'.$nama.'</a></div>';
			}
		}

		$data['tautan'] = '';
		$tautan = $this->home_model->get_tautan();
		if($tautan->num_rows() > 0)
		{
			foreach($tautan->result() as $data_tautan)
			{
				$nama = $data_tautan->title;
				$link = $data_tautan->link;
				$data['tautan'] .= '<div class="child_mainmenu2"><a href="'.$link.'" target="_blank">'.$nama.'</a></div>';
			}
		}

		/* diganti seminar
		$berita_terbaru = $this->home_model->get_berita_terbaru();
		if($berita_terbaru->num_rows() > 0)
		{
			foreach($berita_terbaru->result() as $data_berita_terbaru)
			{
				$data['id_berita_terbaru'] = $data_berita_terbaru->id_berita;
				$data['title_berita_terbaru'] = $data_berita_terbaru->title;
				if($data_berita_terbaru->thumbnail == '')
				{
					$data['thumbnail'] = 'data/berita_thumbnail/box_image.png';
				}
				else
				{
					$data['thumbnail'] = $data_berita_terbaru->thumbnail;
				}
				$content = $data_berita_terbaru->content;
				$data['content_limiter'] = character_limiter($content, 160);
			}
		}
		*/

		/*
		$seminar_terbaru = $this->home_model->get_seminar_terbaru();
		$data['count_seminar_terbaru'] = $seminar_terbaru->num_rows();
		if($seminar_terbaru->num_rows() > 0)
		{
			foreach($seminar_terbaru->result() as $data_seminar_terbaru)
			{
				$date = strtotime($data_seminar_terbaru->date);
				$today = strtotime(date('Y-m-d'));
				if($date < $today)
				{
					$data['id_seminar_terbaru'] = $data_seminar_terbaru->id_seminar;
					$data['title_seminar_terbaru'] = $data_seminar_terbaru->title;
					$data['content_seminar_terbaru'] = character_limiter($data_seminar_terbaru->content,160);
					$data['thumbnail_seminar'] = $data_seminar_terbaru->thumbnail;
				}
				else
				{
					$data['id_seminar_terbaru'] = '';
					$data['title_seminar_terbaru'] = '';
					$data['content_seminar_terbaru'] = '<p>Dapatkan berita terbaru mengenai event Seminar yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
					$data['thumbnail_seminar'] = 'data/berita_thumbnail/berita.png';
				}
			}
		}
		else
		{
			$data['id_seminar_terbaru'] = '';
			$data['title_seminar_terbaru'] = '';
			$data['content_seminar_terbaru'] = '<p>Dapatkan berita terbaru mengenai event Seminar yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
			$data['thumbnail_seminar'] = 'data/berita_thumbnail/berita.png';
		}
		*/

		$data['seminar'] = '';
		$seminar = $this->home_model->get_seminar();
		$data['cycle_seminar'] = $seminar;
		if($seminar->num_rows() > 0)
		{
			foreach($seminar->result() as $data_seminar)
			{
				$id_seminar = $data_seminar->id_seminar;
				$title = $data_seminar->title;
				$data['seminar'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('seminar/'.url_title($title).'/'.$id_seminar).'">'.$title.'</a></div>';
				// $data['seminar'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('seminar/'.url_title($title).'/'.$id_seminar).'" class="list_link">'.$title.'</a></div>';
			}
		}
		else
		{
			$data['agenda'] = 'Tidak ada seminar untuk saat ini';
		}

		/*
		$agenda_terbaru = $this->home_model->get_agenda_terbaru();
		$data['count_agenda_terbaru'] = $agenda_terbaru->num_rows();
		if($agenda_terbaru->num_rows() > 0)
		{
			foreach($agenda_terbaru->result() as $data_agenda_terbaru)
			{
				$date = strtotime($data_agenda_terbaru->date);
				$today = strtotime(date('Y-m-d'));
				if($date < $today)
				{
					$data['id_agenda_terbaru'] = $data_agenda_terbaru->id_agenda;
					$data['title_agenda_terbaru'] = $data_agenda_terbaru->title;
					$data['content_agenda_terbaru'] = character_limiter($data_agenda_terbaru->content,160);
					$data['thumbnail_agenda'] = $data_agenda_terbaru->thumbnail;
				}
				else
				{
					$data['count_agenda_terbaru'] = 0;
					$data['id_agenda_terbaru'] = '';
					$data['title_agenda_terbaru'] = '';
					$data['content_agenda_terbaru'] = '<p>Dapatkan info terbaru mengenai agenda kegiatan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
					$data['thumbnail_agenda'] = 'data/agenda_thumbnail/agenda1.jpg';
				}
			}
		}
		else
		{
			$data['id_agenda_terbaru'] = '';
			$data['title_agenda_terbaru'] = '';
			$data['content_agenda_terbaru'] = '<p>Dapatkan info terbaru mengenai agenda kegiatan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
			$data['thumbnail_agenda'] = 'data/agenda_thumbnail/agenda1.jpg';
		}
		*/

		$data['agenda'] = '';
		$agenda = $this->home_model->get_agenda();
		if($agenda->num_rows() > 0)
		{
			foreach($agenda->result() as $data_agenda)
			{
				$id_agenda = $data_agenda->id_agenda;
				$title = $data_agenda->title;

				// $data['agenda'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('agenda/'.url_title($title).'/'.$id_agenda).'">'.$title.'</a></div>';
				$data['agenda'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('agenda/'.url_title($title).'/'.$id_agenda).'" class="list_link" style="color:#fff;">'.$title.'</a></div>';
			}
		}
		else
		{
			$data['agenda'] = 'Tidak ada agenda untuk saat ini';
		}

		$layanan_pelatihan = $this->home_model->get_layanan_pelatihan();
		$data['count_layanan_pelatihan'] = $layanan_pelatihan->num_rows();
		if($layanan_pelatihan->num_rows() > 0)
		{
			foreach($layanan_pelatihan->result() as $data_layanan_pelatihan)
			{
				$date = strtotime($data_layanan_pelatihan->date);
				$today = strtotime(date('Y-m-d'));
				if($date < $today)
				{
					$data['id_layanan_pelatihan'] = $data_layanan_pelatihan->id_layanan_pelatihan;
					$data['title_layanan_pelatihan'] = $data_layanan_pelatihan->title;
					$data['content_layanan_pelatihan'] = character_limiter($data_layanan_pelatihan->content,185);
					$data['thumbnail_layanan_pelatihan'] = $data_layanan_pelatihan->thumbnail;
				}
				else
				{
					$data['id_layanan_pelatihan'] = '';
					$data['title_layanan_pelatihan'] = '';
					$data['content_layanan_pelatihan'] = '<p>Dapatkan info terbaru mengenai layanan pelatihan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
					$data['thumbnail_layanan_pelatihan'] = 'data/layanan_pelatihan_thumbnail/layanan_pelatihan.jpg';
				}
			}
		}
		else
		{
			$data['id_layanan_pelatihan'] = '';
			$data['title_layanan_pelatihan'] = '';
			$data['content_layanan_pelatihan'] = '<p>Dapatkan info terbaru mengenai layanan pelatihan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
			$data['thumbnail_layanan_pelatihan'] = 'data/layanan_pelatihan_thumbnail/layanan_pelatihan.jpg';
		}

		$data['lowongan_kerja'] = '';
		$lowongan_kerja = $this->home_model->get_lowongan_kerja();
		$data['cycle_lowongan_kerja'] = $this->home_model->get_lowongan_kerja_cycle();
		if($lowongan_kerja->num_rows() > 0)
		{
			foreach($lowongan_kerja->result() as $data_lowongan_kerja)
			{
				$id_lowongan_kerja = $data_lowongan_kerja->id_lowongan_kerja;
				$title = $data_lowongan_kerja->title;

				// $data['lowongan_kerja'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('lowongan_kerja/'.url_title($title).'/'.$id_lowongan_kerja).'">'.$title.'</a></div>';
				$data['lowongan_kerja'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('lowongan_kerja/'.url_title($title).'/'.$id_lowongan_kerja).'" class="list_link" style="color:#fff;">'.$title.'</a></div>';
			}
		}
		else
		{
			$data['lowongan_kerja'] = 'Tidak ada lowongan kerja untuk saat ini';
		}

		$data['galeri'] = '';
		$galeri = $this->home_model->get_galeri();
		$data['cycle_galeri'] = $galeri;
		if($galeri->num_rows() > 0)
		{
			$i = 1;
			foreach($galeri->result() as $data_galeri)
			{
				$image_title = $data_galeri->image_title;
				$image_path = $data_galeri->image_path;
				$data['galeri'] .= '<div id="box_bottom'.$i.'">
										<a class="fancybox" href="'.base_url($image_path).'" data-fancybox-group="gallery" title="'.$image_title.'">
											<img src="'.base_url($image_path).'" width="210" height="130"/>
										</a>
									</div>';
				$i = $i + 1;
			}
		}

		$this->load->view('home_view',$data);
	}

	function home_testing()
	{
		$page = $this->home_model->get_page('0000001');
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
		$berita = $this->home_model->get_berita();
		$data['berita'] = $berita;
		// if($berita->num_rows() > 0)
		// {
		// 	foreach($berita->result() as $data_berita)
		// 	{
		// 		$id_berita = $data_berita->id_berita;
		// 		$title = $data_berita->title;
				// $data['berita'] .= '<div style="border-bottom:1px solid #bbb;"><a href="'.site_url('berita/'.url_title($title).'/'.$id_berita).'" class="list_link">'.$title.'</a></div>';
		// 	}
		// }

		$data['slider'] = '';
		$slider = $this->home_model->get_slider();
		if($slider->num_rows() > 0)
		{
			foreach($slider->result() as $data_slider)
			{
				$title_slider = $data_slider->title;
				$link_slider = $data_slider->link;
				$img_path = $data_slider->img_path;
				$data['slider'] .= '<a href="'.$link_slider.'"><img src="'.base_url($img_path).'" style="width:600px; height:255px !important;"/></a>';
			}
		}

		$data['jurusan'] = '';
		$jurusan = $this->home_model->get_jurusan();
		if($jurusan->num_rows() > 0)
		{
			foreach($jurusan->result() as $data_jurusan)
			{
				$nama_jurusan = $data_jurusan->nama_jurusan;
				$link_jurusan = $data_jurusan->link_jurusan;
				$data['jurusan'] .= '<div class="child_mainmenu2"><a href="'.$link_jurusan.'" target="_blank">'.$nama_jurusan.'</a></div>';
			}
		}

		$data['elearning'] = '';
		$elearning = $this->home_model->get_elearning();
		if($elearning->num_rows() > 0)
		{
			foreach($elearning->result() as $data_elearning)
			{
				$nama = $data_elearning->nama;
				$link = $data_elearning->link;
				$data['elearning'] .= '<div class="child_mainmenu2"><a href="'.$link.'" target="_blank">'.$nama.'</a></div>';
			}
		}

		$data['fasilitas'] = '';
		$fasilitas = $this->home_model->get_fasilitas();
		if($fasilitas->num_rows() > 0)
		{
			foreach($fasilitas->result() as $data_fasilitas)
			{
				$id_fasilitas = $data_fasilitas->id_fasilitas;
				$nama = $data_fasilitas->nama;
				$data['fasilitas'] .= '<div class="child_mainmenu2"><a href="'.site_url('fasilitas/'.url_title($nama).'/'.$id_fasilitas).'" target="_blank">'.$nama.'</a></div>';
			}
		}

		$data['tautan'] = '';
		$tautan = $this->home_model->get_tautan();
		if($tautan->num_rows() > 0)
		{
			foreach($tautan->result() as $data_tautan)
			{
				$nama = $data_tautan->title;
				$link = $data_tautan->link;
				$data['tautan'] .= '<div class="child_mainmenu2"><a href="'.$link.'" target="_blank">'.$nama.'</a></div>';
			}
		}

		/* diganti seminar
		$berita_terbaru = $this->home_model->get_berita_terbaru();
		if($berita_terbaru->num_rows() > 0)
		{
			foreach($berita_terbaru->result() as $data_berita_terbaru)
			{
				$data['id_berita_terbaru'] = $data_berita_terbaru->id_berita;
				$data['title_berita_terbaru'] = $data_berita_terbaru->title;
				if($data_berita_terbaru->thumbnail == '')
				{
					$data['thumbnail'] = 'data/berita_thumbnail/box_image.png';
				}
				else
				{
					$data['thumbnail'] = $data_berita_terbaru->thumbnail;
				}
				$content = $data_berita_terbaru->content;
				$data['content_limiter'] = character_limiter($content, 160);
			}
		}
		*/

		/*
		$seminar_terbaru = $this->home_model->get_seminar_terbaru();
		$data['count_seminar_terbaru'] = $seminar_terbaru->num_rows();
		if($seminar_terbaru->num_rows() > 0)
		{
			foreach($seminar_terbaru->result() as $data_seminar_terbaru)
			{
				$date = strtotime($data_seminar_terbaru->date);
				$today = strtotime(date('Y-m-d'));
				if($date < $today)
				{
					$data['id_seminar_terbaru'] = $data_seminar_terbaru->id_seminar;
					$data['title_seminar_terbaru'] = $data_seminar_terbaru->title;
					$data['content_seminar_terbaru'] = character_limiter($data_seminar_terbaru->content,160);
					$data['thumbnail_seminar'] = $data_seminar_terbaru->thumbnail;
				}
				else
				{
					$data['id_seminar_terbaru'] = '';
					$data['title_seminar_terbaru'] = '';
					$data['content_seminar_terbaru'] = '<p>Dapatkan berita terbaru mengenai event Seminar yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
					$data['thumbnail_seminar'] = 'data/berita_thumbnail/berita.png';
				}
			}
		}
		else
		{
			$data['id_seminar_terbaru'] = '';
			$data['title_seminar_terbaru'] = '';
			$data['content_seminar_terbaru'] = '<p>Dapatkan berita terbaru mengenai event Seminar yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
			$data['thumbnail_seminar'] = 'data/berita_thumbnail/berita.png';
		}
		*/

		$data['seminar'] = '';
		$seminar = $this->home_model->get_seminar();
		if($seminar->num_rows() > 0)
		{
			foreach($seminar->result() as $data_seminar)
			{
				$id_seminar = $data_seminar->id_seminar;
				$title = $data_seminar->title;
				$data['seminar'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('seminar/'.url_title($title).'/'.$id_seminar).'">'.$title.'</a></div>';
				// $data['seminar'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('seminar/'.url_title($title).'/'.$id_seminar).'" class="list_link">'.$title.'</a></div>';
			}
		}
		else
		{
			$data['agenda'] = 'Tidak ada seminar untuk saat ini';
		}

		/*
		$agenda_terbaru = $this->home_model->get_agenda_terbaru();
		$data['count_agenda_terbaru'] = $agenda_terbaru->num_rows();
		if($agenda_terbaru->num_rows() > 0)
		{
			foreach($agenda_terbaru->result() as $data_agenda_terbaru)
			{
				$date = strtotime($data_agenda_terbaru->date);
				$today = strtotime(date('Y-m-d'));
				if($date < $today)
				{
					$data['id_agenda_terbaru'] = $data_agenda_terbaru->id_agenda;
					$data['title_agenda_terbaru'] = $data_agenda_terbaru->title;
					$data['content_agenda_terbaru'] = character_limiter($data_agenda_terbaru->content,160);
					$data['thumbnail_agenda'] = $data_agenda_terbaru->thumbnail;
				}
				else
				{
					$data['count_agenda_terbaru'] = 0;
					$data['id_agenda_terbaru'] = '';
					$data['title_agenda_terbaru'] = '';
					$data['content_agenda_terbaru'] = '<p>Dapatkan info terbaru mengenai agenda kegiatan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
					$data['thumbnail_agenda'] = 'data/agenda_thumbnail/agenda1.jpg';
				}
			}
		}
		else
		{
			$data['id_agenda_terbaru'] = '';
			$data['title_agenda_terbaru'] = '';
			$data['content_agenda_terbaru'] = '<p>Dapatkan info terbaru mengenai agenda kegiatan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
			$data['thumbnail_agenda'] = 'data/agenda_thumbnail/agenda1.jpg';
		}
		*/

		$data['agenda'] = '';
		$agenda = $this->home_model->get_agenda();
		if($agenda->num_rows() > 0)
		{
			foreach($agenda->result() as $data_agenda)
			{
				$id_agenda = $data_agenda->id_agenda;
				$title = $data_agenda->title;

				// $data['agenda'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('agenda/'.url_title($title).'/'.$id_agenda).'">'.$title.'</a></div>';
				$data['agenda'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('agenda/'.url_title($title).'/'.$id_agenda).'" class="list_link">'.$title.'</a></div>';
			}
		}
		else
		{
			$data['agenda'] = 'Tidak ada agenda untuk saat ini';
		}

		$layanan_pelatihan = $this->home_model->get_layanan_pelatihan();
		$data['count_layanan_pelatihan'] = $layanan_pelatihan->num_rows();
		if($layanan_pelatihan->num_rows() > 0)
		{
			foreach($layanan_pelatihan->result() as $data_layanan_pelatihan)
			{
				$date = strtotime($data_layanan_pelatihan->date);
				$today = strtotime(date('Y-m-d'));
				if($date < $today)
				{
					$data['id_layanan_pelatihan'] = $data_layanan_pelatihan->id_layanan_pelatihan;
					$data['title_layanan_pelatihan'] = $data_layanan_pelatihan->title;
					$data['content_layanan_pelatihan'] = character_limiter($data_layanan_pelatihan->content,185);
					$data['thumbnail_layanan_pelatihan'] = $data_layanan_pelatihan->thumbnail;
				}
				else
				{
					$data['id_layanan_pelatihan'] = '';
					$data['title_layanan_pelatihan'] = '';
					$data['content_layanan_pelatihan'] = '<p>Dapatkan info terbaru mengenai layanan pelatihan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
					$data['thumbnail_layanan_pelatihan'] = 'data/layanan_pelatihan_thumbnail/layanan_pelatihan.jpg';
				}
			}
		}
		else
		{
			$data['id_layanan_pelatihan'] = '';
			$data['title_layanan_pelatihan'] = '';
			$data['content_layanan_pelatihan'] = '<p>Dapatkan info terbaru mengenai layanan pelatihan yang diadakan oleh Fakultas  Pendidikan Matematika dan Ilmu Pengetahuan Alam Universitas Pendidikan Indonesia</p>';
			$data['thumbnail_layanan_pelatihan'] = 'data/layanan_pelatihan_thumbnail/layanan_pelatihan.jpg';
		}

		$data['lowongan_kerja'] = '';
		$lowongan_kerja = $this->home_model->get_lowongan_kerja();
		if($lowongan_kerja->num_rows() > 0)
		{
			foreach($lowongan_kerja->result() as $data_lowongan_kerja)
			{
				$id_lowongan_kerja = $data_lowongan_kerja->id_lowongan_kerja;
				$title = $data_lowongan_kerja->title;

				// $data['lowongan_kerja'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('lowongan_kerja/'.url_title($title).'/'.$id_lowongan_kerja).'">'.$title.'</a></div>';
				$data['lowongan_kerja'] .= '<div style="border-bottom:1px solid #ccc;"><a href="'.site_url('lowongan_kerja/'.url_title($title).'/'.$id_lowongan_kerja).'" class="list_link">'.$title.'</a></div>';
			}
		}
		else
		{
			$data['lowongan_kerja'] = 'Tidak ada lowongan kerja untuk saat ini';
		}

		$data['galeri'] = '';
		$galeri = $this->home_model->get_galeri();
		if($galeri->num_rows() > 0)
		{
			$i = 1;
			foreach($galeri->result() as $data_galeri)
			{
				$image_title = $data_galeri->image_title;
				$image_path = $data_galeri->image_path;
				$data['galeri'] .= '<div id="box_bottom'.$i.'">
										<a class="fancybox" href="'.base_url($image_path).'" data-fancybox-group="gallery" title="'.$image_title.'">
											<img src="'.base_url($image_path).'" width="210" height="130"/>
										</a>
									</div>';
				$i = $i + 1;
			}
		}

		$this->load->view('home_testing_view',$data);
	}
}

/* End of File : home.php */
/* Location : ./controllers/home.php */