<div class="flex flex-col space-y-4 max-w-[80rem]w-full">
    @csrf
    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        type="text" placeholder="Nama Depan" name="firstName" id="firstName" value="{{ old('firstName') }}">
    @error('firstName')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        type="text" placeholder="Nama Belakang" name="lastName" id="lastName" value="{{ old('lastName') }}">
    @error('lastName')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        placeholder="Nama Pengguna" type="text" name="username" id="username" value="{{ old('username') }}">
    @error('username')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        placeholder="Email" type="email" name="email" id="email" value="{{ old('email') }}">
    @error('email')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror

    <input class="border-white border-2 rounded-full bg-inherit placeholder:text-white px-4 py-2 w-full text-white"
        placeholder="Kata Sandi" type="password" name="password" id="password">
    @error('password')
        <span class="text-red-600 text-sm font-bold">{{ $message }}</span>
    @enderror
</div>
