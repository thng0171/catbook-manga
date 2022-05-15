<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search result for </title>
    <?php include 'includes/style.php'; ?>
</head>
<body class="relative bg-base-200">
    <!-- HEADER  -->
    <?php include 'includes/header.php'; ?>
    <!-- MAIN  -->
    <main class="min-h-screen py-16 mx-5 lg:mx-16 md:mx-10">
        <div class="my-8">
            <div class="my-4 text-4xl font-semibold">Search</div>
            <form class="relative w-full" action="search.php">
                <input id="searchbar" type="search" class="w-full pl-10 text-base lg:w-2/3 input " name="s" id="searchbar">
                <button type="submit" class="absolute inset-y-0 flex items-center left-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
            </form>
        </div>
        <div id="search-info" class="my-4"></div>

        <div id="search-results" 
        class="grid w-full grid-cols-2 gap-x-6 gap-y-3 sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6"> 
        </div>
    </main>
    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
    <!-- SCRIPT -->
    <?php include 'includes/script.php'; ?>

</body>
</html>