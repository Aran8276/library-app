<div class="flex flex-col space-y-4 max-w-[80rem]w-full">
    @csrf
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
    @enderror

</div>
