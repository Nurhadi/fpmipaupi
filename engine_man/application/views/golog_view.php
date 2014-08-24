<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login | Engine Manager</title>
<link rel="stylesheet" href="<?php echo base_url('assets/styles/style.css');?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery-1.8.1.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.cookie.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.blockUI.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/index.js');?>"></script>
<script>
	var base_url="<?php echo base_url();?>";
</script>
</head>
<body>
<div id="content">
	<h1 class="head">Login</h1>
    <div id="error">Wrong username/password</div>
	<div id="field">
    <form id="login-form" autocomplete="off">
    	<table width="100%">
        	<tr><td width="100px"></td><td align="center"><label for="username">Username</label></td><td><input type="text" name="username" id="username"/></td></tr>
        	<tr><td></td><td align="center"><label for="password">Password</label></td><td><input type="password" name="password" id="password"/></td></tr>
        	<tr><td></td><td></td><td><input type="hidden" name="action" id="action" value="gologin" /><a href="<?php echo site_url('forgot');?>">forgot password?</a></td></tr>
	        <tr><td></td><td></td><td><input type="submit" value="Login"/></td></tr>
        </table>
    </form>
    </div> 
    <div id="message"><img src="<?php echo base_url('assets/images/loader.gif');?>" style="vertical-align:middle;"/>&nbsp;&nbsp;&nbsp;<span id="message-text">Loging in...</span></div>   
    <div id="footer" style="bottom:10px;right:10px;">
	    <a href="http://www.klik-web.com" target="_blank">Copyright 2011</a><!--. Development By Klik-Web.com-->
	</div>
</div>
</body>
</html>