<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php'; ?>
</head>

<body class="bg-base-200">
  <div class="drawer ">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
    <div class="drawer-content flex flex-col">
      <!-- ===HEADER=== -->
      <?php include 'includes/header.php'; ?>
      <!-- ===CENTER=== -->
      <main class="lg:mx-16 md:mx-10 mx-5 my-20">
        <!-- Truyện phổ biến -->
        <section class="w-full my-5">
          <!-- title  -->
          <a href="" class="inline-flex text-xl md:text-2xl py-4 items-center font-semibold text-secondary">
            <span class="border-l-4 border-primary pl-2">
              TRUYỆN PHỔ BIẾN
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </a>
          <!-- Slider -->
          <div class="swiper mySwiper relative">
            <div class="swiper-wrapper w-full h-full">
              <!-- item -->
              <div class="swiper-slide">
                <!-- item container  -->
                <div class="swiper-item">
                  <!-- img left -->
                  <div class="swiper-image">
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0" src="assets/img/opm2.jpg" alt=""></a>
                  </div>
                  <!-- text right  -->
                  <div class="swiper-right">
                    <!-- manga title -->
                    <a href="" class="swiper-item-title">One Punch Man</a>
                    <!-- desc -->
                    <div class="h-fit"></div>
                    <p class="swiper-item-desc">
                      After rigorously training for three years, the ordinary Saitama has gained immense strength which
                      allows him to take out anyone and anything with just one punch. He decides to put his new skill to
                      good use by becoming a hero. However, he quickly becomes bored with easily defeating monsters, and
                      wants someone to give him a challenge to bring back the spark of being a hero.
                    </p>
                  </div>

                </div>
              </div>
              <!-- item 1-->
              <div class="swiper-slide">
                <!-- item container  -->
                <div href="" class="swiper-item">
                  <!-- img left -->
                  <div class="swiper-image">
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0" src="assets/img/opm2.jpg" alt=""></a>
                  </div>
                  <!-- text right  -->
                  <div class="swiper-right">
                    <!-- manga title -->
                    <a href="" class="swiper-item-title">One Punch Man</a>
                    <!-- desc -->
                    <div class="h-fit"></div>
                    <p class="swiper-item-desc">
                      After rigorously training for three years, the ordinary Saitama has gained immense strength which
                      allows him to take out anyone and anything with just one punch. He decides to put his new skill to
                      good use by becoming a hero. However, he quickly becomes bored with easily defeating monsters, and
                      wants someone to give him a challenge to bring back the spark of being a hero.
                    </p>
                  </div>
                </div>
              </div>
              <!-- item 1-->
              <div class="swiper-slide">
                <!-- item container  -->
                <div href="" class="swiper-item">
                  <!-- img left -->
                  <div class="swiper-image">
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0" src="assets/img/opm2.jpg" alt=""></a>
                  </div>
                  <!-- text right  -->
                  <div class="swiper-right">
                    <!-- manga title -->
                    <a href="" class="swiper-item-title">One Punch Man</a>
                    <!-- desc -->
                    <div class="h-fit"></div>
                    <p class="swiper-item-desc">
                      After rigorously training for three years, the ordinary Saitama has gained immense strength which
                      allows him to take out anyone and anything with just one punch. He decides to put his new skill to
                      good use by becoming a hero. However, he quickly becomes bored with easily defeating monsters, and
                      wants someone to give him a challenge to bring back the spark of being a hero.
                    </p>
                  </div>
                </div>
              </div>
              <!-- item 1-->
              <div class="swiper-slide">
                <!-- item container  -->
                <div href="" class="swiper-item">
                  <!-- img left -->
                  <div class="swiper-image">
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0" src="assets/img/opm2.jpg" alt=""></a>
                  </div>
                  <!-- text right  -->
                  <div class="swiper-right">
                    <!-- manga title -->
                    <a href="" class="swiper-item-title">One Punch Man</a>
                    <!-- desc -->
                    <div class="h-fit"></div>
                    <p class="swiper-item-desc">
                      After rigorously training for three years, the ordinary Saitama has gained immense strength which
                      allows him to take out anyone and anything with just one punch. He decides to put his new skill to
                      good use by becoming a hero. However, he quickly becomes bored with easily defeating monsters, and
                      wants someone to give him a challenge to bring back the spark of being a hero.
                    </p>



                  </div>
                </div>
              </div>



            </div>
            <div class="swiper-button-next invisible md:visible p-8 rounded-full bg-black/40 scale-90 ">
            </div>
            <div class="swiper-button-prev invisible md:visible p-8 rounded-full bg-black/40 scale-90">
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </section>

        <!-- Truyện mới cập nhật -->
        <section class="">
          <!-- title  -->
          <a href="" class="inline-flex text-xl md:text-2xl py-4 items-center text-secondary font-semibold ">
            <span class="border-l-4 border-primary pl-2">
              TRUYỆN MỚI CẬP NHẬT
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </a>
          <!-- container -->
          <div class="w-full grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-5 lg:gap-7">
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen ">
              <a href="truyen.php">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>
            <!-- Item 1-->
            <div class="truyen truyen.php">
              <a href="">
                <div class="rounded overflow-hidden">
                  <img class="truyen-img" src="assets/img/a97eb.jpg" alt="">
                </div>
                <div class="truyen-title">
                  Otomege Sekai wa Mow ni Kibishii Sekai Desu
                </div>
                <div class="flex justify-between items-center">
                  <span class="">Chapter 12</span>
                  <i class="text-sm text-gray-500">1 giờ trước</i>
                </div>
              </a>
            </div>

          </div>
        </section>
        <!-- chuyển trang  -->
        <div class="w-full flex justify-center p-5">
          <div class="btn-group mx-auto">
            <button class="btn btn-active">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
          </div>
        </div>
      </main>
      <!-- ===FOOTER=== -->
      <?php include 'includes/footer.php'; ?>
    </div>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
  </div>
  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>

</body>

</html>