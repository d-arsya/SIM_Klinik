@extends('layout.app')

@section('content')
    <div class="flex-row px-6 py-3 m-4 border-2 rounded-xl">
        <div class="flex"><b>Tambah warna</b></div>
    </div>
    <div class="flex flex-col px-6 py-3 m-4 border-2 rounded-xl">

    <form action="{{ route('masterdata.warna.store') }}" method="POST">
        @csrf

            <div class="grid items-center w-full grid-cols-4 gap-4 mb-4">
                <label for="warna" class="text-sm font-medium leading-6 text-gray-700">Warna</label>
                <input type="text" id="warna" name="warna"
                    class="col-span-3 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>

            <div class="flex justify-end mt-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none">Submit</button>
            </div>
        </div>
    </form>
@endsection
