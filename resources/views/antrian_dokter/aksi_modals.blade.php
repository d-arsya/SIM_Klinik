<div class="flex space-x-5">
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #34B441;">Berat Badan:<span class="font-bold pl-2">10 kg</span></div>
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #34B441;">Pulsus:<span class="font-bold pl-2">70 bpm</span></div>
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #34B441;">Frekuensi napas:<span class="font-bold pl-2">20 kali permenit</span></div>
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #D81A48;">Frekuensi napas:<span class="font-bold pl-2">20 kali permenit</span></div>
</div>
<div class="mt-4 max-w-5xl mx-auto">
    <div class="grid w-full grid-cols-4 gap-4 mb-4">
        <label for="" class="text-sm font-medium leading-6 text-gray-700">Anamnesa</label>
        <textarea type="text" id="j" name="name" rows="5"
            class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 resize-none"
            placeholder="Ketikkan anamnesa..."
            required></textarea>
    
        <label for="gejala" class="row-span-1 text-sm font-medium leading-6 text-gray-700">Gejala</label>
        <textarea type="text" id="gejala" name="gejala" rows="3"
            class="col-span-3 row-span-4 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="Ketikkan gejalanya..."
            required></textarea>
    </div>

    <form action="#" method="post">
        <div class="grid w-full grid-cols-4 grid-rows-4 gap-4 mb-4 auto-cols-[270px]">
            <label for="gejala" class="row-span-1 text-sm font-medium leading-6 text-gray-700">Diagnosa</label>
            <select id="gejala" name="gejala"
                class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
                <option value="" disabled selected>cth : Diare</option>
                <option value="UGD">UGD</option>
            </select>
    
            <label for="service" class="text-sm col-span-3 font-medium leading-6 text-gray-700">Jenis Service</label>
            <label for="hari" class="text-sm font-medium leading-6 text-gray-700">Jumlah Hari Pemeriksaan</label>
            <select id="service" name="service"
                class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="cth : Konsultasi" 
                required>
                <option value="" disabled selected>cth : Konsultasi</option>
                <option value="superadmin">UGD</option>
            </select>
    
            <select id="hari" name="hari"
                class="py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <x-button color="blue" 
            type="submit"
            class="font-medium rounded-lg text-sm px-4 py-3 focus:outline-none">
            Tambah Service</x-button>
    </form>

    <form class="container">
        <div class="p-4">

            <h1 class="text-xl font-bold mb-4">Tambah Obat</h1>
            <div class="grid grid-cols-1 md:grid-cols-8 gap-10">
                <div class="col-span-2">
                    <label for="jenis-obat" class="block text-sm font-medium text-gray-700">Jenis Obat</label>
                    <select id="jenis-obat" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>-- Pilih Obat --</option>
                    </select>
                </div>
                <div class="col-span-2">
                    <label for="nama-obat" class="block text-sm font-medium text-gray-700">Nama Obat</label>
                    <select id="nama-obat" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>-- Pilih Nama Obat --</option>
                    </select>
                </div>
                <div>
                    <label for="jumlah-obat" class="block text-sm font-medium text-gray-700">Jumlah Obat</label>
                    <input type="number" id="jumlah-obat" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="1">
                </div>
                <div class="col-span-3">
                    <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan</label>
                    <textarea id="catatan" rows="10" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">-- beri note di sini --</textarea>
                </div>
            </div>
        </div>
        <x-button color="blue" 
            type="submit"
            class="font-medium rounded-lg text-sm px-4 py-3 focus:outline-none">
            Tambah Obat</x-button>
    </form>
    <div class="flex place-self-end space-x-2 mt-2">
        <x-button 
            data-modal-target="rawatinap" data-modal-toggle="rawatinap"
            color="" 
            type="button"
            class="font-medium bg-[#D39E00] text-white rounded-lg text-sm px-4 py-3 focus:outline-none">
            Tambah ke Rawat Inap</x-button>
        <x-pop-up id="rawatinap" header="Konfirmasi">
            <!-- Modal body -->
            @include('antrian_dokter.konfirmasi_pemeriksaan')
        </x-pop-up>

        <x-button 
            data-modal-target="submit" data-modal-toggle="submit"
            color="blue" 
            type="button"
            class="font-medium rounded-lg text-sm px-4 py-3 focus:outline-none">
            Submit</x-button>
        <x-pop-up id="submit" header="Konfirmasi">
            <!-- Modal body -->
            @include('antrian_dokter.konfirmasi_pemeriksaan')
        </x-pop-up>
    </div>
</div>
