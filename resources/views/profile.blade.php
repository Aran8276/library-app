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
    <header class="">
        <livewire:navbar />
    </header>

    <main class="container flex justify-center py-48 mx-auto">
        <div class="flex justify-center items-center shadow-lg p-8 border-[1px] rounded-2xl">
            <div class="flex flex-col space-y-6 mb-2">
                <div>
                    <h1 class="font-bold text-3xl text-center text-gray-600">Profil Author</h1>
                </div>
                <div class="flex justify-around space-x-12">
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
                            <span>ID Pengguna: {{ $id }}</span>
                            @if (Auth::user()->getRawOriginal('id') == $id)
                                <a href="/user/{{ $id }}/edit" wire:navigation>
                                    <button
                                        class="px-3 py-2 hover:bg-blue-800 bg-blue-600 rounded text-sm text-white font-medium block w-full transition-all duration-300">
                                        Edit Profil
                                    </button>
                                </a>
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
