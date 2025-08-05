# Bin2Dec - Konversi Bilangan Biner ke Desimal (Laravel Project)

https://github.com/zohir-source/Bin2Dec/issues/1#issue-3292499524

Proyek ini adalah aplikasi web sederhana berbasis **Laravel** yang berfungsi untuk mengonversi bilangan biner menjadi bilangan desimal. Aplikasi ini dirancang sebagai latihan untuk memahami penggunaan Laravel, form request validation, dan dasar-dasar input-output web berbasis framework PHP modern.

## 🔧 Teknologi yang Digunakan

- PHP >= 8.1
- Laravel 10.x
- Composer
- HTML, CSS (Bootstrap opsional)
- Git & GitHub (untuk version control dan kolaborasi)

## 📂 Struktur Proyek

Berikut adalah beberapa bagian penting dari struktur proyek:

project-root/ ├── app/ │   └── Http/ │       ├── Controllers/ │       │   └── BinaryController.php │       └── Requests/ ├── routes/ │   └── web.php ├── resources/ │   └── views/ │       ├── bin2dec.blade.php │       └── home.blade.php ├── public/ ├── composer.json └── .env

## ⚙️ Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di komputer lokalmu:

```bash
# Clone repository
git clone https://github.com/username/namaproject.git

# Masuk ke direktori proyek
cd namaproject

# Install dependencies
composer install

# Salin file konfigurasi .env
cp .env.example .env

# Generate application key
php artisan key:generate

# Jalankan server lokal Laravel
php artisan serve

🌐 Cara Menggunakan

1. Buka browser dan akses http://localhost:8000.


2. Masukkan bilangan biner pada input form.


3. Klik tombol "Convert".


4. Hasil desimal akan ditampilkan.



✅ Validasi Input

Form hanya menerima angka biner (0 dan 1).

Jika field kosong atau mengandung karakter selain 0 atau 1, maka akan muncul pesan error.


Contoh aturan validasi:

$request->validate([
    'binary' => 'required|regex:/^[01]+$/',
]);

🧠 Penjelasan Kode

BinaryController.php:

Menangani request dari form.

Melakukan validasi dan konversi dari biner ke desimal.


View (blade):

Tampilan input dan hasil konversi.

Menampilkan error validasi jika input tidak sesuai.



🐛 Fitur Tambahan (Opsional)

Logika penanganan error input kosong.

Fitur konversi sebaliknya (Desimal ke Biner).

Penerapan session flash untuk menyimpan hasil sementara.

Tambahkan animasi atau tampilan UI responsif (menggunakan Tailwind atau Bootstrap).


📤 Deployment (Opsional)

Jika ingin deploy ke hosting atau platform seperti Render, Vercel, atau Heroku, pastikan:

Konfigurasi .env telah sesuai.

Gunakan database production jika diperlukan.

Gunakan GitHub Actions atau CI/CD pipeline.


informasi kontak

email: Zohirzed23@gmail.com
instagram: @itsalter23
