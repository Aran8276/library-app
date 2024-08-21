<a wire:navigate href="{{ $href }}"
    class="flex justify-center items-center shadow-lg px-6 pt-8 md:p-6 rounded-lg border border-neutral-200/60 hover:scale-[1.09] transition ease-in-out delay-150 h-[460px] md:h-[400px]">
    <script src="/imgerrhandler.js"></script>
    <div class="flex flex-col w-full h-full space-y-4">
        <div class="w-full h-[250px]">
            <img class="w-full h-full rounded-sm object-contain" src="/storage/{{ $src }}"
                onerror="standby(event)" id="fooBook1">
        </div>
        <div class="w-full h-fit flex flex-col space-y-1">
            <div class="max-h-16 overflow-hidden">
                <h1 class="font-bold text-lg text-gray-700">{{ $title }}</h1>
            </div>
            <div class="flex flex-col max-h-16 overflow-hidden">
                <span class="font-bold text-sm opacity-75">Author: {{ $author }}</span>
                <span class="text-sm opacity-75">{{ $desc }}</span>
            </div>
        </div>
    </div>
</a>
