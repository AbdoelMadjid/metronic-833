# Metronic 8.3.3 dengan Laravel 13

Proyek ini berisi implementasi template admin **Metronic 8.3.3 Demo 1** pada **Laravel 13**. Halaman Metronic diubah menjadi Blade agar dapat dirender melalui Laravel, sementara navigasi antarhalaman menggunakan named route dan helper `route()`.

## Fitur

- Layout dan partial Metronic diintegrasikan menggunakan `@include` Blade.
- Halaman template tersedia sebagai view di `resources/views/template`.
- Rute bernama disediakan untuk halaman yang tersedia, seperti dashboard, aplikasi, akun, autentikasi, utilitas, dan widgets.
- Aset CSS, JavaScript, dan gambar halaman Metronic dilayani secara lokal dari `public/assets`.
- Gambar pratinjau prebuilt yang tersedia disimpan secara lokal di `public/assets/media/preview/prebuilts`.

> Catatan: halaman layout builder belum memiliki berkas sumber di proyek ini. Rutenya saat ini menampilkan view `index`.

## Persyaratan

- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm
- Git

## Clone dan Jalankan Proyek

1. Clone repositori dan masuk ke direktori proyek:

   ```bash
   git clone https://github.com/AbdoelMadjid/metronic-833.git
   cd metronic-833
   ```

   Untuk mengambil versi rilis `v1.0.0` secara langsung:

   ```bash
   git checkout v1.0.0
   ```

2. Pasang dependensi PHP dan buat file environment lokal:

   ```bash
   composer install
   ```

   Linux/macOS:

   ```bash
   cp .env.example .env
   ```

   Windows PowerShell:

   ```powershell
   Copy-Item .env.example .env
   ```

3. Buat application key dan siapkan database SQLite:

   ```bash
   php artisan key:generate
   ```

   Jika `database/database.sqlite` belum ada, buat file tersebut terlebih dahulu. Linux/macOS:

   ```bash
   touch database/database.sqlite
   ```

   Windows PowerShell:

   ```powershell
   New-Item -ItemType File database/database.sqlite
   ```

   Lalu jalankan migrasi:

   ```bash
   php artisan migrate
   ```

4. Pasang dependensi frontend dan bangun aset Vite:

   ```bash
   npm install
   npm run build
   ```

5. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

   Buka `http://127.0.0.1:8000` di browser.

## Contoh URL Halaman

- Beranda: `/`
- Dashboard eCommerce: `/dashboards/ecommerce`
- Dashboard proyek: `/dashboards/projects`
- Daftar produk: `/apps/ecommerce/catalog/products`
- Pengaturan akun: `/account/settings`

Nama route untuk halaman Metronic menggunakan awalan `metronic.`, contohnya `metronic.dashboards.ecommerce`.

## Dokumentasi

Lihat [riwayat pembaruan proyek](docs/riwayat-pembaruan.md) untuk ringkasan integrasi, konversi halaman, rute, dan aset.
