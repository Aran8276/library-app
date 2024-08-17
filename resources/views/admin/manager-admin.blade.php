<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-32 mx-auto">
        <div class="flex flex-col space-y-6">
            <div class="flex flex-col space-y-4 w-[20rem] md:w-[80rem]mb-4">
                <h1 class="font-bold text-3xl text-gray-600">Dasbor Administrator</h1>
            </div>

            <div class="flex flex-col space-y-24 w-[20rem] md:w-[80rem]">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <h2 class="text-xl font-semibold px-8 py-4">Daftar Buku</h2>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NAMA BUKU
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    AKSI
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap max-w-[40rem] overflow-hidden">
                                        {{ $row['book_name'] }}
                                    </th>
                                    <td class="flex space-x-4 px-6 py-4 text-right">
                                        <a href="/admin/manager/{{ $row['book_id'] }}" wire:navigate
                                            class="font-medium text-blue-600 hover:underline">Edit</a>
                                        <a href="/admin/manager/{{ $row['book_id'] }}/delete"
                                            class="font-medium text-red-600 hover:underline">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <h2 class="text-xl font-semibold px-8 py-4">Daftar Pengguna</h2>
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    NAMA PENGGUNA
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    AKSI
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_data as $row)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap max-w-[40rem] overflow-hidden">
                                        {{ $row['username'] }}
                                    </th>
                                    <td class="flex space-x-4 px-6 py-4 text-right">
                                        <a href="/admin/manager/{{ $row['book_id'] }}/delete"
                                            class="font-medium text-red-600 hover:underline">Ban</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
