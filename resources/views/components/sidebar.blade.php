<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->

<!-- Mobile Sidebar Backdrop -->
<div x-show="sidebarOpen" 
    x-transition:enter="transition-opacity ease-linear duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition-opacity ease-linear duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @click=" sidebarOpen = false "
    class="fixed inset-0 bg-gray-100 bg-opacity-50 z-40 lg:hidden">
</div>

<!-- Desktop Sidebar -->
<div class="hidden lg:block lg:relative w-64">
    <x-sidebar-content />
</div>

<!-- Mobile Sidebar -->
<div x-show="sidebarOpen"
    x-transition:enter="transition-transform ease-out duration-300"
    x-transition:enter-start="-translate-x-full" 
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="lg:hidden fixed inset-y-0 left-0 w-64 z-50 transform bg-gray-900 bg-opacity-50 text-white p-4"
    style="will-change: transform; display: none;">
    <x-sidebar-content />
</div>