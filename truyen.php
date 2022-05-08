<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php'; ?>
</head>

<body class="relative z-0 bg-base-200">
  <!-- ===HEADER=== -->
  <?php include 'includes/header.php'; ?>
  <!-- ===MAIN=== -->
  <main class="w-full py-16 ">
    <!-- banner -->
    <div class="block banner-container h-72 sm:h-80">
      <div class="w-full h-full bg-fixed bg-center bg-no-repeat bg-cover -z-10" style="background-image: url('assets/img/manga-cover.png');">
      </div>
    </div>
    <!-- content -->
    <section class="flex-col m-5 mt-10 space-y-4 sm:space-y-0 sm:grid sm:mx-10 xl:mx-20 sm:justify-items-start sm:grid-cols-3 lg:grid-cols-5 sm:gap-x-4 sm:gap-y-3">
      <!-- manga cover  -->
      <div class="flex justify-center sm:row-span-2 justify-self-center ">
        <div class="w-auto overflow-hidden rounded-md">
          <img class="object-cover object-center w-full h-full aspect-truyen" src="assets/img/manga-cover.png" alt="">
        </div>
      </div>
      <!-- stat -->
      <div class="flex self-start justify-center gap-4 my-2 font-medium sm:row-start-3 lg:w-52 sm:justify-self-center">
        <div class="inline-flex items-center text-accent">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
          </svg>4.9
        </div>
        <div class="inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>313k
        </div>
        <div class="inline-flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
          </svg>249k
        </div>
      </div>
      <!-- manga info  -->
      <div class=" sm:h-52 sm:grid sm:justify-items-start sm:col-span-2 lg:col-span-3">
        <!-- title  -->
        <div class="text-left sm:p-0 sm:text-left">
          <h1 class="text-2xl font-bold sm:text-4xl xl:text-5xl sm:text-white">
            Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen</h1>
          <h2 class="text-xl sm:text-xl xl:text-2xl sm:text-gray-100 ">
            Kaguya-sama: Love is War</h1>
        </div>
        <div class="self-center sm:text-white sm:text-lg">
          <!-- <span class="font-medium sm:hidden">Tác giả:</span>  -->
          <span>Aneko Yusagi, Aiya Kyu</span>
        </div>
      </div>
      <!-- buttons -->
      <div class="flex items-end gap-2 sm:col-start-2 sm:row-start-2 sm:col-span-2">
        <a href="doc-truyen.php" class="btn btn-primary grow">
          Đọc truyện</a>
        <!-- Save btn  -->
        <button class="border-2 btn btn-outline btn-primary btn-square ">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
          </svg>
        </button>
        <!-- share and report  -->
        <div class="dropdown dropdown-end md:dropdown-right">
          <label tabindex="0" class="border-2 btn btn-outline btn-primary btn-square "><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
            </svg></label>
          <ul tabindex="0" class="p-2 shadow dropdown-content menu bg-base-100 rounded-box w-52">
            <li><a><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                </svg>Share</a></li>
            <li><a><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd" />
                </svg>Report</a></li>
          </ul>
        </div>

      </div>
      <!-- Tag  -->
      <div class="my-2 font-semibold sm:col-span-2 sm:col-start-2">
        <a href="#" class="badge">Action</a>
        <a href="#" class="badge">Adventure</a>
        <a href="#" class="badge">Isekai</a>
        <a href="#" class="badge">Fantasy</a>
        <a href="#" class="badge">Adventure</a>
        <a href="#" class="badge">Isekai</a>
        <a href="#" class="badge">Fantasy</a>
        <a href="#" class="badge">Isekai</a>
        <a href="#" class="badge">Fantasy</a>
      </div>
      <!-- Desc -->
      <div class="p-2 sm:row-span-2 sm:col-start-1 sm:col-end-4 lg:col-end-3 justify-self-center">
        <h1 class="flex items-center gap-1 text-lg font-semibold">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>Giới thiệu
        </h1>
        <hr class="my-2">
        <div class="whitespace-pre-line element" data-config='{ "type": "text", "limit": 120, "more": "→ show more", "less": "← less"}'>All’s fair when love is war!
          Two geniuses. Two brains. Two hearts. One battle. Who will confess their love first…?!
          Kaguya Shinomiya and Miyuki Shirogane are two geniuses who stand atop their prestigious academy’s student council, making them the elite among elite. But it’s lonely at the top and each has fallen for the other.
          There’s just one huge problem standing in the way of lovey-dovey bliss—they’re both too prideful to be the first to confess their romantic feelings and thus become the “loser” in the competition of love! And so begins their daily schemes to force the other to confess first!
        </div>
      </div>
      <!-- Chapter List -->
      <div class="w-full p-4 rounded-lg shadow-lg sm:row-span-2 sm:col-span-full lg:col-start-3 lg:row-start-4 bg-base-100 justify-self-center lg:justify-self-start">
        <div class="flex items-center gap-1 text-xl font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>Danh sách Chapter</div>
        <hr class="w-full my-2">
        <div class="divide-y">
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 4</span>
            <span class="text-sm "> 1 giờ trước</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 3</span>
            <span class="text-sm "> 1 ngày trước</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 2</span>
            <span class="text-sm "> 20/04/2022</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 1</span>
            <span class="text-sm "> 12//03/2022</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 4</span>
            <span class="text-sm "> 1 giờ trước</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 3</span>
            <span class="text-sm "> 1 ngày trước</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 2</span>
            <span class="text-sm "> 20/04/2022</span>
          </a>
          <a href="#" class="flex justify-between p-2 hover:bg-base-200">
            <span class="font-medium">Chapter 1</span>
            <span class="text-sm "> 12//03/2022</span>
          </a>
        </div>
      </div>
      <!-- comment -->
      <div class="w-full col-span-3 lg:col-start-3">
        <?php include 'includes/comment.php'; ?>
      </div>
    </section>

  </main>

  <!-- ===FOOTER=== -->
  <?php include 'includes/footer.php'; ?>

  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>
  <script>
    // create a condition that targets viewports at least 768px wide
    const mediaQuery = window.matchMedia('(max-width: 768px)')

    function handleTabletChange(e) {
      // Check if the media query is true
      if (e.matches) {
        // Then log the following message to the console
        console.log('Media Query Matched!')
        document.addEventListener('DOMContentLoaded', function() {
          // text, table, list, elelemnts
          new ShowMore('.element', {
            onMoreLess: (type, object) => {
              // type = less/more and full object
              console.log(type, object);
            },
          });
        });
      }
    }

    // Register event listener
    mediaQuery.addListener(handleTabletChange)

    // Initial check
    handleTabletChange(mediaQuery)
  </script>
</body>

</html>