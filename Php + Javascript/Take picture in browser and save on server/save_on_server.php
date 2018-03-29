<?php 
    move_uploaded_file($_FILES['webcam']['tmp_name'], 'snapshots/snapshot.jpg');
?>