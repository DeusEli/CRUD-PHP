<?php
$text = $_POST['text'];
$file = "text.txt";
$handle = fopen($file, "a");
fwrite($handle, $text);
header('location: ../index.php');
