    <div class="flex flex-col space-y-2 w-[20rem]">
        <label>Nama Depan & Belakang</label>
        <div class="flex space-x-[2rem]">
            <input class="text-2xl w-[9rem] font-bold text-gray-700 border-2 border-black px-2 py-1 rounded-xl"
                value="{{ "$firstName " }}"></input>
            <input class="text-2xl w-[9rem] font-bold text-gray-700 border-2 border-black px-2 py-1 rounded-xl"
                value="{{ " $lastName" }}"></input>
        </div>
        <label>Nama Pengguna</label>
        <input class="text-xl font-bold opacity-50 border-2 border-black px-2 py-1 rounded-xl"
            value="{{ $username }}"></input>
        <label>Deskripsi</label>
        <textarea class="border-2 border-black px-2 py-1 h-36 rounded-xl">{{ $description }}</textarea>
        <div class="flex flex-col">
            <label>Gambar Profil <span class="font-bold">(disarankan rasio 1:1)</span></label>
            <div class="flex flex-col space-y-2" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex flex-col space-y-2">
                    <input type="file" accept="image/*" name="author_profile_src" class="w-full" />
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

        <span>ID Pengguna <span class="text-red-500">( tidak bisa diganti )</span>:
            {{ $id }}
