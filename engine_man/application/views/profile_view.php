<?php
	$this->load->view('header_view');
?>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.blockUI.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/ubah_password.js');?>"></script>
</head>
<body>
<div id="container">
    <div id="content-big">
        <?php
			$this->load->view('menu_view');
		?>
        <div class="clear"></div>
        <div id="main-content">
        	<div class="panel_title">Profile Admin</div>
		<div class="ubah_pass_content" style="padding:20px;">
			<form id="change_pass">
			<input type="hidden" name="action" id="action" value="goubah"/>
			<table>
				<tr><td width="132">Email</td><td>:</td><td><input type="text" name="email" id="email" value="<?php echo $email;?>"/></td><td>&nbsp;&nbsp;<span class="err_em" style="font-size:10px;color:#ff0000"></span></td></tr>
				<tr><td colspan="3"><input type="checkbox" id="cp" name="cp" style="display:inline-block;padding:0;margin:0;height:13px"/>&nbsp;<span style="display:inline-block">ubah password?</span></td><td></td></tr>
				<tr class="cp" style="display:none"><td><span style="margin-bottom:20px;display:block">Password Lama</span></td><td><span style="margin-bottom:20px;display:block">:</span></td><td><input type="password" name="old_password" id="old_password" style="margin-bottom:20px"/></td><td>&nbsp;&nbsp;<span class="err_pass" style="font-size:10px;color:#ff0000"></span></td></tr>
				<tr class="cp" style="display:none"><td>Password Baru</td><td>:</td><td><input type="password" name="new_password" id="new_password"/></td><td>&nbsp;&nbsp;<span class="err_pass2" style="font-size:10px;color:#ff0000"></span></td></tr>
				<tr class="cp" style="display:none"><td>Confirm Password Baru</td><td>:</td><td><input type="password" name="confirm_new_password" id="confirm_new_password"/></td><td></td></tr>
				
				<tr><td align="right" colspan="3"><input type="submit" value="Ubah"/></td><td></td></tr>
			</table>
			</form>
		</div>
        </div>
        <div id="message"><img src="<?php echo base_url('assets/images/loader.gif');?>" style="vertical-align:middle;" id="ldr"/>&nbsp;&nbsp;&nbsp;<span id="message-text">Please wait...</span></div> 
<?php
	$this->load->view('footer_view');
?>