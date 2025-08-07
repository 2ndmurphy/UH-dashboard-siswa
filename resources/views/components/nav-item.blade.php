<!-- Very little is needed to make a happy life. - Marcus Aurelius -->

@props([
    'icon' => '',
    'active' => false
])

<a {{ $attributes }} class="{{ $active ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} flex items-center px-4 py-2 rounded-lg transition-colors duration-200 group">
    <i class="{{ $icon }} text-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-200"></i>
    <span class="ml-3">{{ $slot }}</span>
</a>