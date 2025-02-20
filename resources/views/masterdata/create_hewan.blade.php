@extends('layout.app')

@section('content')
    <div class="flex-row px-6 py-3 m-4 border-2 rounded-xl">
        <div class="flex"><b>Tambah Jenis Hewan</b></div>
    </div>

    <form action="{{ route('masterdata.hewan.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 gap-4 px-6 py-3 m-4 border-2 rounded-xl">

            <div class="grid items-center grid-cols-4 gap-4">
                <label for="" class="text-sm font-medium leading-6 text-gray-700">Jenis Hewan</label>
                <input type="text" id="" name="jenis_hewan"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="grid items-center grid-cols-4 gap-4">
                <label for="pulsus" class="text-sm font-medium leading-6 text-gray-700">Pulsus</label>
                <input type="number" id="pulsus" name="pulsus"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="grid items-center grid-cols-4 gap-4">
                <label for="suhu" class="text-sm font-medium leading-6 text-gray-700">Suhu</label>
                <input type="number" id="suhu" name="suhu"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="grid items-center grid-cols-4 gap-4">
                <label for="frekuensi" class="text-sm font-medium leading-6 text-gray-700">Frekuensi Napas</label>
                <input type="number" id="frekuensi" name="frekuensi_napas"
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


