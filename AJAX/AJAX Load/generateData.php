
<h1>Hej <?php echo $_POST['name']?></h1>
<h2>This was loaded through AJAX</h2>

<?php 

if($_POST['name']==="Jarne") {
	?>
	<img src="images/love.jpg" alt="I love you">
	<?php
}

?>

<pre>
<?php
	var_dump($_POST);
?>
</pre>