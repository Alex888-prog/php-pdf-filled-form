$(document).ready(function() {
var DIR = "/social";
	//When pay overlay click.

	$('.p_t_cancel').click(function() {
		var to = $('#to').val();
		var update_id = $('#elem').val();
		console.log(to);
		console.log(update_id);
		$.ajax({
                   url: DIR+"/ajaxify/ajax_requests/follow_requests.php",
                   method: "GET",
                   
                   data: {unfollow: to, updateid: update_id},
                  
                  success: function(data){
                  	console.log("success...cancel");
		  }
                });

		$('.custom-overlay').hide(200);
		location.reload();

	});

});