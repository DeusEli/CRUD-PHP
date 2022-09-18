<?php
$file = "text.txt";
unlink($file);
header('location: ../index.php');
