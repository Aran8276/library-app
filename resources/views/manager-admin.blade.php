<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-32 mx-auto">
        <div class="flex flex-col space-y-4 max-w-[80rem]">
            <div class="flex flex-col space-y-4 max-w-[80rem]mb-4">
                <h1 class="font-bold text-3xl text-gray-600">Administrator</h1>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                NAMA BUKU
                            </th>
                            <th scope="col" class="text-center py-3">
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

            <div class="grid grid-cols-4 gap-8">
                {{-- @foreach ($data as $row) --}}
                {{-- @livewire('book-card') --}}
                {{-- https://m.media-amazon.com/images/I/71UFGrJ35vL._SL1100_.jpg --}}
                {{-- <livewire:book-card title="{{ $row['book_name'] }}" desc="{{ $row['book_description'] }}"
                        href="/book/{{ $row['book_id'] }}" author="{{ $row['book_author_id'] }}"
                        src="{{ $row['book_cover_src'] }}" /> --}}
                {{-- @endforeach --}}
            </div>
        </div>
    </main>
</body>

</html>
