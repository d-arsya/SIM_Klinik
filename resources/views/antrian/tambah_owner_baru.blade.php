<form id="submitForm" action="{{ route('owner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-4 gap-[10px] auto-cols-[270px]">
        <label class="flex items-center text-gray-700 font-medium">Photo</label>
        <div class="mt-2 flex items-center col-span-3 justify-between">
            <input type="file" class="ml-4" accept=".jpeg,.jpg,.png">
            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 24H0V0h24v24z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-10c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6 2.69-6 6-6zm0 13.5c-4.67 0-8.5 2.14-8.5 4.5V22h17v-1.5c0-2.36-3.83-4.5-8.5-4.5z"/>
                </svg>
            </span>
        </div>

        <!-- Name Field -->
        <x-label>Nama</x-label>
        <input type="text" name="nama_owner" placeholder="Ketikkan nama owner pasien..." class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>

        <!-- Gender Field -->
        <x-label>Gender</x-label>
        <input type="text" name="gender" placeholder="cth : Perempuan" class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>

        <!-- Phone Number Field -->
        <x-label>Nomor Telepon</x-label>
        <input type="text" name="no_hp" placeholder="cth : 08xxxx" class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    
        <!-- Address Field -->
        <x-label>Alamat</x-label>
        <textarea name="alamat" placeholder="Alamat Domisili" class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
    

        <!-- Province, City, District, Village Dropdowns -->
        <div class="grid grid-cols-4 gap-[10px] col-span-3 col-start-2">
            <select name="provinsi_id" id="provinsi_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Pilih Provinsi</option>
                @foreach ($provinsis as $provinsi)
                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                @endforeach
            </select>
            <select name="kabupaten_id" id="kabupaten_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Pilih Kabupaten</option>
                @foreach ($kabupatens as $kabupaten)
                    <option value="{{ $kabupaten->id }}">{{ $kabupaten->nama_kota }}</option>
                @endforeach
            </select>
            <select name="kecamatan_id" id="kecamatan_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Pilih Kecamatan</option>
                @foreach ($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                @endforeach
            </select>
            <select name="desa_id" id="desa_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="">Pilih Desa</option>
                @foreach ($desas as $desa)
                    <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-4 place-self-end">
            <x-button type="submit" color="blue" class="w-[137px]">Submit</x-button>
        </div>
    </div>
</form>

<script>
    document.getElementById('submitForm').onsubmit = function() {
        setTimeout(function() {
            window.location.href = 'antrian.tambah_pasien_baru'; // Halaman tujuan setelah submit
        }, 500); // Delay 500ms untuk memastikan data sudah diproses
    };
</script>