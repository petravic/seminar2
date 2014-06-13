$( document ).ready(function() {
	$("#username").keyup(function(){
		if($("#username").val().length >= 4){
			$.post( "lostpass.php", { username: $("#username").val()})
				.done(function( response ) {
				if(response == 1){
					$("#good1").css({"visibility": "visible", "display": "initial"});
					$("#bad1").css({"visibility": "hidden", "display": "none"});
				}else{
					$("#bad1").css({"visibility": "visible", "display": "initial"});
					$("#good1").css({"visibility": "hidden", "display": "none"});
				}
			});
		}
	});
	$("#email").keyup(function(){
		if($("#email").val().length >= 8){
			$.post( "lostpass.php", { email: $("#email").val()})
				.done(function( response ) {
				if(response == 1){
					$("#good2").css({"visibility": "visible", "display": "initial"});
					$("#bad2").css({"visibility": "hidden", "display": "none"});
				}else{
					$("#bad2").css({"visibility": "visible", "display": "initial"});
					$("#good2").css({"visibility": "hidden", "display": "none"});
				}
			});
		}
	});
});