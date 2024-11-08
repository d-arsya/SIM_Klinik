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

<div class="border shadow-md sm:rounded-lg">
    <!-- Search bar tanpa tombol -->
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
     
    <div class="px-[67.5px] place-items-center">
     <table class="w-full text-sm text-left rtl:text-right text-gray-500 mx-10">
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
    </table>
    </div>

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