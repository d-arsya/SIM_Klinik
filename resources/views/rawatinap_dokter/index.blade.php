@extends('layout.app')
@section('content')
<div class="flex flex-col justify-between px-8">
    <h1 class="text-lg font-bold">List Rawat Inap</h1>
    <h1 style="font-size: 0.9rem">Jumlah Pasien : 49,000 Jumlah Dokter : 12</h1>
</div>

<!-- Tabel Data -->
<div class="overflow-x-auto mt-5 bg-white rounded-lg shadow-md">
    <x-table {{-- :table="" --}} id="dataTable">
        <x-custom-thead>
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
        </x-custom-thead>
        <tbody>
            <tr class="bg-white border-b">
                <td class="px-6 py-4 font-semibold border-r text-center border-gray-100" style="font-size: 0.8rem">INV-1
                </td>
                <td class="px-6 py-4 font-semibold text-center border-r border-gray-100"
                    style="font-size: 0.8rem">29/05/2024</td>
                <td class="px-6 py-4 font-semibold border-r border-gray-100 text-center" style="font-size: 0.8rem">1</td>
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
                    <td class="px-6 py-4 border-r border-gray-100">
                        <div class="flex justify-center items-center space-x-2">
                            <!-- Button Pertama -->
                            <x-link type="button" color="blue" href="{{ route('rawatinap_pertanggal_dokter') }}" >
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 10.7H2.11111V7.3H0V10.7ZM0 17.5H2.11111V14.1H0V17.5ZM0 3.9H2.11111V0.5H0V3.9ZM4.22222 10.7H19V7.3H4.22222V10.7ZM4.22222 17.5H19V14.1H4.22222V17.5ZM4.22222 0.5V3.9H19V0.5H4.22222Z" fill="#F8F8F8"/>
                                </svg>
                            </x-link>
                            
                            <!-- Button Kedua -->
                            <x-button 
                                type="submit" 
                                color="blue" 
                                class="flex justify-center items-center"
                            >
                                Selesai Rawat Inap
                            </x-button>
                        </div>
                    </td>

            </tr>
        </tbody>
    </x-table>
</div>
@endsection
