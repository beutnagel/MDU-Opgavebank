$( document ).ready(function() {
    console.log( "ready!" );

    $("#nameField").keyup(function(){
       var nameField = $("#nameField").val();
       $("#container").load("generateData.php",{name: nameField},function(){
    		/* Stuff to do after the page is loaded */
    		console.log("Loaded AJAX");
    	});
    });

});