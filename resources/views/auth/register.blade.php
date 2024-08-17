<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <div class="flex space-x-0 md:space-x-12 w-full h-full">
            <div
                class="hidden md:flex justify-center bg-[url('/public/library-regist.jpg')] bg-cover items-center flex-1 h-full shadow-lg">
            </div>
            <div class="flex justify-center items-start mt-24 md:mt-0 md:items-center flex-1 h-full">
                <div
                    class="shadow-none border-none md:shadow-lg p-0 md:p-12 rounded-3xl md:border border-neutral-200/60 flex flex-col space-y-5">
                    <a wire:navigate href="/" class="flex md:w-24 self-center mb-12 md:mb-2 w-36">
                        <img src="/favicon.ico" alt="Logo" class="">
                    </a>
                    <h1 class="text-4xl md:text-3xl text-center md:pb-0 md:text-start font-bold">Daftar</h1>
                    <div class="w-[20rem]">
                        <span class="hidden md:block">Sudah memiliki akun? <a wire:navigate
                                class="text-blue-500 hover:underline" href="/login">Masuk</a></span>
                    </div>
                    <form action="{{ route('auth.registerAction') }}" method="POST">
                        @csrf
                        @if (session('error'))
                            @livewire('notifier')
                        @endif
                        <livewire:register-form />
                        <div class="flex md:hidden pt-12 justify-center">
                            <a wire:navigate class="text-blue-500 hover:underline" href="/login">Sudah memiliki akun?
                                Masuk</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
