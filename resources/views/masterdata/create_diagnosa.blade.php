@extends('layout.app')

@section('content')
    <div class="flex-row px-6 py-3 m-4 border-2 rounded-xl">
        <div class="flex"><b>Tambah Diagnosa</b></div>
    </div>

    <form action="{{ route('masterdata.diagnosa.store') }}" method="POST">
        @csrf
        <div class="flex flex-col px-6 py-3 m-4 border-2 rounded-xl">
            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="nama_hewan" class="text-sm font-medium leading-6 text-gray-700">Nama Jenis Hewan</label>
                <select id="nama_hewan" name="hewan_id"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
                    <option value="">Pilih Jenis Hewan</option>
                    @foreach ($hewan as $hewanlist)
                        <option value="{{ $hewanlist->id_jenis_hewan }}">{{ $hewanlist->jenis_hewan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="nama_diagnosa" class="text-sm font-medium leading-6 text-gray-700">Nama Diagnosa</label>
                <input type="text" id="hasil_diagnosa" name="hasil_diagnosa"
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
