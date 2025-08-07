<x-layout pageTitle="Siswa | SMKN 1 Jakarta" headerTitle="Data Siswa">
	<x-breadcrumb :items="[
        ['label' => 'Home', 'url' => '/dashboard'], 
        ['label' => 'Data Siswa']
    ]" />

	<!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <x-stats-card title="Total Siswa" value="{{ $students_count }}" icon="fas fa-users" color="bg-blue-100 text-blue-600" />
        <x-stats-card title="Siswa Aktif" value="{{ $active_student }}" icon="fas fa-user-check" color="bg-green-100 text-green-600" />
        <x-stats-card title="Total Kelas" value="{{ $kelas_count }}" icon="fas fa-chalkboard" color="bg-yellow-100 text-yellow-600" />
        <x-stats-card title="Tidak Aktif" value="{{ $inactive_student }}" icon="fas fa-user-times" color="bg-red-100 text-red-600" />
    </div>

	<!-- Data Table -->
	<x-data-table :paginator="$students" />
</x-layout>
