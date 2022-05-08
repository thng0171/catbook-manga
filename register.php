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
      <!-- ===HEADER=== -->
      <?php include 'includes/header.php';?>
      <!-- ===CENTER=== -->
      <main class="flex items-center justify-center w-full py-20 lg:px-16 bg-base-200">
        <div class="hidden ml-5 lg:block ">
          <img src="assets/img/reg.png" class="object-contain object-center w-full h-full pt-5" alt="">
        </div>
        <form action="" class="justify-center w-full p-4 sm:flex-col sm:w-2/3 lg:w-1/2 xl:w-1/3">
          <div class="form-control">
            <h1 class="py-3 text-2xl font-bold">Đăng Ký Tài Khoản</h1>
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Tên tài khoản</span>
            </label>
            <input required type="text" placeholder="Nhập tên tài khoản" class="input focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Họ và tên</span>
            </label>
            <input required type="text" placeholder="Nhập họ và tên" class="input focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Email</span>
            </label>
            <input required type="email" placeholder="Nhập Email" class="input focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Mật khẩu</span>
            </label>
            <input required type="password" placeholder="••••••••••" class="input focus:outline-secondary input-bordered">
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text after:content-['*'] after:ml-0.5 after:text-red-500 block">Nhập lại mật khẩu</span>
            </label>
            <input required type="password" placeholder="••••••••••" class="input focus:outline-secondary input-bordered">
          </div>
        
          <div class="mt-5 form-control">
            <button type="submit" class="btn btn-primary">Đăng ký</button>
          </div>
          <div class="mt-5 form-control">
            <a class="btn btn-primary btn-outline ">Quay lại</a>
          </div>
        </form>

        
      </main>
      <!-- ===FOOTER=== -->
      <?php include 'includes/footer.php';?>
<!-- </Script> -->
  <?php include 'includes/script.php';?>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>