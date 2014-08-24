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
											<?php $this->load->view('menu_beasiswa_view');?>
										</div>
									</div>
									<div class="span9">
										<div class="row">
											<div class="span5" id="breadcump">
												Beasiswa >> <a href="<?php echo site_url('info-beasiswa');?>" class="breadcump_child">Info Beasiswa</a>
												<hr id="breadcump_line">
											</div>
											<div class="span9">
												<div class="text_content">
													<p>
														Untuk mendapatkan informasi lebih jelas mengenai beasiswa dapat menghubungi:<br>
														Staff Bagian Akademik dan Kemahasiswaan<br>
														Telp. (022) 2013163 ext.4634<br><br>
														Web Info Besiswa UPI: <a href="http://beasiswa.upi.edu/" target="_blank">http://beasiswa.upi.edu/</a>
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