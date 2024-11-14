<div class="border shadow-md sm:rounded-lg w-full">
    <!-- Search bar tanpa tombol -->
    <div class="flex justify-between py-2 p-[27.5px] border-b">
        <div class="flex items-center">
            <h2 class="font-semibold text-base">Transaksi Unit</h2>
        </div>
         <form class="min-w-[180px] rounded-sm">
             <label for="search" class="text-sm font-medium text-gray-900 sr-only">Search</label>
             <div class="relative">
                 <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                     <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path opacity="0.1" d="M13.6999 7.43294C13.6999 10.6546 11.0882 13.2663 7.86654 13.2663C4.64488 13.2663 2.0332 10.6546 2.0332 7.43294C2.0332 4.21128 4.64488 1.59961 7.86654 1.59961C11.0882 1.59961 13.6999 4.21128 13.6999 7.43294Z" fill="#99A1B7"/>
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5054 11.2039C13.3645 10.1658 13.8809 8.83365 13.8809 7.38086C13.8809 4.06715 11.1946 1.38086 7.88086 1.38086C4.56715 1.38086 1.88086 4.06715 1.88086 7.38086C1.88086 10.6946 4.56715 13.3809 7.88086 13.3809C9.33367 13.3809 10.6659 12.8645 11.704 12.0053L14.1468 14.4482C14.3681 14.6695 14.7269 14.6695 14.9482 14.4482C15.1695 14.2269 15.1695 13.8681 14.9482 13.6468L12.5054 11.2039ZM7.88086 12.2688C5.1813 12.2688 2.99288 10.0804 2.99288 7.38086C2.99288 4.6813 5.1813 2.49288 7.88086 2.49288C10.5804 2.49288 12.7688 4.6813 12.7688 7.38086C12.7688 10.0804 10.5804 12.2688 7.88086 12.2688Z" fill="#99A1B7"/>
                     </svg>
                 </div>
                 <input type="search" id="search" class="block w-full p-2 ps-10 text-sm text-[#99A1B9] border border-gray-300 rounded-lg bg-gray-50" placeholder="Cari..." required />
             </div>
         </form>
     </div>

    <div class="place-items-center">
     <table class="w-full text-sm text-left rtl:text-right text-gray-500 mx-10">
        <thead class="text-xs text-gray-700 bg-gray-50">
            <tr>
                <th scope="col" class="px-3 py-3 border">
                    <div class="flex items-center">
                        No. RM
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-3 py-3 border">
                    <div class="flex items-center">
                        Pasien
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-3 py-3 border">
                    <div class="flex items-center">
                        Last Transaction
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-3 py-3 border">
                    <div class="flex items-center">
                        Owner
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                        </svg></a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white">
                <td scope="row" class="px-6 py-4 border text-gray-900 whitespace-nowrap dark:text-white">
                    <div>
                        <div class="font-semibold">1</div>
                        <div class="text-xs text-txtgray">Anjing</div>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <p class= "text-black ">Guguk</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    21 Oct, 2024
                </td>
                <td class="px-5 py-4 border">
                    <img class="w-9 h-9 rounded-full border border-1 border-greenProfile" src="img/profile.png" alt="Foto Profil">
                </td>
            </tr>
            <tr class="bg-white">
                <td scope="row" class="px-6 py-4 border text-gray-900 whitespace-nowrap dark:text-white">
                    <div>
                        <div class="font-semibold">1</div>
                        <div class="text-xs text-txtgray">Anjing</div>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <p class= "text-black ">Guguk</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    21 Oct, 2024
                </td>
                <td class="px-5 py-4 border">
                    <img class="w-9 h-9 rounded-full border border-1 border-greenProfile" src="img/profile.png" alt="Foto Profil">
                </td>
            </tr>
            <tr class="bg-white">
                <td scope="row" class="px-6 py-4 border text-gray-900 whitespace-nowrap dark:text-white">
                    <div>
                        <div class="font-semibold">1</div>
                        <div class="text-xs text-txtgray">Anjing</div>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <p class= "text-black ">Guguk</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    21 Oct, 2024
                </td>
                <td class="px-5 py-4 border">
                    <img class="w-9 h-9 rounded-full border border-1 border-greenProfile" src="img/profile.png" alt="Foto Profil">
                </td>
            </tr>
            <tr class="bg-white">
                <td scope="row" class="px-6 py-4 border text-gray-900 whitespace-nowrap dark:text-white">
                    <div>
                        <div class="font-semibold">1</div>
                        <div class="text-xs text-txtgray">Anjing</div>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    <div>
                        <p class= "text-black ">Guguk</p>
                    </div>
                </td>
                <td class="px-5 py-4 border">
                    21 Oct, 2024
                </td>
                <td class="px-5 py-4 border">
                    <img class="w-9 h-9 rounded-full border border-1 border-greenProfile" src="img/profile.png" alt="Foto Profil">
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

