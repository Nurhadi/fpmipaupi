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
												FPMIPA >> <a href="<?php echo site_url('layanan_pelatihan');?>" class="breadcump_child">Layanan Pelatihan</a>
												<hr id="breadcump_line2">
											</div>
											<div class="span12">
												<?php echo $layanan_pelatihan;?>
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