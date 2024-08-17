<div class="flex items-center justify-between w-full h-16 px-3 border-t border-neutral-200">
    <p class="pl-2 text-sm text-gray-700">Menampilkan <span class="font-medium">{{ $from }}</span> sampai
        <span class="font-medium">{{ $to }} halaman</span>
    </p>
    <nav>
        <ul
            class="flex items-center text-sm leading-tight bg-white border divide-x rounded h-9 text-neutral-500 divide-neutral-200 border-neutral-200">
            <li class="h-full">
                <a href="#"
                    class="relative inline-flex items-center h-full px-3 ml-0 rounded-l group hover:text-neutral-900">
                    <span>Sebelumnya</span>
                </a>
            </li>
            @for ($i = $from; $i <= $to; $i++)
                <li class="hidden h-full md:block">
                    <a href="#"
                        class="relative inline-flex items-center h-full px-3 {{ $i == $currentpage ? 'text-neutral-900 bg-gray-50' : 'group hover:text-neutral-900' }}">
                        <span>{{ $i }}</span>
                        <span
                            class="box-content absolute bottom-0 {{ $i == $currentpage ? 'left-0 w-full' : 'left-1/2 w-0 group-hover:left-0 group-hover:w-full' }} h-px -mx-px duration-200 ease-out translate-y-px border-transparent bg-neutral-900 {{ $i == $currentpage ? 'border-l border-r border-neutral-900' : 'group-hover:border-l group-hover:border-r group-hover:border-neutral-900' }}"></span>
                    </a>
                </li>
            @endfor
            <li class="hidden h-full md:block">
                <div class="relative inline-flex items-center h-full px-2.5 group">
                    <span>...</span>
                </div>
            </li>
            <li class="hidden h-full md:block">
                <a href="#" class="relative inline-flex items-center h-full px-3 group hover:text-neutral-900">
                    <span>{{ $pages }}</span>
                    <span
                        class="box-content absolute bottom-0 w-0 h-px -mx-px duration-200 ease-out translate-y-px border-transparent bg-neutral-900 group-hover:border-l group-hover:border-r group-hover:border-neutral-900 left-1/2 group-hover:left-0 group-hover:w-full"></span>
                </a>
            </li>
            <li class="h-full">
                <a href="#"
                    class="relative inline-flex items-center h-full px-3 rounded-r group hover:text-neutral-900">
                    <span>Berikutnya</span>
                </a>
            </li>
        </ul>
    </nav>
</div>


{{-- <div>
    {{ $pages }}
    {{ $currentpage }}
    {{ $from }}
    {{ $to }}
    {{ $of }}
</div> --}}
