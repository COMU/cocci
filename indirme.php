<?php
 
function download($file) //run isleminden sonra tekrar duzenlenecek. 
{ 
if ((isset($file))&&(file_exists($file))) { 
header("Content-length: ".filesize($file)); 
header('Content-Type: text/x-c,text/x-h,text/plain'); 
header('Content-Disposition: attachment; filename="' . $file . '"'); 
readfile("$file"); 
} else { 
echo "No file selected"; 
} 
} 
download("files/dosya.c")
 ?>
