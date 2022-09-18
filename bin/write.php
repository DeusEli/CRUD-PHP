<?php
$text = $_POST['text'];
$file = "text.txt";
$handle = fopen($file, "w+");
fwrite($handle, $text);
header('location: ../index.php');
