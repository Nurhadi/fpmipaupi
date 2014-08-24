<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title;?> - FPMIPA | Universitas Pendidikan Indonesia</title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/logo-upi.png'); ?>">	<meta name="description" content="<?php echo $meta_description;?>">		<meta name="keywords" content="<?php echo $meta_keywords;?>">		<meta name="author" content="Nurhadi Maulana - Invinity Technologies">		<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/style.css');?>"/>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/scripts/bootstrap.js');?>"></script>
	<script type="text/javascript">
		var base_url = "<?php echo base_url();?>";
	</script>
</head>
<body>
	<div id="container">
		<div id="container-header">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span6" id="box_logo">
								<img id="logo_fpmipa" style="cursor:pointer;" src="<?php echo base_url('assets/images/logo_fpmipa_upi_1.png');?>" onclick="window.location='http://fpmipa.upi.edu'"/>
<span style="color:#F9F904; font-weight:bold; position:absolute; width:420px; font-size:1.35em; letter-spacing:2px; font-family:'vivaldi',calibri,arial; margin-top:50px; margin-left:15px;">Research Based Teaching University</span>

							</div>

							<div class="span4 offset2" id="box_kerja_sama" style="position:relative;">
								<span style="color:#fff; display:block; margin-top:28px; text-align:center;">
									<img src="<?php echo base_url('assets/images/sponsor1.png');?>" style="width:80px; margin-top:-10px;"/>
									<img src="<?php echo base_url('assets/images/iso2.png');?>" style="width:150px;"/>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php $this->load->view('menu_view'); ?>