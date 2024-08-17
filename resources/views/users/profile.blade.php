<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas | Perpustakaan</title>
    @vite('resources/css/app.css')
</head>

<script>
    function standby() {
        document.getElementById('foo').src = '/user-temp.png'
    }
</script>


<body>
    <header class="sticky top-0 z-50 bg-white">
        <livewire:navbar />
    </header>

    <main class="container flex justify-center py-12 md:py-48 mx-auto">
        <div
            class="flex justify-center items-center shadow-none border-none md:shadow-lg px-4 py-8 md:p-8 md:border-[1px] rounded-2xl">
            <div class="flex flex-col space-y-6 mb-2 w-fit">
                <div>
                    <h1 class="font-bold text-3xl text-center text-gray-600">Profil Pengguna</h1>
                </div>
                <div
                    class="flex flex-col text-center md:text-start md:flex-row items-center md:items-start md:justify-around md:space-x-12">
                    <div class="flex flex-col">
                        <img class="w-[215px] h-[215px] p-1 rounded-full border-opacity-50 object-contain"
                            src="{{ $src }}" onerror="standby()" id="foo">
                    </div>
                    <div class="flex flex-col space-y-2 w-[20rem]">
                        <h1 class="text-2xl font-bold text-gray-700">{{ "$firstName $lastName" }}</h1>
                        <h2 class="text-xl font-bold opacity-50">{{ $username }}</h2>
                        <span class="">
                            {{ $description }}
                        </span>
                        <div class="flex flex-col space-y-4">
                            <span class="text-sm md:text-base">ID Pengguna: {{ $id }}</span>
                            @if (Auth::user()->getRawOriginal('id') == $id)
                                <a wire:navigate href="/user/{{ $id }}/edit">
                                    <button type="button"
                                        class="w-full md:w-fit inline-flex items-center justify-center px-4 py-4 md:py-2 font-bold md:text-sm md:font-medium tracking-wide text-white transition-colors duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:shadow-outline focus:outline-none">
                                        Edit Profil
                                    </button> </a>
                        </div>
                    @else
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
