<div class="overflow-x-clip md:overflow-x-visible flex flex-col z-50 border-none md:border-b-[1px] border-gray-200"
    x-data="{ openMenu: false }" :class="openMenu ? 'overflow-hidden' : 'overflow-visible'">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <script src="https://unpkg.com/alpinejs@3.14.1/dist/cdn.min.js" defer></script>

    <!-- MOBILE SECTION -->
    <div class="flex sticky top-0 border-b-[1px] border-gray-200">
        <!-- Mobile Button -->
        <button class="md:hidden flex-col items-center p-4 align-middle" @click="openMenu = !openMenu"
            :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Navigation Menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Mobile Logo -->
        <div class="flex md:hidden float-end ml-auto self-center p-4">
            @if (Auth::check())
                <!-- isLoggedin? -->
                <script>
                    function standbyPfpMob() {
                        document.getElementById('pfpMob').src = '/user-temp.png';
                    }
                </script>
                <div class="relative left-12 md:hidden">
                    <livewire:dropdown-mobile />
                </div>
            @else
                <!-- : --->
                <a wire:navigate href="/login"
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-800 hover:bg-neutral-400 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                    Masuk
                </a>
            @endif
        </div>


        <!-- Mobile Menu -->
        <nav id="mobile-navigation" class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"
            :class="openMenu ? 'visible' : 'invisible'" x-cloak>
            <!-- UL Links -->
            <div class="absolute top-0 right-0 bottom-0 w-10/12 py-4 bg-white drop-shadow-2xl z-10 transition-all"
                :class="openMenu ? 'translate-x-0' : 'translate-x-full'">
                <div class="self-center pl-4 py-3 border-t border-b">
                    <a href="/"><img src="/favicon.ico" class="w-12 h-12"></a>
                </div>

                <div class="border-b border-inherit">
                    <a wire:navigate href="/" class="block p-4" aria-current="true">Beranda</a>
                </div>
                <div class="border-b border-inherit">
                    <a wire:navigate href="/about" class="block p-4">Tentang</a>
                </div>
                <div class="border-b border-inherit">
                    <a wire:navigate href="/contact" class="block p-4">Kontak</a>
                </div>
            </div>

            <!-- Mobile Close Button -->
            <button class="absolute top-4 right-0 bottom-0 left-2" @click="openMenu = !openMenu"
                :aria-expanded="openMenu" aria-controls="mobile-navigation" aria-label="Close Navigation Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 left-2" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </nav>
        <!-- END MOBILE SECTION -->

        <!-- DESKTOP SECTION -->
        <div class="hidden md:flex sticky top-0 space-x-12 w-screen px-16 py-3">
            <div class="self-center">
                <a href="/"><img src="/favicon.ico" class="w-12 h-12"></a>
            </div>
            <nav class="self-center flex justify-between space-x-8">
                <a wire:navigate href="/"
                    class="{{ Route::is('home') ? 'w-max' : 'opacity-40 hover:opacity-100 w-max' }}">
                    Beranda
                </a>
                <a wire:navigate href="/about"
                    class="{{ Route::is('about') ? 'w-max' : 'opacity-40 hover:opacity-100 w-max' }}">
                    Tentang
                </a>
                <a wire:navigate href="/contact"
                    class="{{ Route::is('contact') ? 'w-max' : 'opacity-40 hover:opacity-100 w-max' }}">
                    Kontak
                </a>
            </nav>
        </div>

        <!-- Authentication -->
        @if (Auth::check())
            <!-- isLoggedin? -->
            <script>
                function standbyPfp() {
                    document.getElementById('pfp').src = '/user-temp.png';
                }
            </script>
            <div class="hidden md:flex">
                <livewire:dropdown class />
            </div>
        @else
            <!-- : -->
            <div class="hidden md:flex h-fit space-x-3 self-center mr-12">
                <a wire:navigate href="/login"
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide transition-colors duration-200 bg-white border rounded-md text-neutral-500 hover:text-neutral-700 border-neutral-200/70 hover:bg-neutral-100 active:bg-white focus:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-200/60 focus:shadow-outline">
                    Masuk
                </a>
                <a wire:navigate href="/register"
                    class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-800 hover:bg-neutral-400 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
                    Daftar
                </a>
            </div>
        @endif

        <!-- END DESKTOP SECTION -->
    </div>
</div>



<!-- Old -->
{{-- <div
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
</div> --}}
