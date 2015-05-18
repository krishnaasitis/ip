
$("#sub").click( function() {

 $.post( $("#myStatusForm").attr("action"), 
 		 $("#myStatusForm :input").serializeArray(), 
         function(info){ $("#result").html(info); 
   });
 clearInput();
});
 
$("#myStatusForm").submit( function() {
  return false;	
});
 
function clearInput() {
	$("#myStatusForm :input").each( function() {
	   $(this).val('');
	});
}

