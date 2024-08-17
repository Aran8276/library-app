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
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-16 mx-auto">
        <div class="flex flex-col space-y-12 w-[20rem] md:w-[80rem]">
            <div class="flex flex-col space-y-4 w-full mb-0 md:mb-4">
                <h1 class="font-bold text-3xl text-gray-600">Tentang</h1>
                <h2 class="text-gray-500">Lihatlah tech stack berikut yang digunakan Perpustakaan.</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <livewire:features-card title="Laravel" src="/favicon.ico"
                    subtitle="Framework PHP yang memudahkan pengembangan aplikasi web dengan struktur MVC." />

                <livewire:features-card title="TailwindCSS" src="/tailwind.svg"
                    subtitle="Framework CSS yang memungkinkan desain responsif dan cepat dengan utility-first classes." />

                <livewire:features-card title="PHP" src="/php.png"
                    subtitle="Bahasa pemrograman server-side yang digunakan untuk mengelola logika dan data perpustakaan." />

                <livewire:features-card title="Alpine.js" src="/alpine.png"
                    subtitle="Library JavaScript ringan untuk interaktivitas di sisi klien tanpa perlu framework besar." />

                <livewire:features-card title="Livewire" src="/livewire.png"
                    subtitle="Library Laravel untuk membuat komponen interaktif tanpa menulis banyak JavaScript." />

                <livewire:features-card title="PinesUI" src="/pines.svg"
                    subtitle="Kumpulan komponen UI yang siap pakai untuk mempercepat pengembangan antarmuka pengguna." />
            </div>
            <div>
                <div class="flex flex-col space-y-4">
                    <h1 class="text-2xl font-bold">KEBIJAKAN PRIVASI</h1>
                    <h2 class="font-bold">Terakhir diperbarui 17 Agustus 2024</h2>
                    <span class="pt-12">
                        Pemberitahuan privasi ini untuk Aran8276 (“kami,” “kita,” atau “milik kami”), menjelaskan
                        bagaimana dan mengapa kami mungkin mengumpulkan, menyimpan, menggunakan, dan/atau membagikan
                        (“memproses”) informasi Anda saat Anda menggunakan layanan kami (“Layanan”), seperti saat Anda:
                    </span>
                    <div class="flex ml-8 flex-col space-y-2">
                        <li>Mengunjungi situs web kami di library.aran8276.site, atau situs web lain milik kami yang
                            menautkan ke pemberitahuan privasi ini</li>
                        <li>Mengunjungi situs web kami di library.aran8276.site, atau situs web lain milik kami yang
                            menautkan ke pemberitahuan privasi ini</li>
                        <li>Mengunduh dan menggunakan aplikasi seluler kami (Perpustakaan), atau aplikasi lain milik
                            kami
                            yang menautkan ke pemberitahuan privasi ini</li>
                        <li>Berinteraksi dengan kami dengan cara lain yang terkait, termasuk penjualan, pemasaran, atau
                            acara</li>
                    </div>
                    <h2 class="font-bold text-xl pt-4">RINGKASAN POIN UTAMA</h2>
                    <div class="flex flex-col space-y-6">
                        <span>Ringkasan ini memberikan poin-poin utama dari pemberitahuan privasi kami, tetapi Anda
                            dapat menemukan lebih banyak detail tentang topik-topik ini dengan mengklik tautan berikut
                            setiap poin utama atau menggunakan daftar isi kami di bawah ini untuk menemukan bagian yang
                            Anda cari.
                        </span>
                        <span>Informasi pribadi apa yang kami proses? Saat Anda mengunjungi, menggunakan, atau
                            menavigasi Layanan kami, kami mungkin memproses informasi pribadi tergantung pada bagaimana
                            Anda berinteraksi dengan kami dan Layanan, pilihan yang Anda buat, dan produk serta fitur
                            yang Anda gunakan. Pelajari lebih lanjut tentang informasi pribadi yang Anda ungkapkan
                            kepada kami.
                        </span>
                        <span>Apakah kami memproses informasi pribadi yang sensitif? Kami tidak memproses informasi
                            pribadi yang sensitif.
                        </span>
                        <span>
                            Apakah kami mengumpulkan informasi dari pihak ketiga? Kami tidak mengumpulkan informasi dari
                            pihak ketiga.
                        </span>
                        <span>
                            Bagaimana kami memproses informasi Anda? Kami memproses informasi Anda untuk menyediakan,
                            meningkatkan, dan mengelola Layanan kami, berkomunikasi dengan Anda, untuk keamanan dan
                            pencegahan penipuan, dan untuk mematuhi hukum. Kami juga dapat memproses informasi Anda
                            untuk tujuan lain dengan persetujuan Anda. Kami memproses informasi Anda hanya ketika kami
                            memiliki alasan hukum yang sah untuk melakukannya. Pelajari lebih lanjut tentang bagaimana
                            kami memproses informasi Anda.
                        </span>
                        <span>
                            Dalam situasi apa dan dengan pihak mana kami membagikan informasi pribadi? Kami mungkin
                            membagikan informasi dalam situasi tertentu dan dengan pihak ketiga tertentu. Pelajari lebih
                            lanjut tentang kapan dan dengan siapa kami membagikan informasi pribadi Anda.
                        </span>
                        <span>
                            Apa hak Anda? Tergantung pada lokasi geografis Anda, undang-undang privasi yang berlaku
                            mungkin berarti Anda memiliki hak tertentu terkait informasi pribadi Anda. Pelajari lebih
                            lanjut tentang hak privasi Anda.
                        </span>
                        <span>
                            Bagaimana Anda menjalankan hak Anda? Cara termudah untuk menjalankan hak Anda adalah dengan
                            mengirimkan permintaan akses subjek data, atau dengan menghubungi kami. Kami akan
                            mempertimbangkan dan menindaklanjuti setiap permintaan sesuai dengan undang-undang
                            perlindungan data yang berlaku.
                        </span>
                        <span>
                            Ingin tahu lebih banyak tentang apa yang kami lakukan dengan informasi yang kami kumpulkan?
                            Tinjau pemberitahuan privasi secara lengkap.
                        </span>
                    </div>
                    <h2 class="font-bold text-xl pt-4">DAFTAR ISI</h2>
                    <ol class="flex flex-col ml-8 space-y-2 list-decimal">
                        <a href="#1" class="text-blue-500 hover:underline">
                            <li>INFORMASI APA YANG KAMI KUMPULKAN?</li>
                        </a>
                        <a href="#2" class="text-blue-500 hover:underline">
                            <li>BAGAIMANA KAMI MEMPROSES INFORMASI ANDA?</li>
                        </a>
                        <a href="#3" class="text-blue-500 hover:underline">
                            <li>KAPAN DAN DENGAN SIAPA KAMI MEMBAGIKAN INFORMASI PRIBADI ANDA?</li>
                        </a>
                        <a href="#4" class="text-blue-500 hover:underline">
                            <li>APAKAH KAMI MENGGUNAKAN COOKIE DAN TEKNOLOGI PELACAKAN LAINNYA?</li>
                        </a>
                        <a href="#5" class="text-blue-500 hover:underline">
                            <li>BERAPA LAMA KAMI MENYIMPAN INFORMASI ANDA?</li>
                        </a>
                        <a href="#6" class="text-blue-500 hover:underline">
                            <li>APA HAK PRIVASI ANDA?</li>
                        </a>
                        <a href="#7" class="text-blue-500 hover:underline">
                            <li>KONTROL UNTUK FITUR DO-NOT-TRACK</li>
                        </a>
                        <a href="#8" class="text-blue-500 hover:underline">
                            <li>APAKAH KAMI MEMPERBARUI PEMBERITAHUAN INI?</li>
                        </a>
                        <a href="#9" class="text-blue-500 hover:underline">
                            <li>BAGAIMANA ANDA DAPAT MENGHUBUNGI KAMI TENTANG PEMBERITAHUAN INI?</li>
                        </a>
                        <a href="#10" class="text-blue-500 hover:underline">
                            <li>BAGAIMANA ANDA DAPAT MENINJAU, MEMPERBARUI, ATAU MENGHAPUS DATA YANG KAMI KUMPULKAN DARI
                                ANDA?</li>
                        </a>
                    </ol>
                    <div class="flex flex-col space-y-4" id="1">
                        <h2 class="text-xl font-bold">1. INFORMASI APA YANG KAMI KUMPULKAN?</h2>

                        <span>Informasi pribadi yang Anda ungkapkan kepada kami</span>

                        <span>Singkatnya: Kami mengumpulkan informasi pribadi yang Anda berikan kepada kami.</span>

                        <span>
                            Kami mengumpulkan informasi pribadi yang Anda berikan secara sukarela kepada kami saat Anda
                            mendaftar di Layanan, menyatakan minat untuk mendapatkan informasi tentang kami atau produk
                            dan
                            Layanan kami, saat Anda berpartisipasi dalam kegiatan di Layanan, atau saat Anda menghubungi
                            kami.
                        </span>

                        <span>
                            Informasi Pribadi yang Diberikan oleh Anda. Informasi pribadi yang kami kumpulkan tergantung
                            pada konteks interaksi Anda dengan kami dan Layanan, pilihan yang Anda buat, dan produk
                            serta
                            fitur yang Anda gunakan. Informasi pribadi yang kami kumpulkan dapat mencakup hal-hal
                            berikut:
                        </span>

                        <div class="ml-8 flex flex-col">
                            <li>alamat email</li>
                            <li>nama pengguna</li>
                            <li>kata sandi</li>
                            <li>nama</li>
                            <li>data kontak atau otentikasi</li>
                            <li>Informasi Sensitif. Kami tidak memproses informasi sensitif.</li>
                        </div>

                        <span>
                            Semua informasi pribadi yang Anda berikan kepada kami harus benar, lengkap, dan akurat, dan
                            Anda
                            harus memberi tahu kami tentang setiap perubahan pada informasi pribadi tersebut.
                        </span>

                        <div class="flex flex-col space-y-4" id="2">
                            <h2 class="text-xl font-bold">2. BAGAIMANA KAMI MEMPROSES INFORMASI ANDA?</h2>

                            <span>Singkatnya: Kami memproses informasi Anda untuk menyediakan, meningkatkan, dan
                                mengelola Layanan kami, berkomunikasi dengan Anda, untuk keamanan dan pencegahan
                                penipuan, dan untuk mematuhi hukum. Kami juga dapat memproses informasi Anda untuk
                                tujuan lain dengan persetujuan Anda.</span>

                            <span>Kami memproses informasi pribadi Anda untuk berbagai alasan, tergantung pada bagaimana
                                Anda berinteraksi dengan Layanan kami, termasuk:</span>

                            <li class="ml-8">Untuk memfasilitasi pembuatan akun dan otentikasi serta mengelola akun
                                pengguna. Kami
                                dapat memproses informasi Anda sehingga Anda dapat membuat dan masuk ke akun Anda, serta
                                menjaga akun Anda tetap berfungsi.</li>

                        </div>
                        <div class="flex flex-col space-y-4" id="3">
                            <h2 class="text-xl font-bold">3. KAPAN DAN DENGAN SIAPA KAMI MEMBAGIKAN INFORMASI PRIBADI
                                ANDA?</h2>

                            <span>Singkatnya: Kami mungkin membagikan informasi dalam situasi tertentu yang dijelaskan
                                dalam bagian ini dan/atau dengan pihak ketiga berikut.</span>

                            <span>Kami mungkin perlu membagikan informasi pribadi Anda dalam situasi berikut:</span>

                            <li class="ml-8">Transfer Bisnis. Kami dapat membagikan atau mentransfer informasi Anda
                                sehubungan
                                dengan, atau selama negosiasi, setiap merger, penjualan aset perusahaan, pembiayaan,
                                atau akuisisi seluruh atau sebagian bisnis kami ke perusahaan lain.</li>

                        </div>
                        <div class="flex flex-col space-y-4" id="4">
                            <h2 class="text-xl font-bold">4. APAKAH KAMI MENGGUNAKAN COOKIE DAN TEKNOLOGI PELACAKAN
                                LAINNYA?</h2>

                            <span>Singkatnya: Kami mungkin menggunakan cookie dan teknologi pelacakan lainnya untuk
                                mengumpulkan dan menyimpan informasi Anda.</span>

                            <span>Kami mungkin menggunakan cookie dan teknologi pelacakan serupa (seperti web beacon dan
                                piksel) untuk mengumpulkan informasi saat Anda berinteraksi dengan Layanan kami.
                                Beberapa teknologi pelacakan online membantu kami menjaga keamanan Layanan kami dan akun
                                Anda, mencegah kerusakan, memperbaiki bug, menyimpan preferensi Anda, dan membantu
                                dengan fungsi dasar situs.</span>

                            <span>Kami juga mengizinkan pihak ketiga dan penyedia layanan untuk menggunakan teknologi
                                pelacakan online di Layanan kami untuk analitik dan periklanan, termasuk untuk membantu
                                mengelola dan menampilkan iklan, menyesuaikan iklan dengan minat Anda, atau mengirim
                                pengingat keranjang belanja yang ditinggalkan (tergantung pada preferensi komunikasi
                                Anda). Pihak ketiga dan penyedia layanan menggunakan teknologi mereka untuk menyediakan
                                iklan tentang produk dan layanan yang disesuaikan dengan minat Anda yang mungkin muncul
                                baik di Layanan kami atau di situs web lain.</span>

                            <span>Informasi spesifik tentang bagaimana kami menggunakan teknologi tersebut dan bagaimana
                                Anda dapat menolak cookie tertentu diatur dalam Pemberitahuan Cookie kami.</span>

                        </div>
                        <div class="flex flex-col space-y-4" id="5">
                            <h2 class="text-xl font-bold">5. BERAPA LAMA KAMI MENYIMPAN INFORMASI ANDA?</h2>

                            <span>Singkatnya: Kami menyimpan informasi Anda selama diperlukan untuk memenuhi tujuan yang
                                diuraikan dalam pemberitahuan privasi ini kecuali diwajibkan oleh hukum.</span>

                            <span>Kami hanya akan menyimpan informasi pribadi Anda selama diperlukan untuk tujuan yang
                                ditetapkan dalam pemberitahuan privasi ini, kecuali periode retensi yang lebih lama
                                diperlukan atau diizinkan oleh hukum (seperti pajak, akuntansi, atau persyaratan hukum
                                lainnya). Tidak ada tujuan dalam pemberitahuan ini yang akan mengharuskan kami menyimpan
                                informasi pribadi Anda lebih lama dari periode waktu di mana pengguna memiliki akun
                                dengan kami.</span>

                            <span>Ketika kami tidak memiliki kebutuhan bisnis yang sah untuk memproses informasi pribadi
                                Anda, kami akan menghapus atau menganonimkan informasi tersebut, atau, jika ini tidak
                                memungkinkan (misalnya, karena informasi pribadi Anda telah disimpan dalam arsip
                                cadangan), maka kami akan menyimpan informasi pribadi Anda dengan aman dan
                                mengisolasinya dari pemrosesan lebih lanjut hingga penghapusan dimungkinkan.</span>
                        </div>
                        <div class="flex flex-col space-y-4" id="6">
                            <h2 class="text-xl font-bold">6. APA HAK PRIVASI ANDA?</h2>
                            <span>Singkatnya: Anda dapat meninjau, mengubah, atau mengakhiri akun Anda kapan saja,
                                tergantung pada negara, provinsi, atau negara bagian tempat tinggal Anda.</span>

                            <span>Menarik kembali persetujuan Anda: Jika kami mengandalkan persetujuan Anda untuk
                                memproses informasi pribadi Anda, yang mungkin merupakan persetujuan eksplisit dan/atau
                                tersirat tergantung pada hukum yang berlaku, Anda memiliki hak untuk menarik persetujuan
                                Anda kapan saja. Anda dapat menarik persetujuan Anda kapan saja dengan menghubungi kami
                                menggunakan detail kontak yang disediakan di bagian “BAGAIMANA ANDA DAPAT MENGHUBUNGI
                                KAMI TENTANG PEMBERITAHUAN INI?” di bawah ini.</span>

                            <span>Namun, harap dicatat bahwa ini tidak akan mempengaruhi keabsahan pemrosesan sebelum
                                penarikannya atau, ketika hukum yang berlaku mengizinkan, tidak akan mempengaruhi
                                pemrosesan informasi pribadi Anda yang dilakukan berdasarkan alasan pemrosesan yang sah
                                selain persetujuan.</span>

                            <span>Informasi Akun</span>

                            <span>Jika Anda ingin meninjau atau mengubah informasi di akun Anda atau mengakhiri akun
                                Anda, Anda dapat:</span>

                            <li class="ml-8">Masuk ke pengaturan akun Anda dan memperbarui akun pengguna Anda.</li>
                            <span>Atas permintaan Anda untuk mengakhiri akun Anda, kami akan menonaktifkan atau
                                menghapus akun dan informasi Anda dari basis data aktif kami. Namun, kami mungkin
                                menyimpan beberapa informasi dalam file kami untuk mencegah penipuan, memecahkan
                                masalah, membantu penyelidikan apa pun, menegakkan ketentuan hukum kami dan/atau
                                mematuhi persyaratan hukum yang berlaku.</span>

                            <span>Cookie dan teknologi serupa: Sebagian besar browser web diatur untuk menerima cookie
                                secara default. Jika Anda mau, Anda biasanya dapat memilih untuk mengatur browser Anda
                                untuk menghapus cookie dan menolak cookie. Jika Anda memilih untuk menghapus cookie atau
                                menolak cookie, ini dapat mempengaruhi fitur atau layanan tertentu dari Layanan
                                kami.</span>

                            <span>Jika Anda memiliki pertanyaan atau komentar tentang hak privasi Anda, Anda dapat
                                mengirim email kepada kami di aran8276@gmail.com.</span>
                        </div>
                        <div class="flex flex-col space-y-4" id="7">
                            <h2 class="text-xl font-bold">7. KONTROL UNTUK FITUR DO-NOT-TRACK</h2>
                            <span>
                                Sebagian besar browser web dan beberapa sistem operasi seluler serta aplikasi seluler
                                menyertakan fitur atau pengaturan Do-Not-Track (“DNT”) yang dapat Anda aktifkan untuk
                                menandakan preferensi privasi Anda agar data tentang aktivitas penjelajahan online Anda
                                tidak dipantau dan dikumpulkan. Pada tahap ini, belum ada standar teknologi yang seragam
                                untuk mengenali dan menerapkan sinyal DNT yang telah diselesaikan. Oleh karena itu, kami
                                saat ini tidak menanggapi sinyal browser DNT atau mekanisme lain yang secara otomatis
                                mengkomunikasikan pilihan Anda untuk tidak dilacak secara online. Jika standar untuk
                                pelacakan online diadopsi yang harus kami ikuti di masa mendatang, kami akan memberi
                                tahu
                                Anda tentang praktik tersebut dalam versi revisi dari pemberitahuan privasi ini.
                            </span>
                        </div>
                        <div class="flex flex-col space-y-2" id="8">
                            <h2 class="text-xl font-bold">8. APAKAH KAMI MEMPERBARUI PEMBERITAHUAN INI?</h2>

                            <span>
                                Singkatnya: Ya, kami akan memperbarui pemberitahuan ini sesuai kebutuhan untuk tetap
                                mematuhi undang-undang yang relevan.
                            </span>

                            <span>
                                Kami dapat memperbarui pemberitahuan privasi ini dari waktu ke waktu. Versi yang
                                diperbarui
                                akan ditunjukkan dengan tanggal “Diperbarui” yang diperbarui di bagian atas
                                pemberitahuan
                                privasi ini. Jika kami membuat perubahan materi pada pemberitahuan privasi ini, kami
                                dapat
                                memberi tahu Anda baik dengan memposting pemberitahuan perubahan tersebut secara
                                mencolok
                                atau dengan mengirimkan pemberitahuan langsung kepada Anda. Kami mendorong Anda untuk
                                meninjau pemberitahuan privasi ini secara berkala untuk diberitahu tentang bagaimana
                                kami
                                melindungi informasi Anda.
                            </span>
                        </div>
                        <div class="flex flex-col space-y-2" id="9">
                            <h2 class="text-xl font-bold">9. BAGAIMANA ANDA DAPAT MENGHUBUNGI KAMI TENTANG
                                PEMBERITAHUAN INI?</h2>

                            <span>
                                Jika Anda memiliki pertanyaan atau komentar tentang pemberitahuan ini, Anda dapat
                                mengirim
                                email kepada kami di aran8276@gmail.com atau menghubungi kami melalui pos di:
                            </span>

                            <span>Aran8276 Tunjungsekar Malang, Jawa Timur 65142 Indonesia</span>
                        </div>
                        <div class="flex flex-col space-y-2" id="10">
                            <h2 class="font-bold text-xl">10. BAGAIMANA ANDA DAPAT MENINJAU, MEMPERBARUI, ATAU MENGHAPUS
                                DATA YANG KAMI KUMPULKAN DARI ANDA?</h2>

                            <span>Berdasarkan undang-undang yang berlaku di negara Anda, Anda mungkin memiliki hak untuk
                                meminta akses ke informasi pribadi yang kami kumpulkan dari Anda, detail tentang
                                bagaimana kami telah memprosesnya, memperbaiki ketidakakuratan, atau menghapus informasi
                                pribadi Anda. Anda juga mungkin memiliki hak untuk menarik persetujuan Anda terhadap
                                pemrosesan informasi pribadi Anda oleh kami. Hak-hak ini mungkin terbatas dalam beberapa
                                keadaan oleh hukum yang berlaku. Untuk meminta meninjau, memperbarui, atau menghapus
                                informasi pribadi Anda, silakan isi dan kirimkan permintaan akses subjek data.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="flex flex-col space-y-4">
                    <img src="/17aug.jpg" alt="Happy Indonesian Independence Day" class="self-center w-24" />
                    <span class="text-center">Happy Indonesian 17 August Independence Day</span>
                    <span class="text-center">Made with love by Zahran / SMKN6 Malang</span>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
