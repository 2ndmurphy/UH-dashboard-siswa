<!-- Always remember that you are absolutely sybau💔. Just like everyone else. - Margaret Mead -->

<div class="relative h-full bg-gray-900 p-4 text-white">
		<!-- Logo & Header Section -->
		<div class="mb-8 flex items-center">
				<i class="fas fa-graduation-cap mr-3 flex-shrink-0 text-2xl"></i>
				<h2 class="text-xl font-bold">
						SMKN 1 Jakarta
				</h2>
		</div>

		<!-- Navigation Menu -->
		<nav class="space-y-2">
				<x-nav-item :active="request()->is('dashboard')" href="/dashboard" icon="fas fa-tachometer-alt">
						Dashboard
				</x-nav-item>
				<x-nav-item :active="request()->is('students')" href="/students" icon="fas fa-users">
						Data Siswa
				</x-nav-item>
				<x-nav-item :active="request()->is('classes')" href="/classes" icon="fas fa-chalkboard">
						Kelas
				</x-nav-item>
				<x-nav-item :active="request()->is('grades')" href="/grades" icon="fas fa-chart-line">
						Nilai
				</x-nav-item>
				<x-nav-item :active="request()->is('reports')" href="/reports" icon="fas fa-file-alt">
						Laporan
				</x-nav-item>
		</nav>

		<!-- User Profile Section -->
		<div class="absolute bottom-4 left-4 right-4">
				<x-user-profile />
		</div>
</div>
