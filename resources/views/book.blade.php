<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $data['book_name'] }} | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<script>
    function standby(event) {
        event.target.src = '/book-placeholder.svg'
    }
</script>

<body>
    <header class="">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center py-32 mx-auto">
        <div class="flex flex-col space-y-4 max-w-[80rem]">
            <div>
                <h1 class="font-bold text-3xl text-center text-gray-600 w-full overflow-clip break-words">Buku
                    {{ $data['book_name'] }}</h1>

            </div>
            <div class="flex justify-around space-x-24">
                <div class="flex flex-col space-y-3 w-[300px]">
                    <div class="w-full">
                        <img class="w-full rounded-sm" src="/storage/{{ $data['book_cover_src'] }}"
                            onerror="standby(event)">
                    </div>
                    <h1 class="font-bold text-lg text-gray-700 max-w-full break-words">
                        {{ $data['book_name'] }}</h1>
                    <span class="text-gray-700 select-none font-bold w-fit">Author:
                        <a wire:navigate href="/user/{{ $author_data['id'] }}"
                            class="font-normal hover:underline">{{ $author_data['username'] }}</a>
                    </span>
                    <span class="text-gray-700 select-none font-bold w-fit">ID Buku:
                        <span class="select-all font-normal">{{ $id }}</span>
                    </span>
                    <span class="w-full">
                        {{ $data['book_description'] }}
                    </span>
                </div>
                <div class="flex flex-col space-y-3">
                    <div
                        class="flex justify-around text-justify space-x-4 border-[1px] border-black px-4 rounded-sm h-[30rem]">
                        <div class="p-2 w-[20rem] overflow-scroll">
                            {{ $data['book_content_1'] }}
                        </div>
                        <div class="p-2 w-[20rem] overflow-scroll">
                            {{ $data['book_content_2'] }}
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>
