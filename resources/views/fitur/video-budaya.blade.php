@extends('layouts.app')

@section('content')

<section class="py-20 bg-amber-50">

    <div class="max-w-5xl mx-auto px-6">
        
<h1 class="text-4xl font-bold text-amber-900 dark:text-amber-200 mb-6 text-center flex items-center justify-center gap-3">
    <i class="fa-solid fa-circle-play text-amber-700 dark:text-amber-300"></i>
    Video Pembelajaran Budaya
</h1>

        <p class="text-gray-700 text-lg mb-10 text-center max-w-2xl mx-auto">
            Kumpulan video yang menampilkan keindahan budaya Nusantara seperti tarian tradisional,
            sejarah daerah, ritual khas, dan kerajinan lokal.
        </p>

        {{-- BUTTON KEMBALI --}}
        <a href="/" 
           class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 
                  transition flex items-center gap-1 w-fit mb-6">
            <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Video 1 --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <iframe class="w-full h-52"
                    src="https://www.youtube.com/embed/w-e4U4gYWy4"
                    allowfullscreen></iframe>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-amber-800">
                        Sejarah Kabupaten Surabaya - Keraton, Raja Kecil, hingga Bupati Kembar
                    </h3>
                    <p class="text-gray-600 mt-2">Video sejarah Surabaya.</p>
                </div>
            </div>

            {{-- Video 2 --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <iframe class="w-full h-52"
                    src="https://www.youtube.com/embed/S2QoWgsywbY"
                    allowfullscreen></iframe>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-amber-800">
                        Mengenal 5 Tradisi di Surabaya Yang Patut Dilestarikan
                    </h3>
                    <p class="text-gray-600 mt-2">Pembahasan tradisi khas Surabaya.</p>
                </div>
            </div>

            {{-- Video 3 --}}
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <iframe class="w-full h-52"
                    src="https://www.youtube.com/embed/qotqn0pNNko"
                    allowfullscreen></iframe>
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-amber-800">
                        SOERABAIA 45 (1989) – Perlawanan Rakyat Surabaya
                    </h3>
                    <p class="text-gray-600 mt-2">Kisah perjuangan rakyat Surabaya.</p>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
