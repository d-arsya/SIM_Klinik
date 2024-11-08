@extends('layout.app')

@section('title', 'Dashboard')

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
        <x-button data-modal-target="tambah-baru" data-modal-toggle="tambah-baru" type="button" color="white" class="font-bold w-[202px] py-5 border-2 border-klinikBlue">Tambah Owner & Pasien Baru</x-button>
        <x-pop-up id="tambah-baru" header="Pemilik Hewan Peliharaan Baru" width="1122px">
            <!-- Modal body -->
            @include('antrian.tambah_pasien_baru')
        </x-pop-up>

        <x-pop-up id="pasien-baru" header="Hewan Peliharaan Baru">
            @include('antrian.tambah_pasien_baru')
        </x-pop-up>

        <!-- Tambah Owner /Pasien Lama -->
        <x-button data-modal-target="tambah-lama" data-modal-toggle="tambah-lama" type="button" color="blue" class="font-bold w-[202px] py-5">Tambah Owner /Pasien Lama</x-button>
        <x-pop-up id="tambah-lama" width="1140px">
            @include('antrian.tambah_owner_pasien_lama')
        </x-pop-up>
    </div>
 </div>

 <div class="border shadow-md sm:rounded-lg">
    <!-- Search -->
    <div class="flex justify-between py-3 p-[27.5px] border-b">
            <form class="min-w-[338px] rounded-sm">   
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.1" d="M13.6999 7.43294C13.6999 10.6546 11.0882 13.2663 7.86654 13.2663C4.64488 13.2663 2.0332 10.6546 2.0332 7.43294C2.0332 4.21128 4.64488 1.59961 7.86654 1.59961C11.0882 1.59961 13.6999 4.21128 13.6999 7.43294Z" fill="#99A1B7"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5054 11.2039C13.3645 10.1658 13.8809 8.83365 13.8809 7.38086C13.8809 4.06715 11.1946 1.38086 7.88086 1.38086C4.56715 1.38086 1.88086 4.06715 1.88086 7.38086C1.88086 10.6946 4.56715 13.3809 7.88086 13.3809C9.33367 13.3809 10.6659 12.8645 11.704 12.0053L14.1468 14.4482C14.3681 14.6695 14.7269 14.6695 14.9482 14.4482C15.1695 14.2269 15.1695 13.8681 14.9482 13.6468L12.5054 11.2039ZM7.88086 12.2688C5.1813 12.2688 2.99288 10.0804 2.99288 7.38086C2.99288 4.6813 5.1813 2.49288 7.88086 2.49288C10.5804 2.49288 12.7688 4.6813 12.7688 7.38086C12.7688 10.0804 10.5804 12.2688 7.88086 12.2688Z" fill="#99A1B7"/>
                        </svg>
                    </div>
                    <input type="search" id="search" class="font-bold block w-full p-4 ps-10 text-sm text-[#99A1B9] border border-gray-300 rounded-lg bg-gray-50" placeholder="Cari..." required />
                </div>
            </form>
            <button class="flex items-center border border-[#E9F3FF] bg-[#EFF6FF] text-[#1B84FF] px-5 h-[44px] text-xs font-medium self-center rounded-md">
                <svg class="pe-1" width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.45898 2.375H15.5423L7.47998 10.4373C7.34994 10.1037 7.13815 9.80805 6.86407 9.57758C6.68357 9.42083 6.43103 9.27913 5.92753 8.99492L3.6214 7.69658C2.87011 7.27462 2.49486 7.06325 2.28982 6.72283C2.08398 6.38162 2.08398 5.96996 2.08398 5.14821V4.60196C2.08398 3.55221 2.08398 3.02654 2.43232 2.70037C2.77907 2.375 3.33878 2.375 4.45898 2.375Z" fill="#1B84FF"/>
                    <path opacity="0.5" d="M17.9166 5.149V4.60275C17.9166 3.553 17.9166 3.02733 17.5683 2.70117C17.2216 2.375 16.6618 2.375 15.5416 2.375L7.47852 10.4373C7.5181 10.5392 7.55003 10.6455 7.57431 10.7564C7.62497 10.982 7.62497 11.2464 7.62497 11.7745V13.8882C7.62497 14.6078 7.62497 14.968 7.82447 15.2483C8.02397 15.5293 8.37864 15.6679 9.08639 15.945C10.5739 16.526 11.3173 16.8166 11.8461 16.4857C12.375 16.1547 12.375 15.3995 12.375 13.8874V11.7737C12.375 11.2464 12.375 10.982 12.4248 10.7564C12.5245 10.2949 12.7752 9.87975 13.1373 9.57679C13.3171 9.42083 13.5688 9.27913 14.0731 8.99492L16.3792 7.69658C17.1297 7.27463 17.5058 7.06325 17.7108 6.72283C17.9166 6.38242 17.9166 5.97075 17.9166 5.149Z" fill="#1B84FF"/>
                </svg>
                Filters</button> 
        </div>

<!-- Tabel Antrian -->
<div class="px-[67.5px] place-items-center">
    <table class="w-full text-sm text-left rtl:text-right text-txtgray mx-10">
        <thead class="text-xs text-gray-700 bg-gray-50">
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
        </thead>
        <tbody class="text-gray-700">
            <tr class="bg-white">
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
                        <a href="#" class="text-klinikBlue underline font-bold">Guguk</a>
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
                    <div class="text-center text-[11px] font-semibold py-1 px-2 border border-txtGreenSuccess rounded-lg bg-bgGreenSuccess text-txtGreenSuccess">
                        Diperiksa
                    </div>
                </td>
                <td class="text-sm font-semibold px-5 py-4 border">
                    Sandi
                </td>
                <td class="px-5 py-4 border">
                    <x-button type="button" color="blue">
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
            <!-- @foreach($antrians as $antrian)
                <tr class="bg-white hover:bg-gray-100">
                    <td class="px-5 py-4 border-y">{{ $antrian->tanggal_antrian }}</td>
                    <td class="px-5 py-4 border">{{ $antrian->id_antrian }}</td>
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
                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach -->
        </tbody>
    </table>
</div>
<!-- <script>
    // Mendapatkan referensi elemen modal
    const modalTambahBaru = document.getElementById('tambah-baru');
    const modalTambahPasien = document.getElementById('pasien-baru');

    // Pastikan modal sudah ada
    if (modalTambahBaru && modalTambahPasien) {
        // Fungsi untuk memantau saat modal pertama ditutup
        modalTambahBaru.addEventListener('hidden.bs.modal', function () {
            // Jika modal pertama ditutup, buka modal kedua
            const modal = new bootstrap.Modal(modalTambahPasien);
            modal.show();  // Menampilkan modal kedua
        });
    }
</script> -->
@endsection
