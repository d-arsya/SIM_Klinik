@extends('layout.app')

@section('title', 'Hewan Peliharaan Baru')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Hewan Peliharaan Baru</h2>

        <form action="#" method="POST" class="space-y-4">
            <!-- Photo Upload Placeholder -->
            {{-- <div>
                <label class="block text-gray-700">Photo</label>
                <div class="mt-2 flex items-center">
                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 24H0V0h24v24z" fill="none"/><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-10c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6 2.69-6 6-6zm0 13.5c-4.67 0-8.5 2.14-8.5 4.5V22h17v-1.5c0-2.36-3.83-4.5-8.5-4.5z"/>
                        </svg>
                    </span>
                    <input type="file" class="ml-4" accept=".jpeg,.jpg,.png">
                </div>
            </div> --}}

            <!-- Text Fields -->
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" placeholder="Ketikkan nama pasien..." class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Gender</label>
                <input type="text" placeholder="cth : Perempuan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Umur</label>
                <input type="text" placeholder="cth : 5 bulan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Jenis Hewan</label>
                <input type="text" placeholder="cth : Anjing" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Ras Hewan</label>
                <input type="text" placeholder="cth : Pomeranian" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Warna</label>
                <input type="text" placeholder="cth : Coklat" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Initial Examination Section -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold border-b pb-2">Pemeriksaan Awal</h3>
            </div>

            <div>
                <label class="block text-gray-700">Berat Badan (kg)</label>
                <input type="text" placeholder="cth : 5" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Pulsus (bpm)</label>
                <input type="text" placeholder="cth : 70" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Frekuensi napas (kali per menit)</label>
                <input type="text" placeholder="cth : 20" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Suhu (derajat celcius)</label>
                <input type="text" placeholder="cth : 40" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Service Section -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold border-b pb-2">Servis</h3>
            </div>

            <div>
                <label class="block text-gray-700">Jenis Servis</label>
                <input type="text" placeholder="cth : Konsultasi" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Tambah Servis</button>

            <!-- Vaccination Section -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold border-b pb-2">Vaksinasi</h3>
            </div>

            <div class="flex items-center">
                <span class="mr-4">Sudah Vaksin atau Belum?</span>
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" checked>
                    <span class="ml-2 text-gray-700">Sudah Vaksin</span>
                </label>
            </div>

            <div>
                <label class="block text-gray-700">Jenis Vaksin</label>
                <input type="text" placeholder="cth : Rabies" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Submit Button -->
            <div class="text-right mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
@endsection
