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
											<?php $this->load->view('menu_ikom_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span5" id="breadcump">
												IKOM >> <a href="<?php echo site_url('donatur-ikoma');?>" class="breadcump_child">Donatur IKOMA</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<p>
														<blink><b><span style="color:red;">Empty !!</span></b></blink>
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