<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="flex h-screen">
        @include('components.sidebar')
        
        <!-- Main Content -->
        <div class="flex-1 px-10 sm:ml-[280px]">
            @include('components.heading')
            <!-- Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.1/flowbite.min.js"></script>
</body>
</html>
