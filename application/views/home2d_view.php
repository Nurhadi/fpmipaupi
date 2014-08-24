<?php $this->load->view('header2_view'); ?>
		
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

		<div id="container-content">
			<div class="container">
				<div class="row">
					<div class="span12" id="container-content-a">
						<div class="row">
							<div class="span12" id="box_slider">
								<div id="slider" class="slider3d">
									<img src="<?php echo base_url('assets/images/slider1.jpg');?>"/>
									<img src="<?php echo base_url('assets/images/slider2.jpg');?>"/>
									<img src="<?php echo base_url('assets/images/slider3.jpg');?>"/>
									<img src="<?php echo base_url('assets/images/slider4.jpg');?>"/>
								</div>
								
								<a class="slider-nav next"><img src="<?php echo base_url('assets/images/arrow_next.png');?>" id="next"/></a>
								<a class="slider-nav prev"><img src="<?php echo base_url('assets/images/arrow_prev.png');?>" id="prev"/></a>
							</div>
							<div id="bottom_line_slider" class="span12"></div>

							<div class="span12" id="box_main_menu2">
								<div class="main_menu2"><span class="label_main_menu2">Jurusan / Prodi</span></div>
								<div class="main_menu2"><span class="label_main_menu2">E-Learning</span></div>
								<div class="main_menu2"><span class="label_main_menu2">Fasilitas</span></div>
								<div class="main_menu2"><span class="label_main_menu2">Kerja Sama</span></div>
							</div>
							<div class="span12" id="box_main_menu2_child">
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Biologi</a></div>
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Fisika</a></div>
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Kimia</a></div>
									<div class="child_mainmenu2"><a href="#">Jurusan Pendidikan Matematika</a></div>
									<div class="child_mainmenu2"><a href="#">Program Studi Ilmu Komputer</a></div>
									<div class="child_mainmenu2"><a href="#">Program Studi IPSE</a></div>
									<div class="child_mainmenu2"><a href="#">Program Studi Pendidikan Ilmu Komputer</a></div>
								</div>
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">E-Learning Fisika</a></div>
									<div class="child_mainmenu2"><a href="#">E-Learning FPMIPA</a></div>
								</div>
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">Laboratorium Biologi</a></div>
									<div class="child_mainmenu2"><a href="#">Laboratorium Kimia</a></div>
									<div class="child_mainmenu2"><a href="#">Laboratorium Fisika</a></div>
									<div class="child_mainmenu2"><a href="#">Laboratorium Komputer</a></div>
								</div>
								<div class="child_main_menu2">
									<div class="child_mainmenu2"><a href="#">Apple</a></div>
									<div class="child_mainmenu2"><a href="#">Microsoft</a></div>
									<div class="child_mainmenu2"><a href="#">Android</a></div>
									<div class="child_mainmenu2"><a href="#">Samsung</a></div>
									<div class="child_mainmenu2"><a href="#">Nokia</a></div>
									<div class="child_mainmenu2"><a href="#">Sony</a></div>
									<div class="child_mainmenu2"><a href="#">Acer</a></div>
								</div>
							</div>
							
							<div class="span12" id="content" style="background:#fff; margin-top:15px; border-radius:10px;">
								<div class="row" id="box-content-bottom-home" style="">
									<div class="span12" id="bottom-home">
										<div class="box_home_info">
											<div class="box_home">
												<div class="box_title">Berita</div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title">Agenda</div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title">Seminar</div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
											<div class="box_home">
												<div class="box_title">Lowongan Kerja</div>
												<div class="box_content_home">
													<img src="<?php echo base_url('assets/images/box_image.png');?>" class="img_box_home"/>
													<p class="text_box_home">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
													<div class="box_read_more"><a href="#">Read more >></a></div>
												</div>
											</div>
										</div>
									</div>
									<div class="span12">
										<div id="box_bottom_img_home">
											<div id="box_bottom1"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
											<div id="box_bottom2"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
											<div id="box_bottom3"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
											<div id="box_bottom4"><img src="<?php echo base_url('assets/images/210x130.jpg');?>"/></div>
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