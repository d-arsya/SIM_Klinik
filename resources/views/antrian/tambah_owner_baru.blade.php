@extends('layout.app')

@section('title', 'Pemilik Hewan Peliharaan Baru')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Pemilik Hewan Peliharaan Baru</h2>

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

            <!-- Name Field -->
            <div>
                <label class="block text-gray-700">Nama</label>
                <input type="text" placeholder="Ketikkan nama owner pasien..." class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Gender Field -->
            <div>
                <label class="block text-gray-700">Gender</label>
                <input type="text" placeholder="cth : Perempuan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Phone Number Field -->
            <div>
                <label class="block text-gray-700">Nomor Telepon</label>
                <input type="text" placeholder="cth : 08xxxx" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Address Field -->
            <div>
                <label class="block text-gray-700">Alamat</label>
                <textarea placeholder="Alamat Domisili" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- City, Province, Postal Code Dropdowns -->
            <div class="flex space-x-2">
                <div class="w-1/3">
                    <label class="block text-gray-700">Provinsi</label>
                    <select class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Pilih Provinsi</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700">Kabupaten</label>
                    <select class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Pilih Kabupaten</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700">Kecamatan</label>
                    <select class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Pilih Kecamatan</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700">Desa</label>
                    <select class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Pilih Desa</option>
                    </select>
                </div>
            </div>

            <!-- Country Field -->
            <div>
                <label class="block text-gray-700">Negara</label>
                <input type="text" placeholder="Negara" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Additional Info Field -->
            <div>
                <label class="block text-gray-700">Info Tambahan</label>
                <textarea placeholder="Info Tambahan" class="mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
@endsection
