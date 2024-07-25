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
    <header class="">
        <livewire:navbar />
    </header>
    <main class="container flex justify-start py-32 mx-auto">
        <div class="flex flex-col space-y-4">
            <div class="">
                <h1 class="font-bold text-3xl text-gray-600">Kontak</h1>
            </div>
            <div class="flex justify-around space-x-10">
                <div class="w-[48rem]">
                    <form>
                        <div class="flex flex-col space-y-3">
                            <input class="bg-slate-200 rounded-xl pl-6 py-5 w-full" placeholder="Nama" type="text">
                            <input class="bg-slate-200 rounded-xl pl-6 py-5 w-full" placeholder="Email" type="email">
                            <textarea class="bg-slate-200 rounded-xl pl-6 py-5 h-32 w-full" placeholder="Pesan"></textarea>
                            <button type="button" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg p-4 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim
                                Pesan
                            </button>
                    </form>
                </div>
            </div>
            <div>
                <img class="rounded-xl" src="/mail-bg.jpg" alt="mail-bg">
            </div>
        </div>
        </div>
    </main>
</body>

</html>
