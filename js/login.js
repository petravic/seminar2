$( document ).ready(function() {
	$("#password, #username").keyup(function(){
		if($("#username").val().length >= 4 && $("#password").val().length >=8){
			$.post( "login.php", { username: $("#username").val(), password: $("#password").val()})
				.done(function( response ) {
				if(response == 1){
					$("#good").css({"visibility": "visible", "display": "initial"});
					$("#bad").css({"visibility": "hidden", "display": "none"});
					window.location="index.php";
				}
			});
		}
	});
});