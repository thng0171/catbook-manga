<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php';?>
</head>

<body class="bg-base-200">
  <div class="drawer ">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
    <div class="drawer-content flex flex-col">
      <!-- ===HEADER=== -->
      <?php include 'includes/header.php';?>
      <!-- ===CENTER=== -->
      <div class="lg:mx-16 md:mx-10 mx-5 my-20">
        <!-- Truyện phổ biến -->
        <div class="w-full my-5">
          <!-- title  -->
          <a href=""
            class="inline-flex text-xl md:text-2xl py-4 items-center font-semibold text-secondary hover:text-secondary-focus">
            <span class="border-l-4 border-primary pl-2">
              TRUYỆN PHỔ BIẾN
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pt-0.5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
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
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0"
                        src="assets/img/opm2.jpg" alt=""></a>
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
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0"
                        src="assets/img/opm2.jpg" alt=""></a>
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
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0"
                        src="assets/img/opm2.jpg" alt=""></a>
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
                    <a href="truyen.php"><img class="absolute  w-full h-full object-cover inset-0"
                        src="assets/img/opm2.jpg" alt=""></a>
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
        </div>

        <!-- Truyện mới cập nhật -->
        <div class="">
          <!-- title  -->
          <a href="" class="inline-flex text-xl md:text-2xl py-4 items-center text-secondary font-semibold ">
            <span class="border-l-4 border-primary pl-2">
              TRUYỆN MỚI CẬP NHẬT
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pt-0.5" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
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
            <div class="col-start-5 col-span-2 p-4 bg-base-100 rounded-xl">
              <h2 class="text-xl font-semibold text-secondary">Bảng xếp hạng</h2>
              <div class="flex gap-3 rounded-lg bg-base-200 p-2">
                <span class="font-bold self-center">#1</span>
                <img class="mask mask-square w-16 h-16" src="assets/img/a97eb.jpg" />
                <div class="">
                  <span class="font-medium">Otomege Sekai wa Mow ni Kibishii Sekai Desu</span>
                </div>
              </div>
              <div class="flex gap-3 rounded-lg bg-base-200 p-2">
                <span class="font-bold self-center">#1</span>
                <img class="mask mask-square w-16 h-16" src="assets/img/a97eb.jpg" />
                <div class="">
                  <span class="font-medium">Otomege Sekai wa Mow ni Kibishii Sekai Desu</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full flex justify-center p-5">
          <div class="btn-group mx-auto">
            <button class="btn btn-active">1</button>
            <button class="btn">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
          </div>
        </div>
      </div>
      <!-- ===FOOTER=== -->
      <?php include 'includes/footer.php';?>
    </div>
    <!-- Sidebar -->
    <div class="drawer-side">
      <label for="my-drawer-3" class="drawer-overlay"></label>
      <ul class="menu font-semibold p-3 overflow-y-auto w-80 bg-base-100">
        <label for="my-drawer-3" class="flex justify-end">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg>
        </label>
        <!-- Sidebar content here -->
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>Trang chủ</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd" />
            </svg>Thể loại</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                clip-rule="evenodd" />
            </svg>Ngẫu nhiên</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path
                d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>Truyện phổ biến</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                clip-rule="evenodd" />
            </svg>Truyện Hot</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>Truyện mới cập nhật</a></li>
      </ul>

    </div>
  </div>
  <!-- </Script> -->
  <?php include 'includes/script.php';?>

</body>

</html>