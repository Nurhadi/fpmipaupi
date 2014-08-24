$(document).ready(function(){
	$("#forgot-form").submit(function(){
		$("#error").slideUp();
		$.blockUI({message:$("#message"),css:{top:'50%',left:'50%',marginLeft:'-100px',marginTop:'-50px',width:'200px',height:'100px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
		var dataString=$(this).serialize();
		$.ajax({
			type:"POST",
			url:base_url+"res_pass",
			data:dataString,
			beforeSend:function(){
				$('#ldr').show();
				$("#message-text").html('Checking email...');
			},
			success:function(msg){
				if(msg=="1"){
					setTimeout(function(){
						$("#message-text").html('Resetting password...');
						setTimeout(function(){
							$('#ldr').hide();
							$("#message-text").html('New password send to your email. <a href="'+base_url+'/login.html" title="Login">Login</a>');
							$('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
						},1000);
						
					},1000);
				}else{
					setTimeout(function(){
						$.unblockUI();
						$("#error").slideDown();	
					},1000);
				}
			}
		});
		return false;	
	});
	
	$("#email").focus(function(){
		$("#error").slideUp();	
	})
	
	//$.blockUI({message:'programmer edit process'});
});