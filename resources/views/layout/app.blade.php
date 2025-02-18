<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="flex h-screen">
        <div>
            <x-sidebar></x-sidebar>
        </div>
        
        <!-- Main Content -->
        <div class="w-10/12 ml-auto px-10">
            <x-heading></x-heading>
            <!-- Content -->
            <main class="pb-[60px]">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.5.1/flowbite.min.js"></script>
    @yield('scripts')
</body>
</html>
