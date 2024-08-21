<div class="flex flex-col">
    <label>Gambar Profil <span class="font-bold">(disaranakan rasio 1:1)</span></label>
    <form action="{{ route('settings.updateProfile') }}" class="flex flex-col space-y-2" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="flex flex-col space-y-2">
            <input type="file" accept="image/*" name="author_profile_src" class="w-full" />
            @error('author_profile_src')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit"
            class="px-3 py-2 hover:bg-blue-800 bg-blue-600 rounded text-sm text-white font-medium block w-full transition-all duration-300">
            Simpan
        </button>
    </form>

</div>
