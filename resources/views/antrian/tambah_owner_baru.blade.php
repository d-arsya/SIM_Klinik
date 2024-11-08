@extends('layout.app')

@section('title', 'Pemilik Hewan Peliharaan Baru')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Pemilik Hewan Peliharaan Baru</h2>

        <form action="{{ route('owner.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <!-- Name Field -->
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" name="nama_owner" placeholder="Ketikkan nama owner pasien..." class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Gender Field -->
            <div>
                <label class="block text-gray-700">Gender</label>
                <input type="text" name="gender" placeholder="cth : Perempuan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Phone Number Field -->
            <div>
                <label class="block text-gray-700">Nomor Telepon</label>
                <input type="text" name="no_hp" placeholder="cth : 08xxxx" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Address Field -->
            <div>
                <label class="block text-gray-700">Alamat</label>
                <textarea name="alamat" placeholder="Alamat Domisili" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            <!-- Province, City, District, Village Dropdowns -->
            <div class="flex flex-wrap space-x-2">
                <div class="w-1/2">
                    <label class="block text-gray-700">Provinsi</label>
                    <select name="provinsi_id" id="provinsi_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Provinsi</option>
                        @foreach ($provinsis as $provinsi)
                            <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700">Kabupaten</label>
                    <select name="kabupaten_id" id="kabupaten_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Kabupaten</option>
                        @foreach ($kabupatens as $kabupaten)
                            <option value="{{ $kabupaten->id }}">{{ $kabupaten->nama_kota }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700">Kecamatan</label>
                    <select name="kecamatan_id" id="kecamatan_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Kecamatan</option>
                        @foreach ($kecamatans as $kecamatan)
                            <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2">
                    <label class="block text-gray-700">Desa</label>
                    <select name="desa_id" id="desa_id" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="">Pilih Desa</option>
                        @foreach ($desas as $desa)
                            <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
@endsection
