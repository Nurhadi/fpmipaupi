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
	
	$("#research_table").dataTable({
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
		dataString+="&page_id=30&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("research.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=30&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("research.html?"+t.getTime()+" #description_container_load",function(){
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
		dataString+="&page_id=30&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("research.html?"+t.getTime()+" #title_container_load",function(){
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
						$("#text_content").empty().load("research.html?"+t.getTime()+" #text_content_load",function(){
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
	
	$("#research_item_add").click(function(){
		act="add";
		$("#research_item_container").hide();
		$("#research_item_detail").hide();
		$("#research_item_edit_container").fadeIn();
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
	
	$("#research_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_research_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var di_title=$("#di_title").val();
		var di_path=$("#di_path").val();
		var di_participant=$("#di_participant").val();
		var di_desc=$("textarea.editor2").val();
		di_desc=escape(di_desc);
		var cct = $.cookie('em_ccn_c_name_em');
		if(act=='edit'){
			var dataString="research_id="+idresearch+"&title="+di_title+"&path="+di_path+"&participant="+di_participant+"&desc="+di_desc+"&act="+act+"&ctn_t_name_em="+cct;
		}else{
			var dataString="title="+di_title+"&path="+di_path+"&participant="+di_participant+"&desc="+di_desc+"&act="+act+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_research",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#research_item_container").empty().load("research.html?"+t.getTime()+" #research_item_container_load",function(){
							$("#research_table").dataTable({
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
								$("#research_item_edit_container").hide();
								$("#research_item_container").fadeIn();
								setTimeout(function(){
									$("#for_research_item").unblock();
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
	
	$("#del_fl_rp").click(function(){
		var ldc=$("#di_path").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_fl_rp",
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
					url:base_url+"del_fl_rp",
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
		$("#research_item_edit_container").hide();
		$("#research_item_container").fadeIn();
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
			url:base_url+"delete_research",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#research_item_container").empty().load("research.html?"+t.getTime()+" #research_item_container_load",function(){
							$("#research_table").dataTable({
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
	
	$('#upload_research').ajaxForm({
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
					$("#upl_fl").html("<a href='../research/"+msg[2]+"' target='_blank'>"+msg[1]+"</a>");
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
	$(".detail_research").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_research_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var idd=$(this).attr("idd");
		var t=new Date();
		$("#research_item_detail").empty().load(base_url+"detail_research/"+idd+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#research_item_detail").hide();
				$("#research_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#research_item_container").hide();
				$("#research_item_detail").fadeIn();
				$("#for_research_item").unblock();
			},1000);
		});
		return false;
	});
	
	$(".edit_research").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_research_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		act="edit";
		idresearch=$(this).attr("idd");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="research_id="+idresearch+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"get_detail_research",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#di_title").val(detail[0]);	
				if(detail[2]!=''){
				$("#di_path").val(detail[2]);
				$("#upl_btn").hide();
				//$("#upl_fl").html("<a href='"+base_url+"get_file/"+detail[4]+"' target='_blank'>"+detail[3]+".pdf</a>");
				$("#upl_fl").html(detail[3]+".pdf</a>");
				$("#fl_container").fadeIn();
				}
				$("textarea.editor2").val(detail[1]);
				$("#pi_participant").val(detail[5]);
				setTimeout(function(){
					$("#research_item_container").hide();
					$("#research_item_detail").hide();
					$("#research_item_edit_container").fadeIn();
					$("#for_research_item").unblock();
				},500);
			}
		});
		return false;
	});
	
	$(".delete_research").click(function(){
		var research_attr=$(this).attr("idd");
		var research_attr_split=research_attr.split(',');
		$("#del_ket").html(research_attr_split[1]);
		id_for_delete=research_attr_split[0];
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
}