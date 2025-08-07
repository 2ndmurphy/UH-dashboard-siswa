<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

@if ($paginator->hasPages())
    <div class="flex items-center justify-between">
        <div class="text-sm text-gray-700">
            Menampilkan 
            <span class="font-medium">{{ $paginator->firstItem() }}</span> 
            to 
            <span class="font-medium">{{ $paginator->lastItem() }}</span> 
            from 
            <span class="font-medium">{{ $paginator->total() }}</span> 
            result
        </div>

        <div class="flex space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="rounded-md border border-gray-300 px-3 py-1 text-sm hover:bg-gray-50 disabled:opacity-50" disabled>
                    Previous
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="rounded-md border border-gray-300 px-3 py-1 text-sm hover:bg-gray-50">
                    Previous
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="rounded-md border border-gray-300 px-3 py-1 text-sm text-gray-500">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="rounded-md bg-blue-600 px-3 py-1 text-sm text-white hover:bg-blue-700">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="rounded-md border border-gray-300 px-3 py-1 text-sm hover:bg-gray-50">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="rounded-md border border-gray-300 px-3 py-1 text-sm hover:bg-gray-50">
                    Next
                </a>
            @else
                <button class="rounded-md border border-gray-300 px-3 py-1 text-sm hover:bg-gray-50 disabled:opacity-50" disabled>
                    Next
                </button>
            @endif
        </div>
    </div>
@endif