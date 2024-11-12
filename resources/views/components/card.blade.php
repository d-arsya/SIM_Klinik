<div class="mb-7 border-2 rounded-xl px-[30px]">
    <div class="flex justify-between border-b-2">
        <h2 class="text-lg py-3 font-medium">{{ $header }}</h2>
        <x-button color="blue" class="self-center px-4 h-[30px]">{{ $button }}</x-button>
    </div>
    {{ $slot }}
</div>