<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col">
    <header>
        <livewire:navbar />
    </header>
    <div class="h-[20rem] overflow-hidden">
        <img src="/about-bg.jpg" alt="about-bg" class="object-cover relative bottom-48 -z-50">
    </div>
    <main class="container flex justify-start py-12 mx-auto">
        <div class="flex justify-around space-x-12">
            <div class="flex flex-col space-y-6 w-fit">
                <div class="">
                    <h1 class="font-bold text-3xl text-gray-600">Tentang</h1>
                </div>
                <div class="flex flex-col space-y-12">
                    <div class="ml-2">
                        <h2 class="font-bold text-xl text-gray-500">Tentang Perpustakaan</h2>
                        <p class="ml-4 mt-2">
                            Selamat datang di Perpustakaan, platform digital yang dirancang untuk memudahkan akses dan
                            manajemen
                            koleksi buku Anda. Dibangun dengan teknologi modern Laravel dan Livewire, situs ini
                            menawarkan
                            pengalaman pengguna yang intuitif dan responsif.
                        </p>
                    </div>
                    <div class="ml-2">
                        <h2 class="font-bold text-xl text-gray-500">Visi Kami</h2>
                        <p class="ml-4 mt-2">
                            Di Perpustakaan, kami percaya bahwa pengetahuan adalah kekuatan. Visi kami adalah
                            menciptakan
                            sebuah ruang di mana setiap orang dapat dengan mudah menemukan, membaca, dan mengelola
                            buku-buku
                            favorit mereka. Dengan antarmuka yang ramah pengguna dan fitur-fitur canggih, kami
                            berkomitmen
                            untuk mendukung kebiasaan membaca dan pembelajaran sepanjang hayat.
                        </p>
                    </div>
                    <div class="ml-2">
                        <h2 class="font-bold text-xl text-gray-500">Teknologi di Balik Perpustakaan</h2>
                        <p class="ml-4 mt-2">
                            Menggunakan Laravel, framework PHP yang kuat dan fleksibel, kami memastikan bahwa situs ini
                            memiliki performa yang optimal dan keamanan yang tinggi. Livewire memungkinkan kami untuk
                            membangun komponen interaktif tanpa perlu menulis banyak kode JavaScript, sehingga
                            pengalaman
                            pengguna menjadi lebih lancar dan dinamis.
                        </p>
                    </div>
                    <div class="ml-2">
                        <h2 class="font-bold text-xl text-gray-500">Fitur Unggulan</h2>
                        <div class="ml-8 mt-2 flex flex-col">
                            <li>
                                <span class="font-bold text-gray-600">Pencarian Buku yang Cepat:</span> Temukan buku
                                yang
                                Anda cari dengan
                                mudah melalui fitur pencarian
                                yang cepat dan akurat.
                            </li>
                            <li>
                                <span class="font-bold text-gray-600">Manajemen Koleksi:</span> Kelola koleksi buku Anda
                                dengan
                                fitur-fitur seperti penambahan,
                                penghapusan, dan pengeditan data buku.
                            </li>
                            <li>
                                <span class="font-bold text-gray-600">Antarmuka Responsif:</span> Nikmati pengalaman
                                yang
                                konsisten di
                                berbagai perangkat, baik itu
                                desktop, tablet, maupun ponsel.
                            </li>
                        </div>
                    </div>
                    <div class="ml-2">
                        <h2 class="font-bold text-xl text-gray-500">Komitmen Kami</h2>
                        <p class="ml-4 mt-2">
                            Kami berkomitmen untuk terus mengembangkan dan memperbarui Perpustakaan agar selalu relevan
                            dengan kebutuhan pengguna. Masukan dan saran dari Anda sangat berharga bagi kami untuk
                            menciptakan platform yang lebih baik.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex space-y-16 flex-col w-[20rem] my-24">
                <img src="/php.png" alt="php">
                <img src="/laravel.png" alt="php">
                <img src="/livewire.png" alt="php">
            </div>
        </div>
    </main>
</body>

</html>
