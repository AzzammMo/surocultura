@extends('layouts.app')

@section('content')

<section class="py-20 bg-amber-50">

<div class="max-w-5xl mx-auto px-6">
    
<h1 class="text-4xl font-bold text-amber-900 dark:text-amber-200 mb-6 text-center flex items-center justify-center gap-3">
    <i class="fa-solid fa-masks-theater text-amber-700 dark:text-amber-300"></i>
    Pertunjukan Budaya Surabaya
</h1>

<p class="text-gray-700 text-lg mb-10 leading-relaxed text-center">
    Mengenal lebih dekat berbagai pertunjukan budaya khas Surabaya yang penuh nilai sejarah,
    ekspresi artistik, dan makna simbolis. Mulai dari tari heroik, teater rakyat, hingga ritual
    tradisi yang masih hidup di tengah masyarakat.
</p>

{{-- BUTTON KEMBALI --}}
<a href="/" 
   class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 
          transition flex items-center gap-1 w-fit mb-6">
    <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
</a>

{{-- BUTTON LIHAT JADWAL EVENT --}}
<a href="/jadwal-pertunjukan" 
   class="px-4 py-3 bg-amber-700 text-white font-semibold rounded-lg shadow hover:bg-amber-800 
          transition w-fit mb-10 flex items-center gap-2">
    <i class="fa-solid fa-calendar-days"></i>
    Lihat Jadwal Pertunjukan Budaya
</a>

<div class="grid grid-cols-1 md:grid-cols-2 gap-10">

    {{-- ================== 1. TARI REMO ================== --}}
    <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:scale-[1.02] transition duration-300">
        <img src="budaya/tariremo.png" 
             class="w-full h-64 object-cover" alt="Tari Remo">

        <div class="p-7">
            <h3 class="text-2xl font-bold text-amber-800 mb-3">Tari Remo Surabaya</h3>
            <p class="text-gray-700 leading-relaxed">
                Tari Remo adalah tari penyambutan khas Surabaya yang menampilkan gerakan gagah,
                hentakan kaki ritmis, dan kostum berwarna mencolok. Tarian ini berkembang pada masa kolonial
                dan menjadi simbol keberanian masyarakat Jawa Timur.
            </p>
        </div>
    </div>

    {{-- ================== 2. HADRAH JIDOR ================== --}}
    <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:scale-[1.02] transition duration-300">
        <img src="budaya/hadrahjidor.png" 
             class="w-full h-64 object-cover" alt="Hadrah Jidor">

        <div class="p-7">
            <h3 class="text-2xl font-bold text-amber-800 mb-3">Tari Hadrah Jidor</h3>
            <p class="text-gray-700 leading-relaxed">
                Pertunjukan tari dengan iringan shalawat dan tabuhan jidor besar. Perpaduan vokal, ritme,
                dan gerakan menjadikannya sebagai hiburan sekaligus sarana dakwah masyarakat pesisir Surabaya.
            </p>
        </div>
    </div>

    {{-- ================== 3. TOPENG MULUD ================== --}}
    <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:scale-[1.02] transition duration-300">
        <img src="budaya/topengmulud.png" 
             class="w-full h-64 object-cover" alt="Topeng Mulud">

        <div class="p-7">
            <h3 class="text-2xl font-bold text-amber-800 mb-3">Topeng Mulud</h3>
            <p class="text-gray-700 leading-relaxed">
                Pertunjukan topeng tradisional yang digelar pada Maulid Nabi. Cerita yang dibawakan
                sarat pesan moral dan religi dengan nuansa komedi dan simbol-simbol budaya pesisir Surabaya.
            </p>
        </div>
    </div>

    {{-- ================== 4. UNDUKAN DORO ================== --}}
    <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:scale-[1.02] transition duration-300">
        <img src="budaya/undukandoro.png" 
             class="w-full h-64 object-cover" alt="Undukan Doro">

        <div class="p-7">
            <h3 class="text-2xl font-bold text-amber-800 mb-3">Undukan Doro</h3>
            <p class="text-gray-700 leading-relaxed">
                Tradisi budaya yang menggunakan simbol burung dara sebagai ungkapan doa keselamatan.
                Tradisi ini dipadukan dengan musik, lantunan doa, dan gerak tari khas pesisir Surabaya.
            </p>
        </div>
    </div>

    {{-- ================== 5. GULAT OKOL ================== --}}
    <div class="bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl hover:scale-[1.02] transition duration-300 md:col-span-2">
        <img src="budaya/gulatokol.png" 
             class="w-full h-72 object-cover" alt="Gulat Okol">

        <div class="p-7">
            <h3 class="text-2xl font-bold text-amber-800 mb-3">Gulat Okol</h3>
            <p class="text-gray-700 leading-relaxed text-lg">
                Tradisi adu kekuatan dengan saling menarik selendang yang melingkar di pinggang.
                Meski terlihat keras, Gulat Okol menjunjung nilai sportivitas, persaudaraan, 
                dan kebersamaan masyarakat pesisir Surabaya.
            </p>
        </div>
    </div>

</div>

</div>

</section>

@endsection
