@extends('layout.app')
@section('content')

<div class="flex items-center justify-between">
    <div class="py-5">
        <h2 class="text-xl font-semibold">Tabel Warna</h2>
    </div>
    <div class="flex gap-2">
        <!-- Tambah Owner & Pasien Baru -->
        <x-link color="blue" href="{{ route('masterdata.warna.create') }}" class="font-bold w-[202px] py-5">Tambah Warna</x-link>

        <x-button data-modal-target="tambah-bulk" data-modal-toggle="tambah-bulk" type="button" color="" class="bg-[#EFF6FF] border border-bulkStroke text-klinikBlue font-bold w-[202px] h-[56.8px]">Tambah Bulk</x-button>
        <div id="tambah-bulk" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)]">
            @include('masterdata.tambah_bulk')
        </div>
    </div>
</div>

<!-- Tabel Data -->
<div class="overflow-x-auto mt-5 bg-white rounded-lg shadow-md">
    <x-table :table="$warna" id="dataTable">
        <x-custom-thead class="text-gray-500 bg-gray-100 border-b border-gray-200">
            <tr>
                <th scope="col" class="px-4 py-3 border-r border-gray-100"
                    style="font-size: 0.81rem">No.</th>
                <th scope="col" class="px-4 py-4 border-r border-gray-100"
                    style="font-size: 0.81rem">Kode Warna</th>
                <th scope="col" class="px-6 py-3 border-r border-gray-100"
                    style="font-size: 0.81rem">Warna</th>
                <th scope="col" class="px-6 py-3 text-center border-r border-gray-100"
                    style="font-size: 0.81rem">Aksi</th>
            </tr>
        </x-custom-thead>
        <tbody>
            <!-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-2 font-semibold border-r border-gray-100">1</td>
                <td class="px-6 py-2 font-semibold border-r border-gray-100">
                    COL-1</td>
                <td class="px-6 py-2 font-semibold text-black border-r border-gray-100 ">Merah</td>
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
            @foreach ($warna as $index => $item)
                <tr class="bg-white text-black border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-2 font-semibold border-r border-gray-100">
                        {{ ($warna->currentPage() - 1) * $warna->perPage() + $index + 1 }}</td>
                    <td class="px-6 py-2 font-semibold text-center border-r border-gray-100">
                        {{ $item->id }}</td>
                    <td class="px-6 py-2 font-semibold border-r border-gray-100 ">{{ $item->Warna }}</td>
                    <td class="flex justify-center px-6 py-2 space-x-2 text-center border-r border-gray-100">
                        <form action="{{ route('masterdata.warna.edit', $item->id) }}">
                            @csrf
                            <x-button type="submit" color=""
                                class="bg-[#EFA006] font-medium text-white transition-all duration-200 ease-in-out transform focus:outline-none hover:bg-yellow-500 hover:scale-105 hover:shadow-xl" aria-hidden="true">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4553 15.1338L16.6186 8.97044C15.5817 8.53729 14.64 7.90477 13.8469 7.10877C13.0505 6.31548 12.4177 5.37348 11.9844 4.33627L5.82109 10.4996C5.34026 10.9804 5.09942 11.2213 4.89276 11.4863C4.64892 11.7992 4.43964 12.1375 4.26859 12.4954C4.12442 12.7988 4.01692 13.1221 3.80192 13.7671L2.66692 17.1696C2.61468 17.3254 2.60693 17.4927 2.64454 17.6526C2.68215 17.8126 2.76363 17.9589 2.87982 18.075C2.996 18.1912 3.14229 18.2727 3.30225 18.3103C3.4622 18.3479 3.62947 18.3402 3.78526 18.2879L7.18776 17.1529C7.83359 16.9379 8.15609 16.8304 8.45942 16.6863C8.81887 16.5152 9.15526 16.3071 9.46859 16.0621C9.73359 15.8554 9.97442 15.6146 10.4553 15.1338ZM18.3286 7.26044C18.9431 6.64591 19.2884 5.81243 19.2884 4.94335C19.2884 4.07428 18.9431 3.2408 18.3286 2.62627C17.7141 2.01174 16.8806 1.6665 16.0115 1.6665C15.1424 1.6665 14.309 2.01174 13.6944 2.62627L12.9553 3.36544L12.9869 3.45794C13.3511 4.50025 13.9472 5.44626 14.7303 6.2246C15.5319 7.03112 16.511 7.63897 17.5894 7.99961L18.3286 7.26044Z" fill="#F8F8F8"/>
                                </svg>
                            </x-button>
                        </form>

                        <form action="{{ route('masterdata.warna.destroy', $item->id) }}" method="POST"
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
    </x-table>
</div>
@endsection
