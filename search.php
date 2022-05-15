<!DOCTYPE html>
<html lang="en" data-theme="corporate">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search result for</title>
    <?php include 'includes/style.php';?>
</head>
<body class="bg-base-200">
    <!-- HEADER  -->
    <?php include 'includes/header.php'; ?>
    <!-- MAIN  -->
    <main class="flex items-center justify-center pb-96 pt-20 w-full ">
   <div class=" flex items-center gap-20 sm:gap-4">
       <form method="GET"  action="" class="relative">
           <div>
           <input type="text" placeholder="Search" class="input input-bordered w-96 input-primary" />
           <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3">
           <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
       </form>
   </div>
   <section class="">
      <!-- container -->
      <div id="moicapnhat" class="grid w-full grid-cols-2 gap-5 sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6"> 
      </div>
    </section>
     <!-- chuyển trang  --> 
    </main>
    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
    <!-- SCRIPT -->
    <?php include 'includes/script.php'; ?>

</body>
</html>