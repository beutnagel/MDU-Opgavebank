<!DOCTYPE html>
<html>
<head>
	<title>Look up IP</title>
</head>
<body>

<?php
// php code snippets
echo $_SERVER['SERVER_ADDR']; 
?>


<script type="text/javascript">

	var myIp = "<?php echo $_SERVER['SERVER_ADDR']; ?>";
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "http://ip-api.com/json/8.8.8.8", false);
	xhr.send();
	var result = JSON.parse(xhr.response);
	console.log(result.as);
</script>
</body>
</html>