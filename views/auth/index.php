        <!-- Login Card -->
        <div class="p-8 bg-white border border-yellow-100 shadow-xl rounded-2xl">
            <form data-form-login class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">
                        <i class="mr-2 text-yellow-500 bi bi-envelope"></i>Email Address
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 bi bi-person"></i>
                        </div>
                        <input data-input="email"
                            type="email" 
                            id="email" 
                            required
                            name="email"
                            class="w-full px-4 py-3 pl-10 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400"
                            placeholder="Name@email.com"
                        >
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">
                        <i class="mr-2 text-yellow-500 bi bi-key"></i>Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="text-gray-400 bi bi-lock"></i>
                        </div>
                        <input data-input="password"
                            type="password" 
                            required
                            name="password"
                            class="w-full px-4 py-3 pl-10 transition-all duration-200 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400"
                            placeholder="Enter Password"
                        >
                        
                        <button data-toggle
                            type="button"
                            class="absolute inset-y-0 right-0 flex items-center pr-3"
                        >   
                            <i data-toggle-icon class="text-gray-400 cursor-pointer bi bi-eye-slash hover:text-yellow-500"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <!-- <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember"
                            class="w-4 h-4 text-yellow-500 border-gray-300 rounded focus:ring-yellow-400"
                        >
                        <label for="remember" class="ml-2 text-sm text-gray-600">
                            Ingat saya
                        </label>
                    </div>
                    <a href="#" class="text-sm font-medium text-yellow-500 transition-colors hover:text-yellow-600">
                        Lupa kata sandi?
                    </a>
                </div> -->

                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full bg-linear-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-600 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5 cursor-pointer"
                >
                    <i class="mr-2 bi bi-sign-in-alt"></i>Masuk
                </button>
            </form>

            <!-- Register Link -->
            <!-- <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Belum punya akun?
                    <a href="#" class="ml-1 font-medium text-yellow-500 transition-colors hover:text-yellow-600">
                        Daftar sekarang
                    </a>
                </p>
            </div> -->
        </div>
