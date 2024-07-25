<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="flex justify-center items-center h-screen bg-gradient-to-t from-orange-700 via-orange-400 to-amber-700">
        <div
            class="flex justify-center items-center rounded-3xl shadow-lg p-6 bg-cover bg-theme-bmw w-[60rem] h-[36rem]">
            <div
                class="rounded-xl shadow-lg py-6 px-12 bg-opacity-60 border-white border-2 backdrop-filter backdrop-blur-lg">
                <div class="text-center text-white font-bold text-2xl my-2">
                    <h1>Daftar</h1>
                </div>
                <form action="{{ route('auth.registerAction') }}" method="POST">
                    @csrf
                    @if (session('error'))
                        @livewire('notifier')
                    @endif
                    @livewire('register-form')
                    <div class="w-72">
                    </div>

                    <div class="w-full mt-4">
                        <button type="submit"
                            class="bg-white font-bold hover:bg-gray-400 focus:ring-4 focus:ring-blue-300 rounded-full text-sm px-5 py-3.5 me-2 mb-2 focus:outline-none w-full">Buat
                            Akun</button>
                    </div>

                    <div class="flex justify-center my-2">
                        <a wire:navigate href="/auth/login" class="text-sm text-white hover:underline">Sudah punya akun?
                            <span class="font-bold">Masuk</span></a>
                    </div>
                </form>
            </div>

        </div>
    </main>

</body>

</html>


{{-- 
<body class="bg-gray-100">
    <main class="px-6 md:px-64 lg:px-[32rem]">
        <section class="flex justify-center items-center min-h-screen">
            <div class="flex flex-col gap-4 w-full">
                @if (session('success'))
                    <div role="alert" class="alert alert-success bg-green-600 bg-opacity-25">
                        <i class="fas fa-info-circle text-green-600"></i>
                        <span class="text-green-600 font-medium text-sm">{{ session('success') }}</span>
                    </div>
                @elseif (session('error'))
                    <div role="alert" class="alert alert-success bg-red-600 bg-opacity-25">
                        <i class="fas fa-info-circle text-red-600"></i>
                        <span class="text-red-600 font-medium text-sm">{{ session('error') }}</span>
                    </div>
                @endif
                <div class="py-6 px-4 bg-white rounded-lg border border-gray-200 w-full shadow-md">
                    <h1 class="text-center font-semibold">Library App - Register</h1>
                    <hr class="my-3 w-full bg-gray-100">
                    <form action="{{ route('auth.registerAction') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="flex flex-col gap-3">
                            <div class="flex flex-col gap-2">
                                <label class="font-medium text-sm">First Name</label>
                                <input type="text" name="firstname" placeholder="First Name"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                                @error('firstname')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-medium text-sm">Last Name</label>
                                <input type="text" name="lastname" placeholder="Last Name"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                                @error('lastname')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-medium text-sm">Username</label>
                                <input type="text" name="username" placeholder="Username"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                                @error('username')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-medium text-sm">Email</label>
                                <input type="email" name="email" placeholder="Email"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                                @error('email')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="font-medium text-sm">Password</label>
                                <input type="password" name="password" placeholder="Password"
                                    class="px-3 py-2 border border-gray-300 rounded text-sm placeholder-gray-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-600" />
                                @error('password')
                                    <span class="text-sm text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex flex-col gap-3 mt-2">
                                <button
                                    class="px-3 py-2 bg-gray-800 rounded text-sm text-white font-medium block w-full transition-all duration-300">Register</button>
                                <p class="text-sm text-center">Already have account?
                                    <a href="{{ route('auth.login') }}" class="text-blue-500 underline">Login here</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script>
        setTimeout(() => {
            const alertElement = document.getElementsByClassName('alert')[0];
            if (alertElement) {
                alertElement.style.display = 'none';
            }
        }, 3000);
    </script> 
--}}
