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
																DATA LABORATORIUM<br>
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
															});
														</script>
														
														<table id="table_data" width="100%" cellpadding="5" class="table-bordered">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Jurusan / Prodi</th>
																	<th>Laboratorium</th>
																</tr>
															</thead>
															<tbody>
																<?php 
																	// for($i = 1; $i <= 10; $i++)
																	// {
																		echo '<tr>
																				<td style="text-align:center;">1</td>
																				<td>Pendidikan Biologi</td>
																				<td>Laboratorium Mikrobiologi</td>
																			</tr>';
																	// }
																?>
															</tbody>
														</table>
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