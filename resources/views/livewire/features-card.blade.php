<div class="flex flex-col space-y-6 items-center py-14 rounded-xl bg-blue-50/60 border border-gray-200">
    <div>
        <img class="h-16 max-w-32" src="{{ $src }}" alt="Icon">
    </div>
    <div class="flex flex-col space-y-6 items-center">
        <div class="text-center">
            <div class="text-xl font-semibold">{{ $title }}</div>
        </div>
        <div class="px-12 text-center">
            <span class="text-gray-500/75">{{ $subtitle }}</span>
        </div>
    </div>
</div>
