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
    <div id="info" class="px-2 py-4">
      
    </div>

    <!-- content -->
    <div id="page-list" class="items-center m-0 mx-auto">
      </div>
      <!-- comment -->
    <?php include 'includes/comment.php'; ?>
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