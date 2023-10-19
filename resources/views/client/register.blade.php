<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyTelkomedika | Landing Page</title>
    {{-- fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="font-poppins">
    <nav class="bg-white/80 w-full z-50 backdrop-blur-lg sm:px-5 fixed top-0 left-0 shadow-lg shadow-gray-100/50">
        <div class="max-w-screen-xl border h-[70px] flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#ED1C24]">MyTelkomedika</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-[#ED1C24] hover:text-white transition duration-150 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto mt-3 md:mt-0" id="navbar-default"></div>
        </div>
    </nav>

    <section class="bg-white flex items-center h-screen pt-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-center py-8 px-4 mx-auto max-w-screen-xl">
            <div class="w-[55%] flex justify-start">
                <img class="w-[95%]" src="/img/login-img.png" alt="hero" />
            </div>
            <div class=" w-[45%] flex justify-center items-center">
                <form class="w-72">
                    <h1 class="text-[#ED1C24] text-3xl font-semibold text-center mb-10">
                        Register
                    </h1>
                    <div class="mb-6">
                    </div>

                    <div class="mb-6">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900">Nim</label>
                        <input type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-[#ED1C24]/50"
                            required />
                    </div>

                    <div class="mb-6">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:outline-[#ED1C24]/50"
                            required />
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email"
                            class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 focus:border-[#ED1C24] focus:border-1"
                            required />
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <div
                            class="flex justify-between bg-white border border-gray-300 text-gray-900 text-sm rounded-lg w-full focus:outline-[#ED1C24]/50 pr-2.5">
                            <input type="password" class="p-2.5 rounded-lg focus:outline-[#ED1C24]/50 w-full"
                                required />
                            <img src="./img/icon-eye.svg" alt="">
                        </div>
                    </div>

                    <div class="flex items-start mb-6">
                        <p class="text-xs">
                            Already have an account?
                            <a href="/login" class="text-[#ED1C24]">Login here!</a>
                        </p>
                    </div>
                    <button type="submit"
                        class="text-white rounded-full bg-[#ED1C24] font-medium shadow-lg transition duration-200 hover:shadow-[#ED1C24]/50 shadow-[#ED1C24]/30 text-sm w-full sm:w-auto px-6 py-2.5 text-center">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
