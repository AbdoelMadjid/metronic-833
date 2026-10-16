# Changelog — Metronic 8.3.3 dengan Laravel 13

Catatan pengembangan proyek per rilis. Setiap versi mengacu pada tag Git dengan nama yang sama.

## [v1.3.1] — Perbaikan katalog bahasa

- Memperbaiki diagram Mermaid dan memperbarui dokumentasi alur multi-bahasa agar sesuai dengan katalog JSON.
- Menjelaskan penggunaan katalog JSON yang sama untuk menu dan helper terjemahan Laravel.
- Memperbaiki selector agar script terjemahan dapat menemukan menu sidebar.

## [v1.3.0] — Perapian layout dan navigasi

- Merapikan format penulisan seluruh view Blade template.
- Menyelaraskan toolbar dan area content, serta memperbaiki tag penutup yang membuat footer tersarang di beberapa halaman aplikasi.
- Memperbaiki tag pemuatan JavaScript halaman dan menambahkan stylesheet Leaflet untuk peta Support Center Contact.
- Menyelaraskan status aktif dan accordion bertingkat pada sidebar dan navbar, termasuk tab Pages.
- Memperhalus scroll sidebar menuju menu aktif.
- Menambahkan dokumentasi arsitektur template dan alur multi-bahasa serta katalog terjemahan JSON.

## [v1.2.0] — Pilihan bahasa

- Menambahkan pilihan bahasa English, Indonesia, Spanish, German, Japanese, dan French.
- Menyimpan bahasa pilihan di session Laravel dan menerapkan locale melalui middleware.
- Menerjemahkan menu sidebar dan topbar, termasuk mengganti bahasa tanpa memuat ulang halaman.
- Memuat penerjemah menu sejak bagian `<head>` dan menerjemahkan teks saat navigasi dirender untuk menghindari tampilan bahasa Inggris sebelum bahasa pilihan.
- Menempatkan pilihan bahasa di kumpulan ikon navbar dan menghapus pilihan bahasa serta mode dari dropdown pengguna.

## [v1.1.0] — Integrasi halaman dan penyelarasan layout

- Mengubah 233 halaman HTML di `resources/views/template` menjadi view Blade dan mendaftarkan rute untuk halaman yang tersedia.
- Menggunakan layout Blade bersama serta named route Laravel untuk navigasi halaman.
- Menyelaraskan status aktif menu sidebar dan topbar.
- Menyamakan toolbar Classic dengan toolbar layout lainnya.
- Membuat layout khusus untuk lima halaman aside, menempatkan aside di bawah header dan toolbar, menjaga tombol Prebuilts, Get Help, dan Buy Now tetap terlihat, serta membuat toolbar memenuhi area konten.
- Menambahkan `public/assets/css/metronic-layout.css` untuk penyesuaian layout bersama.

## [v1.0.0] — Integrasi awal Metronic ke Laravel

- Mengintegrasikan template Metronic 8.3.3 Demo 1 ke Laravel 13.
- Mengubah layout dan partial menjadi Blade serta menambahkan `@include` sesuai komentar `layout-partial`.
- Memindahkan referensi CSS, JavaScript, dan gambar ke aset lokal di `public/assets` menggunakan helper `asset()`.
- Mengunduh gambar prebuilt yang tersedia untuk kategori dashboards, demos, pages, dan apps, lalu memeriksa kesamaan nama file aset lokal dengan sumber.
- Mengubah tautan template menjadi named route Laravel dan menguraikan markup menu header.
- Memperbaiki tujuan tautan lokal file manager dan customer.

## Catatan proyek

- Lima halaman demo font ikon di `resources/views/template/src/plugins/keenicons` tetap berupa HTML karena merupakan berkas pendukung plugin.
- Berkas sumber `layout-builder` tidak tersedia di proyek; rutenya sementara menampilkan view `index`.
- Berkas `.env` dan direktori `vendor` tidak dimasukkan ke Git.
