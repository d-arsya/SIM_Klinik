@extends('layout.app')
@section('content')
    <div class="flex flex-col justify-between px-8">
        <h1 class="text-lg font-bold">List Rawat Inap</h1>
        <h1 style="font-size: 0.9rem">Jumlah Pasien : 49,000 Jumlah Dokter : 12</h1>
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
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">ID</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">Tanggal</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">No. RM</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">Pasien</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">Owner Pasien</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">Umur</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">No Telp</th>
                            <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                                style="font-size: 0.81rem">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-semibold border-r border-gray-100" style="font-size: 0.8rem">INV-1
                            </td>
                            <td class="px-6 py-4 font-semibold text-center border-r border-gray-100"
                                style="font-size: 0.8rem">29/05/2024</td>
                            <td class="px-6 py-4 font-semibold border-r border-gray-100 " style="font-size: 0.8rem">1</td>
                            <td class="px-6 py-4 border-r border-gray-100" style="font-size: 0.8rem">
                                <a href="{{ route('detail_hewan') }}" class="font-semibold underline text-[#036CA1]">Garaga</a>
                                <p style="font-size: 0.8em">Ular</p>
                            </td>
                            <td class="px-6 py-4 text-center border-r border-gray-100 text-[#036CA1] underline"
                                style="font-size: 0.8rem">
                                <a href="{{ route('detail_owner') }}">Yoga</a>
                            </td>
                            <td class="px-6 py-4 text-center border-r border-gray-100" style="font-size: 0.8rem">
                                2 Tahun</td>
                            <td class="px-6 py-4 text-center border-r border-gray-100" style="font-size: 0.8rem">
                                087799007654</td>
                            <td class="px-6 py-4 text-center border-r border-gray-100">
                                <x-link href="{{ route('hewan_pertanggal') }}" color="blue">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 10.7H2.11111V7.3H0V10.7ZM0 17.5H2.11111V14.1H0V17.5ZM0 3.9H2.11111V0.5H0V3.9ZM4.22222 10.7H19V7.3H4.22222V10.7ZM4.22222 17.5H19V14.1H4.22222V17.5ZM4.22222 0.5V3.9H19V0.5H4.22222Z" fill="#F8F8F8"/>
                                    </svg>
                                </x-link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination with Rows Per Page Selector -->
            {{-- <div class="flex items-center justify-between mt-4 text-sm text-gray-700">
                <!-- Rows Per Page Selector -->
                <select id="rowsPerPage" onchange="changeRowsPerPage()"
                    class="p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="10" selected>10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select> --}}
            {{-- paginate --}}
            {{-- <div class="flex flex-row">

                    <span class="m-2">
                        {{ ($hewan->currentPage() - 1) * $hewan->perPage() + 1 }} -
                        {{ min($hewan->currentPage() * $hewan->perPage(), $hewan->total()) }}
                        dari {{ $hewan->total() }}
                    </span>

                    <div class="flex items-center">
                        <!-- Tombol Sebelumnya -->
                        <button
                            class="px-2 py-1 mx-1 text-gray-500 bg-white border border-gray-300 rounded hover:bg-gray-100 disabled:text-gray-300 disabled:cursor-not-allowed"
                            @if ($hewan->onFirstPage()) disabled @endif
                            onclick="window.location='{{ $hewan->previousPageUrl() }}'">
                            &lt;
                        </button>

                        <!-- Nomor Halaman -->
                        @foreach (range(1, $hewan->lastPage()) as $page)
                            @if ($page == $hewan->currentPage())
                                <button class="px-3 py-1 mx-1 text-white bg-blue-600 border border-blue-600 rounded">
                                    {{ $page }}
                                </button>
                            @else
                                <button
                                    class="px-3 py-1 mx-1 text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100"
                                    onclick="window.location='{{ $hewan->url($page) }}'">
                                    {{ $page }}
                                </button>
                            @endif
                        @endforeach

                        <!-- Tombol Berikutnya -->
                        <button
                            class="px-2 py-1 mx-1 text-gray-500 bg-white border border-gray-300 rounded hover:bg-gray-100 disabled:text-gray-300 disabled:cursor-not-allowed"
                            @if (!$hewan->hasMorePages()) disabled @endif
                            onclick="window.location='{{ $hewan->nextPageUrl() }}'">
                            &gt;
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}


            {{-- <script>
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
        </script> --}}


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
