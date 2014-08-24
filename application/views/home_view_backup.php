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
							/* .list_link{display:block; line-height:15px; padding:2px; color:#fff; font-size:0.8em;}
							.title_link{display:block; color:#fff; text-align:left; margin-left:12px; margin-top:5px; margin-bottom:0px; font-weight:bold;} */
							.list_link{display:block; line-height:15px; padding:2px; color:#000000; font-size:0.8em;}
							.title_link{display:block; color:#000099; text-align:left; margin-left:12px; margin-top:7px; margin-bottom:0px; font-weight:bold;}
							.box_side_slider{background:#E5E3E3; height:236px; width:170px; position:absolute; float:left; z-index:4;}
							.box_right_slider{background:#007888; height:236px; width:170px; position:absolute; right:0px; float:right;}
							/* .box_side_slider{background:#888; height:236px; width:170px; position:absolute; float:left; z-index:4;}
							.box_right_slider{background:#888; height:236px; width:170px; position:absolute; right:0px; float:right;} */
						</style>
							<div class="span12" id="box_slider" style="position:relative; background:#999999;">
								<style>
									.box_side_slider ul{list-style:none; margin-left:3px; width:145px;}
									.box_side_slider ul li{border-bottom:1px solid #bbb; line-height:16px; text-align:left; padding-bottom:3px; padding-top:1px;}
									/* .box_side_slider li a{text-decoration:none !important; font-size:0.8em; color:#fff;} */
									.box_side_slider li a{text-decoration:none !important; font-size:0.8em; color:#000000;}
									.box_side_slider li a:hover{color:#005580;}
								</style>
								<div class="box_side_slider">
									<span class="title_link"  style="margin-top:15px; display: block;">Kabar DIKTI</span>
									<div style="margin-left:10px; margin-right:10px;">
										<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=y" type="text/javascript"></script>

										<noscript>
										<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fgo%2Fdikti&chan=n&num=1&desc=0&date=n&targ=y&html=y">View RSS feed</a>
										</noscript>
										<!--
										<div style="border-bottom:1px solid #bbb;">
										<a href="#" class="list_link">Open Laboratory Expo Kimia 2013 is Happening Today!</a>
										</div>
										<div style="border-bottom:1px solid #bbb;">
										<a href="#" class="list_link">Lawatan Kolej Matrikulasi Johor</a>
										</div>
										<div style="border-bottom:1px solid #bbb;">
										<a href="#" class="list_link">Open Laboratory Expo Kimia 2013 is Happening Today!</a>
										</div>
										-->
									</div>
									<span class="title_link">Kabar UPI</span>
									<div style="margin-left:10px; margin-right:10px;">
										<script language="JavaScript" src="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&chan=n&num=1&desc=0&date=n&targ=y" type="text/javascript"></script>

										<noscript>
										<a href="http://itde.vccs.edu/rss2js/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FKabarUpi&chan=n&num=2&desc=0&date=n&targ=y&html=y">View RSS feed</a>
										</noscript>
									</div>
								</div>
								<div id="slider" class="slider3d" style="float:left; margin-left:170px;">
									<?php echo $slider;?>
								</div>
								<style>
									.box_right_slider a{color:#fff;}
								</style>
								<div class="box_right_slider">
									<span class="title_link"  style="margin-top:15px; display: block; color:#04D0D3;">Berita Terkini</span>
									<div style="margin-left:10px; margin-right:10px;">
										<?php echo $berita;?>
									</div>
									<a href="<?php echo site_url('berita');?>" style="float:right; margin-right:10px; margin-top:6px;font-size:0.8em; font-weight:bold; color:#fff;">[berita lainnya]</a>
								</div>
								<a class="slider-nav next"><img src="<?php echo base_url('assets/images/arrow_next1.png');?>" id="next"/></a>
								<a class="slider-nav prev"><img src="<?php echo base_url('assets/images/arrow_prev1.png');?>" id="prev"/></a>
							</div>
							<div id="bottom_line_slider" class="span12"></div>

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
									<?php //echo $fasilitas;?>
									<div class="child_mainmenu2"><a href="<?php echo site_url('info-beasiswa');?>" target="_blank">Informasi Beasiswa</a></div>
									<div class="child_mainmenu2"><a href="<?php echo site_url('jenis-beasiswa');?>" target="_blank">Jenis Beasiswa</a></div>
									<div class="child_mainmenu2"><a href="http://www.dikti.go.id/?page_id=2062&lang=id" target="_blank">Informasi Beasiswa DIKTI</a></div>
								</div>
								<div class="child_main_menu2">
									<?php echo $tautan;?>
								</div>
							</div>

							<div class="span12" id="content" style="background:#FFF; margin-top:15px; border-radius:10px;">
								<div class="row" id="box-content-bottom-home" style="">
									<div class="span12" id="bottom-home">
										<div class="box_home_info">
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('seminar');?>" style="color:#007888 !important;">Seminar</a></div>
												<style>
													.box_content_home p{min-height:65px color:#0D3F6F;}
													.box_content_home a{color:#0D4173;}
												</style>
												<div class="box_content_home" style="text-align:justify; min-height:200px;">
													<img src="<?php echo base_url('assets/images/thumbnail_seminar.png');?>" alt="Seminar FPMIPA UPI" title="Seminar FPMIPA UPI" class="img_box_home"/>
													<div style="min-height:94px; margin-bottom:10px;"> <!-- min-height:65px -->
													<?php echo $seminar;?>
													</div>
													<div class="box_read_more"><a href="<?php echo site_url('seminar');?>">Selengkapnya >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('agenda');?>" style="color:#007888 !important;">Pengumuman</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/thumbnail_agenda.jpg');?>" alt="Agenda FPMIPA UPI" title="Agenda FPMIPA UPI" class="img_box_home"/>
													<div style="min-height:94px; margin-bottom:10px;">
													<?php echo $agenda;?>
													</div>
													<div class="box_read_more"><a href="<?php echo site_url('agenda');?>">Selengkapnya >></a></div>
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
											<div class="box_home">
												<div class="box_title"><a href="<?php echo site_url('lowongan_kerja');?>" style="color:#007888 !important;">Lowongan Kerja</a></div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/career.png');?>" class="img_box_home"/>
													<div style="min-height:94px; margin-bottom:10px;">
													<?php echo $lowongan_kerja;?>
													</div>
													<div class="box_read_more"><a href="http://www.dikti.go.id/?page_id=729&lang=id" target="_blank">Info Lowongan DIKTI >></a></div>
												</div>
											</div>
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
											<!--
											<div id="box_bottom1">
												<a class="fancybox" href="<?php echo base_url('assets/images/210x130.jpg');?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet 1">
													<img src="<?php echo base_url('assets/images/210x130.jpg');?>"/>
												</a>
											</div>
											<div id="box_bottom2">
												<a class="fancybox" href="<?php echo base_url('assets/images/210x130.jpg');?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet 2">
													<img src="<?php echo base_url('assets/images/210x130.jpg');?>"/>
												</a>
											</div>
											<div id="box_bottom3">
												<a class="fancybox" href="<?php echo base_url('assets/images/210x130.jpg');?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet 3">
													<img src="<?php echo base_url('assets/images/210x130.jpg');?>"/>
												</a>
											</div>
											<div id="box_bottom4">
												<a class="fancybox" href="<?php echo base_url('assets/images/210x130.jpg');?>" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet 4">
													<img src="<?php echo base_url('assets/images/210x130.jpg');?>"/>
												</a>
											</div>
											-->
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