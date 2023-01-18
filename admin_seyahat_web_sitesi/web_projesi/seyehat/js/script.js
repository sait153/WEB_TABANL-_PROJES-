let menu = document.querySelector('#menu-btn');
//html içinde id'si "menu-btn" olan elementi seçer ve menu değişkenine atar.
let navbar = document.querySelector('.header .navbar');
// html içinde class'ı "header" ve "navbar" olan elementi seçer ve navbar değişkenine atar.
menu.onclick = () =>{//elementine tıklandığında çalışacak fonksiyonu tanımlar.
   menu.classList.toggle('fa-times');//elementinin class listesinde fa-times class'ın ekler veya çıkarır.
   navbar.classList.toggle('active');//elementinin class listesinde active class'ını ekler veya çıkarır.
};

window.onscroll = () =>{//Sayfa kaydırıldığında çalışacak fonksiyonu tanımlar.
   menu.classList.remove('fa-times');//elementinin class listesinde fa-times class'ını çıkarır.
   navbar.classList.remove('active');//elementinin class listesinde active class'ını çıkarır.
};//Önceki fonksiyonun sonuna işaret eder.

var swiper = new Swiper(".home-slider", {
   //Swiper.js kütüphanesi kullanarak home-slider class'ına sahip element için bir swiper nesnesi oluşturur.
   loop:true,//swiper nesnesinin döngüsünü açar.
   navigation: {//swiper nesnesinin navigasyon ayarlarını tanımlar.
     nextEl: ".swiper-button-next",//swiper-button-next" class'ına sahip element olarak tanımlar.
     prevEl: ".swiper-button-prev",
     //swiper nesnesinin geri butonunu ".swiper-button-prev" class'ına sahip element olarak tanımlar.
   },//navigasyon ayarlarının sonuna işaret eder.
});

var swiper = new Swiper(".reviews-slider", {
   //Swiper.js kütüphanesi kullanarak reviews-slider class'ına sahip element için bir swiper nesnesi oluşturur.
   grabCursor:true,//Fare ile swiper nesnesinin kaydırılmasını aktifleştirir.
   loop:true,
   autoHeight:true,//wiper nesnesinin otomatik olarak yüksekliğini ayarlar.
   spaceBetween: 20,//swiper nesnesinde slide arasındaki boşluğu 20px olarak ayarlar.
   breakpoints: {//swiper nesnesinin farklı ekran boyutları için ayarlarını tanımlar.
      0: {//0px ekran genişliğinde ayarları tanımlar.
        slidesPerView: 1,//swiper nesnesinde ekranda görünecek olan slide sayısını 1 olarak ayarlar.
      },//ekran genişliği ayarlarının sonuna işaret eder.
      700: {//700px ekran genişliğinde ayarları tanımlar.
        slidesPerView: 2,//swiper nesnesinde ekranda görünecek olan slide sayısını 2 olarak ayarlar.
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
   }
}