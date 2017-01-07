$(document).ready(function(){
    $(".itemBtn").click(function(){
        $(this).next().css('display','block');
        $('body').css('background-color','rgba(0, 0, 0, 0.1)');
    });


    $(".like").click(function(){
	   var ID;
       ID = $(this).parent().next().html();
       var ItemNo= $(this).parent().next().next().html();
		// Assign handlers immediately after making the request,
	// and remember the jqXHR object for this request
		var jqxhr = $.ajax( "mail.php" );
  		//.done(function() {
	      //alert( "success" );
		  //  })
    	//.fail(function() {
		  //  alert( "error" );
		//	  })
	  	//.always(function() {
		  //    alert( "complete" );
			//    });
	   
	   // Perform other work here ...
	    
		// Set another completion function for the request above
		//jqxhr.always(function() {
		//	  alert( "second complete" );
		//});
		
		////
		$.ajax({
			  method: "GET",
			  url: "mail.php",
			  data: { SalerID:ID,ItemNo:ItemNo }
		});
		//.done(function( msg ) {
		//	      alert( "Data Saved: " + msg );
		//});

    });

});
