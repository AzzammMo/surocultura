<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SuroCultura</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body class="bg-amber-50 text-gray-800 font-sans">

    <nav class="fixed top-0 left-0 w-full z-50 bg-amber-100/90 backdrop-blur-lg shadow-md border-b border-amber-300">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <a href="/" class="flex items-center gap-3">
                <img src="/logo-surocultura.png" alt="SuroCultura Logo"
                     class="h-16 md:h-20 w-auto object-contain drop-shadow-md">
                <span class="text-3xl font-bold text-amber-800">SuroCultura</span>
            </a>

            <ul class="hidden md:flex gap-8 font-semibold text-amber-900">
                <li><a href="/video-budaya" class="hover:text-amber-700">Video Budaya</a></li>
                <li><a href="/bahasa-daerah" class="hover:text-amber-700">Bahasa Daerah</a></li>
                <li><a href="/literatur-budaya" class="hover:text-amber-700">Literatur</a></li>
                <li><a href="/kuliner-tradisional" class="hover:text-amber-700">Kuliner</a></li>
                <li><a href="/pertunjukan-budaya" class="hover:text-amber-700">Pertunjukan</a></li>
                <li><a href="/cagar-budaya" class="hover:text-amber-700">Cagar Budaya</a></li>
            </ul>
        </div>
    </nav>

    {{-- Hilangkan ruang kosong di bawah --}}
    <main class="pt-24 pb-0">
        @yield('content')
    </main>

    <footer class="bg-amber-900 text-amber-100 py-12 mt-0">
        <div class="max-w-7xl mx-auto px-6 text-center">

            <h3 class="text-2xl font-bold mb-3">Menjaga Warisan, Merawat Identitas</h3>

            <p class="text-amber-300 text-sm mt-6">
                © {{ date('Y') }} SuroCultura — TelU GANG
            </p>
        </div>
    </footer>

</body>
</html>
