<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<script>
    function standby() {
        document.getElementById('foo').src = '/user-temp.png'
    }
</script>

<body>
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>

    <main class="container flex justify-center py-12 md:py-48 mx-auto">
        <div
            class="flex justify-center items-center shadow-none border-none md:shadow-lg px-5 py-8 md:p-8 md:border-[1px] rounded-2xl">
            <div class="flex flex-col space-y-4 mb-2">
                <div>
                    <h1 class="font-bold text-3xl text-center text-gray-600">Edit Profil</h1>
                </div>
                <div
                    class="flex flex-col items-center md:items-start md:flex-row md:justify-around space-x-0 md:space-x-12">
                    <div class="flex flex-col">
                        <img class="w-[215px] h-[215px] p-1 rounded-full border-opacity-50 object-contain"
                            src="{{ $src }}" onerror="standby()" id="foo">
                    </div>
                    <form action="{{ route('settings.updateProfile') }}" method="POST" enctype="multipart/form-data">
                        <div class="flex flex-col space-y-4 md:space-y-2 w-[20rem]">
                            <label class="hidden md:block" for="firstName">Nama Depan & <label
                                    for="lastName">Belakang</label></label>
                            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0">
                                <label class="inline text-xl md:relative md:hidden" for="firstName">Nama
                                    Depan</label>
                                <div class="md:pr-[0.5rem]">
                                    <input name="firstName" id="firstName" placeholder="Fajar"
                                        class=" flex w-full h-10 px-3 py-2 md:text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                        value="{{ "$firstName " }}">
                                </div>
                                </input>
                                <label class="inline text-xl md:hidden" for="lastName">Nama Belakang</label>
                                <div class="md:pl-[0.5rem]">
                                    <input name="lastName" id="lastName" placeholder="Ihsan"
                                        class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                        value="{{ " $lastName" }}">
                                </div></input>
                            </div>
                            @error('firstName')
                                <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                            @enderror
                            @error('lastName')
                                <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                            @enderror
                            <div class="flex flex-col space-y-2">
                                <label class="text-xl md:text-base" for="username">Nama Pengguna</label>
                                <input placeholder="VioKenceng"
                                    class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
                                    name="username" id="username" value="{{ $username }}">
                                @error('username')
                                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                </input>
                            </div>

                            <div class="flex flex-col space-y-2 w-full max-w-xs mx-auto">
                                <label class="text-xl md:text-base" for="description">Biodata</label>
                                <textarea x-data="{
                                    resize() {
                                        $el.style.height = '0px';
                                        $el.style.height = $el.scrollHeight + 'px'
                                    }
                                }" x-init="resize()" @input="resize()" type="text" name="description"
                                    id="description" placeholder="I like cars and nothing else. Perhaps you should like cars too!"
                                    class="flex w-full h-auto min-h-[160px] max-h-[320px] md:min-h-[80px] md:max-h-[160px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">{{ $description }}</textarea>
                            </div>

                            <div class="flex flex-col space-y-2 pt-2">
                                <label>Gambar Profil <span class="font-bold">(disarankan rasio
                                        1:1)</span></label>
                                <div class="flex flex-col space-y-2">
                                    @csrf
                                    @method('PATCH')
                                    <div class="flex flex-col space-y-2">
                                        <input type="file" hidden name="author_profile_src" id="fileupload"
                                            class="w-full" />

                                        <div class="flex flex-col space-y-2 md:w-36">
                                            <label for="fileupload"
                                                class="w-full font-bold cursor-pointer inline-flex items-center justify-center px-4 py-3 md:py-2 md:text-sm md:font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">Upload
                                                Gambar</label>

                                            <button type="button" id="clear-file"
                                                class="w-full items-center justify-center px-3 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-red-600 hover:bg-red-500 focus:ring-2 focus:ring-offset-2 focus:ring-red-500 focus:shadow-outline focus:outline-none hidden">Batalkan
                                                Gambar</button>
                                        </div>
                                        <span id="file-name" class="text-sm text-gray-600">Belum ada file gambar yang
                                            dipilih.</span>

                                        @error('author_profile_src')
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
                                </div>
                            </div>

                            <div class="pt-8">
                                <button type="submit"
                                    class="w-full inline-flex items-center justify-center px-4 py-5 md:py-2 font-bold md:text-sm md:font-medium tracking-wide text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:shadow-outline focus:outline-none">
                                    Simpan
                                </button>
                            </div>
                    </form>
                    <form action="{{ route('settings.deleteProfileImage') }}" method="GET">
                        @csrf
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center px-4 py-5 md:py-2 font:bold md:text-sm md:font-medium tracking-wide text-white transition-colors duration-200 bg-yellow-500 rounded-md hover:bg-yellow-600 focus:ring-2 focus:ring-offset-2 focus:ring-yellow-600 focus:shadow-outline focus:outline-none">
                            Hapus Gambar Profil
                        </button>
                    </form>

                    <a href="#" class="text-blue-500 hover:underline">Ganti email dan password</a>
                    <span>ID Pengguna <span class="text-red-500">( tidak bisa diganti )</span>:
                        {{ $id }}
                        @error('email')
                            <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                        @enderror
                        @error('password')
                            <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                        @enderror
                </div>
            </div>
        </div>
    </main>
</body>


</html>

{{-- 
--}}
