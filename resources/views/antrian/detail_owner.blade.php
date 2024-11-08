@extends('layout.app')

@section('title', 'Detail Owner')

@section('content')
.
<div class="mt-[30px] border-2 rounded-xl">
    <div class="flex justify-between px-[30px] border-b-2">
        <h2 class="text-lg py-3 font-medium">About</h2>
        <button class="bg-blue-500 text-white px-4 h-[30px] self-center rounded-md">Edit</button>
    </div>
    <div class="p-[30px] flex justify-between items-center">
        <div>
            <div class="flex gap-10">
                <p class="text-sm text-txtgray">Nama:</p>
                <p class="text-sm text-txtblack">Sandi</p>
            </div>
            <div class="flex gap-10 my-3">
                <p class="text-sm text-txtgray">Gender:</p>
                <p class="text-sm text-txtblack">Laki-laki</p>
            </div>
            <div class="flex gap-10 my-3">
                <p class="text-sm text-txtgray">Nomor Telepon:</p>
                <p class="text-sm text-txtblack">081212292928</p>
            </div>
            <div class="flex gap-10 my-3">
                <p class="text-sm text-txtgray">Alamat:</p>
                <p class="text-sm text-txtblack">Kaliurang St No.Km 15.5, Kledokan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55582</p>
            </div>
        </div>
    </div>
</div>
@endsection