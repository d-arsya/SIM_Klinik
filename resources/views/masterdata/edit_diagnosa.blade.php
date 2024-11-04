@extends('layout.app')
@section('content')
    <div class="flex-row px-6 py-3 m-4 border-2 rounded-xl">
        <div class="flex"><b>Edit Diagnosa</b></div>
    </div>

    <div class="flex flex-col px-6 py-3 m-4 border-2 rounded-xl">
        <form action="{{ route('masterdata.diagnosa.update', $diagnosa->id_diagnosa) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="nama_hewan" class="text-sm font-medium leading-6 text-gray-700">Nama Jenis Hewan</label>
                <select id="nama_hewan" name="hewan_id"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>

                    <option value="{{ $diagnosa->hewan_id }}" >
                        {{ $diagnosa->hewan ? $diagnosa->hewan->jenis_hewan : '' }}</option>
                    @foreach ($hewan as $hewanlist)
                        <option value="{{ $hewanlist->id_jenis_hewan }}">{{ $hewanlist->jenis_hewan }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="" class="text-sm font-medium leading-6 text-gray-700">Nama Diagnosa</label>
                <input type="text" id="hasil_diagnosa" name="hasil_diagnosa" value="{{ $diagnosa->hasil_diagnosa }}"
                    class="w-full col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="flex justify-end mt-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Update</button>
            </div>

        </form>
    </div>
@endsection
