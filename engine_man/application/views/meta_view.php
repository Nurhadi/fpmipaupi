<?php
	$this->load->view('header_view');
?>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/jquery.blockUI.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/scripts/meta.js');?>"></script>
</head>
<body>
<div id="container">
    <div id="content-big">
        <?php
			$this->load->view('menu_view');
		?>
        <div class="clear"></div>
        <div style="display:none;" id="loader"><img src="<?php echo base_url('assets/images/loader.gif');?>" id="imgket"/><span id="ket"><b>Saved</b>&nbsp;&nbsp;<img src="<?php echo base_url('assets/images/check.png');?>" style="vertical-align:bottom;"/></span></div>
        <div id="main-content">
        	<div class="panel_title">Meta Tag</div>
            <div class="panel_small min" id="for_mc">
                <div class="panel_title">Meta Code<a href="#" class="act" id="mc_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="mc_container">
                    	<div id="mc_container_load">
                        	<?php
								$co=htmlentities($content_1);
								echo $co;
							?>
                    	</div>
                    </div>
                    <div id="mc_edit_container">
                        <form id="mc_form" autocomplete="off">
                            <textarea name="mc" id="mc" class="area2"><?php echo $co;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="mc_cancel" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="panel_small min" id="for_gac">
                <div class="panel_title">Google Analytics Code<a href="#" class="act" id="gac_edit">edit</a></div>
            	<div class="panel_content lef">
                    <div id="gac_container">
                    	<div id="gac_container_load">
							<?php
								$co2=htmlentities($content_2);
								echo $co2;
							?>
                       	</div>
                    </div>
                    <div id="gac_edit_container">
                        <form id="gac_form" autocomplete="off">
                            <textarea name="gac" id="gac" class="area2"/><?php echo $co2;?></textarea>
                            <input type="submit" value="Save" class="button"/>&nbsp;<input type="button" value="Cancel" class="button" id="gac_cancel" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>            
        </div>
<?php
	$this->load->view('footer_view');
?>