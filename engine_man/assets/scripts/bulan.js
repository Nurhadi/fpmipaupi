var id_for_delete='';
var idk='';
var it='';
var act='';
var idprdk='';
var acti='';
var tipe_upl='';
$(document).ready(function(){

	$('ul.sf-menu').superfish();
		
	$("#bulan_table").dataTable({
		"bAutoWidth": false,
		"bProcessing": true,
		"sPaginationType": "full_numbers",
		"fnDrawCallback": function( oSettings ) {
			act_prod();
		}	
	});
	
	$("#bulan_item_add").click(function(){
		acti="add";
		$("#bulan_item_container").hide();
		$("#bulan_item_detail_container").hide();
		$("#bulan_item_edit_container").fadeIn();
		return false;
	});
	
	$("#pi_cancel").click(function(){
		//$("#pi_nama_bulan").val('');
		$("#pi_tahun").val('');
		
		$("#bulan_item_edit_container").hide();
		$("#bulan_item_container").fadeIn();
		return false;
	});
		
	$("#bulan_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_bulan_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var nama_bulan=$("#pi_nama_bulan").val();
		var tahun=$("#pi_tahun").val();
		var cct = $.cookie('em_ccn_c_name_em');
		if(acti=='edit'){
			var dataString="id_bulan="+idbulan+"&nama_bulan="+nama_bulan+"&tahun="+tahun+"&acti="+acti+"&ctn_t_name_em="+cct;
		}else{
			var dataString="nama_bulan="+nama_bulan+"&tahun="+tahun+"&acti="+acti+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			url:base_url+"bulan/save_bulan",
			data:dataString,
			success:function(msg){
				setTimeout(function(){
					$("#imgket").hide();
					$("#ket").fadeIn();
					var t=new Date();
					$("#bulan_item_container").empty().load("bulan.html?"+t.getTime()+" #bulan_item_container_load",function(){
						$("#bulan_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",	
							"fnDrawCallback": function( oSettings ){
								act_prod();
							}
						});
						setTimeout(function(){
							$("#bulan_item_edit_container").hide();
							//$("#pi_nama_bulan").val('');
							$("#pi_tahun").val('');
							$("#bulan_item_container").fadeIn();
							$("#for_bulan_item").unblock();
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
	
	$("#delete_yes").click(function(){
		var cct = $.cookie('em_ccn_c_name_em');
		$("#ket_delete").hide();
		$("#imgket_delete").fadeIn();
		$("#delete_container").block({message:$("#loader_delete"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'},overlayCSS:{'-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString="id="+id_for_delete+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"bulan/delete_bulan",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#bulan_item_container").empty().load("bulan.html?"+t.getTime()+" #bulan_item_container_load",function(){
							$("#bulan_table").dataTable({
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
	
});

function act_prod(){
	$(".delete_bulan").click(function(){
		id_for_delete=$(this).attr('ids');
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	//edit bulan
	$(".edit_bulan").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_bulan_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		idbulan=$(this).attr("ids");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id_bulan="+idbulan+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"bulan/get_data_bulan",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#pi_nama_bulan").val(detail[0]);
				$("#pi_tahun").val(detail[1]);
				setTimeout(function(){
					$("#bulan_item_container").hide();
					$("#bulan_item_detail_container").hide();
					$("#bulan_item_edit_container").fadeIn();
					$("#for_bulan_item").unblock();
				},500);
			}
		});
		return false;
	});
	
	$(".detail_bulan").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_bulan_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var ids=$(this).attr("ids");
		var t=new Date();
		$("#bulan_item_detail_container").empty().load(base_url+"detail_bulan/"+ids+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#bulan_item_detail_container").hide();
				$("#bulan_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#bulan_item_container").hide();
				$("#bulan_item_detail_container").fadeIn();
				$("#for_slider_item").unblock();
			},1000);
		});
		return false;
	});
}