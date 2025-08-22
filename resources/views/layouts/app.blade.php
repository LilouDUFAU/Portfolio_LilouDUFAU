<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="/src/style.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lilou DUFAU</title>
</head>
<body class="font-[Poppins] h-screen overflow-hidden">
    <main class="grid grid-cols-12 h-full bg-gradient-to-b from-slate-950 to-slate-800 text-white">
        {{-- section principale --}}
         <section class="col-span-12 flex flex-col">

            {{-- header --}}
            <header class="p-4">
                @include('layouts.partials.header')
            </header>

            {{-- contenu principal --}}
            <div class="flex-1 pb-8 mx-4 my-2">
                @yield('content')
            </div>

            {{-- footer --}}
            <footer class="p-4">
                @include('layouts.partials.footer')
            </footer>

        </section>
    </main>
</body>
</html>
