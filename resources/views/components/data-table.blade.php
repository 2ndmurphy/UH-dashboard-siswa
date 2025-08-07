<!-- Very little is needed to make a happy life. - Marcus Aurelius -->
@props(['paginator'])

<div class="rounded-lg border border-gray-200 bg-white shadow-sm">

		<!-- Table Header -->
		<div class="border-b border-gray-200 px-6 py-4">
				<div class="flex flex-col space-y-4 sm:flex-row sm:items-center sm:justify-between sm:space-y-0">
						<h3 class="text-lg font-semibold text-gray-800">
								Daftar Siswa
						</h3>
				</div>
		</div>

		<!-- Table -->
		<div class="overflow-x-auto">
				<table class="w-full">
						<thead class="bg-gray-50">
								<tr>
										<th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
												No</th>
										<th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
												NIS</th>
										<th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
												Nama Siswa</th>
										<th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
												Kelas</th>
										<th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500">
												Jenis Kelamin</th>
								</tr>
						</thead>
						<tbody class="divide-y divide-gray-200 bg-white">
								@foreach ($paginator->items() as $index => $row)
										<tr class="hover:bg-gray-50">
												<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
														{{ $index + 1 }}
												</td>
												<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
														{{ $row['nis'] }}
												</td>
												<td class="whitespace-nowrap px-6 py-4">
														<div class="text-sm font-medium text-gray-900">{{ $row['nama_siswa'] }}</div>
														<div class="text-sm text-gray-500">{{ $row['email'] }}</div>
												</td>
												<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
														{{ $row['kelas']['nama_kelas'] }}
												</td>
												<td class="whitespace-nowrap px-6 py-4 text-sm text-gray-900">
														{{ $row['jenis_kelamin'] }}
												</td>
										</tr>
								@endforeach
						</tbody>
				</table>
		</div>

		<!-- Pagination -->
		<div class="px-6 py-4">
				{{ $paginator->links('components.pagination') }}
		</div>
</div>
