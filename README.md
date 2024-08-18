# Website Perpustakaan Laravel

Proyek ini adalah sebuah website perpustakaan yang dibangun menggunakan Laravel. Fitur-fitur utama termasuk autentikasi pengguna, upload gambar, dan operasi CRUD (Create, Read, Update, Delete). Teknologi yang digunakan meliputi Laravel, TailwindCSS, PHP, Alpine.js, Livewire, dan PinesUI.

## Fitur

- **Autentikasi Pengguna**: Registrasi, login, dan manajemen pengguna.
- **Upload Gambar**: Fitur untuk mengunggah dan menampilkan gambar buku.
- **CRUD Buku**: Tambah, lihat, edit, dan hapus data buku.
- **Responsive Design**: Tampilan yang responsif menggunakan TailwindCSS.
- **Interaktivitas**: Menggunakan Alpine.js dan Livewire untuk interaksi dinamis.

## Teknologi

- [Laravel](https://laravel.com/docs/11.x/)
- [TailwindCSS](https://tailwindcss.com/)
- [PHP](https://www.php.net/)
- [Alpine.js](https://alpinejs.dev/)
- [Livewire](https://laravel-livewire.com/)
- [PinesUI](https://devdojo.com/pines)

## Instalasi

1. Clone repositori ini:
    ```bash
    git clone https://github.com/aran8276/library-app.git
    ```
2. Masuk ke direktori proyek:
    ```bash
    cd library-app
    ```
3. Install dependensi menggunakan Composer:
    ```bash
    composer install
    ```
4. Install dependensi frontend menggunakan NPM:
    ```bash
    npm install
    ```
5. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```
6. Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```
7. Jalankan server MySQL.

9. Migrasi database:
    ```bash
    php artisan migrate
    ```

## Penggunaan

1. Jalankan server pengembangan:
    ```bash
    php artisan serve
    ```
2. Jalankan server pengembangan Vite untuk CSS:
   ```bash
   npm run dev
   ``` 
3. Buka browser dan akses `http://localhost:8000`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan fork repositori ini dan buat pull request dengan perubahan Anda.

## Lisensi

Proyek ini dilisensikan di bawah MIT License.

# New UI preview
![Screenshot 2024-08-17 at 23-49-08 Beranda Perpustakaan](https://github.com/user-attachments/assets/c76cbaeb-84b4-4741-9d44-89ea9eceafdd)

# Old UI preview (aka hanya archive)
![Screenshot 2024-08-17 at 23-43-34 Beranda Perpustakaan](https://github.com/user-attachments/assets/4273ed36-1fa4-4a02-af3d-ad09b30ed1cc)
![Screenshot 2024-08-17 at 23-42-28 Buat Buku Perpustakaan](https://github.com/user-attachments/assets/62e77e1f-e4a2-4123-8363-0465bb345f9f)
![Screenshot 2024-08-17 at 23-41-27 BALAPAN ILEGAL Perpustakaan](https://github.com/user-attachments/assets/28675bb4-f58e-483f-a45a-b456bce0402c)
![image](https://github.com/user-attachments/assets/c0e93355-8fe4-4131-a1d0-089e45b13aea)
![Screenshot 2024-08-17 at 23-46-20 Tentang Perpustakaan](https://github.com/user-attachments/assets/12975c01-4169-4338-9054-7e8034a45c02)

Dibuat oleh Zahran / Aran8276 SMKN6 Malang
