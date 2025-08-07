<!-- Simplicity is an acquired taste. - Katharine Gerould -->

<header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <div class="lg:hidden flex items-center bg-white">
                <button @click="sidebarOpen = !sidebarOpen" class="text-gray-700 focus:outline-none mx-4 ">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            <!-- Page Title -->
            <h1 class="text-2xl font-bold text-gray-800">
                <!-- GANTI: Judul halaman dinamis berdasarkan halaman aktif -->
                {{ $slot }}
            </h1>
        </div>
    </div>
</header>
