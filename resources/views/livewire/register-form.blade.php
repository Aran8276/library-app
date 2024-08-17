<div class="flex flex-col space-y-4">
    @csrf
    <div class="flex space-y-4 md:space-y-0 flex-col md:flex-row md:space-x-4">
        <input type="text" placeholder="Nama Depan" name="firstName"
            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
        <input type="text" placeholder="Nama Belakang" name="lastName"
            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    </div>
    @error('firstName')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    @error('lastName')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <div>
        <input type="text" placeholder="Nama Pengguna" name="username"
            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    </div>
    @error('username')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <div>
        <input type="email" placeholder="Email" name="email"
            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    </div>
    @error('email')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <div>
        <input type="password" placeholder="Kata Sandi" name="password"
            class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    </div>
    @error('password')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <div class="flex items-center mb-4">
        <input id="policy" required type="checkbox"
            oninvalid="this.setCustomValidity('Silahkan membaca Syarat & Ketentuan sebelum melanjutkan.')"
            class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-neutral-900 focus:ring-neutral-900">
        <label for="policy" class="ml-2 text-sm font-medium text-gray-900">Saya telah menyetujui <a wire:navigate
                class="hover:underline text-blue-500" wire:navigate href="/about#1">Syarat & Ketentuan.</a></label>
    </div>
    <div class="w-full pt-4">
        <button type="submit"
            class="w-full inline-flex items-center justify-center px-4 py-3 font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
            Buat Akun
        </button>
    </div>
</div>

{{-- <div class="flex flex-col space-y-4 w-[20rem] md:w-[80rem]w-full">
    @csrf
    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        type="text" placeholder="Nama Depan"  id="firstName" value="{{ old('firstName') }}">

    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        type="text" placeholder="Nama Belakang"  id="lastName" value="{{ old('lastName') }}">
    

    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        placeholder="Nama Pengguna" type="text"  id="username" value="{{ old('username') }}">


    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        placeholder="Email" type="email"  id="email" value="{{ old('email') }}">


    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        placeholder="Kata Sandi" type="password"  id="password">
</div> --}}
