    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('pasien.store') }}" method="POST">
    @csrf <!-- Tambahkan CSRF token -->
    <div class="grid grid-cols-[auto,722px] gap-4">
        <!-- Text Fields -->
        <x-label>Nama</x-label>
        <input type="text" name="nama_hewan" value="{{ old('nama_hewan') }}" placeholder="Ketikkan nama pasien..." class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <x-label>Gender</x-label>
        <select name="gender" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="jantan" {{ old('gender') == 'jantan' ? 'selected' : '' }}>Jantan</option>
            <option value="betina" {{ old('gender') == 'betina' ? 'selected' : '' }}>Betina</option>
        </select>

        <x-label>Umur</x-label>
        <input type="text" name="umur" value="{{ old('umur') }}" placeholder="cth : 5 bulan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <x-label>Jenis Hewan</x-label>
        <input type="text" name="jenis_hewan" value="{{ old('jenis_hewan') }}" placeholder="cth : Anjing" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <x-label>Warna</x-label>
        <input type="text" name="warna" value="{{ old('warna') }}" placeholder="cth : Coklat" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- Initial Examination Section -->
        <div class="mt-4 col-span-2">
            <h3 class="text-lg font-semibold border-b-[3px] pb-2">Pemeriksaan Awal</h3>
        </div>

        <x-label>Berat Badan (kg)</x-label>
        <input type="number" step="0.1" name="berat_badan" value="{{ old('berat_badan') }}" placeholder="cth : 5.0" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <x-label>Pulsus (bpm)</x-label>
        <input type="number" name="pulsus" value="{{ old('pulsus') }}" placeholder="cth : 70" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <x-label>Frekuensi napas (kali per menit)</x-label>
        <input type="number" name="frekuensi_napas" value="{{ old('frekuensi_napas') }}" placeholder="cth : 20" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <x-label>Suhu (°C)</x-label>
        <input type="number" step="0.1" name="suhu" value="{{ old('suhu') }}" placeholder="cth : 37.5" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- Service Section -->
        <div class="mt-4 col-span-2">
            <h3 class="text-lg font-semibold border-b-[3px] pb-2">Servis</h3>
        </div>

        <x-label>Jenis Servis</x-label>
        <input type="text" name="service" value="{{ old('service') }}" placeholder="cth : Konsultasi" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <div>
            <x-link href="#" onclick="toggleTable()" color="blue">Tambah Service</x-link>
        </div>

        <div id="dataTableContainer" class="hidden col-span-2 place-items-center my-5">
            <table id="dataTable">
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
                    <th scope="col" class="px-5 py-3 border-b">Jenis Service</th>
                    <th scope="col" class="px-5 py-3 border-b">Jumlah Hari</th>
                    <th scope="col" class="px-5 py-3 border-b">Aksi</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="px-5 py-4 border-y">
                            1
                        </td>
                        <td class="px-5 py-4 border">
                            UGD
                        </td>    
                        <td class="px-5 py-4 border">
                            1
                        </td>
                        <td class="px-5 py-4 border">
                            <x-button type="button" color="red" class="bg-alert hover:bg-hovAlert">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.964 12.4319L10.5321 8.00002L14.964 3.56811C15.049 3.48214 15.0966 3.36618 15.0966 3.24535C15.0966 3.12451 15.049 3.00855 14.964 2.92258L12.8704 0.828976C12.7848 0.743391 12.6687 0.695312 12.5477 0.695312C12.4266 0.695312 12.3105 0.743391 12.2249 0.828976L7.79299 5.26089L3.36107 0.828976C3.27546 0.743391 3.15937 0.695312 3.03831 0.695312C2.91726 0.695312 2.80116 0.743391 2.71555 0.828976L0.621945 2.92258C0.53636 3.00819 0.488281 3.12429 0.488281 3.24535C0.488281 3.3664 0.53636 3.4825 0.621945 3.56811L5.05386 8.00002L0.621945 12.4319C0.53636 12.5175 0.488281 12.6336 0.488281 12.7547C0.488281 12.8757 0.53636 12.9918 0.621945 13.0775L2.71555 15.1711C2.80116 15.2566 2.91726 15.3047 3.03831 15.3047C3.15937 15.3047 3.27546 15.2566 3.36107 15.1711L7.79299 10.7392L12.2249 15.1711C12.3105 15.2566 12.4266 15.3047 12.5477 15.3047C12.6687 15.3047 12.7848 15.2566 12.8704 15.1711L14.964 13.0775C15.0496 12.9918 15.0977 12.8757 15.0977 12.7547C15.0977 12.6336 15.0496 12.5175 14.964 12.4319Z" fill="#F8F8F8"/>                
                                </svg>
                            </x-button>
                        </td>    
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Vaccination Section -->
        <div class="mt-4 col-span-2">
            <h3 class="text-lg font-semibold border-b-[3px] pb-2">Vaksinasi</h3>
        </div>

        <x-label>Sudah Vaksin atau Belum?</x-label>

        <div class="flex items-center">
            <label class="flex items-center">
                <input type="checkbox" name="sudah_vaksin" class="form-checkbox h-5 w-5 text-blue-600" {{ old('sudah_vaksin') ? 'checked' : '' }}>
                <span class="ml-2 text-gray-700">Sudah Vaksin</span>
            </label>
        </div>

        <x-label>Jenis Vaksin</x-label>
        <input type="text" name="jenis_vaksin" value="{{ old('jenis_vaksin') }}" placeholder="cth : Rabies" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <!-- Submit Button -->
        <div class="place-items-end mt-6 col-span-2">
            <x-button type="submit" class="w-[120px]" color="blue">Submit</x-button>
        </div>
    </div>
</form>
<script>
// Fungsi untuk menampilkan atau menyembunyikan tabel
function toggleTable() {
    const tableContainer = document.getElementById('dataTableContainer');
    if (tableContainer.style.display === 'none') {
        tableContainer.style.display = 'block';
    } else {
        tableContainer.style.display = 'none';
    }
}
</script>