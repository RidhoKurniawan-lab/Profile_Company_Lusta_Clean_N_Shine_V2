<!-- Layout Container -->
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <aside class="flex-col hidden w-64 bg-white border-r border-gray-200 shadow-sm md:flex">
        <!-- Logo -->
        <div class="flex items-center justify-center h-16 px-4 border-b border-gray-200 bg-amber-50">
            <div class="flex items-center">
                <i class="mr-3 text-xl bi bi-pie-chart-fill text-amber-500"></i>
                <span class="text-xl font-bold text-gray-900">Admin<span class="text-amber-500">Pro</span></span>
            </div>
        </div>

        <!-- Menu Navigasi -->
        <nav class="flex-1 py-4 overflow-y-auto">
            <div class="px-4 space-y-2">
                <div class="px-3 mb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">Menu Utama</div>

                <a data-menu="" href="/admin" class="flex items-center px-3 py-2.5 text-sm rounded-lg bg-amber-50 text-amber-700 border border-amber-200">
                    <i class="mr-3 bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>

                <a data-menu="/product" href="/admin/product" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-box-seam"></i>
                    <span>Product</span>
                </a>

                <!-- <a data-menu="-" href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-cart3"></i>
                    <span>Produk</span>
                </a>

                <a data-menu="-" href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-bar-chart"></i>
                    <span>Analitik</span>
                </a>

                <a data-menu="-" href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-gear"></i>
                    <span>Pengaturan</span>
                </a> -->
            </div>

            <div class="px-4 mt-6 space-y-2">
                <div class="px-3 mb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">Lainnya</div>

                <!-- <a href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-file-text"></i>
                    <span>Laporan</span>
                </a>

                <a href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-question-circle"></i>
                    <span>Bantuan</span>
                </a> -->

                <a data-logout-button class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors cursor-pointer">
                    <i class="mr-3 bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </div>
        </nav>

        <!-- User Profile Mini -->
        <div class="p-4 border-t border-gray-200 bg-gray-50">
            <div class="flex items-center">
                <img data-user-image class="object-cover w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin+Admin&background=f59e0b&color=fff" alt="Admin User">
                <div class="ml-3">
                    <p data-user-name class="text-sm font-medium">Admin</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Header -->
        <header class="flex items-center justify-between px-4 py-2.5 bg-white border-b border-gray-200 shadow-sm">
            <div class="flex items-center">
                <!-- Mobile menu button -->
                <button data-open-mobile-menu class="p-2 text-gray-500 rounded-md cursor-pointer md:hidden hover:text-amber-600 hover:bg-gray-100 focus:outline-none">
                    <i class="text-lg bi bi-list"></i>
                </button>

                <!-- Search bar -->
                <!-- <div class="relative ml-4">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="text-gray-400 bi bi-search"></i>
                    </div>
                    <input type="text" class="w-full py-2 pl-10 pr-4 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent md:w-64 lg:w-96" placeholder="Cari...">
                </div> -->
            </div>

            <!-- Header right section -->
            <div class="flex items-center space-x-4">
                <!-- Notifications -->
                <div class="relative">
                    <button class="relative p-2 rounded-full hover:bg-gray-100">
                        <i class="text-lg text-gray-600 bi bi-bell"></i>
                        <span class="absolute w-2 h-2 bg-red-500 rounded-full top-1 right-1"></span>
                    </button>
                </div>

                <!-- Dark mode toggle -->
                <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-100">
                    <i class="text-lg bi bi-sun text-amber-500"></i>
                </button>

                <!-- User menu (mobile) -->
                <div class="md:hidden">
                    <button class="p-2 rounded-full hover:bg-gray-100">
                        <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin+User&background=f59e0b&color=fff" alt="Admin User">
                    </button>
                </div>
            </div>
        </header>