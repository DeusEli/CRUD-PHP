<?php
$file = "text.txt";
fopen($file, "w+");
header('location: ../index.php');
