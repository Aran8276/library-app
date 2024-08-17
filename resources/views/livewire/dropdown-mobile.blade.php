<div class="flex bg-gray-100 h-fit space-x-3 self-center mr-16 rounded-full shadow-md border border-gray-500"
    x-data="{ openDropdown: false }">
    <div @click="openDropdown = !openDropdown"
        class="cursor-pointer relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
        <img class="w-10 h-10 rounded-full object-contain" src="{{ Auth::user()->author_profile_src }}"
            onerror="standbyPfpMob()" id="pfpMob" alt="User">
    </div>
    <div x-show="openDropdown" @click.away="openDropdown = false"
        class="absolute mt-12 right-14  bg-white border border-gray-200 rounded-md shadow-lg">
        <span class="block cursor-default text-center border-b px-8 py-2 text-sm text-gray-700 hover:bg-gray-100">Halo
            {{ Auth::user()->firstName }}</span>

        @if (Auth::user()->isadmin)
            <a href="/admin/manager" wire:navigate
                class="block text-center px-8 py-2 text-sm border-b text-gray-700 hover:bg-gray-100">
                Dasbor Administrator</a>
        @endif

        <a href="/create-book" wire:navigate
            class="block text-center px-8 py-2 text-sm text-gray-700 hover:bg-gray-100">Tambahkan
            Buku</a>
        <a href="/manager" wire:navigate
            class="block text-center border-b px-8 py-2 text-sm text-gray-700 hover:bg-gray-100">Kelola
            Buku</a>
        <a href="/user/{{ Auth::user()->getRawOriginal('id') }}" wire:navigate
            class="block text-center px-8 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
        <a href="/logout" class="block text-center text-red-500 px-8 py-2 text-sm hover:bg-gray-100">Keluar</a>
    </div>
</div>
