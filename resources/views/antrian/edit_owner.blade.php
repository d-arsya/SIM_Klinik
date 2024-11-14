@extends('layout.app')
@section('title', ' Edit Owner')
@section('content')
<div class="flex justify-between mb-7">
    <div class="flex items-center space-x-5">
        <img class="w-[100px] h-[100px]" src="img/detail-owner-img.png" alt="detail-owner">
        <div class="space-y-1">
            <div class="font-semibold text-lg">Andi</div>
        </div>
    </div>
</div>
<h2 class="text-lg py-3 font-medium">About</h2>
<form id="submitForm" action="{{ route('owner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="gap-[10px]">
        <!-- Name Field -->
         <div class="flex items-center mb-5 space-x-8">
             <x-label for="nama_owner">Nama</x-label>
             <input type="text" name="nama_owner" placeholder="Ketikkan nama owner pasien..." class=" mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
         </div>

        <!-- Gender Field -->
         <div class="flex items-center mb-5 space-x-8">
             <x-label for="gender">Gender</x-label>
             <input type="text" name="gender" placeholder="cth : Perempuan" class=" mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
         </div>

        <!-- Phone Number Field -->
         <div class="flex items-center mb-5 space-x-8">
             <x-label for="no_hp">Nomor Telepon</x-label>
             <input type="text" name="no_hp" placeholder="cth : 08xxxx" class=" mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
         </div>
    
        <!-- Address Field -->
         <div class="flex items-center mb-5 space-x-8">
             <x-label for="alamat">Alamat</x-label>
             <textarea name="alamat" placeholder="Alamat Domisili" class=" mt-2 block w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
         </div>

        <div class="flex space-x-3 place-self-end">
            <x-button 
                type="button" 
                color="red" 
                class="w-[137px]">
                Batal</x-button>
            <x-button 
                type="button" 
                color="blue" 
                class="w-[137px]">
                Submit</x-button>
        </div>
    </div>
</form>
@endsection