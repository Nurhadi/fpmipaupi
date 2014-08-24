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

	$('#upload_dosen').ajaxForm({
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

	$("#dosen_table").dataTable({
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
		dataString+="&page_id=12&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("dosen.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=12&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("dosen.html?"+t.getTime()+" #description_container_load",function(){
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
		dataString+="&page_id=12&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("dosen.html?"+t.getTime()+" #title_container_load",function(){
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
			url:base_url+"dosen/delete_dosen",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#dosen_item_container").empty().load("dosen.html?"+t.getTime()+" #dosen_item_container_load",function(){
							$("#dosen_table").dataTable({
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

	$("#dosen_item_add").click(function(){
		acti="add";
		$("#dosen_item_container").hide();
		$("#dosen_item_detail_container").hide();
		$("#dosen_item_edit_container").fadeIn();
		return false;
	});

	$("#pi_cancel").click(function(){
		$("#pi_name").val('');
		$("#pi_jabatan").val('');
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
		$("#dosen_item_edit_container").hide();
		$("#dosen_item_container").fadeIn();
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

	$("#dosen_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_dosen_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var nip=$("#pi_nip").val(); if(nip==''){nip='-';}
		var nidn=$("#pi_nidn").val(); if(nidn==''){nidn='-';}
		var kodo=$("#pi_kode_dosen").val(); if(kodo==''){kodo='-';}
		var n=$("#pi_name").val();
		var alamat=$("#pi_alamat").val(); if(alamat==''){alamat='-';}
		var tel=$("#pi_telepon").val(); if(tel==''){tel='-';}
		var gol=$("#pi_golongan").val(); if(gol==''){gol='-';}
		var jur=$("#pi_jurusan").val();
		var ripen=$("#pi_riwayat_pendidikan").val(); if(ripen==''){ripen='-';}
		var kompetensi=$("#pi_kompetensi").val(); if(kompetensi==''){kompetensi='-';}
		var p=$("#pi_path").val();
		var cct = $.cookie('em_ccn_c_name_em');
		if(acti=='edit'){
			var dataString="id_dosen="+iddosen+"&nip="+nip+"&nidn="+nidn+"&kodo="+kodo+"&name="+n+"&alamat="+alamat+"&telepon="+tel+"&golongan="+gol+"&jurusan="+jur+"&ripen="+ripen+"&kompetensi="+kompetensi+"&image_path="+p+"&acti="+acti+"&ctn_t_name_em="+cct;
		}else{
			var dataString="nip="+nip+"&nidn="+nidn+"&kodo="+kodo+"&name="+n+"&alamat="+alamat+"&telepon="+tel+"&golongan="+gol+"&jurusan="+jur+"&ripen="+ripen+"&kompetensi="+kompetensi+"&image_path="+p+"&acti="+acti+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			url:base_url+"dosen/save_dosen",
			data:dataString,
			success:function(msg){
				setTimeout(function(){
					$("#imgket").hide();
					$("#ket").fadeIn();
					var t=new Date();
					$("#dosen_item_container").empty().load("dosen.html?"+t.getTime()+" #dosen_item_container_load",function(){
						$("#dosen_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",
							"fnDrawCallback": function( oSettings ){
								act_prod();
							}
						});
						setTimeout(function(){
							$("#dosen_item_edit_container").hide();
							$("#pi_nip").val('');
							$("#pi_nidn").val('');
							$("#pi_kode_dosen").val('');
							$("#pi_name").val('');
							$("#pi_alamat").val('');
							$("#pi_telepon").val('');
							$("#pi_golongan").val('');
							$("#pi_jurusan").val('');
							$("#pi_riwayat_pendidikan").val('');
							$("#pi_kompetensi").val('');
							$("#pi_path").val('');
							$("#img_prev_container").hide();
							$("#img_upl").fadeIn();
							$("#dosen_item_container").fadeIn();
							$("#for_dosen_item").unblock();
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
	$(".detail_dosen").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_dosen_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var id_dosen=$(this).attr("ids");
		var t=new Date();
		$("#dosen_item_detail_container").empty().load(base_url+"detail_dosen/"+id_dosen+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#dosen_item_detail_container").hide();
				$("#dosen_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#dosen_item_container").hide();
				$("#dosen_item_detail_container").fadeIn();
				$("#for_dosen_item").unblock();
			},1000);
		});
		return false;
	});

	$(".delete_dosen").click(function(){
		id_for_delete=$(this).attr('ids');
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});

	$(".edit_dosen").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_dosen_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		iddosen=$(this).attr("ids");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id_dosen="+iddosen+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"dosen/get_data_dosen",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#pi_nip").val(detail[0]);
				$("#pi_nidn").val(detail[1]);
				$("#pi_kode_dosen").val(detail[2]);
				$("#pi_name").val(detail[3]);
				$("#pi_alamat").val(detail[4]);
				$("#pi_telepon").val(detail[5]);
				$("#pi_golongan").val(detail[6]);
				$("#pi_jurusan").val(detail[7]);
				$("#pi_riwayat_pendidikan").val(detail[8]);
				$("#pi_kompetensi").val(detail[9]);
				if(detail[10]!='data/def_slider.png'){
					var dataString=detail[10]+"/872/872";
					var t=new Date();
					$("#img_prev").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl").hide();
						$("#img_prev_container").fadeIn();
					});
					$("#pi_path").val(detail[10]);
				}else{
					$("#img_prev_container").hide();
					$("#img_upl").fadeIn();
				}
				setTimeout(function(){
					$("#dosen_item_container").hide();
					$("#dosen_item_detail_container").hide();
					$("#dosen_item_edit_container").fadeIn();
					$("#for_dosen_item").unblock();
				},500);
			}
		});
		return false;
	});

}