$(document).ready(function(){
	$('ul.sf-menu').superfish();
	
	$("#mc_edit").click(function(){
		$("#mc_container").hide();
		$("#mc_edit_container").fadeIn();
		return false;
	});
		
	$("#mc_cancel").click(function(){
		$("#mc_edit_container").hide();
		$("#mc_container").fadeIn();
		return false;
	});	
	
	$("#mc_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_mc").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString=$(this).serialize();
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_mc",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#mc_container").empty().load("meta-tag.html?"+t.getTime()+" #mc_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#mc_edit_container").hide();
								$("#mc_container").fadeIn();
								setTimeout(function(){
									$("#for_mc").unblock();
								},500);
							},1000);
						});
					},1000);
				}else{
					alert(msg);	
				}
			}
		});
		return false;
	});
		
	$("#gac_edit").click(function(){
		$("#gac_container").hide();
		$("#gac_edit_container").fadeIn();
		return false;
	});
	
	$("#gac_cancel").click(function(){
		$("#gac_edit_container").hide();
		$("#gac_container").fadeIn();
		return false;
	});
	
	$("#gac_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_gac").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString=$(this).serialize();
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_gac",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#gac_container").empty().load("meta-tag.html?"+t.getTime()+" #gac_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#gac_edit_container").hide();
								$("#gac_container").fadeIn();
								setTimeout(function(){
									$("#for_gac").unblock();
								},500);
							},1000);
						});
					},1000);
				}else{
					alert(msg);	
				}
			}
		});
		return false;
	});	
});
