<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forgot Password | Engine Manager</title>
<link rel="stylesheet" href="<?php echo base_url('assets/styles/style.css');?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-1.8.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.blockUI.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/forgot.js');?>"></script>
<script>
	var base_url="<?php echo base_url();?>";
</script>
</head>
<body>
<div id="content">
	<h1 class="head" style="padding-top:16px;width:172px;">Forgot<br/>Password</h1>
    <div id="error">Email not registered</div>
	<div id="field">
    <?php 
		$attr=array('id'=>'forgot-form','autocomplete'=>'off');
		echo form_open('',$attr);
	?>
    	<table width="100%">
        	<tr><td width="100px"></td><td align="center"><label for="username">Email</label></td><td><input type="text" name="email" id="email"/></td></tr>
        	
        	<tr><td></td><td></td><td><input type="hidden" name="action" id="action" value="goforgot" /><input type="submit" value="Send" class="button"/></td></tr>
        </table>
    <?php echo form_close();?>
    </div> 
    <div id="message"><img src="<?php echo base_url('assets/images/loader.gif');?>" style="vertical-align:middle;" id="ldr"/>&nbsp;&nbsp;&nbsp;<span id="message-text">Checking email...</span></div>   
    <div id="footer" style="bottom:10px;right:10px;">
		<a href="http://www.klik-web.com" target="_blank">Copyright 2011</a><!--. Development By Klik-Web.com-->
	</div>
</div>
</body>
</html>