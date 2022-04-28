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
  <div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
    <div class="drawer-content flex flex-col">
      <!-- ===HEADER=== -->
      <header class="">
        <?php include 'includes/header.php'; ?>
      </header>
      <!-- CENTER  -->
      <main class="h-full my-16 w-full "> 
          <div class="py-2">
            <a href="" class=" font-semibold text-lg text-secondary">Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen</a>
            <div class="flex-col">
              <div class="font-medium">Chapter 01</div>
              <div class="text-sm">Cập nhật: 12h32 23/04/2022</div>
            </div> 
          </div>         
          <div class="">
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
          <div class="absolute bottom-0 z-30 w-full bg-base-100 backdrop-blur p-1" >
              <div class="btn-group justify-center">
                <button class="btn max-h-8 btn-square btn-accent">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
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
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
        
      </main>
      <!-- ===FOOTER=== -->
      <!-- <?php include 'includes/footer.php'; ?> -->
    </div>
    <!-- Sidebar -->
    <?php include 'includes/sidebar.php'; ?>
  </div>
  <!-- </Script> -->
  <?php include 'includes/script.php'; ?>

</body>

</html>