@extends('layout.app')

@section('title', 'Hewan Peliharaan Baru')

@section('content')
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Hewan Peliharaan Baru</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pasien.store') }}" method="POST" class="space-y-4">
            @csrf <!-- Tambahkan CSRF token -->

            <!-- Text Fields -->
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama_hewan" value="{{ old('nama_hewan') }}" placeholder="Ketikkan nama pasien..." class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Gender</label>
                <select name="gender" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="jantan" {{ old('gender') == 'jantan' ? 'selected' : '' }}>Jantan</option>
                    <option value="betina" {{ old('gender') == 'betina' ? 'selected' : '' }}>Betina</option>
                </select>
            </div>

            <div>
                <label class="block text-gray-700">Umur</label>
                <input type="text" name="umur" value="{{ old('umur') }}" placeholder="cth : 5 bulan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Jenis Hewan</label>
                <input type="text" name="jenis_hewan" value="{{ old('jenis_hewan') }}" placeholder="cth : Anjing" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Warna</label>
                <input type="text" name="warna" value="{{ old('warna') }}" placeholder="cth : Coklat" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Initial Examination Section -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold border-b pb-2">Pemeriksaan Awal</h3>
            </div>

            <div>
                <label class="block text-gray-700">Berat Badan (kg)</label>
                <input type="number" step="0.1" name="berat_badan" value="{{ old('berat_badan') }}" placeholder="cth : 5.0" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Pulsus (bpm)</label>
                <input type="number" name="pulsus" value="{{ old('pulsus') }}" placeholder="cth : 70" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Frekuensi napas (kali per menit)</label>
                <input type="number" name="frekuensi_napas" value="{{ old('frekuensi_napas') }}" placeholder="cth : 20" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700">Suhu (°C)</label>
                <input type="number" step="0.1" name="suhu" value="{{ old('suhu') }}" placeholder="cth : 37.5" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Service Section -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold border-b pb-2">Servis</h3>
            </div>

            <div>
                <label class="block text-gray-700">Jenis Servis</label>
                <input type="text" name="service" value="{{ old('service') }}" placeholder="cth : Konsultasi" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Vaccination Section -->
            <div class="mt-4">
                <h3 class="text-lg font-semibold border-b pb-2">Vaksinasi</h3>
            </div>

            <div class="flex items-center">
                <label class="flex items-center">
                    <input type="checkbox" name="sudah_vaksin" class="form-checkbox h-5 w-5 text-blue-600" {{ old('sudah_vaksin') ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700">Sudah Vaksin</span>
                </label>
            </div>

            <div>
                <label class="block text-gray-700">Jenis Vaksin</label>
                <input type="text" name="jenis_vaksin" value="{{ old('jenis_vaksin') }}" placeholder="cth : Rabies" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Submit Button -->
            <div class="text-right mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
@endsection
