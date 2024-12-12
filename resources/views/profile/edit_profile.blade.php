@extends('layout.app')
@section('title', ' Edit Profile')
@section('content')
<div class="text-left">
    <h1 class="text-lg font-medium">Profil Saya</h1>
    <div class="text-[#4B5675] text-[15px]">Resepsionis</div>
</div>
<div class="mt-[30px] border-2 rounded-xl">
    <div class="px-[30px] border-b-2">
        <h2 class="text-lg py-3 font-medium">About</h2>
    </div>
    <form id="submitForm" class="p-[30px]" action="{{ route('owner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid items-center w-full grid-cols-7 gap-4 mb-4">
            <!-- Name Field -->
            <x-label for="nama">Nama</x-label>
            <input type="text" name="nama" placeholder="Sandi" class="col-span-6 mt-2 block w-full px-4 py-2 border rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
            
            <x-label for="umur">Umur</x-label>
            <input type="text" name="umur" placeholder="50" class="col-span-6 mt-2 block w-full px-4 py-2 border rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
    
            <!-- Gender Field -->
            <x-label for="gender">Gender</x-label>
            <select id="gender" name="gender"
                class="col-span-6 py-2 pl-3 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                required>
                <option value="laki-laki">Laki-laki</option>
                <option value="superadmin">Perempuan</option>
            </select>

            <!-- Phone Number Field -->
            <x-label for="email">Email</x-label>
            <div class="text-sm text-txtblack col-span-6">sandi@gmail.com</div>
        
            <!-- Address Field -->
            <x-label for="role">Role</x-label>
            <div class="text-sm text-txtblack col-span-6">Resepsionis</div>
    
            <div class="col-span-7 mt-2 flex space-x-2 place-self-end">
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
</div>
@endsection