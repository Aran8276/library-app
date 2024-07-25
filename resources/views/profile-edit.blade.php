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
    <header class="">
        <livewire:navbar />
    </header>

    <main class="container flex justify-center py-48 mx-auto">
        <div class="flex justify-center items-center shadow-lg p-8 border-[1px] rounded-2xl">
            <div class="flex flex-col space-y-6 mb-2">
                <div>
                    <h1 class="font-bold text-3xl text-center text-gray-600">Edit Profil</h1>
                </div>
                <div class="flex justify-around space-x-12">
                    <div class="flex flex-col">
                        <img class="w-[215px] h-[215px] p-1 rounded-full border-opacity-50 object-contain"
                            src="{{ $src }}" onerror="standby()" id="foo">
                    </div>
                    <form action="{{ route('settings.updateProfile') }}" method="POST" enctype="multipart/form-data">
                        <div class="flex flex-col space-y-2 w-[20rem]">
                            <label>Nama Depan & Belakang</label>
                            <div class="flex space-x-[2rem]">
                                <input name="firstName" id="firstName"
                                    class="text-2xl w-[9rem] font-bold text-gray-700 border-2 border-black px-2 py-1 rounded-xl"
                                    value="{{ "$firstName " }}"></input>
                                <input name="lastName" id="lastName"
                                    class="text-2xl w-[9rem] font-bold text-gray-700 border-2 border-black px-2 py-1 rounded-xl"
                                    value="{{ " $lastName" }}"></input>
                            </div>
                            <label>Nama Pengguna</label>
                            <input class="text-xl font-bold opacity-50 border-2 border-black px-2 py-1 rounded-xl"
                                name="username" id="username" value="{{ $username }}"></input>
                            <label>Deskripsi</label>
                            <textarea class="border-2 border-black px-2 py-1 h-36 rounded-xl" name="description" id="description">{{ $description }}</textarea>
                            <div class="flex flex-col">
                                <label>Gambar Profil <span class="font-bold">(disarankan rasio 1:1)</span></label>
                                <div class="flex flex-col space-y-2">
                                    @csrf
                                    @method('PATCH')
                                    <div class="flex flex-col space-y-2">
                                        <input type="file" name="author_profile_src" class="w-full" />
                                        @error('author_profile_src')
                                            <span class="text-sm text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="px-3 py-2 hover:bg-blue-800 bg-blue-600 rounded text-sm text-white font-medium block w-full transition-all duration-300">
                                Simpan
                            </button>
                            <a href="#" class="text-blue-500 hover:underline">Ganti email dan password</a>
                            <span>ID Pengguna <span class="text-red-500">( tidak bisa diganti )</span>:
                                {{ $id }}
                                @error('firstName')
                                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                @error('lastName')
                                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                @error('username')
                                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                @error('email')
                                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                                @enderror
                                @error('password')
                                    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
                                @enderror

                    </form>
                    <form action="{{ route('settings.deleteProfileImage') }}" method="GET">
                        @csrf
                        <button type="submit"
                            class="px-3 py-2 hover:bg-yellow-800 bg-yellow-600 rounded text-sm text-white font-medium block w-full transition-all duration-300">
                            Hapus Gambar Profil
                        </button>
                    </form>


                </div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>

{{-- 
--}}
