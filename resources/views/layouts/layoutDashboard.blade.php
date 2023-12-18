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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    {{-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/rippleui@1.12.1/dist/css/styles.css"
 /> --}}
    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>      
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* .ui-datepicker-week-end {
            background-color: #000;
        } */

        .ui-datepicker {
            border-radius: 10px;
            box-shadow: 2px 7px 15px 8px rgba(208,208,208,0.1);
            -webkit-box-shadow: 2px 7px 15px 8px rgba(208,208,208,0.1);
            -moz-box-shadow: 2px 7px 15px 8px rgba(208,208,208,0.1);
            border: 1px solid rgba(0,0,0,0.1) !important;
        }

        .ui-datepicker-header {
            background-color: white;
            border: none;
            border-bottom: 1px solid rgba(0,0,0,0.2);
        }

        /* .ui-datepicker-calendar td {
            border-radius: 50%;
            aspect-ratio: 1/1;
        } */

        .ui-datepicker-calendar .ui-state-selectable a {
            background-color: #4caf50;
            color: #fff;
        }

        /* Gaya untuk tanggal yang tidak dapat dipilih */
        .ui-datepicker-calendar .ui-state-disabled a {
            background-color: #e57373;
            color: #fff;
        }

        .dropdown-open {
            opacity: 1 !important;
            pointer-events: auto !important;
            top: 3.5rem !important;
            /* transform: scale(1) !important; */
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <main class="flex bg-[#F3FBFF] min-h-screen">
        {{-- sidebar --}}
        @include('partials.sidebar')
        
        {{-- main content --}}
        <section class="flex-1 px-8 py-6">
            @yield('content')
        </section>
    </main>

    <script src="./script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>
