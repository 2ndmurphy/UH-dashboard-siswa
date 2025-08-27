<!-- The whole future lies in uncertainty: live immediately. - Seneca -->

@props([
    'name' => 'Admin User',
    'role' => 'Administrator',
    'avatar' => 'https://via.placeholder.com/40',
])

<div class="absolute bottom-4 left-4 right-4">
	<div class="flex items-center rounded-lg bg-gray-800 p-3 space-x-3">
		<img alt="Profile" class="h-10 w-10 flex-shrink-0 rounded-full" src="{{ $avatar }}">
		<div class="flex-1 min-w-0">
			<p class="text-sm font-medium truncate">{{ $name }}</p>
			<p class="text-xs text-gray-400 truncate">{{ $role }}</p>
		</div>
		<form action="{{ route('logout') }}" method="post" class="flex-shrink-0">
			@csrf
			<button type="submit" class="text-sm text-gray-400 hover:text-gray-200 whitespace-nowrap px-3 py-1 rounded">
				Logout
			</button>
		</form>
	</div>
</div>
