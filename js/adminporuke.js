$( document ).ready(function() {
	$(".brisanje").click(function(){
		$.post( "admin.php?page=poruke", { id: $(this).attr('id')})
			.done(function( response ) {
			if(response == 1){
				alert("Poruka obrisana!");
				window.location="admin.php?page=poruke";
			}
		});
	});
});