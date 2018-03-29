<?php
// Get php to wait a bit
sleep(1);
// Get the data sent to the server
$email = $_POST['email'];
?>

You are now logged in as <?php echo $email;?>