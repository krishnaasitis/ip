$("#post").click( function() {
	$.post( $("#ForumForm").attr("action"), $("#ForumForm:input").serializeArray(), function(info){ $("#posted").html(info); } ); 
	clearInput();
});
//no redirection to articledetails
$("#ForumForm").submit( function() {
	return false;

});

function clearInput() {
	$("#ForumForm:input").each( function(){
		$(this).val('');
	
});
}
