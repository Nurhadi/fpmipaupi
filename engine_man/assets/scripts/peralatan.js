var id_for_delete='';
var idk='';
var it='';
var act='';
var idprdk='';
var acti='';
var tipe_upl='';
$(document).ready(function(){

	$('ul.sf-menu').superfish();
			
	$("#peralatan_table").dataTable({
		"bAutoWidth": false,
		"bProcessing": true,
		"sPaginationType": "full_numbers",
		"fnDrawCallback": function( oSettings ) {
			act_prod();
		}	
	});
	
	$("#keyword_edit").click(function(){
		$("#keyword_container").hide();
		$("#keyword_edit_container").fadeIn();
		return false;
	});
		
	$("#keyword_cancel").click(function(){
		$("#keyword_edit_container").hide();
		$("#keyword_container").fadeIn();
		return false;
	});	
	
	$("#keyword_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_keyword").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString=$(this).serialize();
		var page=$("#page_id").val();
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&page_id=15&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_keyword",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#keyword_container").empty().load("peralatan.html?"+t.getTime()+" #keyword_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#keyword_edit_container").hide();
								$("#keyword_container").fadeIn();
								setTimeout(function(){
									$("#for_keyword").unblock();
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
		
	$("#description_edit").click(function(){
		$("#description_container").hide();
		$("#description_edit_container").fadeIn();
		return false;
	});
	
	$("#description_cancel").click(function(){
		$("#description_edit_container").hide();
		$("#description_container").fadeIn();
		return false;
	});
	
	$("#description_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_description").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString=$(this).serialize();
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&page_id=15&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_description",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#description_container").empty().load("peralatan.html?"+t.getTime()+" #description_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#description_edit_container").hide();
								$("#description_container").fadeIn();
								setTimeout(function(){
									$("#for_description").unblock();
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
	
	$("#title_edit").click(function(){
		$("#title_container").hide();
		$("#title_edit_container").fadeIn();
		return false;
	});
	
	$("#title_cancel").click(function(){
		$("#title_edit_container").hide();
		$("#title_container").fadeIn();
		return false;
	});
	
	$("#title_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_title").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString=$(this).serialize();
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&page_id=15&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_title",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#title_container").empty().load("peralatan.html?"+t.getTime()+" #title_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#title_edit_container").hide();
								$("#title_container").fadeIn();
								setTimeout(function(){
									$("#for_title").unblock();
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
	
	$("#delete_yes").click(function(){
		var cct = $.cookie('em_ccn_c_name_em');
		$("#ket_delete").hide();
		$("#imgket_delete").fadeIn();
		$("#delete_container").block({message:$("#loader_delete"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'},overlayCSS:{'-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString="id="+id_for_delete+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"peralatan/delete_peralatan",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#peralatan_item_container").empty().load("peralatan.html?"+t.getTime()+" #peralatan_item_container_load",function(){
							$("#peralatan_table").dataTable({
								"bAutoWidth": false,
								"bProcessing": true,
								"sPaginationType": "full_numbers",
								"fnDrawCallback": function( oSettings ) {
									act_prod();
								}								
							});
							setTimeout(function(){
								$("#delete_container").unblock();
								$.unblockUI();
							},1000);
						});
					},1000);
				}else{
					alert('Ops error nih (@_@)/');	
				}
			}
		});
		return false;
	});
	
	$("#peralatan_item_add").click(function(){
		acti="add";
		$("#peralatan_item_container").hide();
		$("#peralatan_item_detail_container").hide();
		$("#peralatan_item_edit_container").fadeIn();
		return false;
	});
	
	$("#pi_cancel").click(function(){
		$("#pi_name").val('');
		$("#pi_desc").val('');
		$("#pi_jumlah").val('');

		$("#peralatan_item_edit_container").hide();
		$("#peralatan_item_container").fadeIn();
		return false;
	});
	
	$("#peralatan_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_peralatan_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var n=$("#pi_name").val();
		var d=$("#pi_desc").val();
		var jr=$("#pi_jurusan").val();
		var jm=$("#pi_jumlah").val();
		var cct = $.cookie('em_ccn_c_name_em');
		if(acti=='edit'){
			var dataString="id_peralatan="+idperalatan+"&name="+n+"&jurusan="+jr+"&description="+d+"&jumlah="+jm+"&acti="+acti+"&ctn_t_name_em="+cct;
		}else{
			var dataString="name="+n+"&jurusan="+jr+"&description="+d+"&jumlah="+jm+"&acti="+acti+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			url:base_url+"peralatan/save_peralatan",
			data:dataString,
			success:function(msg){
				setTimeout(function(){
					$("#imgket").hide();
					$("#ket").fadeIn();
					var t=new Date();
					$("#peralatan_item_container").empty().load("peralatan.html?"+t.getTime()+" #peralatan_item_container_load",function(){
						$("#peralatan_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",	
							"fnDrawCallback": function( oSettings ){
								act_prod();
							}
						});
						setTimeout(function(){
							$("#peralatan_item_edit_container").hide();
							$("#pi_name").val('');
							$("#pi_desc").val('');
							$("#pi_jumlah").val('');
							$("#peralatan_item_container").fadeIn();
							$("#for_peralatan_item").unblock();
						},1000);
					});
				},1000);
			}
		});
		return false;
	});
	
	$("#delete_no").click(function(){
		$.unblockUI();
		return false;
	});
	
});

function act_prod(){
	$(".detail_peralatan").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_peralatan_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var id_peralatan=$(this).attr("ids");
		var t=new Date();
		$("#peralatan_item_detail_container").empty().load(base_url+"detail_peralatan/"+id_peralatan+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#peralatan_item_detail_container").hide();
				$("#peralatan_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#peralatan_item_container").hide();
				$("#peralatan_item_detail_container").fadeIn();
				$("#for_peralatan_item").unblock();
			},1000);
		});
		return false;
	});
	
	$(".delete_peralatan").click(function(){
		id_for_delete=$(this).attr('ids');
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$(".edit_peralatan").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_peralatan_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		idperalatan=$(this).attr("ids");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id_peralatan="+idperalatan+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"peralatan/get_data_peralatan",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#pi_name").val(detail[0]);
				$("#pi_desc").val(detail[1]);
				$("#pi_jurusan").val(detail[2]);
				$("#pi_jumlah").val(detail[3]);
				setTimeout(function(){
					$("#peralatan_item_container").hide();
					$("#peralatan_item_detail_container").hide();
					$("#peralatan_item_edit_container").fadeIn();
					$("#for_peralatan_item").unblock();
				},500);
			}
		});
		return false;
	});
	
}