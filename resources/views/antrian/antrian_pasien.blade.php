@extends('layout.app')

@section('title', 'Antrian Pasien')

@section('content')

 <div class="flex items-center justify-between">
    <div class="py-5">
        <h2 class="text-xl font-semibold">Tabel Antrian Pasien</h2>
        <div class="flex">
            <p class="text-[#4B5675] font-medium me-[14px]">Jumlah Pasien: <span class="text-[#252F4A]">49,053</span></p>
            <p class="text-[#4B5675] font-medium">Jumlah Dokter: <span class="text-[#252F4A]">724</span></p>
        </div>
    </div>
    <div class="flex gap-2">
        <!-- Tambah Owner & Pasien Baru -->
        <x-button data-modal-target="tambah-baru" data-modal-toggle="tambah-baru" type="button" color="white" class="font-bold w-[202px] py-5">Tambah Owner & Pasien Baru</x-button>
        <x-pop-up id="tambah-baru" header="Pemilik Hewan Peliharaan Baru" width="1122px">
            <!-- Modal body -->
            @include('antrian.tambah_owner_baru')
        </x-pop-up>

        <!-- Tambah Owner /Pasien Lama -->
        <x-button data-modal-target="tambah-lama" data-modal-toggle="tambah-lama" type="button" color="blue" class="font-bold w-[202px] py-5">Tambah Owner /Pasien Lama</x-button>
        <x-pop-up id="tambah-lama" width="1140px">
            @include('antrian.tambah_owner_pasien_lama')
        </x-pop-up>
    </div>
