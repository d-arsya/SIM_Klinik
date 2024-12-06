@extends('layout.app')

@section('content')
    <div class="flex-row px-6 py-3 m-4 border-2 rounded-xl">
        <div class="flex"><b>Tambah Jenis Pelayanan</b></div>
    </div>
    <div class="flex flex-col px-6 py-3 m-4 border-2 rounded-xl">

    <form action="{{ route('masterdata.pelayanan.store') }}" method="POST">
        @csrf

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="jenis_pelayanan" class="text-sm font-medium leading-6 text-gray-700">Jenis Pelayanan</label>
                <input type="text" id="jenis_pelayanan" name="jenis_pelayanan"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="harga" class="text-sm font-medium leading-6 text-gray-700">Harga</label>
                <input type="number" id="harga" name="harga"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="flex justify-end mt-4">
            <x-button color="blue" type="submit"
                class="font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Submit</x-button>
            </div>
        </div>
    </form>
@endsection
