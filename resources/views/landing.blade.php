@extends('layouts.app')

@section('content')

{{-- HERO --}}
<section 
    class="relative w-full min-h-[75vh] flex items-center justify-center bg-center bg-cover bg-no-repeat pt-[130px] pb-[60px] rounded-b-[40px] overflow-hidden"
    style="background-image: url('/bg.png');"
>
    <div class="absolute inset-0 bg-gradient-to-b from-black/55 via-black/45 to-black/35"></div>

    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl md:text-6xl font-extrabold text-white drop-shadow-xl leading-tight">
            Menyelami Kekayaan Budaya Surabaya
        </h1>

        <p class="mt-6 text-lg md:text-xl text-gray-200 max-w-3xl mx-auto drop-shadow-md">
            Tradisi, bahasa, kuliner, sejarah, dan pertunjukan khas Arek Suroboyo dalam pengalaman digital.
        </p>
    </div>
</section>


{{-- FITUR (Background amber lembut) --}}
<section class="bg-amber-100 py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        {{-- Video Budaya --}}
        <a href="/video-budaya"
           class="p-8 bg-white/80 border border-amber-300 shadow-md rounded-2xl hover:shadow-xl hover:-translate-y-1 transition">
            <i class="fa-solid fa-video text-4xl text-amber-800 mb-4"></i>
            <h3 class="text-2xl font-bold text-amber-900 mb-2">Video Budaya</h3>
            <p class="text-amber-800">Tarian, tradisi, kerajinan, sejarah Surabaya.</p>
        </a>

        {{-- Bahasa Daerah --}}
        <a href="/bahasa-daerah"
           class="p-8 bg-white/80 border border-amber-300 shadow-md rounded-2xl hover:shadow-xl hover:-translate-y-1 transition">
            <i class="fa-solid fa-language text-4xl text-amber-800 mb-4"></i>
            <h3 class="text-2xl font-bold text-amber-900 mb-2">Bahasa Daerah</h3>
            <p class="text-amber-800">Belajar kosakata dan dialek Suroboyoan.</p>
        </a>

        {{-- Literatur --}}
        <a href="/literatur-budaya"
           class="p-8 bg-white/80 border border-amber-300 shadow-md rounded-2xl hover:shadow-xl hover:-translate-y-1 transition">
            <i class="fa-solid fa-book text-4xl text-amber-800 mb-4"></i>
            <h3 class="text-2xl font-bold text-amber-900 mb-2">Literatur Budaya</h3>
            <p class="text-amber-800">Rumah adat, baju adat, alat musik, lagu daerah.</p>
        </a>

        {{-- Kuliner --}}
        <a href="/kuliner-tradisional"
           class="p-8 bg-white/80 border border-amber-300 shadow-md rounded-2xl hover:shadow-xl hover:-translate-y-1 transition">
            <i class="fa-solid fa-bowl-food text-4xl text-amber-800 mb-4"></i>
            <h3 class="text-2xl font-bold text-amber-900 mb-2">Kuliner Tradisional</h3>
            <p class="text-amber-800">Rawon, rujak cingur, lontong balap, dan lainnya.</p>
        </a>

        {{-- Pertunjukan --}}
        <a href="/pertunjukan-budaya"
           class="p-8 bg-white/80 border border-amber-300 shadow-md rounded-2xl hover:shadow-xl hover:-translate-y-1 transition">
            <i class="fa-solid fa-masks-theater text-4xl text-amber-800 mb-4"></i>
            <h3 class="text-2xl font-bold text-amber-900 mb-2">Pertunjukan Budaya</h3>
            <p class="text-amber-800">Ludruk, seni panggung, dan tontonan khas.</p>
        </a>

        {{-- Cagar Budaya --}}
        <a href="/cagar-budaya"
           class="p-8 bg-white/80 border border-amber-300 shadow-md rounded-2xl hover:shadow-xl hover:-translate-y-1 transition">
            <i class="fa-solid fa-monument text-4xl text-amber-800 mb-4"></i>
            <h3 class="text-2xl font-bold text-amber-900 mb-2">Cagar Budaya</h3>
            <p class="text-amber-800">Melihat lokasi dan situs bersejarah Surabaya.</p>
        </a>

    </div>
</section>

{{-- 
<section class="bg-amber-50 py-20">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-3xl font-extrabold text-amber-900 text-center mb-12 drop-shadow-sm">
            Meet Our Team
        </h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10">

            {{-- Azzam – Hacker --}}
            {{-- <div class="p-8 bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition text-center">
                <img src="/azzam.jpg"
                    alt="Muh. Azzam Izzadin"
                    class="w-32 h-32 object-cover rounded-full mx-auto mb-4 shadow">
                <h3 class="text-xl font-bold text-amber-900">Muh. Azzam Izzadin</h3>
                <p class="text-amber-700 font-semibold">Hacker</p>
            </div> --}}

            {{-- Bagus – Hustler --}}
            {{-- <div class="p-8 bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition text-center">
                <img src="/bagus.jpg"
                    alt="Mohammad Tri Bagus"
                    class="w-32 h-32 object-cover rounded-full mx-auto mb-4 shadow">
                <h3 class="text-xl font-bold text-amber-900">Mohammad Tri Bagus</h3>
                <p class="text-amber-700 font-semibold">Hustler</p>
            </div> --}}

            {{-- Nuafal – Hipster --}}
            {{-- <div class="p-8 bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition text-center">
                <img src="/nuafal.jpg"
                    alt="Nuafal Wahyu Pradana"
                    class="w-32 h-32 object-cover rounded-full mx-auto mb-4 shadow">
                <h3 class="text-xl font-bold text-amber-900">Nuafal Wahyu Pradana</h3>
                <p class="text-amber-700 font-semibold">Hipster</p>
            </div>

        </div>

    </div> --}}

{{-- </section> --}}

{{-- SUPPORTED BY (Background amber tebal & lebih rapat ke bawah) --}}
<section class="bg-amber-200 py-14 border-t border-amber-300">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-2xl font-extrabold text-amber-900 mb-10 drop-shadow-sm">
            SUPPORTED BY
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 items-center justify-center">

            <img src="/inovboyo.png"
                class="h-32 mx-auto hover:scale-110 hover:drop-shadow-xl transition-all duration-300"
                alt="Inovboyo">

            <img src="/pemkot-sby.png"
                class="h-36 mx-auto hover:scale-110 hover:drop-shadow-xl transition-all duration-300"
                alt="Pemkot Surabaya">

            <img src="/telkom.png"
                class="h-32 mx-auto hover:scale-110 hover:drop-shadow-xl transition-all duration-300"
                alt="Telkom University Surabaya">

        </div>

    </div>
</section>

@endsection
