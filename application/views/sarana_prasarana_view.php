<?php $this->load->view('header_view'); ?>	

		<div id="container-content">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a">
						<div class="row">
							<div class="span12" id="content-profil">
								<div class="row">
									<div class="span3">
										<div class="box_menu_left">
											<?php $this->load->view('menu_fasilitas_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span9">
												<div class="box_table">
													<div class="box_data_table">
														<div class="text_content">
															<div class="title_data">
																DATA SARANA DAN PRASARANA<br>
																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>
																UNIVERSITAS PENDIDIKAN INDONESIA
															</div>
														</div>
														<hr>
														<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/dataTable.css');?>"/>
														<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>
														<script type="text/javascript">
															$(document).ready(function(){
																$("#table_data").dataTable({
																	"bAutoWidth": false,
																	"bProcessing": true,
																	"sPaginationType": "full_numbers",	
																	"aaSorting": [[ 0, "asc" ]],
																	"fnDrawCallback": function( oSettings ) {
																		//act_prod();
																	}	
																});
																
																$("#table_data1").dataTable({
																	"bAutoWidth": false,
																	"bProcessing": true,
																	"sPaginationType": "full_numbers",	
																	"aaSorting": [[ 0, "asc" ]],
																	"fnDrawCallback": function( oSettings ) {
																		//act_prod();
																	}	
																});
															});
														</script>
														
														<div class="tabbable"> <!-- Only required for left/right tabs -->
															<ul class="nav nav-tabs">
																<li class="active"><a href="#tab1" data-toggle="tab">Matematika</a></li>
																<li><a href="#tab2" data-toggle="tab">IPA</a></li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane active" id="tab1">
																	<table id="table_data" width="100%" cellpadding="5" class="table-bordered">
																		<thead>
																			<tr>
																				<th>No</th>
																				<th>Bangunan</th>
																				<th>Fungsi</th>
																				<th>Jumlah</th>
																				<th>Luas (M2)</th>
																				<th>Kondisi</th>
																				<th>Lokasi</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php 
																				// for($i = 1; $i <= 10; $i++)
																				// {
																					echo '<tr>
																							<td style="text-align:center;">1</td>
																							<td>Kelas</td>
																							<td>Ruang Kuliah</td>
																							<td>15</td>
																							<td>1368</td>
																							<td>Baik</td>
																							<td>Gedung FPMIPA – A</td>
																						</tr>';
																				// }
																			?>
																		</tbody>
																	</table>
																</div>
																<div class="tab-pane" id="tab2">
																	<table id="table_data1" width="100%" cellpadding="5" class="table-bordered">
																		<thead>
																			<tr>
																				<th>No</th>
																				<th>Bangunan</th>
																				<th>Fungsi</th>
																				<th>Jumlah</th>
																				<th>Luas (M2)</th>
																				<th>Kondisi</th>
																				<th>Lokasi</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php 
																				// for($i = 1; $i <= 10; $i++)
																				// {
																					echo '<tr>
																							<td style="text-align:center;">1</td>
																							<td>Laboratorium</td>
																							<td>Praktikum</td>
																							<td>19</td>
																							<td>1478</td>
																							<td>Baik</td>
																							<td>Gedung FPMIPA – A</td>
																						</tr>';
																				// }
																			?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
													<div class="box_detail" style="display:none;">
													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<?php $this->load->view('footer_view'); ?>