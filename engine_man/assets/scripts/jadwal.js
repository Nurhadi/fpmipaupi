var id_for_delete='';
var idk='';
var it='';
var act='';
var idprdk='';
var acti='';
var tipe_upl='';
$(document).ready(function(){

	$('textarea.editor').ckeditor({
		filebrowserBrowseUrl: base_url+'assets/fm/fm.html',
		uiColor : '#cdcdcd',
		resize_enabled : false,
		removePlugins:'save,newpage,templates'
	});
	
	$('textarea.editor2').ckeditor({
		filebrowserBrowseUrl: base_url+'assets/fm/fm.html',
		uiColor : '#cdcdcd',
		resize_enabled : false,
		removePlugins:'save,newpage,templates'
	});
	
	$('textarea.editor3').ckeditor({
		filebrowserBrowseUrl: base_url+'assets/fm/fm.html',
		uiColor : '#cdcdcd',
		resize_enabled : false,
		removePlugins:'save,newpage,templates'
	});

	$('ul.sf-menu').superfish();
			
	$("#cancel3").click(function(){
		$('#filedoc3').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_jadwal').ajaxForm({
		beforeSend: function() {
			$('#f1_upload_process3').show();
			$('#f1_upload_form3').hide();
			$('#ket_up3').slideUp();
		},
		data:{'ctn_t_name_em':$.cookie('em_ccn_c_name_em')},
		complete: function(xhr) {
			var msg=$.trim(xhr.responseText).split(',');
			var result = '';
			if (msg[0] == 1){
				result = '<span class="msg2">Data was successfully saved!<\/span>';
				setTimeout(function(){
					$.unblockUI();
					$("#pi_path").val(msg[1]);
					var dataString=msg[1]+"/872/872";
					var t=new Date();
					$("#img_prev").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl").hide();
						$("#img_prev_container").fadeIn();		
					});
				 },1000);
			}
			else if(msg[0] == 2){
				result = '<span class="emsg2">Only *.jpg, *.jpeg, *.png and *.gif are allowed!<\/span>';
				$('#f1_upload_form3').show();
			}
			else if(msg[0] == 3){
				result = '<span class="emsg2">No File Choosen, Please Chose File First!<\/span>';
				$('#f1_upload_form3').show();
			}
			else {	
				result = '<span class="emsg2">There was an error during file upload!<\/span>';
				$('#f1_upload_form3').show();
			}
			$('#f1_upload_process3').hide();
			$('#filedoc3').val('');
			$('#ket_up3').html(result).slideDown(); 
		}
	});		
	
	$("#jadwal_table").dataTable({
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
		dataString+="&page_id=7&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("jadwal.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=7&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("jadwal.html?"+t.getTime()+" #description_container_load",function(){
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
		dataString+="&page_id=7&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("jadwal.html?"+t.getTime()+" #title_container_load",function(){
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
			url:base_url+"jadwal/delete_jadwal",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#jadwal_item_container").empty().load("jadwal.html?"+t.getTime()+" #jadwal_item_container_load",function(){
							$("#jadwal_table").dataTable({
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
	
	$("#jadwal_item_add").click(function(){
		acti="add";
		$("#jadwal_item_container").hide();
		$("#jadwal_item_detail_container").hide();
		$("#jadwal_item_edit_container").fadeIn();
		return false;
	});
	
	$("#pi_cancel").click(function(){
		$("#pi_title").val('');
		$("#pi_bulan").val('');
		$("#pi_budget").val('');
		$("#pi_destinasi").val('');
		$("#pi_deskripsi").val('');
		$("#pi_term").val('');
		$("#pi_spend_time").val('');
		$("#pi_date_start").val('');
		$("#pi_date_end").val('');
		if(acti=='add'){
			var ldc=$("#pi_path").val();
			if(ldc!=''){
				var cct = $.cookie('em_ccn_c_name_em');
				var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
				$.ajax({
					type:"POST",
					url:base_url+"del_img",
					data:dataString,
					success:function(msg){
						if(msg==1){
							$("#pi_path").val('');
							$("#img_prev_container").hide();
							$("#img_upl").fadeIn();
						}else{
							$("#img_prev").append("<br><font color='red'>there was an error during file delete!</font>");
						}
					}
				});
			}
		}else{
			$("#pi_path").val('');
			$("#img_prev_container").hide();
			$("#img_upl").fadeIn();
		}
		$("#jadwal_item_edit_container").hide();
		$("#jadwal_item_container").fadeIn();
		return false;
	});
	
	$("#img_upl").click(function(){
		$('#ket_up3').hide();
		$('#f1_upload_form3').fadeIn();
		$('#filedoc3').val('');
		$.blockUI({message:$("#container_up3"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel").click(function(){
		$('#filedoc3').val('');
		$.unblockUI();
		return false;
	});
	
	$("#del_img").click(function(){
		var ldc=$("#pi_path").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_img",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#pi_path").val('');
					$("#img_prev_container").hide();
					$("#img_upl").fadeIn();
				}else{
					$("#img_prev").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	$("#jadwal_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_jadwal_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var t=$("#pi_title").val();
		var bl=$("#pi_bulan").val();
		var b=$("#pi_budget").val();
		//var dt=$("#pi_destinasi").val();
		var dt=$('textarea.editor').val();
		//var dk=$("#pi_deskripsi").val();
		var dk=$('textarea.editor2').val();
		//var te=$("#pi_term").val();
		var te=$('textarea.editor3').val();
		dt=encodeURIComponent(dt);
		dk=encodeURIComponent(dk);
		te=encodeURIComponent(te);
		var s=$("#pi_spend_time").val();
		var ds=$("#pi_date_start").val();
		var de=$("#pi_date_end").val();
		var p=$("#pi_path").val();
		var cct = $.cookie('em_ccn_c_name_em');
		if(acti=='edit'){
			var dataString="id_jadwal="+idjadwal+"&id_bulan="+bl+"&title="+t+"&budget="+b+"&spend_time="+s+"&destinasi="+dt+"&deskripsi="+dk+"&term="+te+"&date_start="+ds+"&date_end="+de+"&img_thumbnail="+p+"&acti="+acti+"&ctn_t_name_em="+cct;
		}else{
			var dataString="title="+t+"&id_bulan="+bl+"&budget="+b+"&spend_time="+s+"&destinasi="+dt+"&deskripsi="+dk+"&term="+te+"&date_start="+ds+"&date_end="+de+"&img_thumbnail="+p+"&acti="+acti+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			url:base_url+"jadwal/save_jadwal",
			data:dataString,
			success:function(msg){
				setTimeout(function(){
					$("#imgket").hide();
					$("#ket").fadeIn();
					var t=new Date();
					$("#jadwal_item_container").empty().load("jadwal.html?"+t.getTime()+" #jadwal_item_container_load",function(){
						$("#jadwal_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",	
							"fnDrawCallback": function( oSettings ){
								act_prod();
							}
						});
						setTimeout(function(){
							$("#jadwal_item_edit_container").hide();
							$("#pi_title").val('');
							$("#pi_bulan").val('');
							$("#pi_budget").val('');
							$("#pi_spend_time").val('');
							$("#pi_destinasi").val('');
							$("#pi_deskripsi").val('');
							$("#pi_term").val('');
							$("#pi_date_start").val('');
							$("#pi_date_end").val('');
							$("#pi_path").val('');
							$("#img_prev_container").hide();
							$("#img_upl").fadeIn();
							$("#jadwal_item_container").fadeIn();
							$("#for_jadwal_item").unblock();
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
	$(".detail_jadwal").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_jadwal_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var id_jadwal=$(this).attr("ids");
		var t=new Date();
		$("#jadwal_item_detail_container").empty().load(base_url+"detail_jadwal/"+id_jadwal+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#jadwal_item_detail_container").hide();
				$("#jadwal_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#jadwal_item_container").hide();
				$("#jadwal_item_detail_container").fadeIn();
				$("#for_jadwal_item").unblock();
			},1000);
		});
		return false;
	});
	
	$(".delete_jadwal").click(function(){
		id_for_delete=$(this).attr('ids');
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$(".edit_jadwal").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_jadwal_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		idjadwal=$(this).attr("ids");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id_jadwal="+idjadwal+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"jadwal/get_data_jadwal",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#pi_title").val(detail[0]);
				$("#pi_budget").val(detail[2]);
				$("#pi_spend_time").val(detail[3]);
				if(detail[4]!='data/def_slider.png'){
					var dataString=detail[4]+"/872/872";
					var t=new Date();
					$("#img_prev").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl").hide();
						$("#img_prev_container").fadeIn();		
					});
					$("#pi_path").val(detail[4]);
				}else{
					$("#img_prev_container").hide();
					$("#img_upl").fadeIn();
				}
				$("#pi_date_start").val(detail[5]);
				$("#pi_date_end").val(detail[6]);
				$("#pi_destinasi").val(detail[7]);
				$("#pi_deskripsi").val(detail[8]);
				$("#pi_term").val(detail[9]);
				setTimeout(function(){
					$("#jadwal_item_container").hide();
					$("#jadwal_item_detail_container").hide();
					$("#jadwal_item_edit_container").fadeIn();
					$("#for_jadwal_item").unblock();
				},500);
			}
		});
		return false;
	});
	
}