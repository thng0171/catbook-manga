<!-- ===Header=== -->
<div class="navbar h-16 bg-base-100 fixed z-20 border-b justify-between border-primary lg:px-10">
    <div class="navbar-start sm:w-fit">
        <!-- Sidebar toogle -->
        <label for="my-drawer-3" class="btn btn-square btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </label>
        <!-- logo -->
        <div class="flex items-center">
            <img class="w-10 h-10 rounded-full" src="" alt="">
            <a href=""
                class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-secondary px-3 font-bold text-2xl">
                Catbook</a>
        </div>
        <!-- menu nav -->
        <ul class="menu lg:ml-5  lg:space-x-2 menu-horizontal hidden text-lg font-semibold lg:flex p-0">
            <li class=""><a href="index.php" class="menu-item">Trang chủ</a></li>
            <li tabindex="0" class="relative group hover:text-primary">
                <a href="" class="menu-item">Thể loại</a>
                <div
                    class="hidden z-20 md:group-hover:grid grid-rows-5 grid-flow-col gap-x-6 absolute top-full bg-base-100 shadow-lg rounded-md p-4 ">
                    <div><a href="#" class="sub-menu">Action</a></div>
                    <div><a href="#" class="sub-menu">Comedy</a></div>
                    <div><a href="#" class="sub-menu">Taihen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Action</a></div>
                    <div><a href="#" class="sub-menu">Comedy</a></div>
                    <div><a href="#" class="sub-menu">Taihen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Action</a></div>
                    <div><a href="#" class="sub-menu">Comedy</a></div>
                    <div><a href="#" class="sub-menu">Taihen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                    <div><a href="#" class="sub-menu">Shounen</a></div>
                </div>
            </li>
            <li><a href="" class="menu-item">Mới cập nhật</a></li>
        </ul>
    </div>
    <div class="navbar-end sm:w-fit sm:gap-5 gap-2">
        <!-- Search -->
        <div class="hidden md:flex">
            <form action="" class="relative">
                <input type="text" class="input input-bordered focus:outline-primary py-0 h-10 w-full xl:w-72"
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
        <!-- Dark mode toggle  -->
        <label class="swap swap-rotate scale-90 sm:scale-100">
            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" />

            <!-- sun icon -->
            <svg data-toggle-theme="myDark" data-act-class="ACTIVECLASS" class="swap-on fill-current w-8 h-8 stroke-1"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
            </svg>

            <!-- moon icon -->
            <svg data-toggle-theme="emerald" data-act-class="ACTIVECLASS" class="swap-off fill-current w-8 h-8"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
            </svg>

        </label>
        <!-- login -->
        <div class="">
            <!-- Login button -->
            <label for="login-modal" class=" btn btn-primary py-0 font-bold sm:scale-100 scale-90">Đăng nhập</label>
            <input type="checkbox" id="login-modal" class="modal-toggle">
            <!-- login modal  -->
            <div class="modal">
                <div class="modal-box max-w-fit h-auto  flex p-8 relative">
                    <div class="">
                        <label for="login-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                        <h3 class="font-bold text-2xl py-5">Đăng nhập vào Catbook manga</h3>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Tên tài khoản</span>
                            </label>
                            <input type="text" placeholder="Nhập tên tài khoản"
                                class="input   focus:border-secondary input-bordered">
                        </div>
                        <div class="form-control mt-2">
                            <label class="label">
                                <span class="label-text">Mật khẩu</span>
                            </label>
                            <input type="password" placeholder="••••••••"
                                class="input  focus:border-secondary input-bordered">
                            <label class="label">
                                <a href="" class="label-text link-secondary link link-hover">Quên mật khẩu?</a>
                            </label>
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Đăng nhập</button>
                        </div>

                        <div class="form-control mt-5">
                            <button class="btn btn-primary btn-outline">Đăng ký</button>
                        </div>

                    </div>
                    <div class="ml-10 w-80 hidden md:block">
                        <img src="assets/img/makise-kurisu-png.png" class="object-cover object-center h-full w-full "
                            alt="">
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>