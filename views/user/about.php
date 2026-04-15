 <!-- Hero Section dengan Background Image -->
 <section class="relative flex items-center justify-center min-h-screen text-center text-white bg-center bg-cover"
     style="background-image: url('<?= PUBLIC_URL ?>/assets/img/logo_text.png');">
     <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
     <div class="container relative px-4 mx-auto">
         <h1 class="mb-6 text-4xl font-bold md:text-6xl lg:text-7xl">About Us</h1>
         <p class="max-w-2xl mx-auto mb-8 text-xl md:text-2xl lg:text-3xl">
             We create premium quality products for your needs
         </p>
         <a href="#story" class="hover:-translate-y-0.5 inline-block px-8 py-3 text-lg font-semibold text-white transition duration-300 bg-yellow-400 rounded-full shadow-xl  hover:bg-yellow-500 hover:shadow-2xl">
             Learn More
         </a>
     </div>
 </section>

 <!-- Story Section -->
 <section id="story" class="flex items-center justify-center min-h-screen py-12 mt-4 bg-white lg:py-20"
     style="border-top-left-radius: 35vh;">
     <div class="container px-4 mx-auto lg:px-8">
         <div class="flex flex-col items-center justify-between gap-8 lg:flex-row lg:gap-12">

             <!-- Gambar di kiri -->
             <div data-aos="fade-up" class="flex justify-center w-full lg:w-1/2">
                 <div class="w-3/4 overflow-hidden shadow-xl md:w-1/2 lg:w-2/3 rounded-2xl hover:shadow-2xl hover:-translate-y-0.5">
                     <img
                         src="<?= PUBLIC_URL ?>/assets/img/logo.png"
                         alt="Product Story"
                         class="object-cover w-full h-auto">
                 </div>
             </div>

             <!-- Konten teks di kanan -->
             <div class="w-full text-center lg:w-1/2 lg:text-left">
                 <h2 data-aos="fade-up" class="mb-6 text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                     Story Of Product
                 </h2>
                 <p data-aos="fade-up" class="mb-8 text-lg leading-relaxed text-gray-600">
                     We created this shampoo out of concern for local products that tend to be similar and lack innovation. Through research and a new formulation, we present a real solution that cleans more effectively, protects motorcycle surfaces, and provides long-lasting shine.
                 </p>
                 <div data-aos="fade-up" class="flex justify-center lg:justify-start">
                     <button class="hover:-translate-y-0.5 px-6 py-3 font-semibold text-white transition duration-300 bg-yellow-400 rounded-full shadow-xl cursor-pointer hover:bg-yellow-500 hover:shadow-2xl">
                         Our Mission
                     </button>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Testimonials Section -->
 <section class="py-12 bg-white lg:py-20">
     <div class="container px-4 mx-auto">
         <div class="mb-12 text-center lg:mb-16">
             <h2 data-aos="fade-up" class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                 What People Say
             </h2>
             <p data-aos="fade-up" class="text-lg text-gray-600">
                 Testimonials from our beloved customers
             </p>
         </div>

         <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
             <!-- Testimonial 1 -->
             <div data-aos="fade-up" class="p-6 text-center bg-white border border-gray-100 shadow-xl hover:shadow-2xl rounded-2xl md:p-8 hover:-translate-y-0.5">
                 <div class="mb-6 text-5xl text-yellow-500">"</div>
                 <p data-aos="fade-up" class="mb-8 text-lg italic leading-relaxed text-gray-600">
                     "This product is truly amazing! The quality is excellent, and the service is very friendly. I will continue using products from this brand."
                 </p>
                 <div data-aos="fade-up" >
                     <h5 class="mb-1 text-xl font-bold text-gray-900">Sarah Johnson</h5>
                     <p class="text-sm text-gray-500">Entrepreneur</p>
                 </div>
             </div>

             <!-- Testimonial 2 -->
             <div data-aos="fade-up" class="p-6 text-center bg-white border border-gray-100 shadow-xl hover:shadow-2xl rounded-2xl md:p-8 hover:-translate-y-0.5">
                 <div class="mb-6 text-5xl text-yellow-500">"</div>
                 <p data-aos="fade-up" class="mb-8 text-lg italic leading-relaxed text-gray-600">
                     "Fast service and the product arrived safely. I am very satisfied with my shopping experience!"
                 </p>
                 <div data-aos="fade-up" >
                     <h5 class="mb-1 text-xl font-bold text-gray-900">Michael Tan</h5>
                     <p class="text-sm text-gray-500">Designer</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- Team Section -->
 <section class="py-12 bg-white lg:py-20">
     <div class="container px-4 mx-auto">
         <div class="mb-12 text-center lg:mb-16">
             <h2 data-aos="fade-up" class="mb-4 text-3xl font-bold text-gray-900 md:text-4xl lg:text-5xl">
                 Our Team
             </h2>
             <p data-aos="fade-up" class="text-lg text-gray-600">
                 Meet the people behind our success
             </p>
         </div>

         <div class="grid justify-center grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
             <!-- Team Member 1 -->
             <div data-aos="fade-up" class="group">
                 <div class="relative overflow-hidden bg-white border border-gray-100 shadow-xl rounded-2xl hover:shadow-2xl hover:-translate-y-0.5">
                     <img
                         src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Hector Salamangka"
                         class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-105">
                     <div class="absolute bottom-0 w-full py-4 text-center text-white transform -translate-x-1/2 bg-black bg-opacity-75 left-1/2">
                         <h5 class="mb-1 text-lg font-bold">Hector Salamangka</h5>
                         <p class="text-sm text-gray-300">Lead Developer</p>
                     </div>
                 </div>
             </div>

             <!-- Team Member 2 -->
             <div data-aos="fade-up" class="group">
                 <div class="relative overflow-hidden bg-white border border-gray-100 shadow-xl rounded-2xl hover:shadow-2xl hover:-translate-y-0.5">
                     <img
                         src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7nstASo8BdadWs3X-ji8e1O0hd5AMByZdGQ&s"
                         alt="Sinta Ayu"
                         class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-105">
                     <div class="absolute bottom-0 w-full py-4 text-center text-white transform -translate-x-1/2 bg-black bg-opacity-75 left-1/2">
                         <h5 class="mb-1 text-lg font-bold">Sinta Ayu</h5>
                         <p class="text-sm text-gray-300">Marketing Manager</p>
                     </div>
                 </div>
             </div>

             <!-- Team Member 3 -->
             <div data-aos="fade-up" class="group">
                 <div class="relative overflow-hidden bg-white border border-gray-100 shadow-xl rounded-2xl hover:shadow-2xl hover:-translate-y-0.5">
                     <img
                         src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         alt="Gustafo Fring"
                         class="object-cover w-full h-64 transition-transform duration-300 group-hover:scale-105">
                     <div class="absolute bottom-0 w-full py-4 text-center text-white transform -translate-x-1/2 bg-black bg-opacity-75 left-1/2">
                         <h5 class="mb-1 text-lg font-bold">Gustafo Fring</h5>
                         <p class="text-sm text-gray-300">Marketing Manager</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>