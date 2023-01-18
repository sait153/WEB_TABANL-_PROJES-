<?php 
try {

	$baglanti=new PDO('mysql:host=localhost; dbname=sayid_hasimi_18080708007', 'root', '');
	
} catch (Exception $e) {
	echo $e->getMessage();
}


?> 