<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $search_query }} | Search Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-32 mx-auto">
        <div class="flex flex-col space-y-4 max-w-[80rem]">
            <div class="flex flex-col space-y-4 max-w-[80rem]mb-4">
                <h1 class="font-bold text-3xl text-gray-600 break-words">Hasil Pencarian: {{ $search_query }}
                </h1>
                <form action="search">
                    <div class="flex space-x-4 justify-around">
                        <input class="bg-slate-200 min-w-[75rem] rounded-xl pl-4 py-2 h-fit" name="query"
                            maxlength="128" placeholder="Cari buku..." value="{{ $search_query }}" type="text">
                        <button type="submit"
                            class="self-center text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
            <div class="grid grid-cols-4 gap-8">
                @foreach ($data as $row)
                    {{-- @livewire('book-card') --}}
                    {{-- https://m.media-amazon.com/images/I/71UFGrJ35vL._SL1100_.jpg --}}
                    <livewire:book-card title="{{ $row['book_name'] }}" desc="{{ $row['book_description'] }}"
                        href="/book/{{ $row['book_id'] }}" author="{{ $row['book_author_id'] }}"
                        src="{{ $row['book_cover_src'] }}" />
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
