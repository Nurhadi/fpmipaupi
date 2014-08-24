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
											<?php $this->load->view('menu_tctp_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span5" id="breadcump">
												TCTP Program >> <a href="<?php echo site_url('participant');?>" class="breadcump_child">Participant</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="box_participant clearfix">
													<?php
														if($participant->num_rows() > 0)
														{
															foreach($participant->result() as $data)
															{
																echo '<div class="participant">
																		<img class="img_participant" src="'.base_url($data->image_thumbnail).'"/>
																		<a href="'.site_url('detail-participant/'.$data->id_participant).'">'.$data->nama.'</a>
																	  </div>';
															}
														}
													?>
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