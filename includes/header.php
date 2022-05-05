<!-- ===Header=== -->
<header id="navbar"
    class="navbar min-h-12 h-14 md:h-16 p-1 bg-base-100 top-0 fixed z-20 border-b justify-between border-primary lg:px-14  duration-300">
    <div class="navbar-start sm:w-fit">
        <!-- Sidebar-->
            <button onclick="openSidebar()" class="btn btn-square btn-ghost lg:hidden nav-toggler">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <ul class="sidebar w-72 -left-80 duration-300 fixed inset-0 z-50 menu font-semibold p-2 h-screen overflow-y-auto bg-base-100">
                <!-- Sidebar content here -->
                <div class="flex p-2 items-center justify-between">
                    <h2
                        class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary px-3 font-bold text-2xl">
                        Catbook
                    </h2>
                    <div class="flex items-center gap-4 justify-between">
                        <label class="md:hidden swap swap-rotate">
                            <!-- this hidden checkbox controls the state -->
                            <input type="checkbox" />
                            <!-- sun icon -->
                            <svg data-toggle-theme="myDark" data-act-class="ACTIVECLASS"
                                class="swap-on fill-current w-7 h-7 stroke-1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                            </svg>
                            <!-- moon icon -->
                            <svg data-toggle-theme="emerald" data-act-class="ACTIVECLASS"
                                class="swap-off fill-current w-7 h-7" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                            </svg>
                        </label>
                        <button onclick="openSidebar()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                        </button>
                    </div>
                </div>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>Trang chủ</a></li>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>Thể loại</a></li>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                clip-rule="evenodd" />
                        </svg>Ngẫu nhiên</a></li>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                        </svg>Truyện phổ biến</a></li>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd" />
                        </svg>Truyện Hot</a></li>
                <li><a><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>Truyện mới cập nhật</a></li>

            </ul>
            <div class="overlay fixed inset-0 bg-base-300/50  transition z-20 cursor-pointer hidden" onclick="openSidebar()"></div>
        <!-- end sidebar -->

        <!-- logo -->
        <div class="flex items-center">
            <a href="index.php"
                class="bg-clip-text text-transparent bg-gradient-to-r  from-primary to-secondary md:px-3 font-bold text-[1.75rem] md:text-3xl">
                Catbook</a>
        </div>
        <!-- menu nav -->
        <ul id="menu" class="menu hidden xl:ml-5 lg:space-x-2 lg:menu-horizontal font-medium text-lg p-0">
            <li class="">
                <a href="index.php" class="menu-item">
                    Trang chủ </a>
            </li>
            <li tabindex="0" class="relative group hover:text-primary">
                <a href="" class="menu-item">
                    Thể loại</a>
                <div
                    class="hidden z-20 md:group-hover:grid grid-rows-5 grid-flow-col gap-x-6 absolute top-full bg-base-100 shadow-lg rounded-md p-4 ">
                    <div><a href="#" class="sub-menu">Action</a></div>
                    <div><a href="#" class="sub-menu">Adventure</a></div>
                    <div><a href="#" class="sub-menu">Drama</a></div>
                    <div><a href="#" class="sub-menu">Fantasy</a></div>
                    <div><a href="#" class="sub-menu">Harem</a></div>
                    <div><a href="#" class="sub-menu">Horror</a></div>
                    <div><a href="#" class="sub-menu">Manga</a></div>
                    <div><a href="#" class="sub-menu">Manhwa</a></div>
                    <div><a href="#" class="sub-menu">Mature</a></div>
                    <div><a href="#" class="sub-menu">Mystery</a></div>
                    <div><a href="#" class="sub-menu">One shot</a></div>
                    <div><a href="#" class="sub-menu">Psychological</a></div>
                    <div><a href="#" class="sub-menu">Romance</a></div>
                    <div><a href="#" class="sub-menu">School Life</a></div>
                    <div><a href="#" class="sub-menu">Sci-fi</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shoujo</a></div>
                    <div><a href="#" class="sub-menu">Sport</a></div>
                </div>
            </li>
            <li><a href="" class="menu-item">Mới cập nhật</a></li>
            <li><a href="" class="menu-item">Ngẫu nhiên</a></li>
        </ul>
    </div>
    </div>
    <div class="sm:gap-5 gap-2">
        <!-- Search -->
        <div class="hidden md:flex">
            <form action="" class="relative">
                <input type="search" class="input input-bordered focus:outline-primary py-0 h-10 w-full xl:w-72"
                    placeholder="Tìm kiếm truyện...">
                <button type="submit" class="flex absolute right-0 inset-y-0 items-center pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
        <!-- Mobile search modal -->
        <div class="">
            <!-- search button  -->
            <label for="search-modal" class="md:hidden btn btn-ghost btn-square">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
            </label>
            <input type="checkbox" name="" id="search-modal" class="modal-toggle">
            <div class="modal h-full top-14">
                <div class="modal-box rounded-none p-5 max-h-full w-full h-full top-full bg-base-200">
                    <h1 class=" text-lg font-medium">Tìm kiếm</h1>
                    <form action="" class="relative py-2">
                        <input type="text"
                            class="input input-bordered border-secondary focus:outline-none  h-11 w-full "
                            placeholder="Tìm kiếm truyện...">
                        <button type="submit" class="flex absolute right-0 inset-y-0 pr-3 items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Dark mode toggle  -->
        <label class="hidden md:swap swap-rotate scale-90 sm:scale-100">
            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" />

            <!-- sun icon -->
            <svg data-toggle-theme="myDark" data-act-class="ACTIVECLASS" class="swap-on fill-current w-7 h-7 "
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
            </svg>

            <!-- moon icon -->
            <svg data-toggle-theme="emerald" data-act-class="ACTIVECLASS" class="swap-off fill-current w-7 h-7"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
            </svg>

        </label>
        <!-- login -->
        <div class="z-0">
            <!-- Login button -->
            <label for="login-modal" class="btn btn-primary font-bold md:scale-100 scale-90">Đăng nhập</label>
            <input type="checkbox" id="login-modal" class="modal-toggle">
            <!-- login modal  -->
            <div class="modal overflow-y-visible">
                <div class="modal-box bg-base-200 max-w-fit h-auto max-h-screen flex p-8 relative">
                    <form action="" class="">
                        <label for="login-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                        <h3 class="font-bold text-2xl py-5">Đăng nhập vào Catbook manga</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Tên tài khoản</span>
                            </label>
                            <input type="text" placeholder="Nhập tên tài khoản"
                                class="input focus:outline-secondary input-bordered">
                        </div>
                        <div class="form-control mt-2">
                            <label class="label">
                                <span class="label-text">Mật khẩu</span>
                            </label>
                            <input type="password" placeholder="••••••••"
                                class="input  focus:outline-secondary input-bordered">
                            <label class="label">
                                <a href="#" class="label-text link-secondary link link-hover">Quên mật khẩu?</a>
                            </label>
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Đăng nhập</button>
                        </div>

                        <div class="form-control mt-5">
                            <a href="register.php" id="register-btn" for="register-modal"
                                class="btn btn-primary btn-outline">Đăng ký</a>
                        </div>

                    </form>
                    <div class="ml-10 w-80 hidden lg:block">
                        <img src="assets/img/makise-kurisu-png.png" class="object-cover object-center h-full w-full "
                            alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- end header -->