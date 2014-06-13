$( document ).ready(function() {
	var data = 1;
	$("#datum").mask("99.99.9999.");
	$("#username").keyup(function(){
		if($("#username").val().length >= 4){
			$.post( "registracija.php", { username: $("#username").val()})
				.done(function( response ) {
				data = response;
				if(data == 0){
					$("#good1").css({"visibility": "visible", "display": "initial"});
					$("#bad1").css({"visibility": "hidden", "display": "none"});
				}else{
					$("#bad1").css({"visibility": "visible", "display": "initial"});
					$("#good1").css({"visibility": "hidden", "display": "none"});
				}
			});
		}else{
			$("#bad1").css({"visibility": "visible", "display": "initial"});
			$("#good1").css({"visibility": "hidden", "display": "none"});
		}
	});
	$("#pass").keyup(function(){
		if($("#pass").val().length >= 8){
			$("#good2").css({"visibility": "visible", "display": "initial"});
			$("#bad2").css({"visibility": "hidden", "display": "none"});
		}else{
			$("#bad2").css({"visibility": "visible", "display": "initial"});
			$("#good2").css({"visibility": "hidden", "display": "none"});
		}
	});
	$(".sign").submit(function(){
		if($("#username").val().length < 4){
			alert("Korisničko ime prekratko!");
			return false;
		}else if($("#password").val().length < 8){
			alert("Lozinka prekratka!");
			return false;
		}else if($("#ime").val().length < 3){
			alert("Ime prekratko!");
			return false;
		}else if($("#prezime").val().length < 3){
			alert("Prezime prekratko!");
			return false;
		}else if($("#adresa").val().length < 4){
			alert("Adresa prekratka!");
			return false;
		}else if($("#mjesto").val().length < 3){
			alert("Mjesto prekratko!");
			return false;
		}else if($("#zupanija").val() == 0){
			alert("Odaberi županiju!");
			return false;
		}else if($("#telefon").val().length < 6){
			alert("Upisite broj telefona!");
			return false;
		}else if($("#oib").val().length < 11){
			alert("OIB prekratak!");
			return false;
		}else if(data != 0){
			alert("Korisničko ime več postoji!");
			return false;
		}else if(email1 != email2){
			alert("Email adrese koje ste unjeli su različite!");
			return false;
		}
	});
});