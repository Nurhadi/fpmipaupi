<?php $this->load->view('header_view'); ?>

		<div id="container-content">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a">
						<div class="row">
							<div class="span12" id="content-profil">
								<div class="row">
									<div class="span12">
										<div class="row">
											<div class="span5" id="breadcump">
												FPMIPA >> <a href="<?php echo site_url('agenda');?>" class="breadcump_child">Agenda</a> >> Detail Agenda
												<hr id="breadcump_line2">
											</div>
											<div class="span12">
												<div class="box_agenda" style="padding:20px; padding-top:0px; font-size:0.8em;">
													<h5 style="color:#0282C2;"><?php echo $title;?></h5>
													<strong>Bandung, FPMIPA UPI</strong></p>
													<p>
														<?php echo $content;?>
													</p>
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