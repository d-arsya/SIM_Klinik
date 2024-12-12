@extends('layout.app')
@section('title', 'dashboard')
@section('content')
<div class="grid grid-cols-[356.28px_1fr] gap-[30px]">

    <!-- Header -->
    <div class="col-span-2 flex justify-between">
        <div>
            <h2 class="text-xl font-medium">Dashboard</h2>
            <p class="text-[#4B5675]">Central Hub for Personal Customization</p>
        </div>
        <a href="{{ route('profile') }}" class="bg-white text-[#4B5675] h-8 px-4 text-xs border border-1 border-[#DBDFE9] hover:bg-[#DBDFE9] place-self-center content-center rounded-md">View Profile</a>
    </div>

    <!-- Summary -->
    <div>
        @include('dashboard.summary')
    </div>
    <div>
        @include('dashboard.selamatdatang')
    </div>
    <div>
        @include('dashboard.ringkasanklinik')
    </div>
    <div>
        @include('dashboard.grafiktingkat')
    </div>
    <div>
        @include('dashboard.grafiklingkaranobat')
    </div>
    <div>
        @include('dashboard.tabeltransaksi')
    </div>




</div>

@endsection
