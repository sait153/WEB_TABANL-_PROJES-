<?php 
session_start();
require_once 'connect.php'; 



if (isset($_POST['girisyap'])) {

	$email=htmlspecialchars(trim($_POST['email']));
	$sifre=htmlspecialchars(trim($_POST['sifre']));


	
	
  

	$kullanicisor=$baglanti->prepare("SELECT * from users where user_email=:user_email and user_pass=:user_pass  ");
	$kullanicisor->execute(array(
		'user_email'=>$email,
		'user_pass'=>$sifre


	));


	$var=$kullanicisor->rowCount();

	if ($var >0) {
		$_SESSION['girisbelgesi']=$email;
		Header("Location:../index.php?durum=hosgeldin");
	}
	else{
		Header("Location:../login.php?durum=hata");
	}
	
	


}


?>