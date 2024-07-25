<div
    class="fixed top-0 flex justify-between bg-gradient-to-l from-orange-700 via-orange-400 to-amber-600  w-screen h-16 text-white">
    <div class="flex justify-evenly space-x-8 ml-6">
        <script>
            function standbyNav() {
                document.getElementById('fooNav').src = '/user-temp.png'
            }
        </script>
        <a href="/"><img src="/favicon.ico" class="w-16 p-3"></a>
        <nav class="flex space-x-6 self-center text-lg">
            <a wire:navigate href="/"
                class="{{ Route::is('home') ? 'text-lg' : 'opacity-60 hover:opacity-100' }}">Beranda</a>
            <a wire:navigate href="/contact"
                class="{{ Route::is('contact') ? 'text-lg' : 'opacity-60 hover:opacity-100' }}">Kontak</a>
            <a wire:navigate href="/about"
                class="{{ Route::is('about') ? 'text-lg' : 'opacity-60 hover:opacity-100' }}">Tentang</a>
        </nav>
    </div>
    <div class="flex mr-12 space-x-3 self-center">
        @if (Auth::check())
            <div class="relative inline-block text-left">
                <div class="group">
                    <img src="{{ Auth::user()->author_profile_src }} " class="rounded-full w-12 hover:cursor-pointer"
                        onerror="standbyNav()" id="fooNav">
                    <div
                        class="absolute right-1 w-40 origin-top-left mb-2 bg-white divide-y divide-gray-100 rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300">
                        <div class="py-1">
                            <span class="block select-none px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Halo
                                {{ Auth::user()->firstName }}</span>
                            <a href="/user/{{ Auth::user()->getRawOriginal('id') }}" wire:navigate
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Profil</a>
                            <a href="/create-book" wire:navigate
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Buat Buku</a>
                            <a href="/manager" wire:navigate
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Buku Saya</a>
                            @if (Auth::user()->isadmin)
                                <a href="/admin/manager" wire:navigate
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Manager Administrator</a>
                            @endif
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <a href="/auth/login"
                class="hover:text-white self-center mt-2 border border-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-orange-400 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-900">
                Login
            </a>
        @endif

    </div>
</div>
