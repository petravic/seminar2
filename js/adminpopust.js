$( document ).ready(function() {
	$("#datum").mask("99.99.9999.");
	$("#novi").click(function(){
		$("#popust").css({"visibility": "visible", "display": "initial"});
	});
	$("#odustani").click(function(){
		$("#popust").css({"visibility": "hidden", "display": "none"});
	});
	
	$(".brisanje").click(function(){
		$.post( "admin.php?page=popust", { id: $(this).attr('id')})
			.done(function( response ) {
			if(response == 1){
				alert("Popust obrisan!");
				window.location="admin.php?page=popust";
			}
		});
	});
});