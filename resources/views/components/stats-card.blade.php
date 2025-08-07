<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

@props(['title' => '','value' => '','icon' => '','color' => '',])

<div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
	<div class="flex items-center">
		<div class="{{ $color }} mr-4 rounded-full p-3">
		        <i class="{{ $icon }} text-xl"></i>
		</div>
		<div>
			<p class="text-sm text-gray-600">{{ $title }}</p>
			<p class="text-2xl font-bold text-gray-800">{{ $value }}</p>
		</div>
	</div>
</div>
