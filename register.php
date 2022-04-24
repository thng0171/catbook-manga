<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php';?>
</head>

<body class="">
  <div class="drawer ">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
    <div class="drawer-content flex flex-col">
      <!-- ===HEADER=== -->
      <?php include 'includes/header.php';?>
      <!-- ===CENTER=== -->
      <div class="w-full flex py-20 lg:px-16 justify-center items-center bg-base-200">
      <div class="hidden ml-5 lg:block ">
          <img src="assets/img/reg.png" class="pt-5 object-contain object-center w-full h-full" alt="">
        </div>
        <form action="" class="w-full justify-center sm:flex-col p-4  sm:w-2/3 lg:w-1/2 xl:w-1/3">
          <div class="form-control">
            <h1 class="font-bold text-2xl py-3">Đăng Ký Tài Khoản</h1>
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Tên tài khoản</span>
            </label>
            <input required type="text" placeholder="Nhập tên tài khoản" class="input focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Họ và tên</span>
            </label>
            <input required type="text" placeholder="Nhập họ và tên" class="input   focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Email</span>
            </label>
            <input required type="email" placeholder="Nhập Email" class="input   focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Mật khẩu</span>
            </label>
            <input required type="password" placeholder="••••••••" class="input  focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Nhập lại mật khẩu</span>
            </label>
            <input required type="password" placeholder="••••••••" class="input  focus:outline-secondary input-bordered">
          </div>

          <div class="form-control mt-5">
            <button class="btn btn-primary">Đăng ký</button>
          </div>
          <div class="form-control mt-5">
            <button class="btn btn-primary btn-outline ">Quay lại</button>
          </div>
        </form>

        
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


  <script src="/assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
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
          slidesPerView: 2.5,
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
    //===Dark mode toggle===
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches)) {
      themeToggleLightIcon.classList.remove('hidden');
    } else {
      themeToggleDarkIcon.classList.remove('hidden');
    }


    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function () {

      // toggle icons inside button
      themeToggleDarkIcon.classList.toggle('hidden');
      themeToggleLightIcon.classList.toggle('hidden');

      // if set via local storage previously
      if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
      } else {
        if (document.documentElement.classList.contains('dark')) {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        } else {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        }
      }

    });
  </script>

</body>

</html>