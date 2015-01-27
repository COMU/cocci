<?php

$icerik = $_POST['icerik'];
$yama = "yama.txt";

$yamakaydet = fopen($yama,'w');
fwrite($yama,$icerik);
fclose($yama);

?>
