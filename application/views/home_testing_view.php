<?php $this->load->view('header_view'); ?>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.cycle.all.js');?>"></script>
<script type="text/javascript">
	/*
	$(document).ready(function(){
		$('#slider').cycle({
			fx:     'fade',
			speed:  'fast',
			timeout: 5000,
			next:   '#next',
			prev:   '#prev'
		});
	});
	*/
</script>

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
	$(window).load(function(){
		$('#slider').ccslider({
			effectType : '2d',
			effect : 'random'
		});
	});
</script>

		<div id="container-content" style="background:#EAEBED">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a" >
						<div class="row">
						<style>
							.list_link{display:block; line-height:15px; padding:2px; color:#000000; font-size:0.8em;}
							.title_link{display:block; color:#000099; text-align:left; margin-left:12px; margin-top:7px; margin-bottom:0px; font-weight:bold;}
							.box_side_slider{background:#E5E3E3; height:236px; width:170px; position:absolute; float:left; z-index:4;}
							.box_right_slider{background:#007888; height:236px; width:170px; position:absolute; right:0px; float:right;}
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
								<div class="box_side_slider">
									<span class="title_link"  style="margin-top:15px; display: block;">Kabar DIKTI</span>
									<div style="margin-left:10px; margin-right:10px;">
										<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=3&desc=0&date=n&targ=y" type="text/javascript"></script>
										<noscript>
										<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=y&html=y">View RSS feed</a>
										</noscript>
									</div>
								</div>
								<div id="slider" class="slider3d" style="float:left; margin-left:170px; height:235px !important;">
									<?php echo $slider;?>
								</div>
								<style>
									.box_right_slider a{color:#fff;}
									.box_side_seminar a{color:#fff;}
								</style>
								<div class="box_right_slider" style="height:235px;">
									<a href="<?php echo site_url('agenda'); ?>">
										<span class="title_link"  style="margin-top:15px; display: block; color:#04D0D3;">Pengumuman</span>
									</a>
									<div style="margin-left:10px; margin-right:10px;">
										<?php echo $agenda;?>
									</div>
									<a href="<?php echo site_url('agenda');?>" style="float:right; margin-right:10px; margin-top:6px;font-size:0.8em; font-weight:bold; color:#fff;">[Selengkapnya...]</a>
								</div>
								<a class="slider-nav next"><img src="<?php echo base_url('assets/images/arrow_next1.png');?>" id="next"/></a>
								<a class="slider-nav prev"><img src="<?php echo base_url('assets/images/arrow_prev1.png');?>" id="prev"/></a>
							</div>
							<div id="bottom_line_slider" class="span12"></div>

							<div class="span12" style="min-height: 265px; margin-top:-4px;">
								<div style="min-height:235px; background:red; width:170px; float:left;">
									<div class="box_side_slider" style="border-top:1px solid #ccc; height:264px; width:170px; float:left;">
										<span class="title_link">Kabar UPI</span>
										<div style="margin-left:10px; margin-right:10px;">
											<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&chan=n&num=4&desc=0&date=n&targ=y" type="text/javascript"></script>
											<noscript>
											<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&chan=n&num=2&desc=0&date=n&targ=y&html=y">View RSS feed</a>
											</noscript>
										</div>
									</div>
								</div>
								<div style="height:235px; width:600px; float:left; padding-top:5px;">
									<div id="box_seminar" style="height:255px; width:568px; margin:5px 15px 0;">
										<div class="seminar" style="border:1px solid #ccc; height:240px; width:275px; float:left; background:#fff; box-shadow: 0 0 20px -5px rgba(1,1,1,0.5);">
											<!-- <div style="text-align:center; padding-top:7px;">
												<a href="<?php echo site_url('seminar'); ?>">
													<span style="color:#000099; font-weight:bold;">Seminar</span>
												</a>
											</div> -->
											<div class="box_content_home" style="text-align:center; min-height:200px;">
												<a href="<?php echo site_url('seminar'); ?>">
													<img src="<?php echo base_url('assets/images/thumbnail_seminar_new.png');?>" alt="Seminar FPMIPA UPI" title="Seminar FPMIPA UPI" class="img_box_home" style="text-align:center;"/>
												</a>
												<div style="min-height:80px; margin-bottom:10px; text-align:justify;"> <!-- min-height:65px -->
												<?php echo $seminar;?>
												</div>
												<!-- <div class="box_read_more"><a href="<?php echo site_url('seminar');?>">Selengkapnya >></a></div> -->
											</div>
										</div>
										<div class="seminar" style="border:1px solid #ccc; height:240px; width:275px; float:right; background:#fff; box-shadow: 0 0 20px -5px rgba(1,1,1,0.5);">
											<!-- <div style="text-align:center; padding-top:7px;">
												<a href="<?php echo site_url('layanan_pelatihan'); ?>">
													<span style="color:#000099; font-weight:bold;">CT-MSITE</span>
												</a>
											</div> -->
											<div class="box_content_home" style="text-align:center; min-height:200px;">
												<a href="<?php echo site_url('layanan_pelatihan'); ?>">
													<img src="<?php echo base_url('data/layanan_pelatihan_thumbnail/hotsdel_new.png');?>" alt="Seminar FPMIPA UPI" title="Seminar FPMIPA UPI" class="img_box_home" style="text-align:center;"/>
												</a>
												<div style="min-height:94px; margin-bottom:10px; text-align:justify;"> <!-- min-height:65px -->
													<?php echo character_limiter($content_layanan_pelatihan, 200);?>
												</div>
												<!-- <div class="box_read_more"><a href="<?php echo site_url('layanan_pelatihan');?>">Selengkapnya >></a></div> -->
											</div>
										</div>
									</div>
								</div>
								<div style="height:235px; background:blue; width:170px; float:left;">
									<div class="box_side_seminar" style="height:264px; width:170px; float:left; background:#007888;">
										<a href="<?php echo site_url('lowongan_kerja'); ?>">
											<span class="title_link" style="color:#04D0D3;">Lowongan Kerja</span>
										</a>
										<div style="margin-left:10px; margin-right:10px;">
											<?php echo $lowongan_kerja; ?>
										</div>
										<a href="<?php echo site_url('lowongan_kerja');?>" style="float:right; margin-right:10px; margin-top:6px;font-size:0.8em; font-weight:bold; color:#fff;">[Selengkapnya...]</a>
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

							<div class="span12" id="content" style="background:#FFF; padding-top:15px;">
								<div class="row" id="box-content-bottom-home" style="">
									<div class="span12" id="bottom-home">
										<div class="box_home_info">
											<?php if($berita->num_rows() > 0) { ?>
												<?php foreach($berita->result() as $b) { ?>
													<div class="box_home">
														<div class="box_title" style="font-size:1em;"><a href="<?php echo site_url('berita/'.url_title($b->title).'/'.$b->id_berita);?>" style="color:#007888 !important;"><?php echo character_limiter($b->title, 40) ?></a></div>
														<div class="box_content_home">
															<img src="<?php echo base_url('assets/images/icon_berita_fpmipa.jpg');?>" alt="<?php echo $title_layanan_pelatihan?>" title="<?php echo $title_layanan_pelatihan;?>" class="img_box_home"/>
															<div style="min-height:93px; margin-bottom:10px;">
																<?php echo character_limiter($b->content, 200);?>
															</div>
															<div class="box_read_more"><a href="<?php echo site_url('berita/'.url_title($b->title).'/'.$b->id_berita);?>">Selengkapnya >></a></div>
														</div>
													</div>
												<?php } ?>
											<?php } ?>
										</div>
									</div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php $this->load->view('footer_view'); ?>