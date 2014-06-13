$( document ).ready(function() {
	$("#novi").click(function(){
		$("#dodaj").css({"visibility": "visible", "display": "initial"});
	});
	$("#odustani").click(function(){
		$("#dodaj").css({"visibility": "hidden", "display": "none"});
	});
	
	$(".brisanje").click(function(){
		$.post( "admin.php?page=smjestaj", { id: $(this).attr('id')})
			.done(function( response ) {
			if(response == 1){
				alert("Smještaj obrisan!");
				window.location="admin.php?page=smjestaj";
			}
		});
	});
});