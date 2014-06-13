$( document ).ready(function() {
	$("#datum").mask("99.99.9999.");
	$("#dana").keyup(function(){
		var popust = $("#popust").val();
		if(popust == 0){
			var ukupno = $("#dana").val() * $("#nocenje").val();
			$("#cijena").html("Cijena: "+ukupno+"&euro;");
		}else{
			var osnovno = $("#dana").val() * $("#nocenje").val();
			var oduzmi = ((popust/100)*osnovno);
			var ukupno = osnovno - oduzmi;
			$("#cijena").html("Cijena: "+ukupno+"&euro;");
		}
	});
});