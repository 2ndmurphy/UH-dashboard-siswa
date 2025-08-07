<!-- Order your soul. Reduce your wants. - Augustine -->
@props(['items' => []])

<nav class="mb-6 text-sm text-gray-600">
    <ol class="flex space-x-2">
        @foreach ($items as $index => $item)
            <li>
                @if($index > 0)
                    <span class="mx-2">/</span>
                @endif

                @if(isset($item['url']) && !$loop->last)
                    <a href="{{ $item['url'] }}" class="hover:text-blue-600 transition-colors duration-200">
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="text-gray-800 font-medium">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>