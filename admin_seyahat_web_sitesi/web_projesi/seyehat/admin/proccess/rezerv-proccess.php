<?php 

session_start();
require_once "connect.php";
if (isset($_POST['btnRezervSil'])) {


$rezervsil=$baglanti->prepare(" DELETE from rezervasyon where rezerv_id=:rezerv_id");



	$rezervsil->execute(array(

	'rezerv_id'=>$_POST['rezerv_id']

	));

if ($rezervsil) {


	Header("Location:../index.php?silme=basarili");
}
else{
	Header("Location:../index.php?silme=basarili");
}



}






 ?>