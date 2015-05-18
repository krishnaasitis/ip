$("#sub").click( function() {
	
	$.post( $("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info){ $("#result").html(info); } ); 
	clearInput();
});
//no redirection to articledetails
$("#myForm").submit( function() {
	return false;

});

function clearInput() {
	$("#myForm :input").each( function(){
		$(this).val('');
	
});
}