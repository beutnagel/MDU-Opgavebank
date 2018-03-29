<?php

// Load in the file system class
include 'filesystem.class.php';
$file = new FileSystem;

// Write to file (silent)
$filename = "edit.txt";
$content = $_POST["text"];
$file->write($filename,$content);

// Redirect to form
header('Location: edit.php?success');