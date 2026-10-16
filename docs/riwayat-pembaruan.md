# Riwayat Pembaruan Metronic 8.3.3 dengan Laravel 13

Dokumen ini merangkum pembaruan proyek template Metronic 8.3.3 Demo 1 yang diintegrasikan ke Laravel 13.

## Tahapan Pembaruan

1. **Integrasi layout ke Blade**
   - Mengubah layout dan partial menjadi berkas Blade.
   - Menambahkan `@include` di bawah komentar `layout-partial` agar partial dimuat oleh Laravel.

2. **Penggunaan aset lokal**
   - Menyesuaikan referensi CSS, JavaScript, dan gambar agar menggunakan aset di `public/assets`.
   - Menggunakan helper Laravel `asset()` untuk membentuk URL aset.

3. **Kelengkapan gambar pratinjau**
   - Mengunduh gambar yang tersedia dari sumber Metronic ke direktori `public/assets/media/preview/prebuilts` untuk kategori dashboards, demos, pages, dan apps.
   - Membandingkan nama berkas lokal dengan referensi sumber. Berkas yang memang tidak tersedia di sumber dibiarkan tanpa diunduh.

4. **Menu dan navigasi Laravel**
   - Menguraikan markup menu header yang sebelumnya masih ditulis satu baris.
   - Mengganti tautan halaman Metronic dengan named route dan helper `route()`.
   - Mendaftarkan rute untuk halaman yang tersedia.

5. **Konversi halaman template**
   - Mengubah 233 halaman HTML di `resources/views/template` menjadi berkas `.blade.php`.
   - Mengarahkan rute halaman ke view Blade masing-masing.
   - Mengubah tautan halaman lokal agar menggunakan named route Laravel dan menyesuaikan URL canonical ke rute lokal.
   - Memperbaiki beberapa tujuan tautan file manager dan customer yang sebelumnya tidak sesuai.
   - Lima halaman demo font ikon di `resources/views/template/src/plugins/keenicons` tetap berupa HTML karena merupakan berkas pendukung sumber plugin.

## Pemeriksaan

- `php artisan route:list` menampilkan rute halaman Metronic yang terdaftar.
- `php artisan view:cache` berhasil mengompilasi view Blade.
- Referensi `route()` pada halaman di `resources/views/template` mengarah ke named route yang tersedia.

## Catatan

- Berkas sumber `layout-builder` tidak tersedia di folder template. Rutenya tetap terdaftar dan untuk sementara menampilkan view `index`.
- Berkas `.env` dan direktori `vendor` tidak dimasukkan ke Git karena dikecualikan oleh `.gitignore`.

## Rilis

- Tag rilis awal: `v1.0.0`.
