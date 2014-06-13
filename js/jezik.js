$( document ).ready(function() {
	$('.chg-lng').click(function() {
		$.post( "jezik.php", { jezik: $(this).attr('rel')})
			.done(function( response ) {
				if(response == 1){
					window.location="index.php";
				}
		});
	});
});