<section id="contact" class="bg-white lg:py-20">
    <div class="container px-4 mx-auto ">
        <div class="flex flex-col items-center gap-8 lg:flex-row lg:gap-12">

            <!-- Left Column - Contact Info -->
            <div class="w-full text-center lg:w-1/2 lg:text-left">
                <h2 class="mb-6 text-3xl font-bold text-gray-900 md:text-4xl">
                    Get in Touch
                </h2>
                <p class="max-w-xl mb-8 text-lg text-gray-600">
                    We'd love to hear from you! Feel free to contact us through the form beside or via the following social media.
                </p>

                <!-- Social Media Icons -->
                <div class="flex justify-center gap-6 mb-8 lg:justify-start">
                    <a href="#" class="hover:-translate-y-0.5 text-blue-600 transition duration-300 hover:text-blue-800">
                        <i class="text-2xl bi bi-facebook"></i>
                    </a>
                    <a href="#" class="hover:-translate-y-0.5 text-pink-600 transition duration-300 hover:text-pink-800">
                        <i class="text-2xl bi bi-instagram"></i>
                    </a>
                    <a href="#" class="hover:-translate-y-0.5 text-green-600 transition duration-300 hover:text-green-800">
                        <i class="text-2xl bi bi-whatsapp"></i>
                    </a>
                    <a href="#" class="hover:-translate-y-0.5 text-red-600 transition duration-300 hover:text-red-800">
                        <i class="text-2xl bi bi-envelope"></i>
                    </a>
                </div>

                <!-- Contact Details -->
                <div class="space-y-4">
                    <div class="flex items-center justify-center lg:justify-start ">
                        <div class="flex items-center justify-center w-8 h-8 mr-3 bg-yellow-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="text-gray-700">Jalan Jepun Pipil, Denpasar Bali</p>
                    </div>

                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="flex items-center justify-center w-8 h-8 mr-3 bg-yellow-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <p class="text-gray-700">+62 800 000 0000</p>
                    </div>

                    <div class="flex items-center justify-center lg:justify-start">
                        <div class="flex items-center justify-center w-8 h-8 mr-3 bg-yellow-500 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <p class="text-gray-700">lusta@gmail.com.id</p>
                    </div>
                </div>
            </div>

            <!-- Right Column - Contact Form -->
            <div class="w-full lg:w-1/2">
                <div class="p-6 bg-white border border-gray-100 shadow-xl rounded-2xl md:p-8 hover:-translate-y-0.5">
                    <h4 class="mb-8 text-2xl font-semibold text-center text-gray-900">
                        Contact Form
                    </h4>

                    <form id="formContact" class="space-y-6">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block mb-2 font-semibold text-gray-700">
                                Name
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your name"
                                class="w-full px-4 py-3 transition duration-300 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            <p id="validasi-name" class="hidden mt-2 text-sm text-red-600"></p>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block mb-2 font-semibold text-gray-700">
                                Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="example@email.com"
                                class="w-full px-4 py-3 transition duration-300 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            <p id="validasi-email" class="hidden mt-2 text-sm text-red-600"></p>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block mb-2 font-semibold text-gray-700">
                                Message
                            </label>
                            <textarea
                                id="message"
                                name="message"
                                rows="4"
                                placeholder="Write your message here..."
                                class="w-full px-4 py-3 transition duration-300 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"></textarea>
                            <p id="validasi-message" class="hidden mt-2 text-sm text-red-600"></p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4 text-center">
                            <button
                                type="submit"
                                class="hover:-translate-y-0.5 px-8 py-3 font-semibold text-white transition duration-300 bg-yellow-500 rounded-full shadow-lg hover:bg-yellow-600 hover:shadow-xl">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>