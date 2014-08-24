$(document).ready(function(){
	$('ul.sf-menu').superfish();
	$("#change_pass").submit(function(){
		var dataString=$(this).serialize();
		var cct = $.cookie('em_ccn_c_name_em');
		$.ajax({
			type:"POST",
			url:base_url+"profile/change",
			data:dataString+'&ctn_t_name_em='+cct,
			beforeSend:function(){
				$("#error").slideUp();
				$('#main-content').block({message:$("#message"),css:{width:'200px',height:'100px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
				$('#ldr').show();
				$("#message-text").html('Please Wait...');
				$('.err_em,.err_pass,.err_pass2').empty();
			},
			success:function(msg){
				var m=msg.split("|");
				if(m[0]=="ok"){
					setTimeout(function(){
						$('#ldr').hide();
						$("#message-text").html('Success');
						$('#email,#old_password,#new_password,#confirm_new_password').val('');
						$('.blockOverlay').attr('title','Click to unblock').click(function(){
							$('#main-content').unblock();
							window.location.href=base_url+"dashboard.html";
						});
					},1000);
				}else if(m[0]=="err"){
					if(m[1]=="1"){
						$('.err_em').html('input email');
					}else if(m[1]=="2"){
						$('.err_em').html('invalid email');
					}
					if(m[2]=="1"){
						$('.err_pass').html('wrong password');
					}
					if(m[3]=="1"){
						$('.err_pass2').html('input both new password and confirm new password');
					}else if(m[3]=="2"){
						$('.err_pass2').html('password not match');
					}
					setTimeout(function(){
						$('#main-content').unblock();
						$("#error").slideDown();	
					},1000);
				}else{
					alert('An error occurred, refresh the page and try again');
				}
			}
		});
		return false;	
	});
	
	$('#cp').click(function(){
		
		if($('#cp').is(':checked')){
			$('.cp').show();
		}else{
			$('.cp').hide();
		}
		
	});
	
	$("#email").focus(function(){
		$("#error").slideUp();	
	})
	
	//$.blockUI({message:'programmer edit process'});
});