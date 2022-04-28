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
            <button type="submit" class="btn btn-primary">Đăng ký</button>
          </div>
          <div class="form-control mt-5">
            <a class="btn btn-primary btn-outline ">Quay lại</a>
          </div>
        </form>

        
      </main>

      <!-- ===FOOTER=== -->
      <?php include 'includes/footer.php';?>
    </div>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php';?>
  </div>


  <!-- </Script> -->
  <?php include 'includes/script.php';?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>