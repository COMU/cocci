<?php
//Upload tusu kontrol edildikten  tekrar bakılmalı.. 
$icerik = $_POST['icerik'];
$yama = "yama.txt";
$dosya = $_REQUEST['dosya'];

$yamakaydet = fopen($yama,'w');

if(isset($icerik) && !empty($_REQUEST){
	$deneme= system('spatch --parce-cocci $icerik',$return_var);
		if($return_var==1){
	 		$yama= system('spatch --sp-file $icerik $dosya',$return_var1);
			}
		echo ("cocci betiginizi kontrol edin.") ;
}

//fwrite($yama,$icerik);
fclose($yama);

?>
