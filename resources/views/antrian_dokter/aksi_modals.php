<div class="flex space-x-5">
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #34B441;">Berat Badan:<span class="font-bold pl-2">10 kg</span></div>
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #34B441;">Pulsus:<span class="font-bold pl-2">70 bpm</span></div>
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #34B441;">Frekuensi napas:<span class="font-bold pl-2">20 kali permenit</span></div>
    <div class="rounded-full px-9 py-3 text-white text-sm" style="background-color: #D81A48;">Frekuensi napas:<span class="font-bold pl-2">20 kali permenit</span></div>
</div>
<div class="mt-4">
    <div class="grid w-full grid-cols-4 gap-4 mb-4">
        <label for="" class="text-sm font-medium leading-6 text-gray-700">Anamnesa</label>
        <textarea type="text" id="j" name="name" rows="5"
            class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 resize-none"
            placeholder="Ketikkan anamnesa..."
            required></textarea>
    </div>
    
    <div class="grid w-full grid-cols-4 grid-rows-4 gap-4 mb-4">
        <label for="gejala" class="row-span-1 text-sm font-medium leading-6 text-gray-700">Gejala</label>
        <textarea type="text" id="gejala" name="gejala" rows="3"
            class="col-span-3 row-span-4 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="Ketikkan gejalanya..."
            required></textarea>
    </div>

    <form action="#" method="post">
        <div class="grid w-full grid-cols-4 grid-rows-4 gap-4 mb-4">
            <label for="gejala" class="row-span-1 text-sm font-medium leading-6 text-gray-700">Diagnosa</label>
            <input type="text" id="diagnosa" name="diagnosa" rows="3"
                class="col-span-3 row-span-4 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="cth : Diare"
                required></input>
        </div>
    
        <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
            <label for="service" class="text-sm col-span-3 font-medium leading-6 text-gray-700">Jenis Service</label>
            <label for="hari" class="text-sm font-medium leading-6 text-gray-700">Jumlah Hari Pemeriksaan</label>
            <select id="service" name="service"
                class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="cth : Konsultasi" 
                required>
                <option value="konsultasi">Konsultasi</option>
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
        <button 
        type="submit" class="flex items-center justify-center p-[13px] text-xs rounded-lg group bg-klinikBlue text-white w-[120px]">Tambah Servis</button>
    </form>

    <div class="grid w-full grid-cols-7 gap-4 mb-4">
        <label for="jenis-obat" class="col-span-2 text-sm font-medium leading-6 text-gray-700">Jenis Obat</label>
        <label for="nama-obat" class="col-span-2 text-sm font-medium leading-6 text-gray-700">Nama Obat</label>
        <label for="jumlah-obat" class="col-span-1 text-sm font-medium leading-6 text-gray-700">Jumlah Obat</label>
        <label for="catatan" class="col-span-2 text-sm font-medium leading-6 text-gray-700">Catatan</label>

        <select id="jenis-obat" name="jenis-obat"
            class="col-span-2 py-2 h-10 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="cth : Konsultasi" 
            required>
            <option value="obat1">Jenis Obat 1 <span class="text-sm text-gray-600 text-end">Stok : 8</span></option>
            <option value="obat2">Jenis Obat 2 <span class="text-sm text-gray-600 text-end">Stok : 8</span></option>
        </select>
        <select id="nama-obat" name="nama-obat"
            class="col-span-2 py-2 h-10 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="cth : Konsultasi" 
            required>
            <option value="obat1">Jenis Obat 1 <span class="text-sm text-gray-600 text-end">Stok : 8</span></option>
            <option value="obat2">Jenis Obat 2 <span class="text-sm text-gray-600 text-end">Stok : 8</span></option>
        </select>
        <select id="jumlah-obat" name="jumlah-obat"
            class="py-2 h-10 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
            required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <textarea type="text" id="catatan" name="catatan" rows="3"
            class="col-span-2 row-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
            placeholder="-- beri note disini --"
            required></textarea>
    </div>
