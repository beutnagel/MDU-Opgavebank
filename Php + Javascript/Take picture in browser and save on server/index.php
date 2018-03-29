<!DOCTYPE html>
<html>
<head>
	<title>Take a picture in the browser and save on server</title>
</head>
<body>
	<div id="my_camera"></div>
	<div id="results"></div>



<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="js/webcam.min.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			dest_width: 640,
			dest_height: 480,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	
	<!-- A button for taking snaps -->
	<form>
		<input type=button value="Take Large Snapshot" onClick="take_snapshot()">
	</form>
	
	<!-- Code to handle taking the snapshot and displaying it locally -->



	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// Tell the upload function where to send the dataURI
		        Webcam.upload( data_uri, 'save_on_server.php', function(code, text) {
		        	console.log("uploading snapshot to server: "+code+" "+text);
		            // 'code' will be the HTTP response code from the server, e.g. 200
		            // 'text' will be the raw response content
		        } );


				// display results in browser window
				document.getElementById('results').innerHTML = 
					'<h2>Here is your large image:</h2>' + 
					'<img src="'+data_uri+'"/>';
			} );

		}
	</script>
</body>
</html>