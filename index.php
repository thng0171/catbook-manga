<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook Manga</title>
  <?php include 'includes/style.php'; ?>
</head>

<body class="relative bg-base-200">
  <!-- ===HEADER=== -->
  <?php include 'includes/header.php'; ?>
  <!-- ===MAIN=== -->

  <main class="py-16 mx-5 lg:mx-16 md:mx-10">
    <!-- Truyện de cu -->
    <section class="w-full my-5">
      <!-- title  -->
      <div id="suggestion" class="inline-block py-3">
        <div  class="s-title">TRUYỆN ĐỀ CỬ</div>
      </div>
      <!-- Swiper -->
      <div class="relative swiper mySwiper">
        <div id="swiper" class="w-full h-full swiper-wrapper ">

        </div>
        <!-- navigation -->
        <div class="invisible p-8 scale-90 rounded-full swiper-button-next md:visible bg-black/40 ">
        </div>
        <div class="invisible p-8 scale-90 rounded-full swiper-button-prev md:visible bg-black/40">
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- Truyện mới cập nhật -->
    <section class="">
      <!-- title  -->
      <div id="lastest" class="inline-block py-3">
        <span class="s-title">
          MỚI CẬP NHẬT
        </span>
      </div>
      <!-- container -->
      <div id="moicapnhat" class="grid w-full grid-cols-2 gap-x-6 gap-y-3 sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
      </div>
    </section>
    <!-- phan trang  -->
    <!-- <div class="flex justify-center w-full p-5">
      <div class="mx-auto btn-group">
        <button class="btn btn-active">1</button>
        <button class="btn">2</button>
        <button class="btn">3</button>
        <button class="btn">4</button>
      </div>
    </div> -->
  </main>

  <!-- ===FOOTER=== -->
  <?php include 'includes/footer.php'; ?>
  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>
  <script>
    // Swiper
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      draggable: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1.2,
        },
        640: {
          slidesPerView: 1.5,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1440: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        2560: {
          slidesPerView: 4.5,
          spaceBetween: 40,
        },
      }
    });
  </script>

</body>

</html>