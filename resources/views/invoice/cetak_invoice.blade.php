@extends('layout.app')
@section('content')
    <div class="flex flex-col justify-between px-8">
        <h1 class="text-lg font-bold">Cetak Invoice</h1>
        <h1 style="font-size: 0.9rem">Jumlah Pasien : 49,000 Jumlah Dokter : 12</h1>
    </div>

    <div class="flex flex-col p-4 m-6 border-2 border-gray-400 ">
        <div class="flex flex-col text-center text-[#036CA1] pt-4">
            <p class="font-extrabold ">Praktik Mandiri Drh. Hendrik TS</p>
            <div class="p-2">
                <p>
                    No. Reg : <br>
                    Perumahan Pakuwon Asri, Jl. Sadewa No.3, Karangtengah Lor, Karangtengah, <br>
                    Kec. Kaliwungu, Kabupaten Kendal, Jawa Tengah 51372 <br>
                    Email: xxxxxxxxxx@gmail.com | Telp: 000000000000
                </p>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="mt-2 overflow-hidden bg-white rounded-lg shadow-md w-96">
                <div class="grid grid-cols-2 divide-x divide-[#036CA1] bg-[#EBEBEB] text-center text-[#036CA1] px-2 "
                    style="font-size: 0.85rem">
                    <!-- Kolom Kiri -->
                    <div class="font-bold">
                        <p class="p-2 border-b border-gray-400">Invoice Kepada</p>
                        <p class="p-2 border-b border-gray-400">No. Invoice</p>
                        <p class="p-2 border-b border-gray-400">Tanggal Invoice</p>
                        <p class="p-2">Jatuh Tempo</p>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="">
                        <p class="p-2 border-b border-gray-400">Andi</p>
                        <p class="p-2 border-b border-gray-400">INV-26773</p>
                        <p class="p-2 border-b border-gray-400">3 September 2023</p>
                        <p class="p-2">3 September 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative px-32 overflow-x-auto text-[#036CA1] py-4">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-xs border-b border-[#036CA1]">
                    <tr>
                        <th scope="col" class="px-6 py-3 rounded-s-lg">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3 text-right rounded-e-lg">
                            Harga
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-gray-300 dark:bg-gray-800">
                        <th class="px-6 py-4 font-normal">
                            Lorem ipsum dolor,. Ra illo, veritatis,<br> alias beatae officiis corrupti quos
                        </th>
                        <td class="px-6 py-4 font-normal text-right">
                            Rp 10,000
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th class="px-6 py-4 font-normal">
                            Lorem ipsum dolor,. Ra illo, veritatis,<br> alias beatae officiis corrupti quos
                        </th>
                        <td class="px-6 py-4 font-normal text-right">
                            Rp 15,000
                        </td>
                    </tr>
            </table>
        </div>

        <div class="flex ">
            <div class="mt-2 ml-auto mr-32 w-96">
                <div class="grid grid-cols-2 text-center text-[#036CA1] px-2" style="font-size: 0.85rem">
                    <!-- Kolom Kiri -->
                    <div class="text-left">
                        <p class="p-2 border-t border-gray-300">Sub-Total</p>
                        <p class="p-2 border-b border-gray-300">Diskon</p>
                        <p class="p-2 font-bold border-b border-gray-300">Total</p>
                        <p class="p-2 border-gray-300">Sudah Dibayar</p>
                        <p class="p-2 font-bold border-b border-gray-300">Sisa Tagihan</p>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="text-right">
                        <p class="p-2 border-t border-gray-300">Rp 20,000</p>
                        <p class="p-2 border-b border-gray-300">10%</p>
                        <p class="p-2 font-bold border-b border-gray-300">Rp 18,000</p>
                        <p class="p-2 ">Rp 18,000</p>
                        <p class="p-2 font-bold border-b border-gray-300">Rp 0</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col text-[#036CA1] mt-4 px-36 font-medium" style="font-size: 0.85rem">
            <p>Transaksi :</p>
            <p>- 3 Sep 2024, 9 : 45 AM</p>
            <p class="px-2">Pembayaran Rp 18,000 (Bank Trasfer)</p>
        </div>

    </div>
@endsection
