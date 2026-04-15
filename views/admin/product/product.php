<main class="flex-1 p-4 overflow-y-auto md:p-6 bg-gray-50">
    <div class="flex flex-col justify-between mb-6 md:flex-row md:items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Product</h1>
            <p class="mt-1 text-gray-600">This product is ready to help you manage your needs more easily and efficiently.</p>
        </div>
        <div class="flex space-x-3">
            <div class="flex mt-4 md:mt-0">
                <a href="/admin/product/export_pdf" target="_blank" class="flex items-center px-4 py-2 font-medium text-gray-700 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50">
                    <i class="mr-2 text-red-700 bi bi-file-earmark-pdf-fill"></i>
                    <span>Export PDF</span>
                </a>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="/admin/add_product" class="flex items-center px-4 py-2 font-medium text-white rounded-lg shadow-sm bg-amber-500 hover:bg-amber-600">
                    <i class="mr-2 bi bi-plus-circle"></i>
                    <span>Add Product</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Filter and Search Section -->
    <div class="mb-6 bg-white border border-gray-200 shadow-sm rounded-xl">
        <div class="p-4 border-b border-gray-200">
            <div class="flex flex-col justify-between space-y-4 md:flex-row md:items-center md:space-y-0">
                <!-- Search -->
                <div class="relative w-full md:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="text-gray-400 bi bi-search"></i>
                    </div>
                    <input data-filter-search type="text"
                        class="w-full py-2 pl-10 pr-4 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent"
                        placeholder="Search product...">
                </div>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-2">
                    <div class="relative">
                        <input data-filter="all" type="radio" id="status-all" name="filter" value="all" class="hidden peer" checked>
                        <label for="status-all" class="flex items-center justify-center p-2 transition-colors border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-amber-500 peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <span class="text-sm font-medium">All</span>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input data-filter="active" type="radio" id="status-active" name="filter" value="active" class="hidden peer">
                        <label for="status-active" class="flex items-center justify-center p-2 transition-colors border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-amber-500 peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <span class="text-sm font-medium">Active</span>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input data-filter="deactive" type="radio" id="status-deactive" name="filter" value="deactive" class="hidden peer">
                        <label for="status-deactive" class="flex items-center justify-center p-2 transition-colors border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-amber-500 peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <span class="text-sm font-medium">DeActive</span>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input data-filter="deactive" type="radio" id="status-button" name="filter" value="custom" data-filter-button class="hidden peer">
                        <label for="status-button" class="flex items-center justify-center p-2 transition-colors border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-amber-500 peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <span class="text-sm font-medium">Custom</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advanced Filters -->
        <div data-filter-custom class="hidden p-4 border-b border-gray-200 bg-gray-50">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
                <!-- Category Filter -->
                <div>
                    <label class="block mb-1 text-xs font-medium text-gray-700">Category</label>
                    <select data-dropdown-category data-filter-category class="w-full px-3 py-2 text-sm bg-white border border-gray-300 rounded-lg cursor-pointer focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                        <option value="" >Semua Kategori</option>
                    </select>
                </div>

                <!-- Price Range -->
                <div>
                    <label class="block mb-1 text-xs font-medium text-gray-700">Range Price</label>
                    <select data-filter-price class="w-full px-3 py-2 text-sm bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                        <option value="">All Price</option>
                        <option value="0-100000">Rp 0 - Rp 100.000</option>
                        <option value="100000-500000">Rp 100.000 - Rp 500.000</option>
                        <option value="500000-1000000">Rp 500.000 - Rp 1.000.000</option>
                        <option value="1000000-">> Rp 1.000.000</option>
                    </select>
                </div>

                <!-- Stock Filter -->
                <div>
                    <label class="block mb-1 text-xs font-medium text-gray-700">Stock</label>
                    <select data-filter-stock class="w-full px-3 py-2 text-sm bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                        <option value="">All Stock</option>
                        <option value="0-10">Stok Rendah (< 10)</option>
                        <option value="10-50">Stok Menengah (10-50)</option>
                        <option value="50-">Stok Tinggi (> 50)</option>
                    </select>
                </div>

                <!-- Sort By -->
                <div>
                    <label class="block mb-1 text-xs font-medium text-gray-700">Sort</label>
                    <select data-filter-sort class="w-full px-3 py-2 text-sm bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                        <option value="" selected>Latest</option>
                        <option value="oldest">Oldest</option>
                        <option value="name_asc">Name A-Z</option>
                        <option value="name_desc">Name Z-A</option>
                        <option value="price_desc">Highest Price</option>
                        <option value="price_asc">Lowest Price</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Table -->
    <div class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl">
        <!-- Table Header -->
        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">Daftar Produk</h2>
                    <p data-pagination-header-info class="mt-1 text-sm text-gray-600">Menampilkan 12 dari 124 produk</p>
                </div>
                <div class="flex items-center text-sm text-gray-600">
                    <span class="mr-2">Lines per page:</span>
                    <select data-pagination-limit class="px-2 py-1 text-sm bg-white border border-gray-300 rounded-lg">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table Content -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 bg-gray-50">
                        <th class="w-12 px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">NO</th>
                        <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">PRODUK</th>
                        <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">HARGA</th>
                        <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">KATEGORI</th>
                        <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">STOK</th>
                        <th class="px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">STATUS</th>
                        <th class="w-32 px-6 py-3 text-xs font-semibold tracking-wider text-left text-gray-700 uppercase">AKSI</th>
                    </tr>
                </thead>
                <tbody data-table-product class="divide-y divide-gray-200">
                    <!-- JS Content Handle -->
                </tbody>
            </table>
        </div>

        <!-- Table Footer / Pagination -->
        <div data-pagination class="px-6 py-4 border-t border-gray-200">
            <div class="flex flex-col justify-between md:flex-row md:items-center">
                <div data-pagination-footer-info class="mb-4 text-sm text-gray-600 md:mb-0">
                    Menampilkan 0-0 dari 0 produk
                </div>
                <div data-pagination-button class="flex items-center space-x-2">
                    <button data-page="prev" class="px-3 py-1.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button data-page="next" class="px-3 py-1.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 gap-4 mt-6 md:grid-cols-4">
        <div class="p-4 bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="flex items-center">
                <div class="p-2 mr-3 rounded-lg bg-emerald-50">
                    <i class="bi bi-check-circle text-emerald-500"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Product Active</p>
                    <p data-summary="active" class="text-lg font-bold text-gray-900">0</p>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="flex items-center">
                <div class="p-2 mr-3 rounded-lg bg-red-50">
                    <i class="text-red-500 bi bi-x-circle"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Product DeActive</p>
                    <p data-summary="deactive" class="text-lg font-bold text-gray-900">0</p>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="flex items-center">
                <div class="p-2 mr-3 rounded-lg bg-yellow-50">
                    <i class="text-yellow-500 bi bi-exclamation-circle"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Low Stock</p>
                    <p data-summary="lowstock" class="text-lg font-bold text-gray-9 00">0</p>
                </div>
            </div>
        </div>

        <div class="p-4 bg-white border border-gray-200 shadow-sm rounded-xl">
            <div class="flex items-center">
                <div class="p-2 mr-3 rounded-lg bg-red-50">
                    <i class="text-red-500 bi bi-x-circle"></i>
                </div>
                <div>
                    <p class="text-sm text-gray-600">Product Out of Stock</p>
                    <p data-summary="outofstock" class="text-lg font-bold text-gray-900">0</p>
                </div>
            </div>
        </div>
    </div>
</main>