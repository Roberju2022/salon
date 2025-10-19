@props(['title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


        <title>{{ $title ? " {$title}" : 'Belleza & Estilo' }}</title>

    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    @include('layouts.navigation-site')

    {{ $slot }}

    <footer class="bg-white py-6">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row justify-center items-center md:items-start py-6">
                <div class="flex-1 mb-6 text-black text-center md:text-left">
                    <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl flex items-center justify-center md:justify-start"
                        href="#">
                        <svg class="h-8 fill-current inline mr-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M406.6 374.6l-105.2-105.2c18.3-30.9 15.2-70.3-9.4-97.1c-11.3-12.4-26.2-20.7-42.6-23.8l76.5-76.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L217 135.1c-3.1-16.4-11.4-31.3-23.8-42.6c-26.9-24.6-66.2-27.7-97.1-9.4L.9 188.3c-1.2 1.2-1.8 2.9-1.7 4.6s1 3.3 2.3 4.4l39.4 39.4c1.2 1.2 2.9 1.8 4.6 1.7s3.3-1 4.4-2.3l95.2-95.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6l-76.5 76.5c3.1 16.4 11.4 31.3 23.8 42.6c26.9 24.6 66.2 27.7 97.1 9.4l105.2 105.2c-18.3 30.9-15.2 70.3 9.4 97.1c11.3 12.4 26.2 20.7 42.6 23.8l-76.5 76.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l86.3-86.3c3.1 16.4 11.4 31.3 23.8 42.6c26.9 24.6 66.2 27.7 97.1 9.4l95.2-95.2c1.2-1.2 1.8-2.9 1.7-4.6s-1-3.3-2.3-4.4l-39.4-39.4c-1.2-1.2-2.9-1.8-4.6-1.7s-3.3 1-4.4 2.3l-95.2 95.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l76.5-76.5c-3.1-16.4-11.4-31.3-23.8-42.6c-26.9-24.6-66.2-27.7-97.1-9.4zM208 304c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm96 96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>
                        Belleza & Estilo
                    </a>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <p class="uppercase text-gray-500 md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500 block">Facebook</a>
                        </li>
                        <li class="mt-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500 block">Twitter</a>
                        </li>
                        <li class="mt-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500 block">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <a class="text-gray-500 text-sm no-underline hover:underline">Todos los derechos reservados © Salon &
                    Estilo 2025</a>
            </div>
        </div>
    </footer>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");
        var navcontent = document.getElementById("nav-content");
        var navaction = document.getElementById("navAction");
        var brandname = document.getElementById("brandname");
        var toToggle = document.querySelectorAll(".toggleColour");

        document.addEventListener("scroll", function() {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
                header.classList.add("bg-white");
                navaction.classList.remove("bg-white");
                navaction.classList.add("gradient");
                navaction.classList.remove("text-gray-800");
                navaction.classList.add("text-white");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-gray-800");
                    toToggle[i].classList.remove("text-white");
                }
                header.classList.add("shadow");
                navcontent.classList.remove("bg-gray-100");
                navcontent.classList.add("bg-white");
            } else {
                header.classList.remove("bg-white");
                navaction.classList.remove("gradient");
                navaction.classList.add("bg-white");
                navaction.classList.remove("text-white");
                navaction.classList.add("text-gray-800");
                //Use to switch toggleColour colours
                for (var i = 0; i < toToggle.length; i++) {
                    toToggle[i].classList.add("text-white");
                    toToggle[i].classList.remove("text-gray-800");
                }

                header.classList.remove("shadow");
                navcontent.classList.remove("bg-white");
                navcontent.classList.add("bg-gray-100");
            }
        });
    </script>
    <script>
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else {
                        navMenuDiv.classList.add("hidden");
                    }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }
        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) {
                    return true;
                }
                t = t.parentNode;
            }
            return false;
        }
    </script>
</body>

</html>
