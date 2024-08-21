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
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>
    <main class="container flex justify-center mx-auto mb-12 md:mb-auto">
        <div class="flex flex-col space-y-4 w-[20rem] md:w-[80rem]">
            <div>
                <h1 class="font-bold text-3xl text-center text-gray-600 py-12 w-full overflow-clip break-words">Buku
                    {{ $data['book_name'] }}</h1>
            </div>
            <div class="flex flex-col space-y-12 md:flex-row md:justify-around md:space-x-24 md:space-y-0">
                <div
                    class="flex flex-col space-y-3 shadow-lg p-6 rounded-2xl border border-neutral-200/60 w-full md:w-[300px]">
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
                        class="flex flex-col py-4 md:py-0 md:flex-row md:justify-between border-[1px] w-full md:w-[52rem] shadow-lg border-neutral-200/60 rounded-lg h-[59rem] md:h-[28rem]">
                        <div class="flex-1 p-4">
                            <div name="bookContent1"
                                class="h-[26rem] border border-gray-600 p-4 rounded-lg overflow-scroll resize-none w-full transition-all focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 "
                                placeholder="Ketik Konten Kiri Disini">{{ $data ? $data->book_content_1 : '' }}</div>
                        </div>
                        <div class="flex-1 p-4">
                            <div name="bookContent2"
                                class="h-[26rem] border border-gray-600 p-4 rounded-lg overflow-scroll resize-none w-full transition-all focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 "
                                placeholder="Ketik Konten Kanan Disini">{{ $data ? $data->book_content_2 : '' }}</div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $data ? $data->book_id : '' }}">
                    <div class="flex justify-around space-x-2">
                        @error('bookContent1')
                            <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                        @enderror
                        @error('bookContent2')
                            <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>
    </main>
</body>

</html>
