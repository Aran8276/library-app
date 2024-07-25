<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku | Perpustakaan</title>
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
                <h1 class="font-bold text-3xl text-center text-gray-600">Edit Buku</h1>
            </div>
            <form action="{{ route('admin.update') }}" enctype="multipart/form-data" method="POST">
                @method('PATCH')
                <div class="flex flex-col space-y-12">
                    <div class="flex flex-col space-y-3">
                        <div
                            class="flex justify-around text-justify space-x-4 border-[1px] border-black px-4 rounded-sm h-[30rem]">
                            @csrf
                            <textarea name="bookContent1" class="mt-4 p-2 w-[20rem] h-[28rem] rounded-lg overflow-scroll resize-none"
                                placeholder="Ketik Konten Kiri Disini">{{ $data->book_content_1 }}</textarea>
                            @csrf
                            <textarea name="bookContent2" class="mt-4 p-2 w-[20rem] h-[28rem] rounded-lg overflow-scroll resize-none"
                                placeholder="Ketik Konten Kanan Disini">{{ $data->book_content_2 }}</textarea>
                        </div>
                        @csrf
                        <input type="hidden" name="id" value={{ $data->book_id }}>
                        <div class="flex justify-around space-x-2">
                            @error('bookContent1')
                                <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                            @enderror
                            @error('bookContent2')
                                <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="flex flex-col space-y-6">
                        @csrf
                        <input name="bookName" value="{{ $data->book_name }}"
                            class="bg-slate-200 rounded-xl pl-6 py-5 w-full" placeholder="Nama Buku" type="text">
                        @error('bookName')
                            <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                        @enderror

                        @csrf
                        <textarea name="bookDescription" class="bg-slate-200 rounded-xl pl-6 py-5 w-full h-[12rem]" placeholder="Deskripsi Buku"
                            type="text">{{ $data->book_description }}</textarea>
                        @error('bookName')
                            <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                        @enderror

                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg p-4 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Edit Buku
                        </button>
                    </div>
            </form>
        </div>
    </main>
</body>

</html>
