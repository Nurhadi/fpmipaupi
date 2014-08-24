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
											<?php $this->load->view('menu_profil_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span9">
												<div class="box_table">
													<div class="box_data_table">
														<div class="text_content">
															<div class="title_data">
																DATA PIMPINAN<br>
																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>
																UNIVERSITAS PENDIDIKAN INDONESIA
															</div>
														</div>
														<hr>
														<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/dataTable.css');?>"/>
														<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.dataTables.min.js');?>"></script>
														<script type="text/javascript">
															$(document).ready(function(){
															$("#table_data1").dataTable({
																	"bAutoWidth": false,
																	"bProcessing": true,
																	"sPaginationType": "full_numbers",	
																	"aaSorting": [[ 0, "asc" ]],
																	"fnDrawCallback": function( oSettings ) {}	
																});
																<?php echo $javascript_data_table;?>
															});
														</script>
														
														<div class="tabbable"> <!-- Only required for left/right tabs -->
															<ul class="nav nav-tabs">
																<?php echo $jurusan;?>
															</ul>
															<div class="tab-content">
																<?php echo $table_pimpinan_fakultas;?>
																<?php echo $table_pimpinan;?>
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