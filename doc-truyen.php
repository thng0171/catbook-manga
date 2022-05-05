<!DOCTYPE html>
<html lang="en" data-theme="corporate">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catbook</title>
  <?php include 'includes/style.php'; ?>
</head>

<body class="relative w-full bg-base-200">

  <!-- ===HEADER=== -->

  <?php include 'includes/header.php'; ?>
  <!-- MAIN  -->
  <main class="h-full py-16 w-full mx-auto">
    <!-- info  -->
    <div class="m-4 text-center">
      <a href="truyen.php" class="font-semibold text-xl  text-secondary">
        Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen</a>
      <div class="flex-col">
        <div class="font-medium">Chapter 01</div>
        <div class="text-sm italic">Cập nhật: 12h32 23/04/2022</div>
      </div>
    </div>

    <!-- content -->
    <div class="items-center  my-5 md:mx-10 lg:mx-24 xl:mx-48">
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
    <div id="navbtn" class=" fixed bottom-0 inset-x-0 z-10 duration-300 w-full">
      <?php include 'includes/navButton.php'; ?>
    </div>

  </main>
  <!-- ===FOOTER=== -->
  <?php include 'includes/footer.php'; ?>

  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>
</body>

</html>