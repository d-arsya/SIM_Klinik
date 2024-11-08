<button type="{{ $type }}" {{ $attributes->merge(['class' => 'flex items-center justify-center p-[13px] text-xs rounded-lg group ' . $buttonClasses() . ' ' . $class]) }}>
{{ $slot }}
</button>