<div class="flex flex-col space-y-4">
    @csrf
    <div>
        <input type="text" placeholder="Nama Pengguna" name="username"
            class=" flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50" />

    </div>
    @error('username')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <div>
        <input type="password" placeholder="Kata Sandi" name="password"
            class=" flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all disabled:cursor-not-allowed disabled:opacity-50" />
    </div>
    @error('password')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <div class="flex items-center mb-4">
        <input id="remember" type="checkbox" name="remember" checked
            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-neutral-900 focus:ring-neutral-900">
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Ingat saya</a></label>
    </div>
    <div class="w-full pt-4">
        <button type="submit"
            class="w-full inline-flex items-center justify-center px-4 py-3 font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
            Masuk
        </button>
    </div>
</div>


{{-- @csrf
<input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
    placeholder="Email" type="email" name="email" id="email" value="{{ old('email') }}">
@error('email')
    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
@enderror

@csrf
<input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
    placeholder="Kata Sandi" type="password" name="password" id="password">
@error('password')
    <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
@enderror --}}
