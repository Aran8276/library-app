<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="flex justify-center items-center h-screen bg-gradient-to-t from-orange-700 via-orange-400 to-amber-700">
        <div
            class="flex justify-center items-center rounded-3xl shadow-lg p-6 bg-cover bg-theme-bmw w-[60rem] h-[36rem]">

            <div
                class="rounded-xl shadow-lg py-6 px-12 bg-opacity-60 border-white border-2 backdrop-filter backdrop-blur-lg">
                <div class="text-center text-white font-bold text-2xl my-2">
                    <h1>Login</h1>
                </div>
                <form action="{{ route('auth.loginAction') }}" method="POST">
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
                </form>
            </div>

        </div>
    </main>

</body>

</html>
