<?php $this->load->view('header_view'); ?>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.cycle.all.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#slider').cycle({
			fx: 'zoom', // fade
			delay: 5000,
			next:   '.slider-next',
			prev:   '.slider-prev'
		});
	});
</script>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jcarousel.lite.min.js');?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#box_main_menu2').mouseover(function(){
			$('#box_main_menu2_child').slideDown();
			return false;
		});
		$('#content').mouseover(function(){
			$('#box_main_menu2_child').slideUp();
			return false;
		});
		$('#box_slider').mouseover(function(){
			$('#box_main_menu2_child').slideUp();
			return false;
		});
	});
</script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/ccslider.css');?>"/>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.easing.1.3.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.ccslider-3.0.min.js');?>"></script>
<script type="text/javascript">
	// $(window).load(function(){
	// 	$('#slider').ccslider({
	// 		effectType : '2d',
	// 		effect : 'random'
	// 	});
	// });
</script>

		<div id="container-content" style="background:#EAEBED">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a" >
						<div class="row">
						<style>
							.list_link{display:block; line-height:15px; padding:2px; color:#000000; font-size:0.8em;}
							.title_link{display:block; color:#000099; text-align:left; margin-left:12px; margin-top:7px; margin-bottom:0px; font-weight:bold;}
							.box_side_slider{background:#E5E3E3; height:150px; width:170px; position:absolute; float:left; z-index:4;}
							/*.box_right_slider{background:#007888; height:255px; width:170px; position:absolute; right:0px; float:right;}*/
							.box_side_seminar{background:#007888; height:236px; width:170px; float:right;}
							.slider-innerWrapper{height:99%;}
						</style>
							<div class="span12" id="box_slider" style="position:relative; background:#999999;">
								<style>
									.box_side_slider ul{list-style:none; margin-left:3px; width:145px;}
									.box_side_slider ul li{border-bottom:1px solid #bbb; line-height:16px; text-align:left; padding-bottom:3px; padding-top:1px;}
									.box_side_slider li a{text-decoration:none !important; font-size:0.8em; color:#000000;}
									.box_side_slider li a:hover{color:#005580;}
								</style>

								<!-- new -->
								<style>
									.box_left_slider ul{list-style:none; margin-left:3px; width:145px;}
									.box_left_slider ul li{border-bottom:1px solid #bbb; line-height:16px; text-align:left; padding-bottom:3px; padding-top:1px;}
									.box_left_slider li a{text-decoration:none !important; font-size:0.8em; color:#000000;}
									.box_left_slider li a:hover{color:#005580;}

									.box_beasiswa_dikti ul{list-style:none; margin-left:3px; width:145px;}
									.box_beasiswa_dikti ul li{border-bottom:1px solid #bbb; line-height:16px; text-align:left; padding-bottom:3px; padding-top:1px;}
									.box_beasiswa_dikti li a{text-decoration:none !important; font-size:0.8em; color:#fff;}
									/*.box_beasiswa_dikti li a:hover{color:#005580;}*/
								</style>
								<div class="box_left_slider" style="width:170px; height:255px; float:left; background:#E5E3E3;">
									<span class="title_link"  style="margin-top:10px; display: block;">Kabar DIKTI</span>
									<div style="margin-left:10px; margin-right:10px;">
										<!-- old one
										<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=y" type="text/javascript"></script>
										<noscript>
										<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=y&html=y">View RSS feed</a>
										</noscript>
										-->

										<script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&num=1&utf=y"  charset="UTF-8" type="text/javascript"></script>
										<noscript>
										<a href="http://feed2js.org//feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&num=1&utf=y&html=y">View RSS feed</a>
										</noscript>
									</div>
									<span class="title_link">Kabar UPI</span>
										<div style="margin-left:10px; margin-right:10px;">
											<!-- old one
											<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&chan=n&num=2&desc=0&date=n&targ=y" type="text/javascript"></script>
											<noscript>
											<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&chan=n&num=2&desc=0&date=n&targ=y&html=y">View RSS feed</a>
											</noscript>
											-->

											<script language="JavaScript" src="http://feed2js.org//feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&num=1&utf=y"  charset="UTF-8" type="text/javascript"></script>
											<noscript>
											<a href="http://feed2js.org//feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&num=1&utf=y&html=y">View RSS feed</a>
											</noscript>
										</div>
								</div>
								<div style="background:#fff; width:600px; height:255px; float:left;">
	                <div id="slider" style="height:255px;">
	                	<?php echo $slider; ?>
                  </div>
	                <a class="slider-next"><img src="<?php echo base_url('assets/images/arrow_next1.png');?>" id="next"/></a>
									<a class="slider-prev"><img src="<?php echo base_url('assets/images/arrow_prev1.png');?>" id="prev"/></a>
								</div>
								<div style="background:#007888; width:170px; height:255px; float:right;">
									<div>
										<a href="<?php echo site_url('agenda'); ?>">
											<span class="title_link"  style="margin-top:10px; display: block; color:#04D0D3;">Pengumuman</span>
										</a>
										<div style="margin-left:10px; margin-right:10px;">
											<?php echo $agenda;?>
										</div>
									</div>
									<div style="float:left;">
										<a href="<?php echo site_url('lowongan_kerja'); ?>">
											<span class="title_link" style="color:#04D0D3;">Lowongan Kerja</span>
										</a>
										<div style="margin-left:10px; margin-right:10px;">
											<?php echo $lowongan_kerja; ?>
										</div>
									</div>
									<div class="box_right_slider" style="float:left;">
										<a href="http://www.dikti.go.id/id/info-beasiswa/" target="_blank">
											<span class="title_link"  style="margin-top:10px; display: block; color:#04D0D3;">Beasiswa DIKTI</span>
										</a>
										<div class="box_beasiswa_dikti" style="margin-left:10px; margin-right:10px;">
											<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=n" type="text/javascript"></script>
											<noscript>
											<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=n&html=y">View RSS feed</a>
											</noscript>
										</div>
									</div>
								</div>
								<!-- new -->
							</div>
							<div id="bottom_line_slider" class="span12"></div>

							<div class="span12" id="content" style="background:#FFF; padding-top:15px;">
								<div class="row" id="box-content-bottom-home-1" style="">
									<div class="span12" id="bottom-home" style="position:relative;">
										<script type="text/javascript">
											$(document).ready(function(){
												$("#carousellite").jCarouselLite({
													btnNext: ".next",
    											btnPrev: ".prev",
													// auto: 10000,
    									// 		speed: 400
    										});
											});
										</script>
										<style>
											#carousellite{width:866px !important; left:26px !important;}
											#carousellite ul li{margin: 6px;}
										</style>
										<div style="position:absolute; margin-left:3px; margin-top:140px;">
											<img src="<?php echo base_url('assets/images/arrow_prev1.png'); ?>" style="width:25px; opacity: 0.6; cursor:pointer;" class="prev">
										</div>
										<div style="position:absolute; margin-left:3px; margin-top:140px; right:2px;">
											<img src="<?php echo base_url('assets/images/arrow_next1.png'); ?>" style="width:25px; opacity: 0.6; cursor:pointer;" class="next">
										</div>
										<div class="box_home_info" id="carousellite" style="padding-left:0px;">
											<ul>
												<?php if($berita->num_rows() > 0) { ?>
													<?php foreach($berita->result() as $b) { ?>
														<li>
															<div class="box_home">
																<div class="box_title" style="font-size:1em;"><a href="<?php echo site_url('berita/'.url_title($b->title).'/'.$b->id_berita);?>" style="color:#007888 !important;"><?php echo character_limiter($b->title, 32) ?></a></div>
																<div class="box_content_home">
																	<?php
																		if($b->thumbnail === "") {
																			?>
																				<img src="<?php echo base_url('assets/images/icon_berita_fpmipa.jpg');?>" alt="<?php echo $title_layanan_pelatihan?>" title="<?php echo $title_layanan_pelatihan;?>" class="img_box_home" width="188"/>
																			<?php
																		}
																		else{
																			?>
																				<img src="<?php echo base_url($b->thumbnail);?>" alt="<?php echo $title_layanan_pelatihan?>" title="<?php echo $title_layanan_pelatihan;?>" class="img_box_home" width="188"/>
																			<?php
																		}
																	?>
																	<div style="min-height:93px; margin-bottom:10px;">
																		<?php echo character_limiter(strip_tags($b->content), 180);?>
																	</div>
																	<div class="box_read_more"><a href="<?php echo site_url('berita/'.url_title($b->title).'/'.$b->id_berita);?>">Selengkapnya >></a></div>
																</div>
															</div>
														</li>
													<?php } ?>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="span12" id="box_main_menu2">
								<div class="main_menu2"><span class="label_main_menu2">Jurusan / Prodi</span></div>
								<div class="main_menu2"><span class="label_main_menu2">E-Learning</span></div>
								<div class="main_menu2"><span class="label_main_menu2">Beasiswa</span></div>
								<div class="main_menu2"><span class="label_main_menu2">Tautan</span></div>
							</div>
							<div class="span12" id="box_main_menu2_child">
								<div class="child_main_menu2">
									<?php echo $jurusan;?>
								</div>
								<div class="child_main_menu2">
									<?php echo $elearning;?>
								</div>
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="<?php echo site_url('info-beasiswa');?>" target="_blank">Informasi Beasiswa</a></div>
									<div class="child_mainmenu2"><a href="<?php echo site_url('jenis-beasiswa');?>" target="_blank">Jenis Beasiswa</a></div>
									<div class="child_mainmenu2"><a href="http://www.dikti.go.id/?page_id=2062&lang=id" target="_blank">Informasi Beasiswa DIKTI</a></div>
								</div>
								<div class="child_main_menu2">
									<?php echo $tautan;?>
								</div>
							</div>

							<script type="text/javascript">
								$(document).ready(function(){
									$('#cycle_lowongan_kerja, #cycle_seminar').cycle({
										fx: 'fade',
										delay: 2000
									});

									$('#cycle_galeri').cycle({
										fx: 'fade',
										delay: 200000,
										next:   '.galeri-next',
										prev:   '.galeri-prev'
									});
								});
							</script>
							<div class="span12" id="content" style="background:#FFF; padding-top:15px; border-radius:10px;">
								<div class="row" id="box-content-bottom-home">
									<div class="span12" id="bottom-home">
										<div class="box_home_info">
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('lowongan_kerja');?>" style="color:#007888 !important;">Lowongan Kerja</a></div>
												<div id="cycle_lowongan_kerja">
													<?php
														if($cycle_lowongan_kerja->num_rows() > 0)
														{
															foreach($cycle_lowongan_kerja->result() as $lowongan_kerja)
															{
																?>
																<div class="box_content_home">
																	<?php if($lowongan_kerja->thumbnail === "" || $lowongan_kerja->thumbnail === "data/def_slider.png") { ?>
																		<img src="<?php echo base_url('assets/images/career.png');?>" alt="<?php echo $lowongan_kerja->title;?>" title="<?php echo $lowongan_kerja->title;?>" class="img_box_home" width="188"/>
																	<?php } else { ?>
																		<img src="<?php echo base_url($lowongan_kerja->thumbnail);?>" alt="<?php echo $lowongan_kerja->title;?>" title="<?php echo $lowongan_kerja->title;?>" class="img_box_home" width="188"/>
																	<?php } ?>
																	<div style="min-height:93px; margin-bottom:10px;">
																	<?php echo character_limiter($lowongan_kerja->content,185) ?>
																	</div>
																	<?php echo '<div class="box_read_more"><a href="'.site_url("lowongan_kerja/".url_title($lowongan_kerja->title)."/".$lowongan_kerja->id_lowongan_kerja).'">Selengkapnya >></a></div>'; ?>
																</div>
																<?php
															}
														}
													?>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('seminar');?>" style="color:#007888 !important;">Seminar</a></div>
												<div id="cycle_seminar">
													<?php
														if($cycle_seminar->num_rows() > 0)
														{
															foreach($cycle_seminar->result() as $seminar)
															{
																?>
																<div class="box_content_home">
																	<img src="<?php echo base_url('assets/images/thumbnail_seminar.png');?>" alt="<?php echo $seminar->title;?>" title="<?php echo $seminar->title;?>" class="img_box_home"/>
																	<div style="min-height:93px; margin-bottom:10px;">
																	<?php echo character_limiter(strip_tags($seminar->content),185) ?>
																	</div>
																	<?php echo '<div class="box_read_more"><a href="'.site_url("seminar/".url_title($seminar->title)."/".$seminar->id_seminar).'">Selengkapnya >></a></div>'; ?>
																</div>
																<?php
															}
														}
													?>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('layanan_pelatihan');?>" style="color:#007888 !important;">CT-MSITE</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url($thumbnail_layanan_pelatihan);?>" alt="<?php echo $title_layanan_pelatihan?>" title="<?php echo $title_layanan_pelatihan;?>" class="img_box_home"/>
													<div style="min-height:93px; margin-bottom:10px;">
													<?php echo $content_layanan_pelatihan;?>
													</div>
													<?php
														if($count_layanan_pelatihan > 0)
														{
															echo '<div class="box_read_more"><a href="'.site_url("layanan_pelatihan/".url_title($title_layanan_pelatihan)."/".$id_layanan_pelatihan).'">Selengkapnya >></a></div>';
														}
														else
														{
															echo '<div class="box_read_more"><a href="'.site_url('layanan_pelatihan').'">Selengkapnya >></a></div>';
														}
													?>
												</div>
											</div>
											<div class="box_home" style="position:relative;">
												<div class="box_title"><a href="#" style="color:#007888 !important;">Galeri</a></div>
												<div id="cycle_galeri" style="height:213px;">
													<?php
														if($cycle_galeri->num_rows() > 0)
														{
															foreach($cycle_galeri->result() as $galeri)
															{
																?>
																<div class="box_content_home" style="min-height:190px; max-height:190px;">
																	<img src="<?php echo base_url($galeri->image_path);?>" alt="Galeri Foto FPMIPA UPI" title="Galeri Foto FPMIPA UPI" class="img_box_home" width="188"/>
																	<div style="height:60px;">
																		<p><?php echo $galeri->image_title; ?></p>
																	</div>
																</div>
																<?php
															}
														}
													?>
												</div>
												<div style="text-align:center; padding:7px;">
													<a class="galeri-prev" style="cursor:pointer;"><img src="<?php echo base_url('assets/images/arrow_prev1.png');?>" style="width:24px; opacity:0.6;"/></a>
													<a class="galeri-next" style="cursor:pointer;"><img src="<?php echo base_url('assets/images/arrow_next1.png');?>" style="width:24px; opacity:0.6;"/></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- <div class="span12" id="content" style="background:#FFF; padding-top:15px;">
								<div class="row" id="box-content-bottom-home" style="">
									<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/jquery.fancybox.css');?>"/>
									<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.fancybox.js');?>"></script>
									<script type="text/javascript">
										$(document).ready(function() {
											$(".fancybox").fancybox({
												openEffect	: 'none',
												closeEffect	: 'none'
											});
										});
									</script>
									<div class="span12">
										<div id="box_bottom_img_home">
											<?php echo $galeri;?>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>

<?php $this->load->view('footer_view'); ?>