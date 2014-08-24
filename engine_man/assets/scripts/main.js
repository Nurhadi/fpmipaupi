$(document).ready(function(){
	$('ul.sf-menu').superfish();
	
	$('#inbox').dataTable({
		"bAutoWidth": false,
		"bProcessing": true,
		"sPaginationType": "full_numbers",
		 "aaSorting": [[ 0, "desc" ]],
		 "fnDrawCallback": function( oSettings ) {
			detail();
		}
	});
	
	$('#comment').dataTable({
		"bAutoWidth": false,
		"bProcessing": true,
		"sPaginationType": "full_numbers",
		 "aaSorting": [[ 0, "desc" ]],
		 "fnDrawCallback": function( oSettings ) {
			detail2();
		}
	});
	
});

function detail(){
	$('.detail').click(function(){
		var cct = $.cookie('em_ccn_c_name_em');
		var ii=$(this).attr('ii');
		$.ajax({
			type:"POST",
			url:base_url+"main/set_inbox_id",
			data:"inbox_id="+ii+"&ctn_t_name_em="+cct,
			success:function(set_ii){
				if(set_ii=="1"){
					window.location=base_url+"inbox.html";
				}			 
			}
		});
		return false;
	});
}

function detail2(){
	$('.detail2').click(function(){
		var cct = $.cookie('em_ccn_c_name_em');
		var ii=$(this).attr('ii');
		$.ajax({
			type:"POST",
			url:base_url+"main/set_comment_id",
			data:"comment_id="+ii+"&ctn_t_name_em="+cct,
			success:function(set_ii){
				if(set_ii=="1"){
					window.location=base_url+"comment.html";
				}			 
			}
		});
		return false;
	});
}