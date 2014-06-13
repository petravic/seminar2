$( document ).ready(function() {
	$(".brisanje").click(function(){
		$.post( "admin.php?page=recenzija", { action: 1, id: $(this).attr('id')})
			.done(function( response ) {
			if(response == 1){
				alert("Recenzija obrisana!");
				window.location="admin.php?page=recenzija";
			}
		});
	});
	$(".uredi").click(function(){
		var id = $(this).attr('id');
		var tekst = $("#"+id+"t").html();
		var ocjena = $("#"+id+"o").html();
		$("#"+id+"t").replaceWith("<td><textarea id='"+id+"nt'>"+tekst+"</textarea><br /></td>");
		$("#"+id+"o").replaceWith("<td><input type='text' id='"+id+"no' value='"+ocjena+"' size='1'></td>");
		$( "button[rel='"+id+"']" ).css({"visibility": "visible", "display": "initial"});
		$(this).css({"visibility": "hidden", "display": "none"});
	});
	
	$(".spremi").click(function(){
		var id = $(this).attr('rel');
		$.post( "admin.php?page=recenzija", { action: 2, id: id, tekst: $("#"+id+"nt").val(), ocjena: $("#"+id+"no").val()})
			.done(function( response ) {
			if(response == 2){
				alert("Recenzija uređena!");
				window.location="admin.php?page=recenzija";
			}
		});
	});
	
	$(".odustani").click(function(){
		window.location="admin.php?page=recenzija";
	});
});