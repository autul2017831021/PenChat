$(document).ready(function(){
	$(".chat-form").keypress(function(e){
		if(e.keyCode == 13){
			var send_message = $("#send_message").val();
			if(send_message.length != ""){
				$.ajax({
					type : 'POST',
					url : 'ajax/send_message.php',
					data: {send_message:send_message},
					dataType: 'JSON',
					success: function(feedback){
						if(feedback.status == "success"){
							$(".chat-form").trigger("reset");
							alert("msg is sent");
						}
					}
				})
			}
		}
	})
	$("#upload-files").change(function(){
		var file_name = $("#upload-files").val();
		if(file_name.length != ""){
			$.ajax({
				type : 'POST',
				url : 'ajax/send_files.php',
				data : new FormData($(".chat-form")[0]),
				contentType : false,
				processData : false,
				success : function(feedback){
					if(feedback == "error"){
						$(".files-error").addClass("show-file-error");
						$(".files-error").html("<span class='files-cross-icon'>&#x2715;</span>"+"Please choose valid image/file");
						setTimeout(function(){
							$(".files-error").removeClass("show-file-error");
						},5000)
					}else if(feedback == "success"){
						alert('file/image send');
					}
				}
			})
		}
	})
})