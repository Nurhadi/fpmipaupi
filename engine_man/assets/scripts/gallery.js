var id_for_delete='';
var idk='';
var it='';
var act='';
var idprdk='';
var acti='';
var tipe_upl='';
$(document).ready(function(){
	//mytravelink
	
	$('textarea.editor').ckeditor({
		filebrowserBrowseUrl: base_url+'assets/fm/fm.html',
		uiColor : '#cdcdcd',
		resize_enabled : false,
		removePlugins:'save,newpage,templates'
	});
	
	$('ul.sf-menu').superfish();
	
		
		
	$("#gallery_table").dataTable({
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
		dataString+="&page_id=5&ctn_t_name_em="+cct;
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
						$("#keyword_container").empty().load("gallery.html?"+t.getTime()+" #keyword_container_load",function(){
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
		dataString+="&page_id=5&ctn_t_name_em="+cct;
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
						$("#description_container").empty().load("gallery.html?"+t.getTime()+" #description_container_load",function(){
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
		dataString+="&page_id=5&ctn_t_name_em="+cct;
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
						$("#title_container").empty().load("gallery.html?"+t.getTime()+" #title_container_load",function(){
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
			url:base_url+"gallery/delete_gallery",
			success:function(msg){
				if(msg==1){
					setTimeout(function(){
						$("#imgket_delete").hide();
						$("#ket_delete").fadeIn();
						var t=new Date();
						$("#gallery_item_container").empty().load("gallery.html?"+t.getTime()+" #gallery_item_container_load",function(){
							$("#gallery_table").dataTable({
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
	
	$("#gallery_item_add").click(function(){
		acti="add";
		$("#gallery_item_container").hide();
		$("#gallery_item_detail_container").hide();
		$("#gallery_item_edit_container").fadeIn();
		return false;
	});
	
	$("#pi_cancel").click(function(){
		$("#pi_title").val('');
		if(acti=='add'){
			var ldc1=$("#pi_path1").val();
			if(ldc1!=''){
				var cct = $.cookie('em_ccn_c_name_em');
				var dataString="link_doc="+ldc1+"&ctn_t_name_em="+cct;
				$.ajax({
					type:"POST",
					url:base_url+"del_img",
					data:dataString,
					success:function(msg){
						if(msg==1){
							$("#pi_path1").val('');
							$("#img_prev_container1").hide();
							$("#img_upl1").fadeIn();
						}else{
							$("#img_prev1").append("<br><font color='red'>there was an error during file delete!</font>");
						}
					}
				});
			}
			
			var ldc2=$("#pi_path2").val();
			if(ldc2!=''){
				var cct = $.cookie('em_ccn_c_name_em');
				var dataString="link_doc="+ldc2+"&ctn_t_name_em="+cct;
				$.ajax({
					type:"POST",
					url:base_url+"del_img",
					data:dataString,
					success:function(msg){
						if(msg==1){
							$("#pi_path2").val('');
							$("#img_prev_container2").hide();
							$("#img_upl2").fadeIn();
						}else{
							$("#img_prev2").append("<br><font color='red'>there was an error during file delete!</font>");
						}
					}
				});
			}
			
			var ldc3=$("#pi_path3").val();
			if(ldc3!=''){
				var cct = $.cookie('em_ccn_c_name_em');
				var dataString="link_doc="+ldc3+"&ctn_t_name_em="+cct;
				$.ajax({
					type:"POST",
					url:base_url+"del_img",
					data:dataString,
					success:function(msg){
						if(msg==1){
							$("#pi_path3").val('');
							$("#img_prev_container3").hide();
							$("#img_upl3").fadeIn();
						}else{
							$("#img_prev3").append("<br><font color='red'>there was an error during file delete!</font>");
						}
					}
				});
			}
			
			var ldc4=$("#pi_path4").val();
			if(ldc4!=''){
				var cct = $.cookie('em_ccn_c_name_em');
				var dataString="link_doc="+ldc4+"&ctn_t_name_em="+cct;
				$.ajax({
					type:"POST",
					url:base_url+"del_img",
					data:dataString,
					success:function(msg){
						if(msg==1){
							$("#pi_path4").val('');
							$("#img_prev_container4").hide();
							$("#img_upl4").fadeIn();
						}else{
							$("#img_prev4").append("<br><font color='red'>there was an error during file delete!</font>");
						}
					}
				});
			}
			
			var ldc5=$("#pi_path5").val();
			if(ldc5!=''){
				var cct = $.cookie('em_ccn_c_name_em');
				var dataString="link_doc="+ldc5+"&ctn_t_name_em="+cct;
				$.ajax({
					type:"POST",
					url:base_url+"del_img",
					data:dataString,
					success:function(msg){
						if(msg==1){
							$("#pi_path5").val('');
							$("#img_prev_container5").hide();
							$("#img_upl5").fadeIn();
						}else{
							$("#img_prev5").append("<br><font color='red'>there was an error during file delete!</font>");
						}
					}
				});
			}
		}else{
			$("#pi_path1").val('');
			$("#img_prev_container1").hide();
			$("#img_upl1").fadeIn();
			
			$("#pi_path2").val('');
			$("#img_prev_container2").hide();
			$("#img_upl2").fadeIn();
			
			$("#pi_path3").val('');
			$("#img_prev_container3").hide();
			$("#img_upl3").fadeIn();
			
			$("#pi_path4").val('');
			$("#img_prev_container4").hide();
			$("#img_upl4").fadeIn();
			
			$("#pi_path5").val('');
			$("#img_prev_container5").hide();
			$("#img_upl5").fadeIn();
		}
		$("#gallery_item_edit_container").hide();
		$("#gallery_item_container").fadeIn();
		return false;
	});

	// upload image gallery 1
	$("#img_upl1").click(function(){
		$('#ket_up1').hide();
		$('#f1_upload_form1').fadeIn();
		$('#filedoc1').val('');
		$.blockUI({message:$("#container_up1"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel1").click(function(){
		$('#filedoc1').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_gallery1').ajaxForm({
		beforeSend: function() {
			$('#f1_upload_process1').show();
			$('#f1_upload_form1').hide();
			$('#ket_up1').slideUp();
		},
		data:{'ctn_t_name_em':$.cookie('em_ccn_c_name_em')},
		complete: function(xhr) {
			var msg=$.trim(xhr.responseText).split(',');
			var result = '';
			if (msg[0] == 1){
				result = '<span class="msg2">Data was successfully saved!<\/span>';
				setTimeout(function(){
					$.unblockUI();
					$("#pi_path1").val(msg[1]);
					var dataString=msg[1]+"/872/872";
					var t=new Date();
					$("#img_prev1").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl1").hide();
						$("#img_prev_container1").fadeIn();		
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
				$('#f1_upload_form1').show();
			}
			$('#f1_upload_process1').hide();
			$('#filedoc1').val('');
			$('#ket_up1').html(result).slideDown(); 
		}
	});
	
	$("#del_img1").click(function(){
		var ldc=$("#pi_path1").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_img",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#pi_path1").val('');
					$("#img_prev_container1").hide();
					$("#img_upl1").fadeIn();
				}else{
					$("#img_prev1").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	// upload image gallery 2
	$("#img_upl2").click(function(){
		$('#ket_up2').hide();
		$('#f1_upload_form2').fadeIn();
		$('#filedoc2').val('');
		$.blockUI({message:$("#container_up2"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel2").click(function(){
		$('#filedoc2').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_gallery2').ajaxForm({
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
					$("#pi_path2").val(msg[1]);
					var dataString=msg[1]+"/872/872";
					var t=new Date();
					$("#img_prev2").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl2").hide();
						$("#img_prev_container2").fadeIn();		
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
				$('#f1_upload_form2').show();
			}
			$('#f1_upload_process2').hide();
			$('#filedoc2').val('');
			$('#ket_up2').html(result).slideDown(); 
		}
	});
	
	$("#del_img2").click(function(){
		var ldc=$("#pi_path2").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_img",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#pi_path2").val('');
					$("#img_prev_container2").hide();
					$("#img_upl2").fadeIn();
				}else{
					$("#img_prev2").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	// upload image gallery 3
	$("#img_upl3").click(function(){
		$('#ket_up3').hide();
		$('#f1_upload_form3').fadeIn();
		$('#filedoc3').val('');
		$.blockUI({message:$("#container_up3"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel3").click(function(){
		$('#filedoc3').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_gallery3').ajaxForm({
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
					$("#pi_path3").val(msg[1]);
					var dataString=msg[1]+"/872/872";
					var t=new Date();
					$("#img_prev3").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl3").hide();
						$("#img_prev_container3").fadeIn();		
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
	
	$("#del_img3").click(function(){
		var ldc=$("#pi_path3").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_img",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#pi_path3").val('');
					$("#img_prev_container3").hide();
					$("#img_upl3").fadeIn();
				}else{
					$("#img_prev3").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	// upload image gallery 4
	$("#img_upl4").click(function(){
		$('#ket_up4').hide();
		$('#f1_upload_form4').fadeIn();
		$('#filedoc4').val('');
		$.blockUI({message:$("#container_up4"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel4").click(function(){
		$('#filedoc4').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_gallery4').ajaxForm({
		beforeSend: function() {
			$('#f1_upload_process4').show();
			$('#f1_upload_form4').hide();
			$('#ket_up4').slideUp();
		},
		data:{'ctn_t_name_em':$.cookie('em_ccn_c_name_em')},
		complete: function(xhr) {
			var msg=$.trim(xhr.responseText).split(',');
			var result = '';
			if (msg[0] == 1){
				result = '<span class="msg2">Data was successfully saved!<\/span>';
				setTimeout(function(){
					$.unblockUI();
					$("#pi_path4").val(msg[1]);
					var dataString=msg[1]+"/872/872";
					var t=new Date();
					$("#img_prev4").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl4").hide();
						$("#img_prev_container4").fadeIn();		
					});
				 },1000);
			}
			else if(msg[0] == 2){
				result = '<span class="emsg2">Only *.jpg, *.jpeg, *.png and *.gif are allowed!<\/span>';
				$('#f1_upload_form4').show();
			}
			else if(msg[0] == 3){
				result = '<span class="emsg2">No File Choosen, Please Chose File First!<\/span>';
				$('#f1_upload_form4').show();
			}
			else {	
				result = '<span class="emsg2">There was an error during file upload!<\/span>';
				$('#f1_upload_form4').show();
			}
			$('#f1_upload_process4').hide();
			$('#filedoc4').val('');
			$('#ket_up4').html(result).slideDown(); 
		}
	});
	
	$("#del_img4").click(function(){
		var ldc=$("#pi_path4").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_img",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#pi_path4").val('');
					$("#img_prev_container4").hide();
					$("#img_upl4").fadeIn();
				}else{
					$("#img_prev4").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	// upload image gallery 5
	$("#img_upl5").click(function(){
		$('#ket_up5').hide();
		$('#f1_upload_form5').fadeIn();
		$('#filedoc5').val('');
		$.blockUI({message:$("#container_up5"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$("#cancel5").click(function(){
		$('#filedoc5').val('');
		$.unblockUI();
		return false;
	});
	
	$('#upload_gallery5').ajaxForm({
		beforeSend: function() {
			$('#f1_upload_process5').show();
			$('#f1_upload_form5').hide();
			$('#ket_up5').slideUp();
		},
		data:{'ctn_t_name_em':$.cookie('em_ccn_c_name_em')},
		complete: function(xhr) {
			var msg=$.trim(xhr.responseText).split(',');
			var result = '';
			if (msg[0] == 1){
				result = '<span class="msg2">Data was successfully saved!<\/span>';
				setTimeout(function(){
					$.unblockUI();
					$("#pi_path5").val(msg[1]);
					var dataString=msg[1]+"/872/872";
					var t=new Date();
					$("#img_prev5").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl5").hide();
						$("#img_prev_container5").fadeIn();		
					});
				 },1000);
			}
			else if(msg[0] == 2){
				result = '<span class="emsg2">Only *.jpg, *.jpeg, *.png and *.gif are allowed!<\/span>';
				$('#f1_upload_form5').show();
			}
			else if(msg[0] == 3){
				result = '<span class="emsg2">No File Choosen, Please Chose File First!<\/span>';
				$('#f1_upload_form5').show();
			}
			else {	
				result = '<span class="emsg2">There was an error during file upload!<\/span>';
				$('#f1_upload_form5').show();
			}
			$('#f1_upload_process5').hide();
			$('#filedoc5').val('');
			$('#ket_up5').html(result).slideDown(); 
		}
	});
	
	$("#del_img5").click(function(){
		var ldc=$("#pi_path5").val();
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="link_doc="+ldc+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"del_img",
			data:dataString,
			success:function(msg){
				if(msg==1){
					$("#pi_path5").val('');
					$("#img_prev_container5").hide();
					$("#img_upl5").fadeIn();
				}else{
					$("#img_prev5").append("<br><font color='red'>there was an error during file delete!</font>");
				}
			}
		});
		return false;
	});
	
	$("#gallery_item_form").submit(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_gallery_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var t=$("#pi_title").val();
		var p1=$("#pi_path1").val();
		var p2=$("#pi_path2").val();
		var p3=$("#pi_path3").val();
		var p4=$("#pi_path4").val();
		var p5=$("#pi_path5").val();
		var cct = $.cookie('em_ccn_c_name_em');
		if(acti=='edit'){
			var dataString="id_gallery="+idgallery+"&title="+t+"&img_thumbnail1="+p1+"&img_thumbnail2="+p2+"&img_thumbnail3="+p3+"&img_thumbnail4="+p4+"&img_thumbnail5="+p5+"&acti="+acti+"&ctn_t_name_em="+cct;
		}else{
			var dataString="title="+t+"&img_thumbnail1="+p1+"&img_thumbnail2="+p2+"&img_thumbnail3="+p3+"&img_thumbnail4="+p4+"&img_thumbnail5="+p5+"&acti="+acti+"&ctn_t_name_em="+cct;
		}
		$.ajax({
			type:"POST",
			url:base_url+"gallery/save_gallery",
			data:dataString,
			success:function(msg){
				setTimeout(function(){
					$("#imgket").hide();
					$("#ket").fadeIn();
					var t=new Date();
					$("#gallery_item_container").empty().load("gallery.html?"+t.getTime()+" #gallery_item_container_load",function(){
						$("#gallery_table").dataTable({
							"bAutoWidth": false,
							"bProcessing": true,
							"sPaginationType": "full_numbers",	
							"fnDrawCallback": function( oSettings ){
								act_prod();
							}
						});
						setTimeout(function(){
							$("#gallery_item_edit_container").hide();
							$("#pi_title").val('');
							
							$("#pi_path1").val('');
							$("#img_prev_container1").hide();
							$("#img_upl1").fadeIn();
							
							$("#pi_path2").val('');
							$("#img_prev_container2").hide();
							$("#img_upl2").fadeIn();
							
							$("#pi_path3").val('');
							$("#img_prev_container3").hide();
							$("#img_upl3").fadeIn();
							
							$("#pi_path4").val('');
							$("#img_prev_container4").hide();
							$("#img_upl4").fadeIn();
							
							$("#pi_path5").val('');
							$("#img_prev_container5").hide();
							$("#img_upl5").fadeIn();
							
							$("#gallery_item_container").fadeIn();
							$("#for_gallery_item").unblock();
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
	$(".detail_gallery").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_gallery_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var id_gallery=$(this).attr("ids");
		var t=new Date();
		$("#gallery_item_detail_container").empty().load(base_url+"detail_gallery/"+id_gallery+"/"+t.getTime(),function(){
			$("#bbutton").click(function(){
				$("#gallery_item_detail_container").hide();
				$("#gallery_item_container").fadeIn();
				return false;
			});
			setTimeout(function(){
				$("#gallery_item_container").hide();
				$("#gallery_item_detail_container").fadeIn();
				$("#for_gallery_item").unblock();
			},1000);
		});
		return false;
	});
	
	$(".delete_gallery").click(function(){
		id_for_delete=$(this).attr('ids');
		$.blockUI({message:$("#delete_container"),css:{'-webkit-border-radius': '10px','-moz-border-radius': '10px','border-radius': '10px'}});
		return false;
	});
	
	$(".edit_gallery").click(function(){
		$("#ket").hide();
		$("#imgket").fadeIn();
		$("#for_gallery_item").block({message:$("#loader"),css:{padding:'5px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		acti="edit";
		idgallery=$(this).attr("ids");
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString="id_gallery="+idgallery+"&ctn_t_name_em="+cct;
		$.ajax({
			type:"POST",
			url:base_url+"gallery/get_data_gallery",
			data:dataString,
			success:function(det){
				detail=det.split('!-delimiter-!');
				$("#pi_title").val(detail[0]);
				
				if(detail[1]!='data/def_slider.png'){
					var dataString=detail[1]+"/872/872";
					var t=new Date();
					$("#img_prev1").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl1").hide();
						$("#img_prev_container1").fadeIn();		
					});
					$("#pi_path1").val(detail[1]);
				}else{
					$("#img_prev_container1").hide();
					$("#img_upl1").fadeIn();
				}

				if(detail[2]!='data/def_slider.png'){
					var dataString=detail[2]+"/872/872";
					var t=new Date();
					$("#img_prev2").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl2").hide();
						$("#img_prev_container2").fadeIn();		
					});
					$("#pi_path2").val(detail[2]);
				}else{
					$("#img_prev_container2").hide();
					$("#img_upl2").fadeIn();
				}
				
				if(detail[3]!='data/def_slider.png'){
					var dataString=detail[3]+"/872/872";
					var t=new Date();
					$("#img_prev3").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl3").hide();
						$("#img_prev_container3").fadeIn();		
					});
					$("#pi_path3").val(detail[3]);
				}else{
					$("#img_prev_container3").hide();
					$("#img_upl3").fadeIn();
				}
				
				if(detail[4]!='data/def_slider.png'){
					var dataString=detail[4]+"/872/872";
					var t=new Date();
					$("#img_prev4").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl4").hide();
						$("#img_prev_container4").fadeIn();		
					});
					$("#pi_path4").val(detail[4]);
				}else{
					$("#img_prev_container4").hide();
					$("#img_upl4").fadeIn();
				}
				
				if(detail[5]!='data/def_slider.png'){
					var dataString=detail[5]+"/872/872";
					var t=new Date();
					$("#img_prev5").empty().load(base_url+"load_image/"+dataString+"/"+t.getTime(),function(){
						$("#img_upl5").hide();
						$("#img_prev_container5").fadeIn();		
					});
					$("#pi_path5").val(detail[5]);
				}else{
					$("#img_prev_container5").hide();
					$("#img_upl5").fadeIn();
				}
				
				setTimeout(function(){
					$("#gallery_item_container").hide();
					$("#gallery_item_detail_container").hide();
					$("#gallery_item_edit_container").fadeIn();
					$("#for_gallery_item").unblock();
				},500);
			}
		});
		return false;
	});
	
}