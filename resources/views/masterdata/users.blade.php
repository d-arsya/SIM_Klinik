@extends('layout.app')
@section('content')

<div class="flex items-center justify-between">
    <div class="py-5">
        <h2 class="text-xl font-semibold">Tabel Users</h2>
    </div>
    <div class="flex gap-2">
        <!-- Tambah Owner & Pasien Baru -->
        <x-link color="blue" href="{{ route('masterdata.users.create') }}" class="font-bold w-[202px] py-5">Tambah User</x-link>

        <x-button data-modal-target="tambah-bulk" data-modal-toggle="tambah-bulk" type="button" color="" class="bg-[#EFF6FF] border border-bulkStroke text-klinikBlue font-bold w-[202px] h-[56.8px]">Tambah Bulk</x-button>
        <div id="tambah-bulk" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)]">
            @include('masterdata.tambah_bulk')
        </div>
    </div>
</div>

    <!-- Input Pencarian dan Filter -->
    <div class="flex p-4 m-4 border-2 rounded-xl">
        <div class="relative w-full p-4 overflow-x-auto border-none sm:rounded-lg">
            <div class="flex items-center justify-between mb-4">
                <!-- Pencarian -->
                <div class="relative w-full max-w-xs">
                    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Cari..."
                        class="w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zm-5.9-3.82a6 6 0 1112 0 6 6 0 01-12 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <!-- Filter -->
                <div class="relative inline-block">
                    <!-- Tombol yang diklik -->
                    <button id="filterButton" onclick="toggleDropdown()"
                        class="flex items-center px-3 py-2 text-blue-600 border border-blue-200 rounded-lg bg-blue-50 hover:bg-blue-100">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 2a2 2 0 00-2 2v2a2 2 0 00.586 1.414L9 13.414V18a2 2 0 002 2h2a2 2 0 002-2v-4.586l4.414-6A2 2 0 0016 4V2a2 2 0 00-2-2H6z">
                            </path>
                        </svg>
                        <span id="filterText">Filters</span>
                    </button>
                    <div id="dropdown"
                        class="absolute right-0 z-10 hidden w-48 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg">
                        <ul id="dropdownOptions" class="py-2 text-sm text-gray-700">
                            <li><button onclick="selectOption('Today')"
                                    class="block w-full px-4 py-2 text-left hover:bg-gray-100">Today</button></li>
                            <li><button onclick="selectOption('Yesterday')"
                                    class="block w-full px-4 py-2 text-left hover:bg-gray-100">Yesterday</button></li>
                            <li><button onclick="selectOption('7 Hari yang Lalu')"
                                    class="block w-full px-4 py-2 text-left hover:bg-gray-100">7 Hari yang Lalu</button>
                            </li>
                            <li><button onclick="selectOption('Bulan Lalu')"
                                    class="block w-full px-4 py-2 text-left hover:bg-gray-100">Bulan Lalu</button></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tabel Data -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400" id="dataTable">
                    <thead class="text-gray-500 bg-gray-100 border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-semibold text-gray-600 border-r border-gray-100"
                                style="font-size: 0.81rem">No.</th>
                            <th scope="col" class="px-6 py-3 font-semibold text-gray-600 border-r border-gray-100"
                                style="font-size: 0.81rem">Kode</th>
                            <th scope="col" class="px-6 py-3 font-semibold text-gray-600 border-r border-gray-100"
                                style="font-size: 0.81rem">Nama</th>
                            <th scope="col" class="px-6 py-3 font-semibold text-gray-600 border-r border-gray-100"
                                style="font-size: 0.81rem">Role</th>
                            <th scope="col" class="px-6 py-3 font-semibold text-gray-600 border-r border-gray-100"
                                style="font-size: 0.81rem">Email</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-2 font-semibold border-r border-gray-100">1</td>
                            <td class="px-6 py-2 font-semibold text-center border-r border-gray-100">
                                DOK-EDEL</td>
                            <td class="px-6 py-2 font-semibold border-r border-gray-100 ">Edeline</td>
                            <td class="px-6 py-2 font-semibold border-r border-gray-100 ">Dokter</td>
                            <td class="px-6 py-2 font-semibold text-sm border-r border-gray-100 ">edeline@gmail.com</td>
                            <td class="px-6 py-2 text-center border-r border-gray-100">
                                <div>
                                    <x-link color="" href="" class="bg-[#EFA006]">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.4553 15.1338L16.6186 8.97044C15.5817 8.53729 14.64 7.90477 13.8469 7.10877C13.0505 6.31548 12.4177 5.37348 11.9844 4.33627L5.82109 10.4996C5.34026 10.9804 5.09942 11.2213 4.89276 11.4863C4.64892 11.7992 4.43964 12.1375 4.26859 12.4954C4.12442 12.7988 4.01692 13.1221 3.80192 13.7671L2.66692 17.1696C2.61468 17.3254 2.60693 17.4927 2.64454 17.6526C2.68215 17.8126 2.76363 17.9589 2.87982 18.075C2.996 18.1912 3.14229 18.2727 3.30225 18.3103C3.4622 18.3479 3.62947 18.3402 3.78526 18.2879L7.18776 17.1529C7.83359 16.9379 8.15609 16.8304 8.45942 16.6863C8.81887 16.5152 9.15526 16.3071 9.46859 16.0621C9.73359 15.8554 9.97442 15.6146 10.4553 15.1338ZM18.3286 7.26044C18.9431 6.64591 19.2884 5.81243 19.2884 4.94335C19.2884 4.07428 18.9431 3.2408 18.3286 2.62627C17.7141 2.01174 16.8806 1.6665 16.0115 1.6665C15.1424 1.6665 14.309 2.01174 13.6944 2.62627L12.9553 3.36544L12.9869 3.45794C13.3511 4.50025 13.9472 5.44626 14.7303 6.2246C15.5319 7.03112 16.511 7.63897 17.5894 7.99961L18.3286 7.26044Z" fill="#F8F8F8"/>
                                        </svg>
                                    </x-link>
                                    <x-link color="red" href="">
                                        <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.73926 0V1H0.739258V3H1.73926V16C1.73926 16.5304 1.94997 17.0391 2.32504 17.4142C2.70012 17.7893 3.20882 18 3.73926 18H13.7393C14.2697 18 14.7784 17.7893 15.1535 17.4142C15.5285 17.0391 15.7393 16.5304 15.7393 16V3H16.7393V1H11.7393V0H5.73926ZM5.73926 5H7.73926V14H5.73926V5ZM9.73926 5H11.7393V14H9.73926V5Z" fill="#F8F8F8"/>
                                        </svg>
                                    </x-link>
                                </div>
                            </td>
                        </tr> -->
                        @foreach ($users as $index => $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-semibold border-r border-gray-100">
                                    {{ ($users->currentPage() - 1) * $users->perPage() + $index + 1 }}</td>
                                <td class="px-6 py-4 font-semibold text-center border-r border-gray-100">
                                    {{ $item->id }}</td>
                                <td class="px-6 py-4 font-semibold border-r border-gray-100 ">{{ $item->name }}</td>
                                <td class="px-6 py-4 font-semibold border-r border-gray-100 ">{{ $item->role }}</td>
                                <td class="px-6 py-4 font-semibold border-r border-gray-100 ">{{ $item->email }}</td>
                                <td class="flex justify-center px-6 py-4 space-x-2 text-center border-r border-gray-100">
                                    <form action="{{ route('masterdata.users.edit', $item->id) }}">
                                        @csrf
                                        <x-button type="submit" color=""
                                            class="bg-[#EFA006] font-medium text-white transition-all duration-200 ease-in-out transform focus:outline-none hover:bg-yellow-500 hover:scale-105 hover:shadow-xl" aria-hidden="true">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.4553 15.1338L16.6186 8.97044C15.5817 8.53729 14.64 7.90477 13.8469 7.10877C13.0505 6.31548 12.4177 5.37348 11.9844 4.33627L5.82109 10.4996C5.34026 10.9804 5.09942 11.2213 4.89276 11.4863C4.64892 11.7992 4.43964 12.1375 4.26859 12.4954C4.12442 12.7988 4.01692 13.1221 3.80192 13.7671L2.66692 17.1696C2.61468 17.3254 2.60693 17.4927 2.64454 17.6526C2.68215 17.8126 2.76363 17.9589 2.87982 18.075C2.996 18.1912 3.14229 18.2727 3.30225 18.3103C3.4622 18.3479 3.62947 18.3402 3.78526 18.2879L7.18776 17.1529C7.83359 16.9379 8.15609 16.8304 8.45942 16.6863C8.81887 16.5152 9.15526 16.3071 9.46859 16.0621C9.73359 15.8554 9.97442 15.6146 10.4553 15.1338ZM18.3286 7.26044C18.9431 6.64591 19.2884 5.81243 19.2884 4.94335C19.2884 4.07428 18.9431 3.2408 18.3286 2.62627C17.7141 2.01174 16.8806 1.6665 16.0115 1.6665C15.1424 1.6665 14.309 2.01174 13.6944 2.62627L12.9553 3.36544L12.9869 3.45794C13.3511 4.50025 13.9472 5.44626 14.7303 6.2246C15.5319 7.03112 16.511 7.63897 17.5894 7.99961L18.3286 7.26044Z" fill="#F8F8F8"/>
                                            </svg>
                                        </x-button>
                                    </form>

                                    <form action="{{ route('masterdata.users.destroy', $item->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <x-button onclick="return confirm('Yakin mau dihapus?')" type="submit" color="red"
                                            class="font-medium text-white transition-all duration-200 ease-in-out transform rounded-lg shadow-lg focus:outline-none hover:bg-red-800 focus:ring-4 focus:ring-red-300 hover:scale-105 hover:shadow-xl me-2" aria-hidden="true">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.73926 0V1H0.739258V3H1.73926V16C1.73926 16.5304 1.94997 17.0391 2.32504 17.4142C2.70012 17.7893 3.20882 18 3.73926 18H13.7393C14.2697 18 14.7784 17.7893 15.1535 17.4142C15.5285 17.0391 15.7393 16.5304 15.7393 16V3H16.7393V1H11.7393V0H5.73926ZM5.73926 5H7.73926V14H5.73926V5ZM9.73926 5H11.7393V14H9.73926V5Z" fill="#F8F8F8"/>
                                            </svg>
                                        </x-button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination with Rows Per Page Selector -->
            <div class="flex items-center justify-between mt-4 text-sm text-gray-700">
                <!-- Rows Per Page Selector -->
                <select id="rowsPerPage" onchange="changeRowsPerPage()"
                    class="p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                {{-- paginate --}}
                <div class="flex flex-row">

                    <span class="m-2">
                        {{ ($users->currentPage() - 1) * $users->perPage() + 1 }} -
                        {{ min($users->currentPage() * $users->perPage(), $users->total()) }}
                        dari {{ $users->total() }}
                    </span>

                    <div class="flex items-center">
                        <!-- Tombol Sebelumnya -->
                        <button
                            class="px-2 py-1 mx-1 text-gray-500 bg-white border border-gray-300 rounded hover:bg-gray-100 disabled:text-gray-300 disabled:cursor-not-allowed"
                            @if ($users->onFirstPage()) disabled @endif
                            onclick="window.location='{{ $users->previousPageUrl() }}'">
                            &lt;
                        </button>

                        <!-- Nomor Halaman -->
                        @foreach (range(1, $users->lastPage()) as $page)
                            @if ($page == $users->currentPage())
                                <button class="px-3 py-1 mx-1 text-white bg-blue-600 border border-blue-600 rounded">
                                    {{ $page }}
                                </button>
                            @else
                                <button
                                    class="px-3 py-1 mx-1 text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100"
                                    onclick="window.location='{{ $users->url($page) }}'">
                                    {{ $page }}
                                </button>
                            @endif
                        @endforeach

                        <!-- Tombol Berikutnya -->
                        <button
                            class="px-2 py-1 mx-1 text-gray-500 bg-white border border-gray-300 rounded hover:bg-gray-100 disabled:text-gray-300 disabled:cursor-not-allowed"
                            @if (!$users->hasMorePages()) disabled @endif
                            onclick="window.location='{{ $users->nextPageUrl() }}'">
                            &gt;
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <script>
            function changeRowsPerPage() {
                const rows = document.getElementById("rowsPerPage").value;
                const url = new URL(window.location.href);
                url.searchParams.set('rows', rows);
                window.location.href = url.toString(); // Redirect ke URL dengan parameter baru
            }

            // Menjaga pilihan tetap terlihat setelah halaman di-reload
            window.onload = function() {
                const urlParams = new URLSearchParams(window.location.search);
                const rowsParam = urlParams.get('rows');
                if (rowsParam) {
                    document.getElementById("rowsPerPage").value = rowsParam;
                }
            };
        </script>


        <!-- JavaScript untuk Fitur Pencarian -->
        <script>
            function searchTable() {
                const input = document.getElementById("searchInput").value.toLowerCase();
                const table = document.getElementById("dataTable");
                const tr = table.getElementsByTagName("tr");

                for (let i = 1; i < tr.length; i++) {
                    const tdArray = tr[i].getElementsByTagName("td");
                    let found = false;

                    for (let j = 0; j < tdArray.length; j++) {
                        if (tdArray[j] && tdArray[j].textContent.toLowerCase().includes(input)) {
                            found = true;
                            break;
                        }
                    }
                    tr[i].style.display = found ? "" : "none";
                }
            }
        </script>

        {{-- Tampilan Filter --}}
        <script>
            let currentOption = null;

            function toggleDropdown() {
                const dropdown = document.getElementById('dropdown');
                dropdown.classList.toggle('hidden');
            }

            function selectOption(optionText) {
                currentOption = optionText;
                const filterText = document.getElementById('filterText');
                filterText.textContent = optionText;

                updateDropdownOptions();
                const dropdown = document.getElementById('dropdown');
                dropdown.classList.add('hidden');
            }

            function updateDropdownOptions() {
                const options = ['Today', 'Yesterday', '7 Hari yang Lalu', 'Bulan Lalu'];
                const dropdownOptions = document.getElementById('dropdownOptions');
                dropdownOptions.innerHTML = '';

                // Masukkan "Hapus Filter" di urutan pertama jika ada opsi yang dipilih
                if (currentOption) {
                    dropdownOptions.innerHTML += `
            <li><button onclick="clearFilter()" class="block w-full px-4 py-2 text-left hover:bg-gray-100">Hapus Filter</button></li>
            `;
                }

                // Tambahkan opsi yang lain, kecuali opsi yang dipilih sebelumnya
                options.forEach(option => {
                    if (option !== currentOption) {
                        dropdownOptions.innerHTML += `
                <li><button onclick="selectOption('${option}')" class="block w-full px-4 py-2 text-left hover:bg-gray-100">${option}</button></li>
                `;
                    }
                });
            }

            function clearFilter() {
                currentOption = null;
                const filterText = document.getElementById('filterText');
                filterText.textContent = 'Filters';
                updateDropdownOptions();

                const dropdown = document.getElementById('dropdown');
                dropdown.classList.add('hidden');
            }
        </script>
    @endsection
