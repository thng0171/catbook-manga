<!-- ===Header=== -->
<header id="navbar"
    class="fixed top-0 z-20 justify-between h-16 p-1 duration-300 border-b navbar bg-base-100 border-primary lg:px-14">
    <div class="navbar-start sm:w-fit">
        <!-- sidebar  -->
        <?php include 'includes/sidebar.php'; ?>
        <!-- logo -->
        <div class="flex items-center">
            <a href="index.php"
                class="bg-clip-text text-transparent bg-gradient-to-r  from-primary to-secondary md:px-2 font-extrabold text-[1.75rem] md:text-3xl">
                Catbook</a>
        </div>
        <!-- menu nav -->
        <ul id="menu" class="hidden p-0 text-lg font-bold menu xl:ml-5 lg:space-x-2 lg:menu-horizontal">
            <li class="">
                <a href="index.php" class="menu-item">Trang chủ</a>
            </li>
            <li tabindex="0" class="relative group hover:text-primary">
                <div class="menu-item">Thể loại</div>
                <div id="tag-list"
                    class="absolute z-20 items-start hidden w-[64rem] -left-64 grid-flow-row grid-cols-6 p-4 rounded-md shadow-lg top-full md:group-hover:grid bg-base-100 ">
                </div>
            </li>
            <li><a href="manga.php?id=random" class="menu-item">Ngẫu nhiên</a></li>
        </ul>
    </div>
    </div>
    <div class="flex items-center gap-2 sm:gap-4">
        <!-- Search -->
        <button onclick="toggleSearchbar()" class="md:hidden btn btn-ghost btn-square">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd" />
            </svg>
        </button>
        <div
            class="fixed inset-x-0 hidden p-4 duration-300 searchbar md:static bg-base-100 md:bg-transparent top-14 md:flex">
            <form action="search.php" class="relative">
                <input required type="text" name="s"
                    class="w-full h-10 py-0 input input-bordered bg-base-200 focus:outline-none xl:w-72"
                    placeholder="Tìm kiếm truyện...">
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- login -->
        <div class="z-0">
            <!-- Login button -->
            <label for="login-modal" class="font-bold scale-95 btn btn-primary">Đăng nhập</label>
            <input type="checkbox" id="login-modal" class="modal-toggle">
            <!-- login modal  -->
            <div class="overflow-y-visible modal">
                <div class="relative flex h-auto max-h-screen p-8 modal-box bg-base-200 max-w-fit">
                    <form action="" class="">
                        <label for="login-modal" class="absolute btn btn-sm btn-circle right-2 top-2">✕</label>
                        <h1 class="py-5 text-2xl font-bold">Đăng nhập vào Catbook manga</h1>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Tên tài khoản</span>
                            </label>
                            <input type="text" placeholder="Nhập tên tài khoản"
                                class="input focus:outline-secondary input-bordered" required>
                        </div>
                        <div class="mt-2 form-control">
                            <label class="label">
                                <span class="label-text">Mật khẩu</span>
                            </label>
                            <input type="password" placeholder="••••••••••"
                                class="input focus:outline-secondary input-bordered" required>
                            <label class="label">
                                <a href="#" class="label-text link-secondary link link-hover">Quên mật khẩu?</a>
                            </label>
                        </div>
                        <div class="mt-6 form-control">
                            <button class="btn btn-primary">Đăng nhập</button>
                        </div>

                        <div class="mt-5 form-control">
                            <a href="register.php" id="register-btn" for="register-modal"
                                class="btn btn-primary btn-outline">Đăng ký</a>
                        </div>

                    </form>
                    <div class="hidden ml-10 w-80 lg:block">
                        <img src="assets/img/makise-kurisu-png.png" class="object-cover object-center w-full h-full "
                            alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>
<!-- end header -->