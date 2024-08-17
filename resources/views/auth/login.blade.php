<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="flex space-x-0 md:space-x-12 w-full h-full">
            <div class="flex justify-center items-start mt-24 md:mt-0 md:items-center flex-1 h-full">
                <div
                    class="shadow-none border-none md:shadow-lg p-0 md:p-12 rounded-3xl md:border border-neutral-200/60 flex flex-col space-y-5">
                    <a wire:navigate href="/" class="flex md:w-24 self-center mb-12 w-36">
                        <img src="/favicon.ico" alt="Logo" class="">
                    </a>
                    <h1 class="text-4xl md:text-3xl text-center md:pb-0 md:text-start font-bold">Masuk</h1>
                    <div class="w-[20rem]">
                        <span class="hidden md:block">Belum memiliki akun? <a wire:navigate
                                class="text-blue-500 hover:underline" href="/register">Daftar</a></span>
                    </div>
                    <form action="{{ route('auth.loginAction') }}" method="POST">
                        @csrf
                        @if (session('error'))
                            @livewire('notifier')
                        @endif
                        <livewire:login-form />
                        <div class="flex md:hidden pt-12 justify-center">
                            <a wire:navigate class="text-blue-500 hover:underline" href="/register">Belum
                                memiliki akun?</a>
                        </div>
                    </form>
                </div>
            </div>
            <div
                class="hidden md:flex justify-center bg-[url('/public/library-login.jpg')] bg-cover items-center flex-1 h-full shadow-lg">
            </div>

        </div>
    </div>
</body>

{{-- <form action="{{ route('auth.loginAction') }}" method="POST">
    @csrf
    @if (session('error'))
        @livewire('notifier')
    @endif
    @livewire('login-form')
    <div class="flex justify-center space-x-24 text-sm text-white my-3">
        <div class="space-x-1 my-1 float-start">
            <input type="checkbox"
                class="text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                id="remember">
            <label for="remember">Ingat Saya</label>
        </div>
        <div class="float-end my-1">
            <a href="#" class="hover:underline">Lupa Kata Sandi?</a>
        </div>

    </div>

    <div class="w-full mt-4">
        <button type="submit"
            class="bg-white font-bold hover:bg-gray-400 focus:ring-4 focus:ring-blue-300 rounded-full text-sm px-5 py-3.5 me-2 mb-2 focus:outline-none w-full">Masuk</button>
    </div>

    <div class="flex justify-center my-2">
        <a wire:navigate href="/auth/register" class="text-sm text-white hover:underline">Tidak punya
            akun?
            <span class="font-bold">Daftar</span></a>
    </div>
</form> --}}


</html>
