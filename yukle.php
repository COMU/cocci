<?php
$maxBoyut=500000;
$dosyaUzantisi=substr($_FILES["dosya"]["name"],-4,4);
$dosyaAdi=rand(0,9999999).$dosyaUzantisi;
$dosyaYolu= "dosya/".$dosyaAdi;

if($_FILES["dosya"]["size"] > $maxBoyut){
	echo "dosya boyutu en fazla <b>500kb</b> olabilir..";
}else{
	$d=$_FILES["dosya"]["name"];
	if($d == "text/plain" || $d== "text/x-c" || $d== "text/x-h")
	{

		if(is_uploaded_file($_FILES["dosya"]["tmp_name"])){
			
			$tasi=move_uploaded_file($_FILES["dosya"]["tmp_name"],$dosyaYolu);
			if($tasi){
				echo "<b>{$dosyaAdi}</b> adlı dosya basarıyla yuklendi";
			}else{
				echo "dosya taşınırken bir sorun olustu...";	
			}
		}else{
			echo "dosya yüklenirken bir sorun olustu";	
		}
		
	}else{
		echo "dosya tipi uygun degil";
	}
}



?>



