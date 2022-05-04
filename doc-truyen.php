<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php'; ?>
</head>

<body class="relative bg-base-200">

  <!-- ===HEADER=== -->

  <?php include 'includes/header.php'; ?>
  <!-- MAIN  -->
  <main class=" h-full py-16 w-full ">
    <!-- info  -->
    <div class="m-4 text-center">
      <a href="" class="font-semibold text-xl  text-secondary">
        Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen</a>
      <div class="flex-col">
        <div class="font-medium">Chapter 01</div>
        <div class="text-sm">Cập nhật: 12h32 23/04/2022</div>
      </div>
      <div class="my-4">
        <div class="btn-group scale-95 justify-center">
          <button class="btn max-h-8 btn-square btn-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <select class="select rounded-none focus:outline-none">
            <option selected>Chapter 1</option>
            <option>Chapter 2</option>
            <option>Chapter 3</option>
            <option>Chapter 4</option>
            <option>Chapter 5</option>
            <option>Chapter 6</option>
          </select>
          <button class="btn max-h-8 btn-square btn-accent">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- content -->
    <div class="mx-auto my-5 md:mx-10 lg:mx-24 xl:mx-48">
      <img src="assets/img/1.png" alt="">
      <img src="assets/img/2.png" alt="">
      <img src="assets/img/3.png" alt="">
      <img src="assets/img/4.png" alt="">
      <img src="assets/img/5.png" alt="">
      <img src="assets/img/6.png" alt="">
      <img src="assets/img/7.png" alt="">
      <img src="assets/img/8.png" alt="">
      <img src="assets/img/9.png" alt="">
      <img src="assets/img/10.png" alt="">
    </div>

    <div class="py-4">
      <div class="btn-group justify-center">
        <button class="btn max-h-8 btn-square btn-accent">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <select class="select rounded-none focus:outline-none">
          <option selected>Chapter 1</option>
          <option>Chapter 2</option>
          <option>Chapter 3</option>
          <option>Chapter 4</option>
          <option>Chapter 5</option>
          <option>Chapter 6</option>
        </select>
        <button class="btn max-h-8 btn-square btn-accent">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
    <!-- scrol to top -->
    <button id="scrollToTopBtn" class="fixed bottom-2 right-2 btn btn-circle">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
          clip-rule="evenodd" />
      </svg>
    </button>
  </main>
  <!-- ===FOOTER=== -->
  <?php include 'includes/footer.php'; ?>

  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>
  <script>
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");
    var rootElement = document.documentElement;

    function scrollToTop() {
      // Scroll to top logic
      rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
    scrollToTopBtn.addEventListener("click", scrollToTop);
  </script>
</body>

</html>