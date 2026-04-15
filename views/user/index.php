<section class="flex items-center min-h-screen py-12 bg-white md:py-0">
    <div class="container px-4 mx-auto">
        <div class="flex flex-col items-center justify-between gap-12 lg:flex-row">

            <!-- Teks di kiri (untuk desktop) / di atas (untuk mobile) -->
            <div class="order-2 w-full text-center lg:w-1/2 lg:order-1 lg:text-left">
                <span
                    class="inline-block px-4 py-1.5 bg-yellow-100 text-[#facf22] font-medium rounded-full mb-4">
                    New Release
                </span>

                <h1 class="mb-6 text-4xl font-bold text-gray-900 md:text-5xl lg:text-6xl">
                    Maintenance of Your beloved
                    <span class="text-[#facf22]">Vehicle</span>
                </h1>

                <p class="max-w-2xl mb-8 text-lg text-gray-600 md:text-xl">
                    The leading solution for vehicle care. With advanced cleaning technology and complete
                    protection, bring back your vehicle’s shine like new.
                </p>

                <div class="flex flex-col justify-center gap-4 sm:flex-row lg:justify-start">
                    <button
                        class="hover:-translate-y-0.5 px-8 py-3 bg-[#facf22] text-white font-semibold rounded-full hover:bg-yellow-500 transition duration-300 shadow-lg hover:shadow-xl cursor-pointer">
                        View Detail
                    </button>
                    <button
                        class="hover:-translate-y-0.5 px-8 py-3 font-semibold text-gray-800 transition duration-300 bg-white border border-gray-300 rounded-full shadow cursor-pointer hover:bg-gray-50 hover:shadow-md">
                        About Company
                    </button>
                </div>
            </div>

            <!-- Gambar di kanan (untuk desktop) / full width (untuk mobile) -->
            <div class="order-1 w-full lg:w-1/2 lg:order-2">
                <!-- Gambar full tanpa efek card -->
                <div class="w-full h-full">
                    <!-- Gambar asli - pastikan path gambar benar -->
                    <img src="<?= PUBLIC_URL ?>/assets/img/lustas.png" alt="Ilustrasi teknologi modern"
                        class="object-cover w-full h-auto rounded-lg lg:rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-12 bg-white lg:py-20" style="border-bottom-right-radius: 35vh;">
    <div class="container px-4 mx-auto">

        <!-- Header Section -->
        <div data-aos="fade-up" class="mb-12 text-center lg:mb-16">
            <h2 class="text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                Why Choose Us
            </h2>
        </div>

        <!-- Content Grid -->
        <div class="flex flex-col items-center justify-center gap-8 lg:flex-row lg:gap-12">

            <!-- Left Column -->
            <div class="w-full lg:w-1/3">
                <div data-aos="fade-up" class="mb-8 lg:mb-12">
                    <h4 class="mb-3 text-xl font-bold text-[#facf22]">
                        Clean stubborn dirt and stains
                    </h4>
                    <p class="leading-relaxed text-justify text-gray-600">
                        The formula is specially designed to lift dust, mud, and oil without the need for hard
                        scrubbing. As a result, your motorcycle becomes clean and shiny again, just like it was
                        freshly washed at a bike salon.
                    </p>
                </div>

                <div data-aos="fade-up" class="mt-2">
                    <h4 class="mb-3 text-xl font-bold text-[#facf22]">
                        Keeps the paint color bright and glossy
                    </h4>
                    <p class="leading-relaxed text-justify text-gray-600">
                        The special ingredients in the shampoo help maintain the brightness of the motorcycle's
                        paint color. The color won't fade easily even when frequently exposed to sunlight and
                        rain, keeping the motorcycle looking fresh and shiny.
                    </p>
                </div>
            </div>

            <!-- Center Image -->
            <div data-aos="fade-up" class="flex justify-center w-full md:w-1/2 lg:w-1/4">
                <img src="<?= PUBLIC_URL ?>/assets/img/product_1.png" alt="Motorcycle Shampoo Product"
                    class="object-contain w-64 h-auto">
            </div>

            <!-- Right Column -->
            <div class="w-full lg:w-1/3">
                <div data-aos="fade-up" class="mb-8 lg:mb-12">
                    <h4 class="mb-3 text-xl font-bold text-[#facf22]">
                        Gives maximum shine after washing
                    </h4>
                    <p class="leading-relaxed text-justify text-gray-600">
                        With shine booster technology, this shampoo provides a long-lasting glossy effect. After
                        rinsing and drying, the motorcycle's surface looks as if it just came out of the
                        showroom.
                    </p>
                </div>

                <div data-aos="fade-up" class="mt-2">
                    <h4 class="mb-3 text-xl font-bold text-[#facf22]">
                        Safe for all types of motorcycle surfaces
                    </h4>
                    <p class="leading-relaxed text-justify text-gray-600">
                        This shampoo does not contain harsh chemicals, making it safe to use on painted
                        surfaces, plastic, chrome, and even glass. One product for every part of your
                        motorcycle!
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Variant 100ml -->
<section class="py-12 mt-4 bg-white lg:py-20" style="border-top-left-radius: 35vh;">
    <div class="container px-4 mx-auto lg:px-8">
        <div class="flex flex-col items-center justify-between gap-8 lg:flex-row lg:gap-12">

            <!-- Gambar di kiri (mobile: atas) -->
            <div data-aos="fade-up" class="flex justify-center w-full lg:w-1/2">
                <div class="w-3/4 overflow-hidden shadow-xl md:w-1/2 lg:w-2/3 rounded-2xl">
                    <img src="<?= PUBLIC_URL ?>/assets/img/product_bg_1.PNG" alt="100ml Product Variant"
                        class="object-cover w-full h-auto">
                </div>
            </div>

            <!-- Konten teks di kanan (mobile: bawah) -->
            <div class="w-full text-center lg:w-1/2 lg:text-left">
                <h2 data-aos="fade-up" class="mb-6 text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                    100ml Variant
                </h2>
                <p data-aos="fade-up" class="mb-8 text-lg leading-relaxed text-gray-600">
                    This 100 ml product is released as a prototype version intended for quality testing,
                    formulation trials, and market acceptance evaluation. This product is not meant for
                    commercial purposes or general sales, but is used only as an internal sample and for product
                    evaluation before full-scale production.
                </p>
                <div data-aos="fade-up" class="flex justify-center lg:justify-start">
                    <button
                        class="hover:-translate-y-0.5 px-6 py-3 font-semibold text-gray-800 transition duration-300 bg-gray-200 rounded-full hover:bg-gray-300">
                        Sample Only
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Variant 250ml -->
<section class="py-12 bg-gray-50 lg:py-20">
    <div class="container px-4 mx-auto lg:px-8">
        <div class="flex flex-col items-center justify-between gap-8 lg:flex-row lg:gap-12">

            <!-- Konten teks di kiri (mobile: bawah) -->
            <div class="order-2 w-full text-center lg:w-1/2 lg:order-1 lg:text-left">
                <h2 data-aos="fade-up" class="mb-6 text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                    250ml Variant
                </h2>
                <p data-aos="fade-up" class="mb-8 text-lg leading-relaxed text-gray-600">
                    This 250 ml product is the official production version that has passed quality testing and
                    formulation stages. It is intended for commercial use and general sales, offering the best
                    quality ready for consumers. Each bottle is produced with high standards to deliver maximum
                    cleaning results, optimal protection, and a more enjoyable motorcycle-washing experience.
                </p>
                <div data-aos="fade-up" class="flex justify-center lg:justify-start">
                    <a href="/user/detail"
                        class="hover:-translate-y-0.5 px-8 py-3 bg-[#facf22] text-white font-semibold rounded-full hover:bg-yellow-500 transition duration-300 shadow-lg hover:shadow-xl">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Gambar di kanan (mobile: atas) -->
            <div data-aos="fade-up" class="flex justify-center order-1 w-full lg:w-1/2 lg:order-2">
                <div class="w-3/4 overflow-hidden shadow-xl md:w-1/2 lg:w-2/3 rounded-2xl">
                    <img src="<?= PUBLIC_URL ?>/assets/img/product_bg_2.png" alt="250ml Product Variant"
                        class="object-cover w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container px-4 mx-auto">
        <!-- Card dengan efek transform -->
        <div
            class="max-w-4xl p-6 mx-auto transform translate-y-12 bg-white border-4 border-yellow-400 shadow-lg rounded-2xl">
            <ul class="grid grid-cols-1 gap-6 p-0 m-0 sm:grid-cols-2 md:grid-cols-4">

                <!-- TikTok -->
                <li data-aos="fade-up"
                    class="flex items-center gap-4 p-4 transition duration-300 bg-gray-50 rounded-xl hover:bg-gray-100 hover:-translate-y-0.5">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white bg-black rounded-full shrink-0">
                        <!-- TikTok Icon -->
                        <i class="text-2xl bi bi-tiktok"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 font-semibold text-gray-900">TikTok</h5>
                        <p class="text-sm text-gray-500">Lusta</p>
                    </div>
                </li>

                <!-- Instagram -->
                <li data-aos="fade-up"
                    class="flex items-center gap-4 p-4 transition duration-300 bg-gray-50 rounded-xl hover:bg-gray-100 hover:-translate-y-0.5">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white rounded-full bg-linear-to-br from-purple-500 to-pink-500 shrink-0">
                        <!-- Instagram Icon -->
                        <i class="text-2xl bi bi-instagram"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 font-semibold text-gray-900">Instagram</h5>
                        <p class="text-sm text-gray-500">Lusta</p>
                    </div>
                </li>

                <!-- Facebook -->
                <li data-aos="fade-up"
                    class="flex items-center gap-4 p-4 transition duration-300 bg-gray-50 rounded-xl hover:bg-gray-100 hover:-translate-y-0.5">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white bg-blue-600 rounded-full shrink-0">
                        <!-- Facebook Icon -->
                        <i class="text-2xl bi bi-facebook"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 font-semibold text-gray-900">Facebook</h5>
                        <p class="text-sm text-gray-500">Lusta</p>
                    </div>
                </li>

                <!-- WhatsApp -->
                <li data-aos="fade-up"
                    class="flex items-center gap-4 p-4 transition duration-300 bg-gray-50 rounded-xl hover:bg-gray-100 hover:-translate-y-0.5">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-white bg-green-500 rounded-full shrink-0">
                        <!-- WhatsApp Icon -->
                        <i class="text-2xl bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <h5 class="mb-1 font-semibold text-gray-900">WhatsApp</h5>
                        <p class="text-sm text-gray-500">Lusta</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>