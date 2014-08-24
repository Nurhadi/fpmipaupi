$(document).ready(function(){
	$("#login-form").submit(function(){
		var cct = $.cookie('em_ccn_c_name_em');
		var dataString=$(this).serialize();
		$.ajax({
			type:"POST",
			url:base_url+"golog/process",
			data:dataString+"&ctn_t_name_em="+cct,
			beforeSend:function(){
				$("#error").slideUp();
				$.blockUI({message:$("#message"),css:{top:'50%',left:'50%',marginLeft:'-100px',marginTop:'-50px',width:'200px',height:'100px','-webkit-border-radius': '7px','-moz-border-radius': '7px','border-radius': '7px'}});
			},
			success:function(msg){
				if(msg=="1"){
					setTimeout(function(){
						$("#message-text").html('Redirecting...');
						setTimeout(function(){
							window.location.href=base_url+'main.html';
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
	
	$("#username,#password").focus(function(){
		$("#error").slideUp();	
	})
	
	//$.blockUI({message:'programmer edit process'});
});