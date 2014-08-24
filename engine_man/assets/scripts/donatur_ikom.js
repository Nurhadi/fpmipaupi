var act='';
var iddwl='';
var id_for_delete='';
$(document).ready(function(){
	$('ul.sf-menu').superfish();
	
	$('textarea.editor').ckeditor({
		//filebrowserBrowseUrl: base_url+'assets/fm/fm.html',
		filebrowserBrowseUrl: base_url+'assets/ckeditor/simogeo-Filemanager-732bd74/index.html',
		uiColor : '#cdcdcd',
		resize_enabled : false,
		removePlugins:'save,newpage,templates'
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
		dataString+="&page_id=25&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("donatur_ikom.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=25&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("donatur_ikom.html?"+t.getTime()+" #description_container_load",function(){
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
		var myText=$('textarea.editor').val();
		myText=escape(myText);
		var dataString="text="+myText;
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&page_id=25&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_text",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#teks_container").empty().load("donatur_ikom.html?"+t.getTime()+" #teks_container_load",function(){
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
		dataString+="&page_id=25&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("donatur_ikom.html?"+t.getTime()+" #title_container_load",function(){
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
	
	$("#donatur_ikom_item_add").click(function(){
		act="add";
		$("#donatur_ikom_item_container").hide();
		$("#donatur_ikom_item_detail").hide();
		$("#donatur_ikom_item_edit_container").fadeIn();
		return false;
	});
	
	$("#upl_btn").click(function(){
		$('#ket_up').hide();
		$('#f1_upload_form').fadeIn();
		$('#filedoc').val('');
		$.blockUI({message:$("#container_up"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel").click(function(){
		$.unblockUI();
		return false;
	});
	
	$("#donatur_ikom_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_donatur_ikom_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var di_title=$("#di_title").val();
		var di_keywords=$("#di_keywords").val();
		var di_description=$("#di_description").val();
		var di_content=$("textarea.editor2").val();
		di_content=escape(di_content);
		var cct = $.cookie('em_ccn_c_name_em');
		if(act=='edit'){
			var dataString="id_donatur_ikom="+iddonatur_ikom+"&title="+di_title+"&keywords="+di_keywords+"&description="+di_description+"&content="+di_content+"&act="+act+"&ctn_t_name_em="+cct;
		}else{
			var dataString="title="+di_title+"&keywords="+di_keywords+"&description="+di_description+"&content="+di_content+"&act="+act+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_donatur_ikom",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#donatur_ikom_item_container").empty().load("donatur_ikom.html?"+t.getTime()+" #donatur_ikom_item_container_load",function(){
							$("#donatur_ikom_table").dataTable({
								"bAutoWidth": false,
								"bProcessing": true,
								"sPaginationType": "full_numbers",	
								"aaSorting": [[ 0, "desc" ]],
								"fnDrawCallback": function( oSettings ) {
									act_down();
								}	
							});
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#di_title").val('');
								$("#di_keywords").val('');
								$("#di_description").val('');
								$("textarea.editor2").val('');
								$("#donatur_ikom_item_edit_container").hide();
								$("#donatur_ikom_item_container").fadeIn();
								setTimeout(function(){
									$("#for_donatur_ikom_item").unblock();
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
	
	$("#del_fl").click(function(){
		var ldc=$("#di_path").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_fl_pb",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#di_path").val('');
					$("#fl_container").hide();
					$("#upl_btn").fadeIn();
				}else{
					$("#upl_fl").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	$("#di_cancel").click(function(){
		$("#di_title").val('');
		$("#di_keywords").val('');
		$("#di_description").val('');
		$("textarea.editor2").val('');
		$("#donatur_ikom_item_edit_container").hide();
		$("#donatur_ikom_item_container").fadeIn();
		return false;
	});
	
	$("#delete_no").click(function(){
		$.unblockUI();
		return false;
	});
	
	$("#delete_yes").click(function(){
		$("#ket_delete").hide();
		$("#imgket_delete").fadeIn();
		$("#delete_container").block({message:$("#loader_delete"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'},overlayCSS:{'-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id="+id_for_delete+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"delete_donatur_ikom",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#donatur_ikom_item_container").empty().load("donatur_ikom.html?"+t.getTime()+" #donatur_ikom_item_container_load",function(){
							$("#donatur_ikom_table").dataTable({
								"bAutoWidth": false,
								"bProcessing": true,
								"sPaginationType": "full_numbers",	
								"aaSorting": [[ 0, "desc" ]],
								"fnDrawCallback": function( oSettings ) {
									act_down();
								}	
							});
							setTimeout(function(){
								$("#delete_container").unblock();
								$.unblockUI();
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
	
	$("#description").live().keyup(function(){
		var st=$("#description").val().length;
		var c=160-st;
		if(c<0){
			c=0;
			var def=$("#description").val().substr(0,160);
			$("#description").val(def);	
		}
		$("#c").html(c);
	});
	
});