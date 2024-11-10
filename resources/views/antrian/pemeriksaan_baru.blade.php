@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="#" method="POST">
    @csrf <!-- Tambahkan CSRF token -->
    <div class="grid grid-cols-[auto,722px] gap-4">
        <div class="col-span-2">
            <h3 class="text-xs font-bold text-black border-b-[3px] pb-2">Pemeriksaan Awal</h3>
        </div>
        <!-- Text Fields -->
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
            <h3 class="text-xs font-bold text-black border-b-[3px] pb-2">Servis</h3>
        </div>

        <x-label>Jenis Servis</x-label>
        <input type="text" name="service" value="{{ old('service') }}" placeholder="cth : Konsultasi" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">

        <div>
            <x-button color="blue">Tambah Service</x-button>
        </div>

        <!-- Vaccination Section -->
        <div class="mt-4 col-span-2">
            <h3 class="text-xs font-bold text-black border-b-[3px] pb-2">Vaksinasi</h3>
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
