@extends('layout.app')
@section('content')
    <div class="flex items-center justify-between px-8">
        <h1 class="font-bold">Tabel Users</h1>
        <div class="flex">
            <a href="{{ route('masterdata.users.create') }}"
                class="w-46 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 transition-all duration-200 ease-in-out transform hover:scale-105 hover:shadow-lg">
                Tambah Users
            </a>
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
                                    <a href="{{ route('masterdata.users.edit', $item->id) }}"
                                        class="inline-block px-2 py-2 text-sm font-medium text-white transition-all duration-200 ease-in-out transform bg-yellow-400 rounded-lg shadow-lg hover:bg-yellow-500 hover:scale-105 hover:shadow-xl dark:focus:ring-yellow-900">
                                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('masterdata.users.destroy', $item->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin mau dihapus?')" type="submit"
                                            class="px-2 py-2 text-sm font-medium text-white transition-all duration-200 ease-in-out transform bg-red-700 rounded-lg shadow-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900 hover:scale-105 hover:shadow-xl dark:bg-red-600 dark:hover:bg-red-700">
                                            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
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
