  <!-- Carousel Section -->
  <section data-carousel class="flex flex-col items-center justify-center w-full min-h-screen px-4 pt-20 overflow-hidden bg-white sm:px-6 md:px-8 lg:px-10 xl:px-12 gap-y-6">
      <!-- Carousel Track -->
      <div data-carousel-track class="relative flex w-full transition-transform duration-500 ease-in-out">
          <!-- Slide 1 -->
          <div class="flex flex-col items-center justify-center w-full min-w-full px-4 py-8 sm:px-6 md:px-8 lg:px-12 xl:px-16 lg:py-10 sm:gap-8 shrink-0 lg:flex-row lg:gap-10 xl:gap-12">
              <!-- Image -->
              <div class="flex justify-center order-1 w-full lg:w-1/3 lg:order-2">
                  <div class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-2/3 xl:w-3/4">
                      <img
                          src="<?= PUBLIC_URL ?>/assets/img/product_bg_1.PNG"
                          alt="100ml Variant"
                          class="w-full h-auto shadow-lg rounded-2xl">
                  </div>
              </div>
              <!-- Text Content -->
              <div class="order-2 w-full px-4 mt-8 text-center sm:px-6 lg:w-1/2 lg:order-1 lg:text-left lg:px-0">
                  <h2 class="mb-4 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl lg:text-5xl">
                      100ml Variant
                  </h2>
                  <p class="mb-6 text-base leading-relaxed text-gray-600 sm:text-lg md:text-lg lg:mb-8">
                      This 100 ml product is released as a prototype version for quality testing, formulation, and market acceptance. Not for commercial purposes or general sales.
                  </p>
              </div>
          </div>
          <!-- Slide 2 -->
          <div class="flex flex-col items-center justify-center w-full min-w-full px-4 py-8 sm:px-6 md:px-8 lg:px-12 xl:px-16 lg:py-0 sm:gap-8 shrink-0 lg:flex-row lg:gap-10 xl:gap-12">
              <!-- Image -->
              <div class="flex justify-center order-1 w-full lg:w-1/3 lg:order-2">
                  <div class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:w-2/3 xl:w-3/4">
                      <img
                          src="<?= PUBLIC_URL ?>/assets/img/product_bg_2.png"
                          alt="250ml Variant"
                          class="w-full h-auto shadow-lg rounded-2xl">
                  </div>
              </div>
              <!-- Text Content -->
              <div class="order-2 w-full px-4 mt-8 text-center sm:px-6 lg:w-1/2 lg:order-1 lg:text-left lg:px-0">
                  <h2 class="mb-4 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl lg:text-5xl">
                      250ml Variant
                  </h2>
                  <p class="mb-6 text-base leading-relaxed text-gray-600 sm:text-lg md:text-lg lg:mb-8">
                      This 250 ml product is the commercial version with a tested formulation and is ready for mass production.
                  </p>
                  <div class="justify-center lex lg:justify-start">
                      <a href="/user/detail" class="hover:-translate-y-0.5 inline-block px-6 py-2 text-sm font-semibold text-white transition duration-300 bg-yellow-500 rounded-full shadow-lg  sm:px-8 sm:py-3 sm:text-base hover:bg-yellow-600 hover:shadow-xl">
                          View Details
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <!-- Carousel Indicators -->
      <div class="flex justify-center space-x-3 sm:mt-4 lg:mt-6">
          <button data-indicator="0" class="hover:-translate-y-0.5 cursor-pointer w-3 h-3 bg-yellow-500 rounded-full carousel-indicator hover:bg-yellow-600"></button>
          <button data-indicator="1" class="hover:-translate-y-0.5 cursor-pointer w-3 h-3 bg-gray-300 rounded-full carousel-indicator hover:bg-gray-400"></button>
      </div>
  </section>

  <!-- Our Product Section -->
  <section class="py-12 bg-white lg:py-20">
      <div class="container px-4 mx-auto">
          <!-- Judul Section -->
          <div class="mb-12 text-center lg:mb-16">
              <h2 data-aos="fade-up" class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl">
                  Our Product
              </h2>
              <p data-aos="fade-up" class="text-lg text-gray-600">
                  Premium Quality For Your Vehicle
              </p>
          </div>

          <!-- Grid Card -->
          <div data-card-wrapper class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
      </div>
  </section>