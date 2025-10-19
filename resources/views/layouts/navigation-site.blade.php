<nav id="header" class="fixed w-full z-30 top-0 text-white">


    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour uppercase text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                href="/">
                <!--Icon from: http://www.potlabicons.com/ -->


                <svg class="h-8 fill-current inline mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M406.6 374.6l-105.2-105.2c18.3-30.9 15.2-70.3-9.4-97.1c-11.3-12.4-26.2-20.7-42.6-23.8l76.5-76.5c6.2-6.2 6.2-16.4 0-22.6s-16.4-6.2-22.6 0L217 135.1c-3.1-16.4-11.4-31.3-23.8-42.6c-26.9-24.6-66.2-27.7-97.1-9.4L.9 188.3c-1.2 1.2-1.8 2.9-1.7 4.6s1 3.3 2.3 4.4l39.4 39.4c1.2 1.2 2.9 1.8 4.6 1.7s3.3-1 4.4-2.3l95.2-95.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6l-76.5 76.5c3.1 16.4 11.4 31.3 23.8 42.6c26.9 24.6 66.2 27.7 97.1 9.4l105.2 105.2c-18.3 30.9-15.2 70.3 9.4 97.1c11.3 12.4 26.2 20.7 42.6 23.8l-76.5 76.5c-6.2 6.2-6.2 16.4 0 22.6s16.4 6.2 22.6 0l86.3-86.3c3.1 16.4 11.4 31.3 23.8 42.6c26.9 24.6 66.2 27.7 97.1 9.4l95.2-95.2c1.2-1.2 1.8-2.9 1.7-4.6s-1-3.3-2.3-4.4l-39.4-39.4c-1.2-1.2-2.9-1.8-4.6-1.7s-3.3 1-4.4 2.3l-95.2 95.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l76.5-76.5c-3.1-16.4-11.4-31.3-23.8-42.6c-26.9-24.6-66.2-27.7-97.1-9.4zM208 304c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm96 96c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z" />
                </svg>




                Belleza & encanto
        </div>

        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
            id="nav-content">

            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold hover:underline" href="/">Inicio</a>
                    <a class="inline-block py-2 px-4 text-black font-bold hover:underline" href="/about">Nosotros</a>
                </li>

            </ul>


            @auth
                <a href="/dashboard" id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Mi cuenta
                </a>
            @else
                <a href="/login" id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Ingreso
                </a>
                <a href="/register" id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Regístrate
                </a>
            @endauth


        </div>

        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
