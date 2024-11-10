@extends('layout.app')

@section('title', 'detail hewan')
@section('content')
<div>
    <img src="img/img-detail-hewan.png" alt="detail-hewan">
</div>
<div class="mt-[30px] border-2 rounded-xl">
    <div class="flex justify-between px-[30px] border-b-2">
        <h2 class="text-lg py-3 font-medium">About</h2>
        <button class="bg-blue-500 text-white px-4 h-[30px] self-center rounded-md">Edit</button>
    </div>
    <div class="p-[30px] flex justify-between items-center">
        <div class="grid grid-cols-2 gap-2">
            <p class="text-sm text-txtgray">Nama:</p>
            <p class="text-sm text-txtblack">Sandi</p>
            <p class="text-sm text-txtgray">Umur:</p>
            <p class="text-sm text-txtblack">50</p>
            <p class="text-sm text-txtgray">Gender:</p>
            <p class="text-sm text-txtblack">Laki-laki</p>
            <p class="text-sm text-txtgray">Spesialis:</p>
            <p class="text-sm text-txtblack">Dokter Anjing</p>
            <p class="text-sm text-txtgray">Email:</p>
            <p class="text-sm text-txtblack">sandi@gmail.com</p>
            <p class="text-sm text-txtgray">Role:</p>
            <p class="text-sm text-txtblack">Dokter</p>
        </div>
    </div>
</div>
@endsection