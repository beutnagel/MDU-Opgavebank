<?php include('includes/functions_inc.php'); ?>
<?php 
// Set up head options
$options = array(
	"title" => "The Gallery",
	"page_css" => "gallery.css"
);
insertHead($options);?>


<?php include('includes/menu.php'); ?>


<h1>This is the gallery page</h1>
<img src="http://placekitten.com/200/360">
<img src="http://placekitten.com/150/300">
<img src="http://placekitten.com/220/380">
<img src="http://placekitten.com/230/200">


<?php include('includes/footer.php');?>
