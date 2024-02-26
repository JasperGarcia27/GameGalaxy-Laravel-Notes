<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

  <!-- Demo styles -->
  <style>
    /* html,
    body {
      position: relative;
      height: 100%;
    } */

    /* body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    } */

    .header {
      position: relative;
      height: 100%;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .header-img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <div class="header">
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/a.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/b.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/c.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/d.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/e.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/f.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/g.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/h.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/i.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/j.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/k.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/l.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/m.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/n.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/o.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/p.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/q.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/r.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/s.png')}} alt=""></div>
        <div class="swiper-slide"><img class="header-img" src={{asset('/images/headers/t.png')}} alt=""></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 0,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>
