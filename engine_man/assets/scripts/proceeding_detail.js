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
	
	$('textarea.editor2').ckeditor({
		//filebrowserBrowseUrl: base_url+'assets/fm/fm.html',
		filebrowserBrowseUrl: base_url+'assets/ckeditor/simogeo-Filemanager-732bd74/index.html',
		uiColor : '#cdcdcd',
		resize_enabled : false,
		removePlugins:'save,newpage,templates'
	});
	
	$("#proceeding_detail_table").dataTable({
		"bAutoWidth": false,
		"bProcessing": true,
		"sPaginationType": "full_numbers",	
		"aaSorting": [[ 0, "desc" ]],
		"fnDrawCallback": function( oSettings ) {
			act_down();
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
		dataString+="&page_id=20&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("proceeding_detail.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=20&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("proceeding_detail.html?"+t.getTime()+" #description_container_load",function(){
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
		dataString+="&page_id=20&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("proceeding_detail.html?"+t.getTime()+" #title_container_load",function(){
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
	
	$("#text_edit").click(function(){
		$("#text_content").hide();
		$("#text_editor").fadeIn();
		$.scrollTo('max');
		return false;
	});
	
	$("#text_cancel").click(function(){
		$("#text_editor").hide();
		$("#text_content").fadeIn();
		$.scrollTo('max');
		return false;
	});
	
	$("#subt").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_text").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var myText=$('textarea.editor').val();
		myText=escape(myText);
		var dataString="text="+myText;
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&page_id=7&ctn_t_name_em="+cct;
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
						$("#text_content").empty().load("proceeding_detail.html?"+t.getTime()+" #text_content_load",function(){
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
					alert(msg);	
				}
			}
		});
		return false;
	});
	
	$("#proceeding_detail_item_add").click(function(){
		act="add";
		$("#proceeding_detail_item_container").hide();
		$("#proceeding_detail_item_detail").hide();
		$("#proceeding_detail_item_edit_container").fadeIn();
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
	
	$("#proceeding_detail_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_proceeding_detail_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var di_title=$("#di_title").val();
		var di_path=$("#di_path").val();
		var di_desc=$("textarea.editor2").val();
		di_desc=escape(di_desc);
		var cct = $.cookie('em_ccn_c_name_em');
		if(act=='edit'){
			var dataString="proceeding_detail_id="+idproceeding_detail+"&title="+di_title+"&path="+di_path+"&desc="+di_desc+"&act="+act+"&ctn_t_name_em="+cct;
		}else{
			var dataString="title="+di_title+"&path="+di_path+"&desc="+di_desc+"&act="+act+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_proceeding_detail",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#proceeding_detail_item_container").empty().load("proceeding_detail.html?"+t.getTime()+" #proceeding_detail_item_container_load",function(){
							$("#proceeding_detail_table").dataTable({
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
								$("#di_path").val('');
								$("#fl_container").hide();
								$("#upl_btn").fadeIn();
								$("#di_title").val('');
								$("textarea.editor2").val('');
								$("#proceeding_detail_item_edit_container").hide();
								$("#proceeding_detail_item_container").fadeIn();
								setTimeout(function(){
									$("#for_proceeding_detail_item").unblock();
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
		if(act=='add'){
			var ldc=$("#di_path").val();
			if(ldc!=''){
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
			}
		}else{
			$("#di_path").val('');
			$("#fl_container").hide();
			$("#upl_btn").fadeIn();
		}
		$("#di_title").val('');
		$("textarea.editor2").val('');
		$("#proceeding_detail_item_edit_container").hide();
		$("#proceeding_detail_item_container").fadeIn();
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
			url:base_url+"delete_proceeding_detail",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#proceeding_detail_item_container").empty().load("proceeding_detail.html?"+t.getTime()+" #proceeding_detail_item_container_load",function(){
							$("#proceeding_detail_table").dataTable({
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
	
	$('#upload_proceeding_detail').ajaxForm({
		beforeSend: function() {
			$('#f1_upload_process').show();
			$('#f1_upload_form').hide();
			$('#ket_up').slideUp();
		},
		data:{'ctn_t_name_em':$.cookie('em_ccn_c_name_em')},
		complete: function(xhr) {
			var msg=$.trim(xhr.responseText).split(',');
			var result = '';
			if (msg[0] == 1){
				result = '<span class="msg">Data was successfully uploaded!<\/span>';
				setTimeout(function(){
					$("#upl_btn").hide();
					$("#upl_fl").html("<a href='../proceeding_detail/"+msg[2]+"' target='_blank'>"+msg[1]+"</a>");
					$("#fl_container").fadeIn();
					$("#di_path").val(msg[2]);
					$.unblockUI();
				},1000);
			}
			else if(msg[0] == 2){
				result = '<span class="emsg">Only *.pdf are allowed!<\/span>';
				$('#f1_upload_form').show();
			}
			else if(msg[0] == 3){
				result = '<span class="emsg">No File Choosen, Please Chose File First!<\/span>';
				$('#f1_upload_form').show();
			}
			else {	
				result = '<span class="emsg">There was an error during file upload!<\/span>';
				$('#f1_upload_form').show();
			}
			$('#f1_upload_process').hide();
			$('#filedoc').val('');
			$('#ket_up').html(result).slideDown();
		}
	});	
});

function act_down(){
	$(".detail_proceeding_detail").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_proceeding_detail_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var idd=$(this).attr("idd");
		var t=new Date();
		$("#proceeding_detail_item_detail").empty().load(base_url+"detail_proceeding_detail/"+idd+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#proceeding_detail_item_detail").hide();
				$("#proceeding_detail_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#proceeding_detail_item_container").hide();
				$("#proceeding_detail_item_detail").fadeIn();
				$("#for_proceeding_detail_item").unblock();
			},1000);
		});
		return false;
	});
	
	$(".edit_proceeding_detail").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_proceeding_detail_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		act="edit";
		idproceeding_detail=$(this).attr("idd");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="proceeding_detail_id="+idproceeding_detail+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"get_detail_proceeding_detail",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#di_title").val(detail[0]);	
				if(detail[2]!=''){
				$("#di_path").val(detail[2]);
				$("#upl_btn").hide();
				//$("#upl_fl").html("<a href='"+base_url+"get_file_pb/"+detail[4]+"' target='_blank'>"+detail[3]+".pdf</a>");
				$("#upl_fl").html(detail[3]+".pdf</a>");
				$("#fl_container").fadeIn();
				}
				$("textarea.editor2").val(detail[1]);
				setTimeout(function(){
					$("#proceeding_detail_item_container").hide();
					$("#proceeding_detail_item_detail").hide();
					$("#proceeding_detail_item_edit_container").fadeIn();
					$("#for_proceeding_detail_item").unblock();
				},500);
			}
		});
		return false;
	});
	
	$(".delete_proceeding_detail").click(function(){
		var proceeding_detail_attr=$(this).attr("idd");
		var proceeding_detail_attr_split=proceeding_detail_attr.split(',');
		$("#del_ket").html(proceeding_detail_attr_split[1]);
		id_for_delete=proceeding_detail_attr_split[0];
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
}