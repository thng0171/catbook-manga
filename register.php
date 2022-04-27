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
      <main class="w-full flex py-20 lg:px-16 justify-center items-center bg-base-200">
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

        
      </main>

      <!-- ===FOOTER=== -->
      <?php include 'includes/footer.php';?>
    </div>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php';?>
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