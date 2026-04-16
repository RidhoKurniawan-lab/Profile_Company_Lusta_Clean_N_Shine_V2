<div align="center">
  <h1>🌟 LustaV2 - Vehicle Care Product Catalog & CMS</h1>
  <p>
    Sebuah aplikasi web katalog produk dan profil perusahaan berbasis <strong>Custom PHP MVC</strong> dan <strong>Tailwind CSS</strong>, dirancang khusus untuk mengelola dan memamerkan produk perawatan kendaraan premium.
  </p>
</div>

---

## 📖 Tentang Proyek
**LustaV2** adalah sistem manajemen konten (CMS) ringan dan katalog produk interaktif yang dikembangkan dari awal tanpa menggunakan framework PHP besar (seperti Laravel atau CodeIgniter). Proyek ini dibangun untuk menunjukkan pemahaman mendalam tentang pola desain arsitektur **Model-View-Controller (MVC)**, pengembangan routing mandiri, dan pengintegrasian antarmuka modern menggunakan **Tailwind CSS v4** serta **Vanilla JavaScript**.

Aplikasi ini dibagi menjadi dua bagian utama:
1. **Public Storefront:** Halaman untuk pelanggan menjelajahi produk (seperti sampo kendaraan, alat cuci, dll.) dan diarahkan ke platform e-commerce (Shopee, Tokopedia, Lazada) melalui *Product Links*.
2. **Admin Dashboard:** Portal administrasi aman (dengan otentikasi) untuk mengelola data produk, kategori produk, inventori (stok, harga), dan manajemen tautan e-commerce produk.

## 🚀 Fitur Utama

### 🛒 Sisi Pengguna (User-facing)
- **Katalog Produk Dinamis:** Menampilkan produk aktif secara *real-time* dari database.
- **Detail Produk & Tautan Multi-Platform:** Pengguna dapat melihat detail produk dan langsung diarahkan untuk membeli melalui tautan Shopee, Tokopedia, atau Lazada.
- **Corporate Pages:** Halaman *About* dan *Contact* terintegrasi.
- **Responsive UI:** Desain antarmuka yang bersih dan responsif di semua perangkat.

### 🔒 Sisi Admin (Dashboard & CMS)
- **Otentikasi & Keamanan:** Sistem login aman dengan hashing karakter (Bcrypt) dan session management.
- **Manajemen Produk (CRUD):** 
  - Menambah, mengubah, dan menghapus produk.
  - Unggah dan kelola gambar produk.
  - Kelola status produk (Aktif / Non-Aktif), stok, dan harga.
- **Manajemen Kategori:** Kategorisasi produk secara dinamis.
- **Manajemen Tautan E-Commerce (Product Links):** Admin dapat menyematkan banyak tautan toko online (Tokopedia, Shopee, dll) untuk 1 produk.
- **Export/Report PDF:** Integrasi **Dompdf** untuk export dokumen atau riwayat laporan (jika ada).

---

## 🛠️ Tech Stack & Arsitektur

*   **Arsitektur:** Custom MVC (Model, View, Controller)
*   **Backend:** PHP (Native OOP)
*   **Database:** MySQL
*   **Frontend:** HTML5, Tailwind CSS v4 (via Tailwind CLI), Vanilla JavaScript (Modular Pattern)
*   **Routing System:** Custom PHP Router (`routes/web.php` & `routes/api.php`)
*   **Package Manager & Dependencies:**
    *   Composer (PHP): `dompdf/dompdf ^3.1`
    *   NPM (Node): `@tailwindcss/cli`, `tailwindcss`

---

## 📂 Struktur Proyek

Dikembangkan dengan arsitektur yang terorganisir rapi dan siap untuk *scale-up*:

```text
LustaV2/
├── app/
│   ├── Config/          # Konfigurasi Database & System path
│   ├── Controllers/     # Logic Controller (Dipisah: api/ dan web/)
│   ├── Core/            # Inti Sistem (Router.php, Model.php, Controller.php, Auth.php)
│   └── Models/          # Model Database (Kategori, Produk, User, Link)
├── public/
│   ├── index.php        # Entry Point Aplikasi Utama (Bootstrap & Load Routes)
│   └── assets/          # File Statis (CSS, JS Modular, Images, Uploaded Media)
├── routes/
│   ├── api.php          # Definisi rute API & resource spesifik
│   └── web.php          # Definisi rute antarmuka pengguna & admin
└── views/               # PHP Templating (View)
    ├── admin/           # Folder UI Admin Dashboard 
    ├── auth/            # Folder UI Login/Otentikasi 
    ├── user/            # Folder UI Publik
    ├── layout/          # Layout Utama (Master template)
    └── partials/        # Komponen terpisah (Header, Footer)
```

---

## ⚙️ Cara Instalasi (Local Development)

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di *local machine* Anda:

1. **Clone repository ini**
   ```bash
   git clone https://github.com/username/LustaV2.git
   ```
2. **Setup Dependencies**
   Pastikan Anda sudah menginstal **Composer** dan **NPM**.
   ```bash
   composer install
   npm install
   ```
3. **Setup Database**
   - Buat database baru bernama `lusta` di MySQL.
   - Import skema database dari file `lusta.sql` yang ada di root direktori.
4. **Konfigurasi Environment**
   - Buka file `config.php`.
   - Sesuaikan `BASE_URL` dan konfigurasi database (`DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`) dengan server lokal Anda (misalnya Laragon/XAMPP).
5. **Compile Assets (Jika ada perubahan CSS)**
   ```bash
   npx tailwindcss -i ./public/assets/css/input.css -o ./public/assets/css/output.css --watch
   ```
6. **Akses Aplikasi**
   Buka browser dan arahkan ke local domain yang sudah Anda atur.
   - *Public Web:* `http://domain-lokal-anda/`
   - *Admin Panel:* `http://domain-lokal-anda/auth` (Gunakan kredensial dari tabel `users` untuk login).

---

<div align="center">
  <i>Dibuat dengan ❤️ untuk merepresentasikan kualitas pembuatan sistem web Native PHP yang bersih, rapi, dan terstruktur.</i>
</div>
