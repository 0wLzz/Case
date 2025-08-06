<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soesweet</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>
</head>

<body class="flex flex-col min-h-screen">
    <header>
        <nav class="bg-white border-gray-500s shadow-md">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://www.clipartmax.com/png/middle/433-4335874_log-clipart-gambar-logo-pramuka-tunas-kelapa-png.png"
                        class="h-8" alt="Logo Here" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">Kelapa</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="{{ route('product.index') }}"
                                class="block py-2 px-3 font-semibold text-lg rounded-sm md:p-0"
                                aria-current="page">Product</a>
                        </li>
                        <li>
                            <a href="{{ route('testimony.index') }}"
                                class="block py-2 px-3 font-semibold text-lg rounded-sm md:p-0"
                                aria-current="page">Testimony</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        <div class="max-w-screen-xl flex flex-col mx-auto p-4 m-10">
            @if (session('msg'))
                <x-alert :message="session('msg')" />
            @endif
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-white">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center">© 2025 <a href=""
                        class="hover:underline">Kelapa™</a>.
                    All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>
</body>

</html>
