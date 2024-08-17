<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <header class="sticky top-0 z-40 bg-white">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-16 mx-auto">
        <div class="flex flex-col space-y-4 w-[20rem] md:w-[80rem]">

            <!-- Heading & Searchbar -->
            <div class="flex flex-col space-y-4 w-fulls mb-4">
                <h1 class="font-bold text-3xl text-gray-600">Buku</h1>
                <livewire:search-form>
            </div>

            <!-- Book Columns -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach ($data as $row)
                    <livewire:book-card title="{{ $row['book_name'] }}" desc="{{ $row['book_description'] }}"
                        href="/book/{{ $row['book_id'] }}" author="{{ $row['book_author_id'] }}"
                        src="{{ $row['book_cover_src'] }}" />
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pt-24">
                <livewire:pagination pages="48" results="1" currentpage="1" from="1" to="10"
                    of="40">
            </div>
        </div>
    </main>
</body>

</html>
