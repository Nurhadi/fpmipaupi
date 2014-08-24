<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Dosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('dosen_model');
	}
	
	function index()
	{
		$page = $this->home_model->get_page('0000012');	
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
		
		$data['jurusan'] = '';
		$jurusan = $this->dosen_model->get_jurusan();
		if($jurusan->num_rows() > 0)
		{
			$i = 1;
			foreach($jurusan->result() as $data_jurusan)
			{
				$id_jurusan = $data_jurusan->id_jurusan;
				$nama_jurusan = $data_jurusan->nama_jurusan;
				
				if($i == 1)
				{
					$active = 'class="active"';
				}
				else
				{
					$active = '';
				}
				
				$data['jurusan'] .= '<li '.$active.'><a href="#tab'.$i.'" data-toggle="tab">'.$nama_jurusan.'</a></li>';
				
				$i = $i + 1;
			}
		}
		
		$data['javascript_data_table'] = '';
		$data['table_dosen'] = '';
		$jurusan1 = $this->dosen_model->get_jurusan();
		if($jurusan1->num_rows() > 0)
		{
			$j = 1;
			foreach($jurusan1->result() as $data_jurusan1)
			{
				$id_jurusan = $data_jurusan1->id_jurusan;
				
				if($j == 1)
				{
					$active = 'active';
				}
				else
				{
					$active = '';
				}
				
				$data['javascript_data_table'] .= '$("#table_data'.$j.'").dataTable({
														"bAutoWidth": false,
														"bProcessing": true,
														"sPaginationType": "full_numbers",	
														"aaSorting": [[ 0, "asc" ]],
														"fnDrawCallback": function( oSettings ) {
															$(".detail_dosen'.$j.'").click(function(){
																var id_dosen = $(this).attr("id");
																$.ajax({
																	type:"POST",
																	url:base_url+"dosen/get_detail_dosen",
																	data:"id_dosen="+id_dosen,
																	success:function(msg){
																		$(".box_detail").empty().html(msg);
																		$(".box_detail").fadeIn();
																		$(".box_data_table").hide();
																		$(".back_to_table").show();
																		$.scrollTo($("#box_main_menu"),1000);
																		//alert("menuju detail dosen");
																	}
																});
																return false;
															});
														}	
													});';
				
				$data['table_dosen'] 	.= '<div class="tab-pane '.$active.'" id="tab'.$j.'">
												<table id="table_data'.$j.'" width="100%" cellpadding="5" class="table-bordered">
													<thead>
														<tr>
															<th>No</th>
															<th>Nama</th>
															<th>Kompetensi Mata Kuliah</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>';
				
				$dosen = $this->dosen_model->get_dosen($id_jurusan);
				if($dosen->num_rows() > 0)
				{
					$k = 1;
					foreach($dosen->result() as $data_dosen)
					{
						$id_dosen = $data_dosen->id_dosen;
						$nama = $data_dosen->nama;
						$kompetensi = $data_dosen->kompetensi_mata_kuliah;
						
						$data['table_dosen'] .= '				<tr>
																	<td style="text-align:center;">'.$k.'</td>
																	<td>'.$nama.'</td>
																	<td style="text-align:left;">'.$kompetensi.'</td>
																	<td style="text-align:center;"><a class="detail_dosen'.$j.'" id="'.$id_dosen.'" href="#">Lihat Detail</a></td>
																</tr>';
						$k = $k + 1;
					}
				}
				
				$data['table_dosen']	 .= '		</tbody>
												</table>
											  </div>';
				
				$j = $j + 1;
			}
		}
		
		$this->load->view('dosen_view',$data);
	}
	
	function get_detail_dosen()
	{
		$id_dosen = $this->input->post('id_dosen');
		
		$detail_dosen = '';
		$dosen = $this->dosen_model->get_detail_dosen($id_dosen);
		if($dosen->num_rows() > 0)
		{
			foreach($dosen->result() as $data_dosen)
			{
				$nip = $data_dosen->nip;
				$nidn = $data_dosen->nidn;
				$kode_dosen = $data_dosen->kode_dosen;
				$nama = $data_dosen->nama;
				$alamat = $data_dosen->alamat;
				$telepon = $data_dosen->telepon;
				$golongan = $data_dosen->golongan;
				$id_jurusan = $data_dosen->id_jurusan;
				$nama_jurusan = $this->dosen_model->get_nama_jurusan($id_jurusan);
				$riwayat_pendidikan = $data_dosen->riwayat_pendidikan;
				$kompetensi_mata_kuliah = $data_dosen->kompetensi_mata_kuliah;
				$image_path = $data_dosen->image_path;
				if($image_path == '-')
				{
					$image_path1 = '<img src="'.base_url('assets/images/logo_upi_trans.png').'" width="120"/>';
				}
				else
				{
					$image_path1 = '<img src="'.base_url($image_path).'" width="120"/>';
				}
				
				$detail_dosen .= '<div class="box_image_dosen clearfix">
									'.$image_path1.'
								</div>
								<div class="box_detail_dosen">
									<table cellpadding="3">
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Nama</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$nama.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">NIP</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$nip.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">NIDN</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$nidn.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Kode Dosen</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$kode_dosen.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Alamat</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$alamat.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Telepon</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$telepon.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Golongan</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$golongan.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Jurusan</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$nama_jurusan.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Riwayat Pendidikan</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$riwayat_pendidikan.'</td>
										</tr>
										<tr>
											<td width="70" style="text-align:right; vertical-align:top;">Kompetensi</td>
											<td style="vertical-align:top;">:</td>
											<td width="245" style="text-align:left; vertical-align:top;">'.$kompetensi_mata_kuliah.'</td>
										</tr>
									</table>
									<!--<a href="#" class="back_to_table">Kembali ke table</a>-->
								</div>';
			}
			echo $detail_dosen;
		}
	}
}

/* End of File : dosen.php */
/* Location : ./controllers/dosen.php */