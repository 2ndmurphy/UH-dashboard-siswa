<!-- Very little is needed to make a happy life. - Marcus Aurelius -->

<x-layout pageTitle="Laporan | SMKN 1 Jakarta" headerTitle="Laporan">
		<x-breadcrumb :items="[['label' => 'Home', 'url' => '/dashboard'], ['label' => 'Laporan']]" />

		<div class="absolute flex h-24 w-3/4 max-w-96 overflow-hidden rounded-xl bg-white shadow-lg">
				<svg height="96" width="16" xmlns="http://www.w3.org/2000/svg">
						<path d="M 8 0
																																																																				Q 4 4.8, 8 9.6
																																																																				T 8 19.2
																																																																				Q 4 24, 8 28.8
																																																																				T 8 38.4
																																																																				Q 4 43.2, 8 48
																																																																				T 8 57.6
																																																																				Q 4 62.4, 8 67.2
																																																																				T 8 76.8
																																																																				Q 4 81.6, 8 86.4
																																																																				T 8 96
																																																																				L 0 96
																																																																				L 0 0
																																																																				Z" fill="tan" stroke-linecap="round"
								stroke-width="2" stroke="tan"></path>
				</svg>
				<div class="mx-2.5 w-full overflow-hidden">
						<p class="mr-3 mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xl font-bold leading-8 text-[peru]">
								Notice !
						</p>
						<p class="max-h-10 overflow-hidden break-all leading-5 text-zinc-400">
								We're Sorry!<br />
								This page is undermaintain.
						</p>
				</div>
				<button class="w-16 cursor-pointer focus:outline-none">
						<svg class="h-7 w-7" fill="none" stroke-width="2" stroke="peru" viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
				</button>
		</div>

</x-layout>
