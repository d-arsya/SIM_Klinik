@extends('layout.app')
@section('title', 'Detail Owner')
@section('content')
<div class="flex flex-col pb-3">
    <a href="javascript:history.back()" class="flex items-center font-semibold text-black hover:text-gray-800">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
        Kembali
    </a>
</div>

<div class="flex justify-between mb-7">
    <div class="flex items-center space-x-5">
        <img class="w-[100px] h-[100px]" src="img/detail-owner-img.png" alt="detail-owner">
        <div class="space-y-1">
            <div class="font-semibold text-lg">Andi</div>
        </div>
    </div>
</div>
<div class="mb-7 border-2 rounded-xl">
    <div class="flex justify-between px-[30px] border-b-2">
        <h2 class="text-lg py-3 font-medium">About</h2>
        <x-link href="{{ route('edit_owner') }}"  color="blue" class="self-center px-4 h-[30px]">Edit</x-link>
    </div>
    <div class="p-[30px] justify-center items-start">
        <div class="flex gap-7 text-sm">
            <div class="space-y-4 text-txtgray">
                <div>Nama:</div>
                <div>Gender:</div>
                <div>Nomor Telepon:</div>
                <div>Alamat:</div>
            </div>
            <div class="space-y-4 text-txtblack">
                <div>Andi</div>
                <div>Laki-laki</div>
                <div>081212292928</div>
                <div>Kaliurang St No.Km 15.5, Kledokan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55582</div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="font-semibold text-base my-3">Histori Pemeriksaan</div>
    <x-table>
        <thead class="text-xs text-gray-700 bg-gray-50">
            <tr>
                <th scope="col" class="px-5 py-3 border-b">
                    <div class="flex items-center">
                        No.
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-5 py-3 border">
                    <div class="flex items-center">
                        Tanggal
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-5 py-3 border">
                    <div class="flex items-center">
                        Nama Pasien
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-5 py-3 border">
                    <div class="flex items-center">
                        Umur
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-5 py-3 border">
                    <div class="flex items-center">
                        Ras Pasien
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white">
                <td class="px-5 py-4 border-y">
                    1
                </td>
                <td class="px-5 py-4 border">
                    09/01/24
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <a href="#" class="text-klinikBlue underline font-bold">Guguk</a>
                        <p class="text-[#4B5675]">Anjing</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    2 Tahun
                </td>
                <td class="px-5 py-4 border">
                    Pomeranian
                </td>
            </tr>
            <tr class="bg-white">
                <td class="px-5 py-4 border-y">
                    2
                </td>
                <td class="px-5 py-4 border">
                    08/01/24
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <a href="#" class="text-klinikBlue underline font-bold">Blacky</a>
                        <p class="text-[#4B5675]">Anjing</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    2 Tahun
                </td>
                <td class="px-5 py-4 border">
                    Pomeranian
                </td>
            </tr>
            <tr class="bg-white">
                <td class="px-5 py-4 border-y">
                    3
                </td>
                <td class="px-5 py-4 border">
                    07/01/24
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <a href="#" class="text-klinikBlue underline font-bold">Anjingan</a>
                        <p class="text-[#4B5675]">Anjing</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    2 Tahun
                </td>
                <td class="px-5 py-4 border">
                    Pomeranian
                </td>
            </tr>
            <tr class="bg-white">
                <td class="px-5 py-4 border-y">
                    4
                </td>
                <td class="px-5 py-4 border">
                    06/01/24
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <a href="#" class="text-klinikBlue underline font-bold">Afganjing</a>
                        <p class="text-[#4B5675]">Anjing</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    2 Tahun
                </td>
                <td class="px-5 py-4 border">
                    Pomeranian
                </td>
            </tr>
            <tr class="bg-white">
                <td class="px-5 py-4 border-y">
                    5
                </td>
                <td class="px-5 py-4 border">
                    05/01/24
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <a href="#" class="text-klinikBlue underline font-bold">Livi</a>
                        <p class="text-[#4B5675]">Kucing</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    2 Tahun
                </td>
                <td class="px-5 py-4 border">
                    Pomeranian
                </td>
            </tr>
        </tbody>
    </x-table>
</div>
@endsection