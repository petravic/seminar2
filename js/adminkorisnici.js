$( document ).ready(function() {
	$(".brisanje").click(function(){
		$.post( "admin.php?page=korisnici", { action: 1, id: $(this).attr('id')})
			.done(function( response ) {
			if(response == 1){
				alert("Korisnik obrisan!");
				window.location="admin.php?page=korisnici";
			}
		});
	});
	
	$(".admin").click(function(){
		var id = $(this).attr('id');
		$.post( "admin.php?page=korisnici", { action: 2, id: id})
			.done(function( response ) {
			if(response == 2){
				alert("Prava uspješno dodjeljena!");
				window.location="admin.php?page=korisnici";
			}
		});
	});
	
	$(".remove").click(function(){
		var id = $(this).attr('id');
		$.post( "admin.php?page=korisnici", { action: 3, id: id})
			.done(function( response ) {
			if(response == 3){
				alert("Prava uspješno uklonjena!");
				window.location="admin.php?page=korisnici";
			}
		});
	});
	
});