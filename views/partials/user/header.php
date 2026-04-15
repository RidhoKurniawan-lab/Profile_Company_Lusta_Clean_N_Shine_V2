<!-- Navbar -->
    <nav class="fixed top-0 z-50 w-full bg-transparent shadow-lg">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between h-16">

                <!-- Logo dan teks di kiri -->
                <div class="flex items-center space-x-2">
                    <!-- <div
              class="flex items-center justify-center w-10 h-10 text-white bg-blue-600 rounded-lg"
            >
              <span class="text-xl font-bold">L</span>
            </div> -->
                    <a href="#"
                        class="text-2xl font-bold tracking-wider text-black transition duration-300 hover:text-yellow-400">
                        LUSTA
                    </a>
                </div>

                <!-- Menu di kanan (Desktop) -->
                <div class="items-center hidden space-x-1 md:flex">
                    <div class="px-2 py-2 bg-[#facf22] rounded-full flex gap-x-7">
                        <a data-menu="" href="/"
                            class="px-5 py-1 text-white transition duration-300 rounded-full hover:text-black hover:bg-white/50">
                            Home
                        </a>
                        <a data-menu="product" href="/product"
                            class="px-5 py-1 text-white transition duration-300 rounded-full hover:text-black hover:bg-white/50">
                            Product
                        </a>
                        <a data-menu="about" href="/about"
                            class="px-5 py-1 text-white transition duration-300 rounded-full hover:text-black hover:bg-white/50">
                            About
                        </a>
                        <a data-menu="contact" href="/contact"
                            class="px-5 py-1 text-white transition duration-300 rounded-full hover:text-black hover:bg-white/50">
                            Contact
                        </a>
                    </div>
                </div>

                <!-- Tombol menu mobile -->
                <button data-toggle-sidebar class="p-2 text-black rounded-lg cursor-pointer md:hidden hover:text-[#facf22]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Menu mobile (hidden by default) -->
            <div id="mobile-menu" class="hidden bg-white border-t md:hidden">
                <div class="flex flex-col py-2">
                    <a href="/" class="px-4 py-3 font-medium text-yellow-400 hover:text-black hover:bg-gray-100">
                        Home
                    </a>
                    <a href="/product" class="px-4 py-3 font-medium text-yellow-400 hover:text-black hover:bg-gray-100">
                        Product
                    </a>
                    <a href="/about" class="px-4 py-3 font-medium text-yellow-400 hover:text-black hover:bg-gray-100">
                        About
                    </a>
                    <a href="/contact" class="px-4 py-3 font-medium text-yellow-400 hover:text-black hover:bg-gray-100">
                        Contact
                    </a>
                    </a>
                </div>
            </div>
        </div>
    </nav>