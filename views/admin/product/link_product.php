<main data-link-page class="flex-1 p-4 overflow-y-auto md:p-6 bg-gray-50">
    <!-- Page title and actions -->
    <div class="flex flex-col justify-between mb-6 md:flex-row md:items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Add Product from Link</h1>
            <p class="mt-1 text-gray-600">Upload product links from the marketplace to add to the catalog.</p>
        </div>
        <div class="flex mt-4 space-x-3 md:mt-0">
            <a href="/admin/product" class="flex items-center px-4 py-2 font-medium text-gray-700 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50">
                <i class="mr-2 bi bi-arrow-left"></i>
                <span>Back</span>
            </a href="/admin/product">
        </div>
    </div>

    <!-- Form Section -->
    <div class="max-w-6xl mx-auto">
        <div class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl">
            <!-- Form Header -->
            <div class="px-6 py-4 border-b border-gray-200 bg-amber-50">
                <div class="flex flex-col justify-between md:flex-row md:items-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Upload Link Product</h2>
                        <p class="mt-1 text-sm text-gray-600">Enter product links from your favorite marketplace</p>
                    </div>
                    <div class="mt-2 md:mt-0">
                        <button data-add-link class="flex items-center px-4 py-2 text-sm font-medium text-white rounded-lg cursor-pointer bg-emerald-500 hover:bg-emerald-600">
                            <i class="mr-2 bi bi-plus-lg"></i>
                            <span>Add new link </span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Form Content -->
            <form data-form-link class="p-6">
                <!-- Instructions -->
                <div class="p-5 mb-8 border border-blue-100 bg-blue-50 rounded-xl">
                    <div class="flex items-start">
                        <div class="p-2 bg-blue-100 rounded-lg shrink-0">
                            <i class="text-lg text-blue-600 bi bi-info-circle"></i>
                        </div>
                        <div class="ml-4">
                            <h3 class="mb-2 text-sm font-semibold text-blue-900">How to Upload Product Links</h3>
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <p class="mb-1 text-sm font-medium text-blue-800">Supported Marketplaces:</p>
                                    <ul class="space-y-1 text-xs text-blue-700">
                                        <li class="flex items-center">
                                            <i class="mr-2 bi bi-check-circle text-emerald-500"></i>
                                            Shopee
                                        </li>
                                        <li class="flex items-center">
                                            <i class="mr-2 bi bi-check-circle text-emerald-500"></i>
                                            Tokopedia
                                        </li>
                                        <li class="flex items-center">
                                            <i class="mr-2 bi bi-check-circle text-emerald-500"></i>
                                            Bukalapak
                                        </li>
                                        <li class="flex items-center">
                                            <i class="mr-2 bi bi-check-circle text-emerald-500"></i>
                                            Lazada
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <p class="mb-1 text-sm font-medium text-blue-800">Tips:</p>
                                    <ul class="space-y-1 text-xs text-blue-700">
                                        <li class="flex items-start">
                                            <i class="bi bi-dot mr-1 mt-0.5 text-blue-600"></i>
                                            Copy the direct link from the product page
                                        </li>
                                        <li class="flex items-start">
                                            <i class="bi bi-dot mr-1 mt-0.5 text-blue-600"></i>
                                            You can add or remove links as needed.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Links Container -->
                <div id="links-container" class="space-y-4">
                    <!-- Link items will be added here dynamically -->
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-1 gap-4 mt-8 md:grid-cols-3">
                    <div class="p-4 border border-gray-200 bg-gray-50 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Total Link</p>
                                <p id="total-links" class="mt-1 text-2xl font-bold text-gray-900">0</p>
                            </div>
                            <div class="p-2 rounded-lg bg-amber-50">
                                <i class="text-xl bi bi-link-45deg text-amber-500"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-xs text-gray-500">Link to be processed</span>
                        </div>
                    </div>

                    <div class="p-4 border border-gray-200 bg-gray-50 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Link Valid</p>
                                <p id="valid-links" class="mt-1 text-2xl font-bold text-gray-900">0</p>
                            </div>
                            <div class="p-2 rounded-lg bg-emerald-50">
                                <i class="text-xl bi bi-check-circle text-emerald-500"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-xs text-gray-500">The link format is correct</span>
                        </div>
                    </div>

                    <div class="p-4 border border-gray-200 bg-gray-50 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Success Process</p>
                                <p id="success-links" class="mt-1 text-2xl font-bold text-gray-900">0</p>
                            </div>
                            <div class="p-2 rounded-lg bg-blue-50">
                                <i class="text-xl text-blue-500 bi bi-cloud-check"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-xs text-gray-500">Successfully uploaded previously</span>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col justify-end pt-6 mt-8 space-y-3 border-t border-gray-200 sm:flex-row sm:space-y-0 sm:space-x-3">
                    <button type="submit" id="process-all-btn" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors">
                        <i class="mr-2 bi bi-cloud-arrow-up"></i>Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<template id="link-item-template">
    <div class="p-5 transition-colors border border-gray-200 link-item bg-gray-50 rounded-xl hover:border-gray-300">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <span class="flex items-center justify-center w-6 h-6 mr-3 text-xs font-medium rounded-full link-number bg-amber-100 text-amber-800">1</span>
                <h3 class="text-sm font-semibold text-gray-900">Link Produk</h3>
            </div>
            <button type="button" class="remove-link-btn p-1.5 text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors" title="Hapus link">
                <i class="text-sm bi bi-x-lg"></i>
            </button>
        </div>

        <input data-tmp-id type="hidden" value="">

        <div class="space-y-4">
            <!-- Link URL -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">
                    Link Product <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="text-gray-400 bi bi-link-45deg"></i>
                    </div>
                    <input data-tmp-url type="url" 
                        class="w-full py-3 pl-10 pr-4 text-sm bg-white border border-gray-300 rounded-lg product-link focus:ring-2 focus:ring-amber-400 focus:border-transparent"
                        placeholder="https://shopee.co.id/product/..."
                        pattern="https://.*"
                        required>
                </div>
                <p class="mt-2 text-xs text-gray-500">Copy the full link from the marketplace</p>
            </div>

            <!-- Marketplace Selector -->
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-700">Source Marketplace</label>
                <div class="flex flex-wrap gap-2">
                    <div class="relative">
                        <input data-tmp-mrkt="shopee" type="radio" id="status-shopee" value="shopee" class="hidden peer">
                        <label for="status-shopee" class="marketplace-btn px-3 py-1.5 border border-gray-300 hover:border-orange-500 hover:bg-orange-50 rounded-lg text-sm font-medium text-gray-700 flex items-center transition-colors peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <div class="w-3 h-3 mr-2 bg-orange-500 rounded-full"></div>
                                <span class="text-sm font-medium">Shopee</span>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input data-tmp-mrkt="tokopedia" type="radio" id="status-tokopedia" value="tokopedia" class="hidden peer">
                        <label for="status-tokopedia" class="marketplace-btn px-3 py-1.5 border border-gray-300 hover:border-green-500 hover:bg-green-50 rounded-lg text-sm font-medium text-gray-700 flex items-center transition-colors peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <div class="w-3 h-3 mr-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-medium">Tokopedia</span>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input data-tmp-mrkt="bukalapak" type="radio" id="status-bukalapak" value="bukalapak" class="hidden peer">
                        <label for="status-bukalapak" class="marketplace-btn px-3 py-1.5 border border-gray-300 hover:border-purple-500 hover:bg-purple-50 rounded-lg text-sm font-medium text-gray-700 flex items-center transition-colors peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <div class="w-3 h-3 mr-2 bg-purple-500 rounded-full"></div>
                                <span class="text-sm font-medium">Bukalapak</span>
                            </div>
                        </label>
                    </div>
                    <div class="relative">
                        <input data-tmp-mrkt="lazada" type="radio" id="status-button" value="lazada" class="hidden peer">
                        <label for="status-button" class="marketplace-btn px-3 py-1.5 border border-gray-300 hover:border-red-500 hover:bg-red-50 rounded-lg text-sm font-medium text-gray-700 flex items-center transition-colors peer-checked:bg-amber-50">
                            <div class="flex items-center">
                                <div class="w-3 h-3 mr-2 bg-red-500 rounded-full"></div>
                                <span class="text-sm font-medium">Lazada</span>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Indicator -->
        <div class="flex items-center justify-between pt-4 mt-4 border-t border-gray-200">
            <div class="flex items-center">
                <div class="w-2 h-2 mr-2 bg-gray-300 rounded-full status-indicator"></div>
                <span class="text-xs text-gray-600 status-text">Unprocessed</span>
            </div>
            <div class="flex items-center space-x-2">
                <button type="button" class="test-link-btn px-3 py-1.5 border border-gray-300 hover:bg-gray-50 text-gray-700 rounded-lg text-xs font-medium flex items-center">
                    <i class="bi bi-play-circle mr-1.5"></i>
                    Test Link
                </button>
            </div>
        </div>
    </div>
</template>