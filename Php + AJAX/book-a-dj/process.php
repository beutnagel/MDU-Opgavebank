<?php
// Notice: This pages is meant to be loaded through AJAX

// Get values from the $_GET array by calling them like this:
// 		E.g. If you want to get the data from the form input called "email"
// 		$_GET['email']


// Write the response text
?>
<p>Hi <?php echo $_GET['name'];?>,</p>
<p>Thank you for making a request for a DJ for your next party. </p>
<p><em>We have received the following information. If you have changes to it, please contact us as soon as possible at <a href="mailto:bob@bob.com">support@kickassdjs.com</a>.</em></p>
<ul>
<?php
// Loop through all of the received data and output the name and value of each
foreach ($_GET as $key => $value) {
	?><li><?php 
		echo $key . ": " . $value;
	?></li><?php
}
?>
</ul>