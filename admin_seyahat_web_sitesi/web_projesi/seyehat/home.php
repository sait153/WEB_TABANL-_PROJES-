<!DOCTYPE html><!--.Bu etiket HTML5 dosyasının tipini belirtir.-->
<html lang="en"><!--. Bu etiket HTML dosyasının başlangıç noktasını belirtir ve dil bilgisini..-->
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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
      <a href="home.php">Anasayfa</a>
      <a href="about.php">Hakkımızda</a>
      <a href="package.php">Paketler</a>
      <a href="book.php">rezerve et</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/hhome-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Seyahat Etmek</span>
               <h3>Çok iyi yerleri Dolaşmak</h3>
               <a href="package.php" class="btn">Daha Fazlasını Keşfet</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/hhome-slide-2.jpg) no-repeat">
            <div class="content">
               <span>seyahat etmek</span>
               <h3>Yeni Yeri Keşfets</h3>
               <a href="package.php" class="btn">Daha Fazlasını Keşfet</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Seyahat Etmek</span>
               <h3>Turunuzu Değerli Kılın</h3>
               <a href="package.php" class="btn">Daha Fazlasını Keşfe</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Hizmetlerimiz </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>İstanbulun Tarihi yerleri</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tur Rehberliği</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>İzmirin Güzel Yerleri</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Antalyanın güzel Doğasında campa çıkmek </h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Yol Taripeleri</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Eskişehirde Camp Yapmak</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/aabout-img.jpg" alt="">
   </div>

   <div class="content">
      <h1>Hakkımızda</h1>
      <p>Şirketin kendisi çok başarılı bir şirkettir. Uygun olduğunda ve onu bazı yönlerden reddetmek bizim gözümüzden kaçtığında, bir şeyin peşinde koşmak en akıllısı değil de hiç kimseyi itmez mi? Bizim için zevk veriyorlar mı</p>
      <a href="about.php" class="btn">Devamını Oku</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Tarihi yerlerin buradan seçebilirsin </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/iimg-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>İstanbul Ayasofya</h3>
            <p>Müşteri çok şanslı istediği sonuca ulaşabilecektir.!</p>
            <a href="book.php" class="btn">Rezerve yap</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/iimg-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Topkapı Sarayı</h3>
            <p>Müşteri çok şanslı istediği sonuca ulaşabilecektir!</p>
            <a href="book.php" class="btn">Rezerve yap</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/iimg-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Kapalı Çarşı (Grand Bazaar)</h3>
            <p>Müşteri çok şanslı istediği sonuca ulaşabilecektir!</p>
            <a href="book.php" class="btn">Rezerve yap</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Daha Fazla</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>50%  kadar indirimli </h3>
      <p>Müşteri çok şanslı istediği sonuca ulaşabilecektir!</p>
      <a href="book.php" class="btn">Rezerve yap</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Hızlı Linkler</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Ev</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> Hakkımızda</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Paketimiz</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Rezerve iletişim</a>
      </div>

      <div class="box">
         <h3>İletişim bilgileri</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> sorular sor</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Hakkımızda</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Gizlilik Politikası</a>
         <a href="#"> <i class="fas fa-angle-right"></i> kullanım Şartları</a>
      </div>

      <div class="box">
         <h3>iletişim bilgileri</h3>
         <a href="#"> <i class="fas fa-phone"></i> 055******* </a>
         <a href="#"> <i class="fas fa-phone"></i> 055******* </a>
         <a href="#"> <i class="fas fa-envelope"></i> ******6@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Bitlis eren ünüveriste,Türkiye-0553****** </a>
      </div>

      <div class="box">
         <h3>Bizi Takip et</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> <span>Said hashimi web tasarımcısı</span> 😊😊 </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>