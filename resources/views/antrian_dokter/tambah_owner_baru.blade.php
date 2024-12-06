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
        <select name="gender" class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="laki-laki" {{ old('gender') == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="perempuan" {{ old('gender') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>

        <!-- Phone Number Field -->
        <x-label>Nomor Telepon</x-label>
        <input type="text" name="no_hp" placeholder="cth : 08xxxx" class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
    
        <!-- Address Field -->
        <x-label>Alamat</x-label>
        <textarea name="alamat" placeholder="Alamat Domisili" class="col-span-3 mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
    
        <!-- Province, City, District, Village Dropdowns -->
        <!-- <div class="grid grid-cols-4 gap-[10px] col-span-3 col-start-2">
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
        </div> -->

        <div class="col-span-4 place-self-end">
            <x-button 
            data-modal-target="tambah-pasien" 
            data-modal-toggle="tambah-pasien"
            type="button" 
            color="blue" 
            class="w-[137px]"
            id="submitButton"
            onclick="openModalAndSubmit(event, 'tambah-pasien')">Submit</x-button>
        </div>
    </div>
</form>

<x-pop-up id="tambah-pasien" header="Hewan Peliharaan Baru" class="hidden">
    @include('antrian.tambah_pasien_baru')
</x-pop-up>

<script>
document.getElementById('submitButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default action if necessary

    // Get form data using FormData API
    const formElement = document.getElementById('submitForm');
    const formData = new FormData(formElement);

    // Convert FormData to a plain object
    const formObject = {};
    formData.forEach((value, key) => {
        formObject[key] = value;
    });

    // Send data to an API using fetch
    fetch('https://example.com/api/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formObject)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Success:', data);
            alert('Form submitted successfully!');
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error submitting the form.');
         });
    });
</script>
<!-- <script>
    function openModalAndSubmit(event, modalId) {
        event.preventDefault();
        // Tampilkan pop-up
        document.getElementById(modalId).classList.remove('hidden');
        
        // Submit form setelah pop-up tampil
        setTimeout(function() {
            const form = document.getElementById('submitForm');
            form.submit();
        }, 1000); // Menambahkan sedikit jeda untuk memastikan pop-up tampil sebelum submit
    }
</script> -->