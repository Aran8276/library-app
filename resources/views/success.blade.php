<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>
    @vite('resources/css/app.css')
</head>



<body>
    <div class="flex justify-center h-screen items-center">
        <div class="flex flex-col space-y-8 py-28 px-28 shadow-lg border-[1.25px] rounded-xl">
            <div>
                <h1 class="text-gray-700 text-3xl font-bold text-center font-mono">Login Sukses</h1>
            </div>
            <div class="flex flex-col space-y-2">
                <label>Nama Depan</label>
                <input value="{{ $firstName }}" disabled
                    class="rounded-xl border-[1.7px] px-2 py-1 border-gray-600 shadow-lg">
                <label>Nama Belakang</label>
                <input value="{{ $lastName }}" disabled
                    class="rounded-xl border-[1.7px] px-2 py-1 border-gray-600 shadow-lg">
                <label>Nama Pengguna</label>
                <input value="{{ $username }}" disabled
                    class="rounded-xl border-[1.7px] px-2 py-1 border-gray-600 shadow-lg">
                <label>Email</label>
                <input value="{{ $email }}" disabled
                    class="rounded-xl border-[1.7px] px-2 py-1 border-gray-600 shadow-lg">
                <label>Kata Sandi</label>
                <section class="space-y-4">
                    <label for=cb
                        class="px-3 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-800 hover:cursor-pointer select-none">Toggle
                        Kata
                        Sandi</label>
                    <input type='checkbox' class="hidden" id=cb checked>
                    <div>
                        <input value="{{ $password }}" disabled
                            class="rounded-xl border-[1.7px] px-2 py-1 border-gray-600 shadow-lg">
                    </div>
                    <style>
                        input:checked+div {
                            display: none;
                        }
                    </style>
                </section>
            </div>
        </div>
    </div>

</body>

</html>
