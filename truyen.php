<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php'; ?>
</head>

<body class="bg-base-200 m-0">
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
    <div class="drawer-content flex flex-col">
      <!-- ===HEADER=== -->
      <?php include 'includes/header.php'; ?>
      <!-- ===MAIN=== -->
      <main class="relative my-16 w-full">
        <!-- banner -->
        <div class="block banner-container h-52 sm:h-64">
          <div class=" -z-10 h-full w-full bg-center bg-cover  bg-no-repeat bg-fixed" style="background-image: url('assets/img/kaguya.png') ;">
          </div>
        </div>
        <div class="m-5 mt-10 sm:mx-10 xl:mx-20 sm:grid auto-cols-min 	sm:justify-items-start sm:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-2 xl:grid-cols-5">
          <!-- manga cover  -->
          <div class="row-span-2 flex justify-center sm:justify-self-end">
            <div class="w-48 lg:w-52 rounded-md overflow-hidden">
              <img class="object-cover object-center aspect-truyen w-full h-full" src="assets/img/kaguya.png" alt="">
            </div>
          </div>
          <!-- stat -->
          <div class=" lg:w-52 my-2 row-start-3 self-start sm:justify-self-end flex justify-center gap-4">
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
          <!-- manga info  -->
          <div class="sm:h-52 sm:grid sm:justify-items-start col-span-2 xl:col-span-3 ">
            <!-- title  -->
            <div class="sm:p-0 text-left sm:text-left">
              <h2 class="text-2xl sm:text-4xl xl:text-5xl font-semibold sm:font-bold sm:text-white">
              Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen</h2>
              <h2 class="text-xl sm:text-xl xl:text-2xl sm:text-gray-100 ">
              Kaguya-sama: Love is War</h2>
            </div>
            <div class="self-center sm:text-white sm:text-lg">
              <!-- <span class="font-medium sm:hidden">Tác giả:</span>  -->
              <span>Aneko Yusagi, Aiya Kyu</span>
            </div>
          </div>

          <!-- buttons -->
          <div class="row-start-2 col-start-2 flex pt-3 gap-2">
            <a href="doc-truyen.php" class="btn btn-primary hover:shadow-lg grow hover:shadow-primary/50">
              Đọc truyện</a>
            <!-- Save btn  -->
            <button class="btn btn-outline btn-primary border-2  btn-square ">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
              </svg>
            </button>
            <!-- share and report  -->
            <div class="dropdown dropdown-end md:dropdown-right">
              <label tabindex="0" class="btn  btn-outline btn-primary border-2 btn-square "><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                </svg></label>
              <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                    </svg>Share</a></li>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd" />
                    </svg>Report</a></li>
              </ul>
            </div>

          </div>

          <!-- Tag  -->
          <section class="col-start-2 col-end-4 font-medium py-3">
            <a href="#" class="badge badge-accent">#Action</a>
            <a href="#" class="badge badge-accent">#Adventure</a>
            <a href="#" class="badge badge-accent">#Isekai</a>
            <a href="#" class="badge badge-accent">#Fantasy</a>
            <a href="#" class="badge badge-accent">#Adventure</a>
            <a href="#" class="badge badge-accent">#Isekai</a>
            <a href="#" class="badge badge-accent">#Fantasy</a>
          </section>
          <!-- Desc -->
          <section class="col-start-1 lg:col-start-1 md:px-4 col-end-5 justify-self-end">
            <h2 class="font-medium">Giới thiệu:</h2>
            <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate est debitis, eaque dolore explicabo et
              blanditiis nulla? Quaerat, tempore quo aspernatur accusamus a eaque sunt necessitatibus vero, odit quos in?
            </p>
          </section>
          <!-- Chapters List -->
          <section class="w-full lg:col-span-3 lg:col-start-1 bg-base-100 p-5 mt-5 rounded-lg shadow-lg  justify-self-center  lg:justify-self-start col-span-4">
            <div class="text-xl flex pb-4 border-b items-center text-secondary  font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg><span> Danh sách Chapter</span></div>
            <div class="divide-y">
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 4</span>
                <span class="text-sm "> 1 giờ trước</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 3</span>
                <span class="text-sm "> 1 ngày trước</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 2</span>
                <span class="text-sm "> 20/04/2022</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 1</span>
                <span class="text-sm "> 12//03/2022</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 4</span>
                <span class="text-sm "> 1 giờ trước</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 3</span>
                <span class="text-sm "> 1 ngày trước</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 2</span>
                <span class="text-sm "> 20/04/2022</span>
              </a>
              <a href="#" class="flex justify-between hover:bg-base-200  p-2">
                <span class="font-medium">Chapter 1</span>
                <span class="text-sm "> 12//03/2022</span>
              </a>
            </div>
          </section>
          <!-- comment -->
          <section class="w-full lg:col-span-3 lg:col-start-1 bg-base-100 p-5 mt-5 rounded-lg shadow-lg min-h-[13rem] col-span-4">
            <div class="relative inline-block pr-5">
              <span class="absolute top-0 right-0 rounded-full bg-base-300 text-xs py-0.5 px-1.5">12</span>
              <h2 class="text-xl font-semibold py-3">Bình luận</h2>
            </div>
            <div class="relative">
              <textarea name="" id="" class="textarea resize-none textarea-bordered w-full" placeholder="Nhập bình luận"></textarea>
              <button class="absolute top-full right-0 btn btn-secondary max-h-8"> Send</button>
            </div>
          </section>
          <section class="w-full mt-5 mx-5 xl:col-span-2 xl:row-span-2 xl:row-start-5 xl:col-start-4 bg-base-100 rounded-lg shadow-lg">
            
          </section>
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