var id_for_delete='';
var acti='';
var idsld='';
$(document).ready(function(){
	$('ul.sf-menu').superfish();
	
	$("#image_edit").click(function(){
		$('#ket_up3').hide();
		$('#f3_upload_form').fadeIn();
		$('#filedoc3').val('');
		$.blockUI({message:$("#container_up3"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel3").click(function(){
		$('#filedoc3').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_big_image').ajaxForm({
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
				result = '<span class="msg">Data was successfully saved!<\/span>';
				setTimeout(function(){
					$.unblockUI();
					var t=new Date;
					$("#image_container_load").empty().html("<img src='"+base_url+"addscripts/ubah_ukuran_gambar.php?image=http://www.newkube.co.id/"+msg[1]+"&lebar=620&tinggi=620&"+t.getTime()+"'>");
				},1000);
			}
			else if(msg[0] == 2){
				result = '<span class="emsg">Only *.jpg, *.jpeg, *.png and *.gif are allowed!<\/span>';
				$('#f1_upload_form3').show();
			}
			else if(msg[0] == 3){
				result = '<span class="emsg">No File Choosen, Please Chose File First!<\/span>';
				$('#f1_upload_form3').show();
			}
			else {	
				result = '<span class="emsg">There was an error during file upload!<\/span>';
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
			action();
		}	
	});

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
	
	$("#text_edit").click(function(){
		$("#text_content").hide();
		$("#text_editor").fadeIn();
		//$.scrollTo($('#for_text'));
		return false;
	});
	
	$("#text2_edit").click(function(){
		$("#text2_content").hide();
		$("#text2_editor").fadeIn();
		//$.scrollTo($('#for_text'));
		return false;
	});
	
	$("#text_cancel").click(function(){
		$("#text_editor").hide();
		$("#text_content").fadeIn();
		//$.scrollTo($('#for_text'));
		return false;
	});
	
	$("#text2_cancel").click(function(){
		$("#text2_editor").hide();
		$("#text2_content").fadeIn();
		//$.scrollTo($('#for_text'));
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
		dataString+="&beranda_id=1&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"save_beranda_text",
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
	
	$("#subt2").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_text2").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var myText=$('textarea.editor2').val();
		myText=encodeURIComponent(myText);
		var dataString="text2="+myText;
		var cct = $.cookie('em_ccn_c_name_em');
		dataString+="&beranda_id=1&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			data:dataString,
			url:base_url+"beranda/save_beranda_text2",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket").hide();
						$("#ket").fadeIn();
						var t=new Date();
						$("#text2_content").empty().load("beranda.html?"+t.getTime()+" #text2_content_load",function(){
							setTimeout(function(){
								$("#ket").hide();
								$("#imgket").fadeIn();
								$("#text2_editor").hide();
								$("#text2_content").fadeIn();
								setTimeout(function(){
									$("#for_text2").unblock();
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
	
	$("#simg_edit").click(function(){		
		$('#ket_up').hide();
		$('#f1_upload_form').fadeIn();
		$('#filedoc').val('');
		$("#beranda_id").val("1");
		$('#ff').hide();
		$('#title').val($('.t1').text());
		$('#description').val($('.d1').text());
		c_d();
		$.blockUI({message:$("#container_up"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px',width:'600px',height:'366px','margin-left':'-300px','margin-top':'-183px',top:'50%',left:'50%'}});
		return false;
	});
	
	$("#simg7_edit").click(function(){		
		$('#ket_up').hide();
		$('#f1_upload_form').fadeIn();
		$('#filedoc').val('');
		$("#beranda_id").val("7");
		$('#ff').hide();
		$('#title').val($('.t7').text());
		$('#description').val($('.d7').html());
		c_d();
		$.blockUI({message:$("#container_up"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px',width:'600px',height:'366px','margin-left':'-300px','margin-top':'-183px',top:'50%',left:'50%'}});
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
		$('#ket_up2').hide();
		$('#f1_upload_form2').fadeIn();
		$('#filedoc2').val('');
		$.blockUI({message:$("#container_up3"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel").click(function(){
		$('#filedoc,#title,#description').val('');
		$('.err_title').empty();
		$('.err_desc').empty();
		$('.err_file').empty();
		$.unblockUI();
		return false;
	});
	
	$("#cancel2").click(function(){
		$('#filedoc2').val('');
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
					$("#slider_item_container").empty().load("home.html?"+t.getTime()+" #slider_item_container_load",function(){
						$("#slider_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",	
							"fnDrawCallback": function( oSettings ){
								action();
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
			url:base_url+"delete_slider",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#slider_item_container").empty().load("home.html?"+t.getTime()+" #slider_item_container_load",function(){
							$("#slider_table").dataTable({
								"bAutoWidth": false,
								"bProcessing": true,
								"sPaginationType": "full_numbers",
								"fnDrawCallback": function( oSettings ) {
									action();
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
	
	function action(){
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
		
		$(".delete_slider").click(function(){
			id_for_delete=$(this).attr("ids");
			$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
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
	
	$("#pi_description").live().keyup(function(){
		var st=$(this).val().length;
		var c=160-st;
		if(c<0){
			c=0;
			var def=$("#pi_description").val().substr(0,160);
			$("#pi_description").val(def);	
		}
		$("#c").html(c);
	});
	
	$('#upload_bi').ajaxForm({
		beforeSend: function() {
			$('#ket_up').slideUp();
			$('.err_title').empty();
			$('.err_desc').empty();
			$('.err_file').empty();
			$("#container_up").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'},overlayCSS:{'-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		},
		data:{'ctn_t_name_em':$.cookie('em_ccn_c_name_em')},
		complete: function(xhr) {
			var msg=xhr.responseText.split('|');
			var result = '';
			if(msg[0] == 0){
				$('#f1_upload_form').show();
				if(msg[1] == 1){
					$('.err_title').empty().html('Please input title');
				}
				if(msg[2] == 1){
					$('.err_desc').empty().html('Please input description');
				}
				if(msg[3] == 1){
					$('.err_file').empty().html('Only *.jpg, *.jpeg, *.png and *.gif are allowed!');
				}
			}else if (msg[0] == 1){
				var di='';
				$('#filedoc,#title,#description').val('');
				if(msg[1]==1){
					di="simg";
				}else if(msg[1]==2){
					di="simg2";	
				}else if(msg[1]==3){
					di="simg3";
				}else if(msg[1]==4){
					di="simg4";
				}else if(msg[1]==5){
					di="simg5";
				}else if(msg[1]==6){
					di="simg6";
				}else{
					di="simg7";
				}
				setTimeout(function(){
					$.unblockUI();
					$("#ket").hide();
					$("#imgket").fadeIn();
					$("#for_"+di).block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
					var t=new Date;
					$("#"+di+"_content").load(base_url+"home.html?"+t.getTime()+" #"+di+"_content_load",function(){
						setTimeout(function(){
							$("#for_"+di).unblock();
						},1000);
					});
				},1000);
		
			}else if(msg[0] == 2){
				$('#ket_up').html(result).slideDown();	
				result = '<span class="emsg2" style="color:#000">There was an error during file upload!<\/span>';
			}else if(msg[0] == 3){
				$('#ket_up').html(result).slideDown();
				result = '<span class="emsg2" style="color:#000">Error saving to database!<\/span>';
			}
			$("#container_up").unblock();
		}
	});
	
	$('#upload_slider').ajaxForm({
		beforeSend: function() {
			$('#f1_upload_process2').show();
			$('#f1_upload_form2').hide();
			$('#ket_up2').slideUp();
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
				$('#f1_upload_form2').show();
			}
			else if(msg[0] == 3){
				result = '<span class="emsg2">No File Choosen, Please Chose File First!<\/span>';
				$('#f1_upload_form2').show();
			}
			else {	
				result = '<span class="emsg2">There was an error during file upload!<\/span>';
				$('#f1_upload_form2').show();
			}
			$('#f1_upload_process2').hide();
			$('#filedoc2').val('');
			$('#ket_up2').html(result).slideDown(); 
		}
	});	
	
	$("#description").live().keyup(function(){
		c_d();
	});
});

function c_d(){
	var st=$("#description").val().length;
	var c=160-st;
	if(c<0){
		c=0;
		var def=$("#description").val().substr(0,160);
		$("#description").val(def);	
	}
	$("#c1").html(c);
}	