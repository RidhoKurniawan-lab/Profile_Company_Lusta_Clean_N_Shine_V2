<!-- Page Content -->
<main data-edit-content class="flex-1 px-4 overflow-y-auto md:px-6 bg-gray-50">
    <!-- Page title and actions -->
    <div class="flex flex-col justify-between mb-6 md:flex-row md:items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Edit Products</h1>
            <p class="mt-1 text-gray-600">Fill out the form below to edit product to the catalog.</p>
        </div>
        <div class="flex mt-4 space-x-3 md:mt-0">
            <a href="/admin/product" class="flex items-center px-4 py-2 font-medium text-gray-700 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50">
                <i class="mr-2 bi bi-arrow-left"></i>
                <span>Back</span>
            </a>
        </div>
    </div>

    <!-- Form Section -->
    <div class="max-w-6xl mx-auto">
        <div class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl">
            <!-- Form Header -->
            <div class="px-6 py-4 border-b border-gray-200 bg-amber-50">
                <h2 class="text-lg font-semibold text-gray-900">Product Information</h2>
                <p class="mt-1 text-sm text-gray-600">Complete all required information</p>
            </div>

            <!-- Form Content -->
            <form data-form-edit-product class="p-6">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
                    <!-- Left Column - Image Upload -->
                    <div class="lg:col-span-1">
                        <div class="space-y-4">
                            <!-- Image Upload Area -->
                            <div class="p-6 text-center transition-colors duration-200 border-2 border-gray-300 border-dashed rounded-xl hover:border-amber-400">
                                <div data-image-wrapper class="mb-4">
                                    <img data-preview-image class="object-cover w-full h-48 mx-auto rounded-lg" src="" alt="Preview">
                                </div>
                                <div data-upload-placeholder class="hidden">
                                    <i class="mb-3 text-4xl text-gray-400 bi bi-cloud-arrow-up"></i>
                                    <p class="mb-1 font-medium text-gray-700">Upload Product Images</p>
                                    <p class="mb-4 text-sm text-gray-500">JPG, PNG, or GIF format (Max. 5MB)</p>
                                </div>
                                <div class="relative">
                                    <input data-image-upload type="file" name="image" id="image-upload" accept="image/*" class="hidden">
                                    <label for="image-upload" class="inline-flex items-center px-4 py-2 font-medium text-white transition-colors rounded-lg cursor-pointer bg-amber-500 hover:bg-amber-600">
                                        <i class="mr-2 bi bi-upload"></i>
                                        <span>Pilih File</span>
                                    </label>
                                    <p data-file-name class="mt-2 text-xs text-gray-500"></p>
                                </div>
                            </div>

                            <!-- Image Tips -->
                            <div class="p-4 border border-blue-100 rounded-lg bg-blue-50">
                                <div class="flex items-start">
                                    <i class="bi bi-info-circle text-blue-500 mr-3 mt-0.5"></i>
                                    <div>
                                        <p class="text-sm font-medium text-blue-800">Tips for Good Drawing</p>
                                        <ul class="mt-1 space-y-1 text-xs text-blue-600">
                                            <li>• Use high resolution images</li>
                                            <li>• Make sure the lighting is sufficient</li>
                                            <li>• Clean and simple background</li>
                                            <li>• Maximal 2 Mb</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Form Fields -->
                    <div class="lg:col-span-2">
                        <div class="space-y-6">
<!-- Product Name -->
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-700">
                                    Produk Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-400 bi bi-tag"></i>
                                    </div>
                                    <input data-form-edit-name type="text" name="name"
                                        class="w-full py-3 pl-10 pr-4 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent"
                                        required
                                        placeholder="Enter the product name">
                                </div>
                                <p class="mt-2 text-xs text-gray-500">Product names should be clear and descriptive</p>
                            </div>

<!-- Category Dropdown -->
                            <div>
                                <label for="category" class="block mb-2 text-sm font-medium text-gray-700">
                                    Category <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <i class="text-gray-400 bi bi-grid"></i>
                                    </div>
                                    <select data-dropdown-category
                                        required
                                        name="category_id"
                                        class="w-full py-3 pl-10 pr-4 text-sm border border-gray-300 rounded-lg appearance-none bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                                        <option value="" disabled selected>Select Category</option>

                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <i class="text-gray-400 bi bi-chevron-down"></i>
                                    </div>
                                </div>
                            </div>

<!-- Price and Stock -->
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
<!-- Price -->
                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-700">
                                        Price <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <span class="text-gray-500">Rp</span>
                                        </div>
                                        <input data-form-edit-price type="text" name="price"
                                        required min='1000'
                                            class="w-full py-3 pl-12 pr-4 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent"
                                            placeholder="0">
                                    </div>
                                </div>

<!-- Stock -->
                                <div>
                                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-700">
                                        Stok <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <i class="text-gray-400 bi bi-box"></i>
                                        </div>
                                        <input data-form-edit-stock type="number" name="stock"
                                        required min="0"
                                            class="w-full py-3 pl-10 pr-4 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent"
                                            placeholder="Stock quantity">
                                    </div>
                                </div>
                            </div>

<!-- Description -->
                            <div>
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-700">
                                    Product Description <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute pointer-events-none top-3 left-3">
                                        <i class="text-gray-400 bi bi-text-paragraph"></i>
                                    </div>
                                    <textarea data-form-edit-description id="description" name="description"
                                    required  maxlength="1000"
                                        class="w-full py-3 pl-10 pr-4 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-amber-400 focus:border-transparent"
                                        placeholder="Describe the product in detail..."></textarea>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <p class="text-xs text-gray-500">Minimum 50 characters</p>
                                    <p data-char-count class="text-xs text-gray-500">0/500 characters</p>
                                </div>
                            </div>

<!-- Status Dropdown -->
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-700">
                                    Status <span class="text-red-500">*</span>
                                </label>
                                <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                                    <div class="relative">
                                        <input data-form-edit-status="active" type="radio" id="status-active" name="status" value="active" class="hidden peer">
                                        <label for="status-active" class="flex items-center justify-center p-3 transition-colors border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-amber-500 peer-checked:bg-amber-50">
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 mr-2 rounded-full bg-emerald-500"></div>
                                                <span class="text-sm font-medium">Active</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="relative">
                                        <input data-form-edit-status="deactive" type="radio" id="status-deactive" name="status" value="deactive" class="hidden peer">
                                        <label for="status-deactive" class="flex items-center justify-center p-3 transition-colors border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50 peer-checked:border-amber-500 peer-checked:bg-amber-50">
                                            <div class="flex items-center">
                                                <div class="w-3 h-3 mr-2 bg-red-500 rounded-full"></div>
                                                <span class="text-sm font-medium">DeActive</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <p class="mt-2 text-xs text-gray-500">Active products will appear in the public catalog.</p>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Form Actions -->
                <div class="flex flex-col justify-end pt-6 mt-8 space-y-3 border-t border-gray-200 sm:flex-row sm:space-y-0 sm:space-x-3">
                    <button type="submit" class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white rounded-lg font-medium transition-colors">
                        <i class="mr-2 bi bi-cloud-arrow-up"></i>Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>