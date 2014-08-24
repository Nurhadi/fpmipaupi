var id_for_delete='';
var idk='';
var it='';
var act='';
var idprdk='';
var acti='';
var tipe_upl='';
$(document).ready(function(){
	//mytravelink
	
	$("#address_edit").click(function(){
		$("#address_container").hide();
		$("#address_edit_container").fadeIn();
		return false;
	});
		
	$("#address_cancel").click(function(){
		$("#address_edit_container").hide();
		$("#address_container").fadeIn();
		return false;
	});	
	
	$("#address_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_address").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var address=$('#address').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="address="+address+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_address",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#address_container").empty().load("beranda.html?"+t.getTime()+" #address_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#address_edit_container").hide();
								$("#address_container").fadeIn();
								setTimeout(function(){
									$("#for_address").unblock();
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
	
	$("#yahoo1_edit").click(function(){
		$("#yahoo1_container").hide();
		$("#yahoo1_edit_container").fadeIn();
		return false;
	});
		
	$("#yahoo1_cancel").click(function(){
		$("#yahoo1_edit_container").hide();
		$("#yahoo1_container").fadeIn();
		return false;
	});	
	
	$("#yahoo1_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_yahoo1").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var yahoo1=$('#yahoo1').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="yahoo1="+yahoo1+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_yahoo1",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#yahoo1_container").empty().load("beranda.html?"+t.getTime()+" #yahoo1_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#yahoo1_edit_container").hide();
								$("#yahoo1_container").fadeIn();
								setTimeout(function(){
									$("#for_yahoo1").unblock();
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
	
	$("#yahoo2_edit").click(function(){
		$("#yahoo2_container").hide();
		$("#yahoo2_edit_container").fadeIn();
		return false;
	});
		
	$("#yahoo2_cancel").click(function(){
		$("#yahoo2_edit_container").hide();
		$("#yahoo2_container").fadeIn();
		return false;
	});	
	
	$("#yahoo2_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_yahoo2").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var yahoo2=$('#yahoo2').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="yahoo2="+yahoo2+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_yahoo2",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#yahoo2_container").empty().load("beranda.html?"+t.getTime()+" #yahoo2_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#yahoo2_edit_container").hide();
								$("#yahoo2_container").fadeIn();
								setTimeout(function(){
									$("#for_yahoo2").unblock();
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
	
	$("#facebook_edit").click(function(){
		$("#facebook_container").hide();
		$("#facebook_edit_container").fadeIn();
		return false;
	});
		
	$("#facebook_cancel").click(function(){
		$("#facebook_edit_container").hide();
		$("#facebook_container").fadeIn();
		return false;
	});	
	
	$("#facebook_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_facebook").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var facebook=$('#facebook').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="facebook="+facebook+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_facebook",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#facebook_container").empty().load("beranda.html?"+t.getTime()+" #facebook_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#facebook_edit_container").hide();
								$("#facebook_container").fadeIn();
								setTimeout(function(){
									$("#for_facebook").unblock();
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
	
	$("#twitter_edit").click(function(){
		$("#twitter_container").hide();
		$("#twitter_edit_container").fadeIn();
		return false;
	});
		
	$("#twitter_cancel").click(function(){
		$("#twitter_edit_container").hide();
		$("#twitter_container").fadeIn();
		return false;
	});	
	
	$("#twitter_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_twitter").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var twitter=$('#twitter').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="twitter="+twitter+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_twitter",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#twitter_container").empty().load("beranda.html?"+t.getTime()+" #twitter_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#twitter_edit_container").hide();
								$("#twitter_container").fadeIn();
								setTimeout(function(){
									$("#for_twitter").unblock();
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
	
	$("#blackberry_edit").click(function(){
		$("#blackberry_container").hide();
		$("#blackberry_edit_container").fadeIn();
		return false;
	});
		
	$("#blackberry_cancel").click(function(){
		$("#blackberry_edit_container").hide();
		$("#blackberry_container").fadeIn();
		return false;
	});	
	
	$("#blackberry_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_blackberry").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var blackberry=$('#blackberry').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="blackberry="+blackberry+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_blackberry",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#blackberry_container").empty().load("beranda.html?"+t.getTime()+" #blackberry_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#blackberry_edit_container").hide();
								$("#blackberry_container").fadeIn();
								setTimeout(function(){
									$("#for_blackberry").unblock();
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
	
	$("#gmail_edit").click(function(){
		$("#gmail_container").hide();
		$("#gmail_edit_container").fadeIn();
		return false;
	});
		
	$("#gmail_cancel").click(function(){
		$("#gmail_edit_container").hide();
		$("#gmail_container").fadeIn();
		return false;
	});	
	
	$("#gmail_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_gmail").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var gmail=$('#gmail').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="gmail="+gmail+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_gmail",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#gmail_container").empty().load("beranda.html?"+t.getTime()+" #gmail_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#gmail_edit_container").hide();
								$("#gmail_container").fadeIn();
								setTimeout(function(){
									$("#for_gmail").unblock();
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
	
	$("#whatsapp_edit").click(function(){
		$("#whatsapp_container").hide();
		$("#whatsapp_edit_container").fadeIn();
		return false;
	});
		
	$("#whatsapp_cancel").click(function(){
		$("#whatsapp_edit_container").hide();
		$("#whatsapp_container").fadeIn();
		return false;
	});	
	
	$("#whatsapp_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_whatsapp").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var whatsapp=$('#whatsapp').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="whatsapp="+whatsapp+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_whatsapp",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#whatsapp_container").empty().load("beranda.html?"+t.getTime()+" #whatsapp_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#whatsapp_edit_container").hide();
								$("#whatsapp_container").fadeIn();
								setTimeout(function(){
									$("#for_whatsapp").unblock();
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
	
	$("#handphone_edit").click(function(){
		$("#handphone_container").hide();
		$("#handphone_edit_container").fadeIn();
		return false;
	});
		
	$("#handphone_cancel").click(function(){
		$("#handphone_edit_container").hide();
		$("#handphone_container").fadeIn();
		return false;
	});	
	
	$("#handphone_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_handphone").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var handphone=$('#handphone').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="handphone="+handphone+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_handphone",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#handphone_container").empty().load("beranda.html?"+t.getTime()+" #handphone_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#handphone_edit_container").hide();
								$("#handphone_container").fadeIn();
								setTimeout(function(){
									$("#for_handphone").unblock();
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
	
	$("#teks_edit").click(function(){
		$("#teks_container").hide();
		$("#teks_edit_container").fadeIn();
		return false;
	});
		
	$("#teks_cancel").click(function(){
		$("#teks_edit_container").hide();
		$("#teks_container").fadeIn();
		return false;
	});	
	
	$("#teks_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_teks").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var teks=$('#teks').val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="teks="+teks+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"lib_func/save_teks",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#teks_container").empty().load("beranda.html?"+t.getTime()+" #teks_container_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#teks_edit_container").hide();
								$("#teks_container").fadeIn();
								setTimeout(function(){
									$("#for_teks").unblock();
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
	
	//mytravelink

	$('ul.sf-menu').superfish();
	
	$("#text_edit").click(function(){
		$("#text_content").hide();
		$("#text_editor").fadeIn();
		return false;
	});
	
	$("#text_cancel").click(function(){
		$("#text_editor").hide();
		$("#text_content").fadeIn();
		return false;
	});
	
	$("#subt").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_text").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var myText=$('textarea.editor').val();
		myText=encodeURIComponent(myText);
		var dataString="text="+myText;
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"beranda/save_text_content",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#text_content").empty().load("beranda.html?"+t.getTime()+" #text_content_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#text_editor").hide();
								$("#text_content").fadeIn();
								setTimeout(function(){
									$("#for_text").unblock();
								},500);
							},1000);
						});
					},1000);
				}else{
					alert('Ops error nih (T_T)/');
				}
			}
		});
		return false;
	});
	
	$("#cancel3").click(function(){
		$('#filedoc3').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_slider').ajaxForm({
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
	
	$("#slider_table").dataTable({
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
		dataString+="&page_id=6&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("beranda.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=6&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("beranda.html?"+t.getTime()+" #description_container_load",function(){
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
		dataString+="&page_id=6&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("beranda.html?"+t.getTime()+" #title_container_load",function(){
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
			url:base_url+"delete_slider",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#slider_item_container").empty().load("beranda.html?"+t.getTime()+" #slider_item_container_load",function(){
							$("#slider_table").dataTable({
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
	
	$("#delete_no").click(function(){
		$.unblockUI();
		return false;
	});
	
	$("#slider_item_add").click(function(){
		acti="add";
		$("#slider_item_container").hide();
		$("#slider_item_detail_container").hide();
		$("#slider_item_edit_container").fadeIn();
		return false;
	});
	
	$("#pi_cancel").click(function(){
		$("#pi_title").val('');
		$("#pi_keyword").val('');
		$("#pi_description").val('');
		$('textarea.editor').val('');
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
		$("#slider_item_edit_container").hide();
		$("#slider_item_container").fadeIn();
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
	
	$("#slider_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_slider_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var t=$("#pi_title").val();
		var k=$("#pi_keyword").val();
		var de=$("#pi_description").val();
		var p=$("#pi_path").val();
		var l=$("#pi_link").val();
		l=encodeURIComponent(l);
		var cct = $.cookie('em_ccn_c_name_em');
		if(acti=='edit'){
			var dataString="slider_id="+idsld+"&mytitle="+t+"&mylink="+l+"&mykeyword="+k+"&mydesc="+de+"&mypath="+p+"&acti="+acti+"&ctn_t_name_em="+cct;
		}else{
			var dataString="mytitle="+t+"&mylink="+l+"&mykeyword="+k+"&mydesc="+de+"&mypath="+p+"&acti="+acti+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			url:base_url+"beranda/save_slider",
			data:dataString,
			success:function(msg){
				setTimeout(function(){
					$("#imgket").hide();
					$("#ket").fadeIn();
					var t=new Date();
					$("#slider_item_container").empty().load("beranda.html?"+t.getTime()+" #slider_item_container_load",function(){
						$("#slider_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",	
							"fnDrawCallback": function( oSettings ){
								act_prod();
							}
						});
						setTimeout(function(){
							$("#slider_item_edit_container").hide();
							$("#pi_title").val('');
							$("#pi_path").val('');
							$("#pi_keyword").val('');
							$("#pi_description").val('');
							$('textarea.editor').val('');
							$("#img_prev_container").hide();
							$("#img_upl").fadeIn();
							$("#slider_item_container").fadeIn();
							$("#for_slider_item").unblock();
						},1000);
					});
				},1000);
			}
		});
		return false;
	});
	
});

function act_prod(){
	$(".detail_beranda").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_produk_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var id_beranda=$(this).attr("idp");
		var t=new Date();
		$("#produk_item_detail_container").empty().load(base_url+"detail_beranda/"+id_beranda+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#produk_item_detail_container").hide();
				$("#produk_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#produk_item_container").hide();
				$("#produk_item_detail_container").fadeIn();
				$("#for_produk_item").unblock();
			},1000);
		});
		return false;
	});
	
	$(".delete_slider").click(function(){
		id_for_delete=$(this).attr('ids');
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$(".edit_beranda").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_produk_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		idberanda=$(this).attr("idp");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id_beranda="+idberanda+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"get_detail_beranda",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$('#pi_no_kartu_garansi').val(detail[0]);
				$('#pi_tanggal_pembelian').val(detail[1]);
				$('#pi_nama_toko').val(detail[2]);
				$('#pi_nama_lengkap').val(detail[3]);
				$('#pi_email').val(detail[4]);
				$('#pi_telepon').val(detail[5]);
				$('#pi_alamat').val(detail[6]);
				$('#pi_propinsi').val(detail[7]);
				$('#pi_jenis_kelamin').val(detail[8]);
				$('#pi_umur').val(detail[9]);
				setTimeout(function(){
					$("#produk_item_container").hide();
					$("#produk_item_detail_container").hide();
					$("#produk_item_edit_container").fadeIn();
					$("#for_produk_item").unblock();
				},500);
			}
		});
		return false;
	});
	
	//edit slider
	$(".edit_slider").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_slider_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		idsld=$(this).attr("ids");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="slider_id="+idsld+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"get_data_slider",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#pi_title").val(detail[0]);
				$("#pi_keyword").val(detail[1]);
				if(detail[2]!='data/def_slider.png'){
					var dataString=detail[2]+"/872/872";
					var t=new Date();
					$("#img_prev").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl").hide();
						$("#img_prev_container").fadeIn();		
					});
					$("#pi_path").val(detail[2]);
				}else{
					$("#img_prev_container").hide();
					$("#img_upl").fadeIn();
				}
				$("#pi_description").val(detail[3]);
				var st=detail[3].length;
				var c=160-st;
				if(c<0){
					c=0;	
				}
				$("#c").html(c);
				$("#pi_link").val(detail[4]);
				setTimeout(function(){
					$("#slider_item_container").hide();
					$("#slider_item_detail_container").hide();
					$("#slider_item_edit_container").fadeIn();
					$("#for_slider_item").unblock();
				},500);
			}
		});
		return false;
	});
	
	$(".detail_slider").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_slider_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var ids=$(this).attr("ids");
		var t=new Date();
		$("#slider_item_detail_container").empty().load(base_url+"detail_slider/"+ids+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#slider_item_detail_container").hide();
				$("#slider_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#slider_item_container").hide();
				$("#slider_item_detail_container").fadeIn();
				$("#for_slider_item").unblock();
			},1000);
		});
		return false;
	});
}