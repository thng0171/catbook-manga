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
      <!-- ===Center=== -->
      <div class="relative my-16 w-full">
        <!-- background -->
        <div class="absolute -z-10 h-52  md:h-64 w-full overflow-hidden">
          <div class="-z-20 h-full w-full inset-0 bg-center bg-cover  brightness-75 bg-no-repeat bg-fixed" style="background-image: url('assets/img/a97eb.jpg') ;">
            <div class="absolute h-52 backdrop-blur xl:backdrop-blur-md md:h-64 w-full"></div>
          </div>
        </div>
        <div class="m-6 md:m-12 xl:mx-20 md:grid md:auto-rows-auto justify-items-start md:grid-cols-3 gap-x-4 gap-y-2 xl:gap-x-8 xl:grid-cols-4">
          <!-- manga poster  -->
          <div class="flex justify-center justify-self-end">
            <div class="w-48 md:w-52 rounded overflow-hidden">
              <img class="object-cover object-center aspect-truyen w-full h-full" src="assets/img/a97eb.jpg" alt="">
            </div>
          </div>
          <!-- manga info  -->
          <div class="md:grid md:justify-items-start md:col-span-2 ">
            <!-- stat -->
            <div class="py-2 md:p-0  md:order-4 flex justify-center md:justify-start gap-4">
              <div class="inline-flex items-center text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg> 4.9
              </div>
              <div class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>313k
              </div>
              <div class="inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg>249k
              </div>
            </div>
            <!-- title  -->
            <div class="md:order-first md:p-0 text-left md:text-left">
              <h2 class="text-2xl md:text-4xl xl:text-5xl font-semibold md:font-bold md:text-white">
                Otomege Sekai wa Mob ni Kibishii Sekai Desu</h2>
              <h2 class="text-xl md:text-xl xl:text-2xl md:text-gray-100 ">
                Song of the Night Walkers</h2>
            </div>
            <div class="flex md:hidden justify-center p-3 gap-2 ">
              <button class="btn btn-primary">Đọc truyện</button>
              <button class="btn btn-outline btn-primary border-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                </svg></button>
            </div>
            <div class="md:text-white md:text-lg">
              <span class="font-medium md:hidden">Tác giả:</span> <span>Aneko Yusagi, Aiya Kyu</span>
            </div>
          </div>
          <!-- button desktop -->
          <div class="hidden md:flex justify-self-end justify-end p-3 gap-2 row-start-2">
            <button class="btn btn-primary">Đọc truyện</button>
            <button class="btn btn-outline btn-primary border-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
              </svg>
            </button>
          </div>
          <!-- Tag  -->
          <div class="col-start-2 col-end-4">
            <div class="font-medium">Tag:
              <div>
                <span class="badge badge-accent">#Action</span>
                <span class="badge badge-accent">#Adventure</span>
                <span class="badge badge-accent">#Isekai</span>
                <span class="badge badge-accent">#Fantasy</span>
                <span class="badge badge-accent">#Adventure</span>
                <span class="badge badge-accent">#Isekai</span>
                <span class="badge badge-accent">#Fantasy</span>
              </div>
            </div>
          </div>
          <!-- Desc -->
          <div class="md:col-start-2 md:col-end-4">
            <h2 class="font-medium">Giới thiệu:</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate est debitis, eaque dolore explicabo et
              blanditiis nulla? Quaerat, tempore quo aspernatur accusamus a eaque sunt necessitatibus vero, odit quos in?
            </p>
          </div>
          <!-- Chapters List -->
          <div class="w-full xl:w-3/4 bg-base-100 p-4 mt-4 rounded-lg shadow-lg  justify-self-center lg:col-start-2 lg:justify-self-start col-span-4">
            <div class="text-xl flex pb-4 border-b items-center text-secondary  font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg><span> Danh sách chương</span></div>
            <div class="divide-y">
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chương 4</span>
                <span class=""> 1 giờ trước</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chương 3</span>
                <span class=""> 1 ngày trước</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chương 2</span>
                <span class=""> 20/04/2022</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chương 1</span>
                <span class=""> 12//03/2022</span>
              </a>
            </div>
          </div>

        </div>

      </div>
      <!-- ===FOOTER=== -->
      <!-- <?php include 'includes/footer.php'; ?> -->
    </div>
    <!-- Sidebar -->
    <div class="drawer-side">
      <label for="my-drawer-3" class="drawer-overlay"></label>
      <ul class="menu font-semibold p-3 overflow-y-auto w-80 bg-base-100">
        <label for="my-drawera href=" #" class="flex justify-end">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
          </svg>
        </label>
        <!-- Sidebar content here -->
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>Trang chủ</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>Thể loại</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
            </svg>Ngẫu nhiên</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>Truyện phổ biến</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
            </svg>Truyện Hot</a></li>
        <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>Truyện mới cập nhật</a></li>
      </ul>

    </div>
  </div>
  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>

</body>

</html>