</div>
<x-table {{-- :table="$antrians" --}} id="dataTable">
    <x-custom-thead>
        <tr>
            <th scope="col" class="px-5 py-3 border-b">
                <div class="flex items-center">
                    No Antrian
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
                    No RM
                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                    </svg></a>
                </div>
            </th>
            <th scope="col" class="px-5 py-3 border">
                <div class="flex items-center">
                    Pasien
                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                    </svg></a>
                </div>
            </th>
            <th scope="col" class="px-5 py-3 border">
                <div class="flex items-center">
                    Owner Pasien
                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                    </svg></a>
                </div>
            </th>
            <th scope="col" class="px-5 py-3 border">
                <div class="flex items-center">
                    Nomor Telepon
                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                    </svg></a>
                </div>
            </th>
            <th scope="col" class="px-5 py-3 border">
                <div class="flex items-center">
                    Status
                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                    </svg></a>
                </div>
            </th>
            <th scope="col" class="px-5 py-3 border">
                <div class="flex items-center">
                    Dokter
                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                    </svg></a>
                </div>
            </th>
            <th scope="col" class="px-5 py-3 border">Aksi</th>
        </tr>
    </x-custom-thead>
    <tbody class="text-gray-700">
        <tr>
            <td class="px-5 py-4 border-y">
                1
            </td>
            <td class="px-5 py-4 border">
                08/01/24
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                1
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a 
                    data-modal-target="detail_hewan" 
                    data-modal-toggle="detail_hewan" 
                    href="{{ route('detail_hewan') }}" 
                    class="text-klinikBlue underline font-bold">Guguk</a>
                    <div class="text-[#4B5675]">Anjing</div>
                </div>
            </td>   
            <td class="px-5 py-4 border">
                <a 
                data-modal-target="detail_owner" 
                data-modal-toggle="detail_owner"
                href="{{ route('detail_owner') }}" 
                class="text-klinikBlue underline font-medium">Andi</a>
            </td>
            <td class="px-5 py-4 border">
                0812182930100
            </td>
            <td class="px-5 py-4 border">
                <div class="text-center text-[11px] font-semibold py-1 px-2 border border-txtGreenSuccess rounded-lg bg-bgGreenSuccess text-txtGreenSuccess">
                    Diperiksa
                </div>
            </td>
            <td class="text-sm font-semibold px-5 py-4 border">
                Sandi
            </td>
            <td class="px-5 py-4 border">
                <x-button type="button" color="red" class="bg-alert hover:bg-hovAlert">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.964 12.4319L10.5321 8.00002L14.964 3.56811C15.049 3.48214 15.0966 3.36618 15.0966 3.24535C15.0966 3.12451 15.049 3.00855 14.964 2.92258L12.8704 0.828976C12.7848 0.743391 12.6687 0.695312 12.5477 0.695312C12.4266 0.695312 12.3105 0.743391 12.2249 0.828976L7.79299 5.26089L3.36107 0.828976C3.27546 0.743391 3.15937 0.695312 3.03831 0.695312C2.91726 0.695312 2.80116 0.743391 2.71555 0.828976L0.621945 2.92258C0.53636 3.00819 0.488281 3.12429 0.488281 3.24535C0.488281 3.3664 0.53636 3.4825 0.621945 3.56811L5.05386 8.00002L0.621945 12.4319C0.53636 12.5175 0.488281 12.6336 0.488281 12.7547C0.488281 12.8757 0.53636 12.9918 0.621945 13.0775L2.71555 15.1711C2.80116 15.2566 2.91726 15.3047 3.03831 15.3047C3.15937 15.3047 3.27546 15.2566 3.36107 15.1711L7.79299 10.7392L12.2249 15.1711C12.3105 15.2566 12.4266 15.3047 12.5477 15.3047C12.6687 15.3047 12.7848 15.2566 12.8704 15.1711L14.964 13.0775C15.0496 12.9918 15.0977 12.8757 15.0977 12.7547C15.0977 12.6336 15.0496 12.5175 14.964 12.4319Z" fill="#F8F8F8"/>                
                    </svg>
                </x-button>
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                2
            </td>
            <td class="px-5 py-4 border">
                08/01/24
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                2
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Blacky</a>
                    <p class="text-[#4B5675]">Anjing</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="{{ route('detail_owner') }}" class="text-klinikBlue underline font-medium">Andi</a>
            </td>
            <td class="px-5 py-4 border">
                0812182930100
            </td>
            <td class="px-5 py-4 border">
                <div class="text-center text-[11px] font-semibold py-1 px-2 border border-alert rounded-lg bg-bgAlert text-alert">
                    Menunggu
                </div>
            </td>
            <td class="text-sm font-semibold px-5 py-4 border">
                Sandi
            </td>
            <td class="px-5 py-4 border">
                <x-button type="button" color="red">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.964 12.4319L10.5321 8.00002L14.964 3.56811C15.049 3.48214 15.0966 3.36618 15.0966 3.24535C15.0966 3.12451 15.049 3.00855 14.964 2.92258L12.8704 0.828976C12.7848 0.743391 12.6687 0.695312 12.5477 0.695312C12.4266 0.695312 12.3105 0.743391 12.2249 0.828976L7.79299 5.26089L3.36107 0.828976C3.27546 0.743391 3.15937 0.695312 3.03831 0.695312C2.91726 0.695312 2.80116 0.743391 2.71555 0.828976L0.621945 2.92258C0.53636 3.00819 0.488281 3.12429 0.488281 3.24535C0.488281 3.3664 0.53636 3.4825 0.621945 3.56811L5.05386 8.00002L0.621945 12.4319C0.53636 12.5175 0.488281 12.6336 0.488281 12.7547C0.488281 12.8757 0.53636 12.9918 0.621945 13.0775L2.71555 15.1711C2.80116 15.2566 2.91726 15.3047 3.03831 15.3047C3.15937 15.3047 3.27546 15.2566 3.36107 15.1711L7.79299 10.7392L12.2249 15.1711C12.3105 15.2566 12.4266 15.3047 12.5477 15.3047C12.6687 15.3047 12.7848 15.2566 12.8704 15.1711L14.964 13.0775C15.0496 12.9918 15.0977 12.8757 15.0977 12.7547C15.0977 12.6336 15.0496 12.5175 14.964 12.4319Z" fill="#F8F8F8"/>                
                    </svg>
                </x-button>
            </td>
        </tr>
        @foreach($antrians as $antrian)
            <tr class="bg-white hover:bg-gray-100">
                <td class="px-5 py-4 border-y">{{ $antrian->id_antrian }}</td>
                <td class="px-5 py-4 border">{{ $antrian->tanggal_antrian }}</td>
                <td class="px-5 py-4 border">{{ $antrian->pasien()->rekamMedis()->id_rm }}</td>
                <td class="px-5 py-4 border">{{ $antrian->pasien()->nama_pasien }}</td>
                <td class="px-5 py-4 border">{{ $antrian->pasien()->owner()->nama_owner }}</td>
                <td class="px-5 py-4 border">{{ $antrian->pasien()->umur }}</td>
                <td class="px-5 py-4 border">{{ $antrian->pasien()->owner()->no_hp }}</td>
                <td class="px-5 py-4 border">{{ $antrian->status_antrian }}</td>
                <td class="px-5 py-4 border">{{ $antrian->users()->name }}</td>
                <td class="px-5 py-4 border">
                    <form action="{{ route('queues.destroy', $antrian->id_antrian) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit" color="red">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.964 12.4319L10.5321 8.00002L14.964 3.56811C15.049 3.48214 15.0966 3.36618 15.0966 3.24535C15.0966 3.12451 15.049 3.00855 14.964 2.92258L12.8704 0.828976C12.7848 0.743391 12.6687 0.695312 12.5477 0.695312C12.4266 0.695312 12.3105 0.743391 12.2249 0.828976L7.79299 5.26089L3.36107 0.828976C3.27546 0.743391 3.15937 0.695312 3.03831 0.695312C2.91726 0.695312 2.80116 0.743391 2.71555 0.828976L0.621945 2.92258C0.53636 3.00819 0.488281 3.12429 0.488281 3.24535C0.488281 3.3664 0.53636 3.4825 0.621945 3.56811L5.05386 8.00002L0.621945 12.4319C0.53636 12.5175 0.488281 12.6336 0.488281 12.7547C0.488281 12.8757 0.53636 12.9918 0.621945 13.0775L2.71555 15.1711C2.80116 15.2566 2.91726 15.3047 3.03831 15.3047C3.15937 15.3047 3.27546 15.2566 3.36107 15.1711L7.79299 10.7392L12.2249 15.1711C12.3105 15.2566 12.4266 15.3047 12.5477 15.3047C12.6687 15.3047 12.7848 15.2566 12.8704 15.1711L14.964 13.0775C15.0496 12.9918 15.0977 12.8757 15.0977 12.7547C15.0977 12.6336 15.0496 12.5175 14.964 12.4319Z" fill="#F8F8F8"/>                
                            </svg>
                        </x-button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</x-table>
@endsection
