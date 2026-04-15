 <main data-summary-page class="flex-1 p-4 overflow-y-auto bg-center bg-cover md:p-6" style="background-image: url('<?= PUBLIC_URL ?>/assets/img/logo_text.png')" >
     <!-- Page title and actions -->
     <!-- <div class="flex flex-col justify-between mb-6 md:flex-row md:items-center">
         <div>
             <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
             <p class="mt-1 text-gray-600">Welcome back, Admin! Here's a summary of your activity.</p>
         </div>
     </div> -->

     <!-- Stats Cards -->
     <div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-2 lg:grid-cols-4">
         <!-- Card 1 -->
         <div class="p-5 transition-shadow bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md">
             <div class="flex items-center justify-between">
                 <div>
                     <p class="text-sm text-gray-600">Total Product</p>
                     <p data-total-product class="mt-1 text-2xl font-bold text-gray-900">12,584</p>
                 </div>
                 <div class="p-3 rounded-lg bg-amber-50 ">
                     <i class="text-xl bi bi-box-seam text-amber-500"></i>
                 </div>
             </div>
             <!-- <div class="mt-4">
                 <span class="text-sm font-medium text-green-500">
                     <i class="mr-1 bi bi-arrow-up"></i>12.5% 
                 </span>
                 <span class="ml-2 text-sm text-gray-500">dari bulan lalu</span>
             </div> -->
         </div>

         <!-- Card 2 -->
         <div class="p-5 transition-shadow bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md">
             <div class="flex items-center justify-between">
                 <div>
                     <p class="text-sm text-gray-600">Total Active</p>
                     <p data-total-active class="mt-1 text-2xl font-bold text-gray-900">3,248</p>
                 </div>
                 <div class="p-3 rounded-lg bg-emerald-50">
                     <i class="text-xl bi bi-check-circle text-emerald-500"></i>
                 </div>
             </div>
             <!-- <div class="mt-4">
                 <span class="text-sm font-medium text-green-500">
                     <i class="mr-1 bi bi-arrow-up"></i>8.2%
                 </span>
                 <span class="ml-2 text-sm text-gray-500">dari bulan lalu</span>
             </div> -->
         </div>

         <!-- Card 3 -->
         <div class="p-5 transition-shadow bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md">
             <div class="flex items-center justify-between">
                 <div>
                     <p class="text-sm text-gray-600">Total DeActive</p>
                     <p data-total-deactive class="mt-1 text-2xl font-bold text-gray-900">Rp 245,8JT</p>
                 </div>
                 <div class="p-3 rounded-lg bg-violet-50">
                     <i class="text-xl text-red-500 bi bi-x-circle"></i>
                 </div>
             </div>
             <!-- <div class="mt-4">
                 <span class="text-sm font-medium text-green-500">
                     <i class="mr-1 bi bi-arrow-up"></i>5.3%
                 </span>
                 <span class="ml-2 text-sm text-gray-500">dari bulan lalu</span>
             </div> -->
         </div>

         <!-- Card 4 -->
         <div class="p-5 transition-shadow bg-white border border-gray-200 shadow-sm rounded-xl hover:shadow-md">
             <div class="flex items-center justify-between">
                 <div>
                     <p class="text-sm text-gray-600">Link Active</p>
                     <p data-total-link class="mt-1 text-2xl font-bold text-gray-900">4.7</p>
                 </div>
                 <div class="p-3 rounded-lg bg-yellow-50">
                     <i class="text-xl text-blue-500 bi bi-link"></i>
                 </div>
             </div>
             <!-- <div class="mt-4">
                 <span class="text-sm font-medium text-green-500">
                     <i class="mr-1 bi bi-arrow-up"></i>1.8%
                 </span>
                 <span class="ml-2 text-sm text-gray-500">dari bulan lalu</span>
             </div> -->
         </div>
     </div>


     <!-- Charts and Tables Section -->
     <!-- <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2"> -->
     <!-- Chart -->
     <!-- <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-xl">
             <div class="flex items-center justify-between mb-6">
                 <h2 class="text-lg font-semibold text-gray-900">Statistik Pengunjung</h2>
                 <select class="bg-gray-50 border border-gray-300 rounded-lg px-3 py-1.5 text-sm focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                     <option>Minggu ini</option>
                     <option>Bulan ini</option>
                     <option>Tahun ini</option>
                 </select>
             </div>

             <div class="flex items-end h-64 pt-4 space-x-2">
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="70%"></div>
                     <span class="mt-2 text-xs text-gray-500">Sen</span>
                 </div>
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="85%"></div>
                     <span class="mt-2 text-xs text-gray-500">Sel</span>
                 </div>
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="60%"></div>
                     <span class="mt-2 text-xs text-gray-500">Rab</span>
                 </div>
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="90%"></div>
                     <span class="mt-2 text-xs text-gray-500">Kam</span>
                 </div>
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="75%"></div>
                     <span class="mt-2 text-xs text-gray-500">Jum</span>
                 </div>
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="95%"></div>
                     <span class="mt-2 text-xs text-gray-500">Sab</span>
                 </div>
                 <div class="flex flex-col items-center flex-1">
                     <div class="w-full rounded-t-lg bg-amber-400 chart-bar" data-height="50%"></div>
                     <span class="mt-2 text-xs text-gray-500">Min</span>
                 </div>
             </div>
         </div> -->

     <!-- Recent Orders -->
     <!-- <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-xl">
             <div class="flex items-center justify-between mb-6">
                 <h2 class="text-lg font-semibold text-gray-900">Pesanan Terbaru</h2>
                 <a href="#" class="text-sm font-medium text-amber-600 hover:text-amber-700">Lihat Semua</a>
             </div>

             <div class="overflow-x-auto">
                 <table class="w-full">
                     <thead>
                         <tr class="text-sm text-left text-gray-600 border-b border-gray-200">
                             <th class="pb-3 font-medium">Pelanggan</th>
                             <th class="pb-3 font-medium">Tanggal</th>
                             <th class="pb-3 font-medium">Jumlah</th>
                             <th class="pb-3 font-medium">Status</th>
                         </tr>
                     </thead>
                     <tbody class="text-sm">
                         <tr class="border-b border-gray-100 hover:bg-gray-50">
                             <td class="py-3">Budi Santoso</td>
                             <td class="py-3">12 Mei 2023</td>
                             <td class="py-3">Rp 450.000</td>
                             <td class="py-3"><span class="px-2 py-1 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700">Selesai</span></td>
                         </tr>
                         <tr class="border-b border-gray-100 hover:bg-gray-50">
                             <td class="py-3">Siti Rahayu</td>
                             <td class="py-3">11 Mei 2023</td>
                             <td class="py-3">Rp 1.250.000</td>
                             <td class="py-3"><span class="px-2 py-1 text-xs font-medium text-blue-700 rounded-full bg-blue-50">Proses</span></td>
                         </tr>
                         <tr class="border-b border-gray-100 hover:bg-gray-50">
                             <td class="py-3">Ahmad Fauzi</td>
                             <td class="py-3">10 Mei 2023</td>
                             <td class="py-3">Rp 320.000</td>
                             <td class="py-3"><span class="px-2 py-1 text-xs font-medium text-yellow-700 rounded-full bg-yellow-50">Pending</span></td>
                         </tr>
                         <tr class="border-b border-gray-100 hover:bg-gray-50">
                             <td class="py-3">Dewi Lestari</td>
                             <td class="py-3">9 Mei 2023</td>
                             <td class="py-3">Rp 890.000</td>
                             <td class="py-3"><span class="px-2 py-1 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700">Selesai</span></td>
                         </tr>
                         <tr class="hover:bg-gray-50">
                             <td class="py-3">Rudi Hartono</td>
                             <td class="py-3">8 Mei 2023</td>
                             <td class="py-3">Rp 2.150.000</td>
                             <td class="py-3"><span class="px-2 py-1 text-xs font-medium text-blue-700 rounded-full bg-blue-50">Proses</span></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div> -->
     <!-- </div> -->

     <!-- Bottom Section -->
     <!-- <div class="grid grid-cols-1 gap-6 lg:grid-cols-3"> -->
     <!-- Recent Activities -->
     <!-- <div class="p-5 bg-white border border-gray-200 shadow-sm lg:col-span-2 rounded-xl">
             <h2 class="mb-6 text-lg font-semibold text-gray-900">Aktivitas Terbaru</h2>

             <div class="space-y-4">
                 <div class="flex items-start">
                     <div class="flex items-center justify-center w-10 h-10 rounded-full shrink-0 bg-amber-50">
                         <i class="bi bi-person-plus text-amber-500"></i>
                     </div>
                     <div class="ml-4">
                         <p class="text-sm"><span class="font-medium text-gray-900">Budi Santoso</span> telah mendaftar sebagai pengguna baru</p>
                         <p class="mt-1 text-xs text-gray-500">10 menit yang lalu</p>
                     </div>
                 </div>

                 <div class="flex items-start">
                     <div class="flex items-center justify-center w-10 h-10 rounded-full shrink-0 bg-emerald-50">
                         <i class="bi bi-cart-plus text-emerald-500"></i>
                     </div>
                     <div class="ml-4">
                         <p class="text-sm">Pesanan baru #ORD-7821 dari <span class="font-medium text-gray-900">Siti Rahayu</span></p>
                         <p class="mt-1 text-xs text-gray-500">1 jam yang lalu</p>
                     </div>
                 </div>

                 <div class="flex items-start">
                     <div class="flex items-center justify-center w-10 h-10 rounded-full shrink-0 bg-violet-50">
                         <i class="bi bi-graph-up text-violet-500"></i>
                     </div>
                     <div class="ml-4">
                         <p class="text-sm">Laporan bulanan telah dihasilkan untuk April 2023</p>
                         <p class="mt-1 text-xs text-gray-500">3 jam yang lalu</p>
                     </div>
                 </div>

                 <div class="flex items-start">
                     <div class="flex items-center justify-center w-10 h-10 rounded-full shrink-0 bg-yellow-50">
                         <i class="text-yellow-500 bi bi-gear"></i>
                     </div>
                     <div class="ml-4">
                         <p class="text-sm">Pengaturan sistem telah diperbarui oleh <span class="font-medium text-gray-900">Admin</span></p>
                         <p class="mt-1 text-xs text-gray-500">5 jam yang lalu</p>
                     </div>
                 </div>
             </div>
         </div> -->

     <!-- Quick Stats -->
     <!-- <div class="p-5 bg-white border border-gray-200 shadow-sm rounded-xl">
             <h2 class="mb-6 text-lg font-semibold text-gray-900">Statistik Cepat</h2>

             <div class="space-y-5">
                 <div>
                     <div class="flex justify-between mb-1 text-sm">
                         <span class="text-gray-600">Penyelesaian Tugas</span>
                         <span class="font-medium text-gray-900">78%</span>
                     </div>
                     <div class="h-2 overflow-hidden bg-gray-200 rounded-full">
                         <div class="h-full rounded-full bg-amber-400 progress-bar" data-width="78%"></div>
                     </div>
                 </div>

                 <div>
                     <div class="flex justify-between mb-1 text-sm">
                         <span class="text-gray-600">Kepuasan Pelanggan</span>
                         <span class="font-medium text-gray-900">92%</span>
                     </div>
                     <div class="h-2 overflow-hidden bg-gray-200 rounded-full">
                         <div class="h-full rounded-full bg-emerald-400 progress-bar" data-width="92%"></div>
                     </div>
                 </div>

                 <div>
                     <div class="flex justify-between mb-1 text-sm">
                         <span class="text-gray-600">Peningkatan Trafik</span>
                         <span class="font-medium text-gray-900">45%</span>
                     </div>
                     <div class="h-2 overflow-hidden bg-gray-200 rounded-full">
                         <div class="h-full rounded-full bg-violet-400 progress-bar" data-width="45%"></div>
                     </div>
                 </div>

                 <div>
                     <div class="flex justify-between mb-1 text-sm">
                         <span class="text-gray-600">Penggunaan Server</span>
                         <span class="font-medium text-gray-900">64%</span>
                     </div>
                     <div class="h-2 overflow-hidden bg-gray-200 rounded-full">
                         <div class="h-full bg-yellow-400 rounded-full progress-bar" data-width="64%"></div>
                     </div>
                 </div>

                 <div class="pt-4 border-t border-gray-200">
                     <p class="mb-2 text-sm text-gray-600">Peringkat Pengguna Aktif</p>
                     <div class="flex items-center justify-between">
                         <div class="flex items-center">
                             <div class="flex items-center justify-center w-8 h-8 rounded-full bg-amber-50">
                                 <i class="bi bi-person text-amber-500"></i>
                             </div>
                             <div class="ml-3">
                                 <p class="text-sm font-medium">Budi Santoso</p>
                                 <p class="text-xs text-gray-500">1.248 poin</p>
                             </div>
                         </div>
                         <span class="text-lg font-bold text-[#d97706]">#1</span>
                     </div>
                 </div>
             </div>
         </div> -->
     </div>
 </main>