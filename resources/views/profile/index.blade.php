@extends('layout.app')
@section('title', 'profile')
@section('content')

<div class="text-left">
    <h1 class="text-lg font-medium">Profil Saya</h1>
    <p class="text-[#4B5675] text-[15px]">Resepsionis</p>
</div>
<div class="mt-[30px] border-2 rounded-xl">
    <div class="flex justify-between px-[30px] border-b-2">
        <h2 class="text-lg py-3 font-medium">About</h2>
        <x-link href="{{ route('edit_profile') }}" color="blue" class=" text-white px-4 h-[30px] self-center rounded-md">Edit</x-link>
    </div>
    <div class="p-[30px] flex justify-between items-center">
        <div class="grid grid-cols-2 gap-2">
            <div class="text-sm text-txtgray">Nama:</div>
            <div class="text-sm text-txtblack">Sandi</div>
            <div class="text-sm text-txtgray">Umur:</div>
            <div class="text-sm text-txtblack">50</div>
            <div class="text-sm text-txtgray">Gender:</div>
            <div class="text-sm text-txtblack">Laki-laki</div>
            <div class="text-sm text-txtgray">Email:</div>
            <div class="text-sm text-txtblack">sandi@gmail.com</div>
            <div class="text-sm text-txtgray">Role:</div>
            <div class="text-sm text-txtblack">Resepsionis</div>
        </div>
    </div>
</div>
@endsection