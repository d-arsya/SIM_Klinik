@extends('layout.app')

@section('title', 'dashboard')
@section('content')

<div class="py-5">
    <h2 class="text-xl font-semibold">Tabel Daftar Pasien</h2>
    <div class="flex">
        <p class="text-[#4B5675] font-medium me-[14px]">Jumlah Pasien: <span class="text-[#252F4A]">49,053</span></p>
        <p class="text-[#4B5675] font-medium">Jumlah Dokter: <span class="text-[#252F4A]">724</span></p>
    </div>
</div>

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
                    No. RM
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
                    Umur
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
        </tr>
    </thead>
    <tbody>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                1
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
                <a href="#" class="text-klinikBlue underline font-medium">Andi</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                2
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
                <a href="#" class="text-klinikBlue underline font-medium">Andi</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                3
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                3
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Anjingan</a>
                    <p class="text-[#4B5675]">Anjing</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Jacob Jones</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                4
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                4
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Afganjing</a>
                    <p class="text-[#4B5675]">Anjing</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Cody Fisher</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                5
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                12
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Meow</a>
                    <p class="text-[#4B5675]">Kucing</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Livia</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
                0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                6
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                59
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Vird</a>
                    <p class="text-[#4B5675]">Burung</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Robert Fox</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                7
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                81
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Livi</a>
                    <p class="text-[#4B5675]">Kucing</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Vathia</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                8
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                8
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Twity</a>
                    <p class="text-[#4B5675]">Burung</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Theressa Webb</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                9
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                10
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Python</a>
                    <p class="text-[#4B5675]">Kelinci</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Marvin</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
        <tr class="bg-white">
            <td class="px-5 py-4 border-y">
                10
            </td>
            <td scope="row" class="px-6 py-4 border font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                20
            </td>
            <td class="px-5 py-4 border">
                <div>
                    <a href="#" class="text-klinikBlue underline font-bold">Roawrr</a>
                    <p class="text-[#4B5675]">Tikus</p>
                </div>
            </td>
            <td class="px-5 py-4 border">
                <a href="#" class="text-klinikBlue underline font-medium">Overia Via</a>
            </td>
            <td class="px-5 py-4 border">
                2 Tahun
            </td>
            <td class="px-5 py-4 border">
            0812182930100
            </td>
        </tr>
    </tbody>
</x-table>

    <nav aria-label="Page navigation example" class="place-self-end my-4 me-5">
        <div class="flex justify-between items-center"><span class="font-semibold text-[13px] text-[#78829D]">1-10 of 52</span>  
        <ul class="flex items-center -space-x-px h-8 text-sm">
        <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Previous</span>
            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
        </a>
        </li>
        <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark: dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
        </li>
        <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark: dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
        </li>
        <li>
        <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600  bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark: dark:bg-gray-700 dark:text-white">3</a>
        </li>
        <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark: dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
        </li>
        <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark: dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
        </li>
        <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white  rounded-e-md hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
            <span class="sr-only">Next</span>
            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </a>
        </li>
    </ul>
    </nav>
        </div>
    

</div>

@endsection