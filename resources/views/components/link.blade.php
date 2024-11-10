<a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center transition-all duration-200 ease-in-out transform px-2 py-2 mb-2 justify-center text-xs rounded-lg group ' . $buttonClasses() . ' ' . $class]) }}>
    {{ $slot }}
</a>