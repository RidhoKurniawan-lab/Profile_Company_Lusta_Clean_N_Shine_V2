</div>

<!-- Mobile Sidebar (hidden by default) -->
<div data-mobile-sidebar class="fixed inset-0 z-50 flex md:hidden" style="display: none;">
    <!-- Overlay -->
    <div data-mobile-sidebar-overlay class="fixed inset-0 bg-black/30"></div>

    <!-- Sidebar -->
    <div class="relative z-10 flex flex-col flex-1 w-64 max-w-xs bg-white shadow-xl">
        <div class="flex items-center justify-between h-16 px-4 border-b border-gray-200 bg-amber-50">
            <div class="flex items-center">
                <i class="mr-3 text-xl bi bi-pie-chart-fill text-amber-500"></i>
                <span class="text-xl font-bold text-gray-900">Admin<span class="text-amber-500">Pro</span></span>
            </div>
            <button data-close-mobile-menu class="p-2 text-gray-500 rounded-md cursor-pointer hover:text-amber-600 hover:bg-gray-100">
                <i class="text-lg bi bi-x-lg"></i>
            </button>
        </div>

        <!-- Mobile menu content (same as desktop sidebar) -->
        <nav class="flex-1 py-4 overflow-y-auto">
            <div class="px-4 space-y-2">
                <div class="px-3 mb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">Menu Utama</div>

                <a data-menu="" href="/admin" class="flex items-center px-3 py-2.5 text-sm rounded-lg bg-amber-50 text-amber-700 border border-amber-200">
                    <i class="mr-3 bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>

                <a data-menu="product" href="/admin/product" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-box-seam"></i>
                    <span>Pengguna</span>
                </a>

                <!-- <a data-menu="" href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-cart3"></i>
                    <span>Produk</span>
                </a>

                <a data-menu="" href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
                    <i class="mr-3 bi bi-bar-chart"></i>
                    <span>Analitik</span>
                </a>

                <a data-menu="" href="#" class="flex items-center px-3 py-2.5 text-sm rounded-lg hover:bg-gray-100 transition-colors">
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

        <!-- Mobile user profile -->
        <div class="p-4 border-t border-gray-200 bg-gray-50">
            <div class="flex items-center">
                <img class="object-cover w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin+User&background=f59e0b&color=fff" alt="Admin User">
                <div class="ml-3">
                    <p class="text-sm font-medium">Admin User</p>
                    <p class="text-xs text-gray-500">Administrator</p>
                </div>
            </div>
        </div>
    </div>
</div>