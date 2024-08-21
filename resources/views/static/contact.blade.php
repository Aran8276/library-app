<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-16 mx-auto">
        <div class="flex flex-col space-y-12 w-[20rem] md:w-[80rem]">
            <div class="flex flex-col space-y-4 w-full mb-0 md:mb-4">
                <h1 class="font-bold text-3xl text-gray-600">Ada Pertanyaan?</h1>
                <h2 class="text-gray-500">Isi formulir berikut dan kami akan menjawab dalam 24-48 jam kerja.</h2>
            </div>
            <div class="mx-auto shadow-lg p-6 rounded-xl border border-neutral-200/60 ">
                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Form -->
                    <form>
                        <div class="grid gap-4 lg:gap-6">
                            <!-- Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                <div>
                                    <label for="hs-firstname-hire-us-2"
                                        class="block mb-2 text-sm text-gray-700 font-medium s:text-white">Nama
                                        Depan</label>
                                    <input type="text" name="hs-firstname-hire-us-2" id="hs-firstname-hire-us-2"
                                        placeholder="Selva"
                                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50">
                                </div>

                                <div>
                                    <label for="hs-lastname-hire-us-2"
                                        class="block mb-2 text-sm text-gray-700 font-medium s:text-white">Nama
                                        Belakang</label>
                                    <input type="text" name="hs-lastname-hire-us-2" id="hs-lastname-hire-us-2"
                                        placeholder="Vio"
                                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50">
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div>
                                <label for="hs-work-email-hire-us-2"
                                    class="block mb-2 text-sm text-gray-700 font-medium s:text-white">
                                    Email</label>
                                <input type="email" name="hs-work-email-hire-us-2" id="hs-work-email-hire-us-2"
                                    placeholder="johndoe28@gmail.com" autocomplete="email"
                                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50">
                            </div>

                            <div>
                                <label for="hs-about-hire-us-2"
                                    class="block mb-2 text-sm text-gray-700 font-medium s:text-white">Pesan</label>
                                <textarea id="hs-about-hire-us-2" name="hs-about-hire-us-2" rows="4"
                                    class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 placeholder:text-neutral-400 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50"></textarea>
                            </div>
                        </div>
                        <!-- End Grid -->

                        <!-- Checkbox -->
                        <div class="mt-3 flex">
                            <div class="flex">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="shrink-0 mt-1.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 s:bg-neutral-800 s:border-neutral-700 s:checked:bg-blue-500 s:checked:border-blue-500 s:focus:ring-offset-gray-800">
                            </div>
                            <div class="ms-3">
                                <label for="remember-me"
                                    class="text-sm text-gray-600 truncate s:text-neutral-400">Dengan
                                    mengirim formulir ini Saya telah menyetujui <a
                                        class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium s:text-blue-500"
                                        href="/about#1">Kebijakan Privasi</a></label>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <div class="mt-6 grid">
                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Kirim
                                Formulir</button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </main>
</body>

</html>
