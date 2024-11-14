<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="flex min-h-screen">
        <div class="w-1/2 flex justify-center items-center">
            <div class="w-[462px] py-10 px-10 rounded-lg border">
                <div class="block font-bold text-center text-lg">@yield('title_name')</div>   
                    <div class="desc-login text-center">@yield('desc')</div>     
                    @yield('form')
            </div>
        </div>
        <div class="w-1/2 h-screen my-5 me-5">
            <div class="flex bg-slate-100 rounded-xl">
                <div class="grid grid-cols-3 gap-7 h-screen">
                    <div class="col-span-2 ps-[60px] pt-[60px] pb-[40px]">
                        <img src="img/logo-biru.png" alt="logo">
                        <div class="font-semibold text-2xl my-5">Dokter Hewan Hendrik</div>
                        <div class="text-txtgray text-base">
                        Perumahan Pakuwon asri, jl.sadewa No.3, Karangtengah Lor, Karangtengah, Kec. Kaliwungu, Kabupaten Kendal, Jawa Tengah 51372
                        </div>
                    </div>
                    <div></div>
                    <div class="w-full h-full overflow-hidden">
                        <img src="img/images-signin.png" class="w-full h-full object-cover" alt="login-img">
                    </div>
                    <div class="w-full h-full overflow-hidden">
                        <img src="img/images-signin.png" class="w-full h-full object-cover" alt="login-img">
                    </div class="w-full h-full overflow-hidden">
                    <div>
                        <img src="img/images-signin.png" class="w-full h-full object-cover" alt="login-img">
                    </div>
                    <div class="w-full h-full overflow-hidden rounded-es-xl">
                        <img src="img/images-signin.png" class="w-full h-full object-cover" alt="login-img">
                    </div>
                    <div class="col-span-2 w-full h-full overflow-hidden rounded-ee-xl">
                        <img src="img/images-signin.png" class="w-full h-full object-cover" alt="login-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('node_modules/flowbite/dist/flowbite.js') }}"></script>
</body>
</html>
