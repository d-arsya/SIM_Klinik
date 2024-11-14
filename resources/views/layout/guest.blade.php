<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="">
    <div class="flex justify-between min-h-screen">
        <div class="w-1/2 flex justify-center items-center ">
            <div class="w-[462px] py-10 px-10 rounded-lg border">
                <div class="block font-bold text-center text-lg">@yield('title_name')</div>   
                    <div class="desc-login text-center">@yield('desc')</div>     
                    @yield('form')
            </div>
        </div>
        <div class="w-1/2 h-full">
            <div class="flex bg-klinikBlue my-5 me-5 rounded-lg">hallo</div>
        </div>
    </div>
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.js') }}"></script>
</body>
</html>
