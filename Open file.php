<?php
$filename ='1234.txt';


if (file_exists($filename)) {
	echo "file $filename ditemukan";
	$files = fopen("1234.txt", 'w');
	for ($i=1; $i <= 10  ; $i++) { 
		fwrite($files,$i."Muka lu Jelek Banget kaya majid \r\n");
		# code...
	}
	fwrite($files, 'wkwkwkwkwkwkwkwkwkwkk');
 	# code...
 } 
 else{
 	echo "file not found";
 	fopen($filename, 'w');
 	echo "<br/> file berhasil dibuat";
 }
 ?>