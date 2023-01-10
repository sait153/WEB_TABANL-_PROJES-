<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Türkiyenin Seyahtat Sitesi.</a>

   <nav class="navbar">
      <a href="home.php">Başlangıç</a>
      <a href="about.php">Hakkımızda</a>
      <a href="package.php">Paketler</a>
      <a href="book.php">Rezerve</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>Rezerve yap</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">seyahatinizi Rezerve Edin!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Adı :</span>
            <input type="text" placeholder="Lütfen adınızı Giriniz" name="adı">
         </div>
         <div class="inputBox">
            <span>Email Adresi :</span>
            <input type="email" placeholder="Lütfen Email adresinizi Giriniz" name="email">
         </div>
         <div class="inputBox">
            <span>Telefon Numara :</span>
            <input type="Numara" placeholder="Lütfen Telefon Numaranızı Giriniz" name="Telefon">
         </div>
         <div class="inputBox">
            <span>Adres:</span>
            <input type="text" placeholder="Lütfen Adresiniz Giriniz" name="Adres">
         </div>
         <div class="inputBox">
            <span>Nereye Gitinizi Yazınız :</span>
            <input type="text" placeholder="Lütfen Gideceğiniz Yeri belirtin" name="Yer">
         </div>
         <div class="inputBox">
            <span>Ziyaretçi Sayısı :</span>
            <input type="number" placeholder="Lütfen Ziyaretçi Sayısını Giriniz" name="Ziyarteçi">
         </div>
         <div class="inputBox">
            <span>Gidiş Tarihi :</span>
            <input type="date" name="Lütfen Gidiş Tarihini Belirtin">
         </div>
         <div class="inputBox">
            <span>Dönüş Tarihi :</span>
            <input type="date" name="Lütfen Dönüş Tarihini Belirtin">
         </div>
      </div>

      <input type="Kayıt Ol" value="Kayıt Ol" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Hızlı Linkler</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> ev</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> Hakkımızda</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Paketler</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Rezerve</a>
      </div>

      <div class="box">
         <h3>İletişim bilgileri</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> sorular sor</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Hakkımızda</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Gizlilik Politikasıy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> kullanım Şartları</a>
      </div>

      <div class="box">
         <h3>iletişim bilgileri</h3>
         <a href="#"> <i class="fas fa-phone"></i> 0553******* </a>
         <a href="#"> <i class="fas fa-phone"></i> 0553******* </a>
         <a href="#"> <i class="fas fa-envelope"></i> *******6@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Bitlis eren ünüveriste,Türkiye-553******* </a>
      </div>

      <div class="box">
         <h3>Bizi Takip et</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"><span>Said hashimi web tasarımcısı</span> 😊😊</div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>