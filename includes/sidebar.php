<!-- Sidebar-->
<!-- sidebar toggle button -->
<button onclick="openSidebar()" class="btn btn-square btn-ghost lg:hidden nav-toggler">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
        </path>
    </svg>
</button>
<!-- sidebar content -->
<ul
    class="fixed inset-0 z-50 h-screen p-2 overflow-y-auto font-semibold duration-300 sidebar w-72 -left-80 menu bg-base-100">
    <!-- Sidebar content here -->
    <div class="flex items-center justify-between p-2">
        <div class="px-3 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">
            Catbook
        </div>
        <div class="flex items-center justify-between gap-4">
            <button onclick="openSidebar()">
                <i class="fa-solid fa-arrow-left fa-lg"></i>
            </button>
        </div>
    </div>
    <li><a href="index.php"><i class="fa-solid fa-house"></i>Trang chủ</a></li>
    <li onclick="openTagSidebar()"><div class=""><i class="fa-solid fa-list"></i>Thể loại</div></li>
    <div id="tag-sidebar"  class="fixed inset-0 z-50 grid h-screen grid-cols-2 p-4 overflow-y-scroll font-medium duration-300 gap-y-2 w-80 -left-80 menu bg-base-100">
        <div class="flex items-center justify-between col-span-2 ">
            <div class="text-2xl font-semibold">Thể loại</div>
            <button class="mr-3" onclick="openTagSidebar()">
                <i class="fa-solid fa-arrow-left fa-xl"></i>
            </button>
        </div>    
    </div>
    <li><a href="manga.php?id=random"><i class="fa-solid fa-shuffle"></i>Ngẫu nhiên</a></li>
    <li><a href="index.php#suggestion"><i class="fa-solid fa-thumbs-up"></i>Truyện đề cử</a></li>
    <li><a href="index.php#lastest"><i class="fa-solid fa-bolt"></i>Mới cập nhật</a></li>

</ul>
<div class="fixed inset-0 z-20 hidden transition duration-200 cursor-pointer overlay bg-gray-700/50 backdrop-blur"
    onclick="openSidebar()"></div>
<div class="fixed inset-0 z-20 hidden cursor-pointer overlay2"
    onclick="openTagSidebar()"></div>
<!-- end sidebar -->