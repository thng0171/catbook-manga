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
  <main class="w-full h-full py-16 mx-auto md:w-5/6 lg:w-4/6 xl:w-1/2">
    <!-- info  -->
    <div class="px-2 py-4">
      <a href="truyen.php" class="text-xl font-semibold md:text-2xl text-secondary">
        Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen</a>
      <div class="flex-col">
        <div class="font-medium md:text-lg">Chapter 01</div>
        <div class="text-sm italic">Cập nhật: 12h32 23/04/2022</div>
      </div>
    </div>

    <!-- content -->
    <div class="items-center m-0 mx-auto">
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
      <!-- navigation buttons -->
      <!-- comment -->
      <?php include 'includes/comment.php'; ?>
    </div>
    <div id="navbtn" class="fixed inset-x-0 bottom-0 z-10 duration-300">
      <?php include 'includes/chapterNav.php'; ?>
    </div>

  </main>
  <!-- ===FOOTER=== -->
  <?php include 'includes/footer.php'; ?>

  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>
  <script>
    //Hide navbar/navbutton on scroll
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
        document.getElementById("navbtn").style.bottom = "0";

      } else {
        document.getElementById("navbar").style.top = "-64px";
        document.getElementById("navbtn").style.bottom = "-64px";
      }
      prevScrollpos = currentScrollPos;
    }


    // scroll to top button
      var scrollToTopBtn = document.getElementById("scrollToTopBtn");
      var rootElement = document.documentElement;

      function scrollToTop() {
        // Scroll to top logic
        rootElement.scrollTo({
          top: 0,
          behavior: "smooth",
        });
        console.log('scroll to top');
      }
      scrollToTopBtn.addEventListener("click", scrollToTop);
  </script>
</body>

</html>