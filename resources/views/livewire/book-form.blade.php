<div class="flex flex-col space-y-3 mb-12">
    @csrf
    <div class="flex flex-col space-y-3">
        <div
            class="flex flex-col md:flex-row md:justify-between border-[1px] shadow-lg border-neutral-200/60 rounded-lg h-[32rem]">
            <div class="flex-1 p-4">
                <textarea name="bookContent1"
                    class="h-full border border-gray-600 p-4 rounded-lg overflow-scroll resize-none w-full transition-all focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 "
                    placeholder="Ketik Konten Kiri Disini">{{ $data ? $data->book_content_1 : '' }}</textarea>
            </div>
            <div class="flex-1 p-4">
                <textarea name="bookContent2"
                    class="h-full border border-gray-600 p-4 rounded-lg overflow-scroll resize-none w-full transition-all focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 "
                    placeholder="Ketik Konten Kanan Disini">{{ $data ? $data->book_content_2 : '' }}</textarea>
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

    <div class="flex justify-center">
        <div class="flex flex-col space-y-6 w-[20rem] shadow-lg p-6 rounded-lg border border-neutral-200/60">
            <div class="w-full max-w-xs mx-auto">
                <h1>Detail Buku</h1>
            </div>

            <div class="w-full max-w-xs mx-auto">
                <input name="bookName" placeholder="Nama Buku" maxlength="150"
                    value="{{ $data ? $data->book_name : '' }}" type="text"
                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50" />
                @error('bookName')
                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="w-full max-w-xs mx-auto">
                <textarea type="text" name="bookDescription" placeholder="Deskripsi Buku"
                    class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 placeholder:text-neutral-400 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50">{{ $data ? $data->book_description : '' }}</textarea>
                @error('bookName')
                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                @enderror
            </div>
            @if ($isCreate)
                <div class="flex flex-col space-y-2">
                    <input type="file" accept="image/*" hidden name="book_cover_src" id="fileupload"
                        class="w-full" />

                    <div class="flex flex-col space-y-2 w-36">
                        <label for="fileupload"
                            class="w-full cursor-pointer inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">Upload
                            Gambar</label>

                        <button type="button" id="clear-file"
                            class="w-full items-center justify-center px-3 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-red-600 hover:bg-red-500 focus:ring-2 focus:ring-offset-2 focus:ring-red-500 focus:shadow-outline focus:outline-none hidden">Batalkan
                            Gambar</button>
                    </div>
                    <span id="file-name" class="text-sm text-gray-600 truncate overflow">Belum ada file gambar
                        yang
                        dipilih.</span>

                    @error('book_cover_src')
                        <span class="text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <script>
                    document.getElementById('fileupload').addEventListener('change', function() {
                        var fileName = this.files[0].name;
                        document.getElementById('file-name').textContent = fileName;
                        document.getElementById('clear-file').classList.remove('hidden'); // Show the clear button
                    });

                    document.getElementById('clear-file').addEventListener('click', function() {
                        var fileInput = document.getElementById('fileupload');
                        fileInput.value = ''; // Clear the file input
                        document.getElementById('file-name').textContent =
                            'Belum ada file gambar yang dipilih.'; // Clear the displayed file name
                        document.getElementById('clear-file').classList.add('hidden'); // Hide the clear button
                    });
                </script>
            @else
            @endif
            <button type="submit"
                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:shadow-outline focus:outline-none">
                Simpan
            </button>


        </div>
    </div>
</div>
