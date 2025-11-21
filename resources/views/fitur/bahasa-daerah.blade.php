@extends('layouts.app')

@section('content')

<section class="py-16 bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-100">

    <div class="max-w-6xl mx-auto px-6">
        
        {{-- ===================== JUDUL DAN DESKRIPSI ===================== --}}
        <h1 class="text-4xl font-bold text-amber-900 mb-4 text-center">
            <i class="fa-solid fa-language mr-2"></i>
            Belajar Bahasa Suroboyoan
        </h1>

        <p class="text-gray-700 text-lg mb-10 max-w-3xl leading-relaxed mx-auto text-center">
            Pelajari kosakata khas 
            <span class="text-amber-800 font-semibold">Bahasa Jawa</span> dan 
            <span class="text-rose-700 font-semibold">Bahasa Suroboyoan</span>.  
        
        </p>

        {{-- BUTTON KAMUS --}}
        <div class="text-center mb-10">
            <button onclick="toggleKamus()" 
                class="px-6 py-3 bg-emerald-600 text-white font-semibold rounded-lg shadow-lg hover:bg-emerald-700 transition">
                <i class="fa-solid fa-book mr-2"></i> Lihat Kamus Bahasa Jawa – Suroboyoan
            </button>
        </div>

        <a href="/" 
           class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 
                  transition flex items-center gap-1 w-fit mb-6">
            <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
        </a>

        {{-- GRID --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- ================= Bahasa Suroboyoan ================= --}}
            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-orange-500">
                <h3 class="text-2xl font-bold text-orange-700">
                    <i class="fa-solid fa-user-group mr-2"></i>Cak / Cuk
                </h3>
                <p class="text-gray-600 mt-2">Sapaan akrab khas Suroboyo.</p>
                <p class="text-gray-500 text-sm mt-2 italic">Contoh: “Halo cak, piye kabarmu?”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-orange-500">
                <h3 class="text-2xl font-bold text-orange-700">
                    <i class="fa-solid fa-hand-peace mr-2"></i>Rek
                </h3>
                <p class="text-gray-600 mt-2">Sapaan untuk teman dekat.</p>
                <p class="text-gray-500 text-sm mt-2 italic">Contoh: “Rek, ayo dolan!”</p>
            </div>

            {{-- <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-orange-500">
                <h3 class="text-2xl font-bold text-orange-700">
                    <i class="fa-solid fa-burst mr-2"></i>Jancuk
                </h3>
                <p class="text-gray-600 mt-2">Ekspresi emosi, kaget atau akrab.</p>
                <p class="text-gray-500 text-sm mt-2 italic">Contoh: “Jancuk, kaget aku!”</p>
            </div> --}}

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-orange-500">
                <h3 class="text-2xl font-bold text-orange-700">
                    <i class="fa-solid fa-forward-fast mr-2"></i>Ndang
                </h3>
                <p class="text-gray-600 mt-2">Artinya “cepat”.</p>
                <p class="text-gray-500 text-sm mt-2 italic">Contoh: “Ndang teko rek!”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-orange-500">
                <h3 class="text-2xl font-bold text-orange-700">
                    <i class="fa-solid fa-clock-rotate-left mr-2"></i>Mbiyen
                </h3>
                <p class="text-gray-600 mt-2">Berarti “dulu”.</p>
                <p class="text-gray-500 text-sm mt-2 italic">Contoh: “Mbiyen aku sekolah kene.”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-orange-500">
                <h3 class="text-2xl font-bold text-orange-700">
                    <i class="fa-solid fa-shoe-prints mr-2"></i>Sikil
                </h3>
                <p class="text-gray-600 mt-2">Artinya “kaki”.</p>
                <p class="text-gray-500 text-sm mt-2 italic">Contoh: “Sikile loro rek.”</p>
            </div>

            {{-- ================= Bahasa Jawa Halus ================= --}}
            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-emerald-600">
                <h3 class="text-2xl font-bold text-emerald-700"><i class="fa-solid fa-face-smile mr-2"></i>Matur Nuwun</h3>
                <p class="text-gray-600 mt-2">Terima kasih (halus).</p>
                <p class="text-gray-500 text-sm mt-2 italic">“Matur nuwun sanget.”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-emerald-600">
                <h3 class="text-2xl font-bold text-emerald-700"><i class="fa-solid fa-hands-praying mr-2"></i>Monggo</h3>
                <p class="text-gray-600 mt-2">Silakan, dipersilakan.</p>
                <p class="text-gray-500 text-sm mt-2 italic">“Monggo pinarak rumiyin.”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-emerald-600">
                <h3 class="text-2xl font-bold text-emerald-700"><i class="fa-solid fa-heart mr-2"></i>Suwun / Nyuwun</h3>
                <p class="text-gray-600 mt-2">Meminta dengan halus.</p>
                <p class="text-gray-500 text-sm mt-2 italic">“Nyuwun tulung sekedhap.”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-emerald-600">
                <h3 class="text-2xl font-bold text-emerald-700"><i class="fa-solid fa-home mr-2"></i>Pinarak</h3>
                <p class="text-gray-600 mt-2">Ajak masuk rumah.</p>
                <p class="text-gray-500 text-sm mt-2 italic">“Monggo pinarak dhahar bareng.”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-emerald-600">
                <h3 class="text-2xl font-bold text-emerald-700"><i class="fa-solid fa-person-walking mr-2"></i>Tindak</h3>
                <p class="text-gray-600 mt-2">Pergi (krama).</p>
                <p class="text-gray-500 text-sm mt-2 italic">“Kula tindak rumiyin.”</p>
            </div>

            <div class="bg-white rounded-xl shadow-xl p-6 border-l-8 border-emerald-600">
                <h3 class="text-2xl font-bold text-emerald-700"><i class="fa-solid fa-book-open-reader mr-2"></i>Sinau</h3>
                <p class="text-gray-600 mt-2">Belajar.</p>
                <p class="text-gray-500 text-sm mt-2 italic">“Aku arep sinau sore iki.”</p>
            </div>

        </div>

{{-- ===================== KAMUS BAHASA JAWA SUROBOYOAN ===================== --}}
<div id="kamusSection" class="{{ request()->has('page') ? '' : 'hidden' }} mt-16">

    <h2 class="text-3xl font-bold text-emerald-800 dark:text-emerald-300 mb-6">
        <i class="fa-solid fa-book-open mr-2"></i>
        Kamus Bahasa Jawa – Suroboyoan
    </h2>

    <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-xl rounded-xl transition-colors duration-300">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-emerald-700 dark:bg-emerald-900 text-white">
                    <th class="p-3 border">Ngoko</th>
                    <th class="p-3 border">Krama</th>
                    <th class="p-3 border">Suroboyoan</th>
                    <th class="p-3 border">Arti</th>
                    <th class="p-3 border">Contoh Kalimat</th>
                </tr>
            </thead>

            <tbody class="text-gray-700 dark:text-gray-200">

                @php
                $kamus = [

                    // ===================== DASAR ======================
                    ['arep','badhe','arep rek','mau / ingin','Aku arep lungo rek.'],
                    ['mangan','dhahar','mangan rek','makan','Aku mangan dhisik rek.'],
                    ['turu','tilem','turu rek','tidur','Aku turu dhisik rek.'],
                    ['ngombe','unjuk','ngombe','minum','Ngombe es sek rek.'],
                    ['lungo','tindak','mlayu / lungo','pergi','Aku lungo sek yo rek.'],
                    ['kowe','panjenengan','awakmu rek','kamu','Kowe piye kabarmu rek?'],

                    // ====================== AKTIVITAS ======================
                    ['mlaku','kesah','mlaku','jalan','Ayo mlaku-mlaku nang Tunjungan.'],
                    ['gawe','damel','gawe','mengerjakan','Aku gawe tugas sek rek.'],
                    ['ngenteni','ngentosi','sek','menunggu','Ngenteni aku nang kene rek.'],
                    // ['mbayar','mbayar','mbayar','membayar','Aku mbayar parkir sek.'],
                    ['tuku','tumbas','tuku rek','membeli','Aku tuku oleh-oleh rek.'],
                    ['ndelok','mireng / ningali','ndelok','melihat','Aku ndelok film anyar rek.'],
                    ['mbayar','mbayar','mbayar','membayar','Aku mbayar parkir sek.'],

                    // ====================== EMOSI ======================
                    ['seneng','remen','seneng rek','senang','Aku seneng banget rek.'],
                    ['getun','sareh','nyesel','menyesal','Aku getun ora sinau.'],
                    ['gela','sedhih','gela rek','sedih','Gela aku rek.'],
                    ['kaget','kaget','jancuk!','terkejut','Jancuk, kaget aku!'],
                    ['gondok','nesu','gondok rek','marah','Aku gondok tenan rek!'],

                    // ====================== SURABAYAAN KHAS ======================
                    ['cak','-','cak/cuk','sapaan lelaki','Halo cak, piye kabarmu?'],
                    ['rek','-','rek','sapaan teman','Ayo rek, dolan.'],
                    ['','-','coeg','cemohan santai','Coeg, kowe lucu tenan.'],
                    ['keles','-','keles','ungkapan mengejek','Sok banget keles.'],
                    ['ndang','-','ndang','cepat','Ndang teko rek!'],
                    ['gak iso','-','gak iso','tidak bisa','Aku gak iso rek.'],

                    // ====================== TEMPAT ======================
                    ['omah','griya','omah','rumah','Aku neng omah rek.'],
                    ['pasar','peken','pasar','pasar','Tuku sayur nang pasar sek.'],
                    ['dalan','dalan','dalan','jalan','Dalan iki sesek rek.'],
                    ['warung','warung','warung','toko kecil','Ayo ngopi nang warung.'],

                    // ====================== WAKTU ======================
                    ['esuk','enjing','esuk rek','pagi','Esuk enak ngopi rek.'],
                    ['awen','sonten','sore rek','sore','Ayo mulih sore rek.'],
                    ['bengi','dalu','bengi rek','malam','Bengi enak turu rek.'],
                    ['mengko','menggah','mengko rek','nanti','Mengko aku teko rek.'],

                    // ====================== TAMBAHAN ======================
                    ['kenyang','wareg','wareg rek','kenyang','Aku wis wareg rek.'],
                    ['madang','dhahar','mangan rek','makan','Ayo mangan rek.'],
                    ['balik','wangsul','mulih rek','pulang','Aku mulih sore rek.'],
                    ['laper','luwe','luwe rek','lapar','Aku luwe pol rek.'],
                    ['kebek','kebek','kebek','penuh','Tas ku kebek barang.'],
                    ['golek','golek','golek','mencari','Tak goleki sik rek.'],
                    ['mbukak','mbikak','mbukak','membuka','Mbukak lawange sek.'],
                    ['nutup','nutup','nutup','menutup','Tolong nutup jendelane.'],
                    ['seneng','remen','seneng rek','senang','Aku seneng ketemu kowe.'],
                    ['kagum','kagum','takjub rek','kagum','Aku kagum karo karyamu.'],
                    ['gamblang','-','gamblang','jelas','Penjelasannya gamblang rek.'],
                    ['kaget','kaget','kaget rek','terkejut','Kaget aku ning ndelokmu.'],
                    ['bete','-','bete rek','bad mood','Lagi bete rek.'],
                    ['sumringah','-','sumringah','tersenyum lebar','Wajahmu sumringah tenan.'],
                    ['was-was','ajrih','was-was rek','khawatir','Aku was-was nunggu kabar.'],
                    ['kepikiran','-','kepikiran','memikirkan','Aku kepikiran tugasmu.'],
                    ['ngarep','ngajeng','ngarep rek','depan','Aku tunggu nang ngarep.'],
                    ['mburi','wingking','mburi rek','belakang','Motormu nang mburi rek.'],
                    ['pojokan','-','pojokan','sudut','Ketemu nang pojokan toko.'],
                    ['ndalem','griya','omah','rumah','Aku nang omah sek.'],
                    ['nyapu','resik-resik','nyapu rek','menyapu','Aku nyapu teras sek rek.'],
                    ['ngepel','ngumbahi lantai','ngepel rek','mengepel','Ibuk lagi ngepel omah.'],
                    ['ngetik','mratelakake','ngetik','mengetik','Aku ngetik laporan sek.'],
                    ['ngisi','ngisi','ngisi','mengisi','Tolong ngisi formulire rek.'],
                    ['ngangkat','mindhahaken','ngangkat','mengangkat','Bantu ngangkat kursi iki rek.'],
                    ['nyiapke','nyawisake','nyiapke','menyiapkan','Aku nyiapke panganan.'],
                    ['ngrombol','kempal-kempal','ngrombol','berkumpul','Murid-murid ngrombol nang lapangan.'],
                    ['ngedum','mbagi','ngedum','membagikan','Pak guru ngedum kertas tugas.'],
                    ['nyiapke','nyawisake','nyiapke','menyiapkan','Aku nyiapke panganan.'],
                    ['nyapu','resik-resik','nyapu rek','menyapu','Aku nyapu teras sek rek.'],
                    ['sumuk','panas','sumuk rek','gerah','Ruangan iki sumuk pol rek.'],
                    ['larang','awis','larang','mahal','Sandangan iki larang.'],
                    ['kepeng','ajrih alit','kepingin','ingin sekali','Aku kepeng dolan.'],
                    ['ngumbah','mbasuh','nyuci rek','mencuci','Aku ngumbah klambi.'],

                ];

                // ===== PAGINATION =====
                $perPage = 10;
                $page = request()->get('page', 1);
                $offset = ($page - 1) * $perPage;

                $items = array_slice($kamus, $offset, $perPage);
                $totalPages = ceil(count($kamus) / $perPage);
                @endphp

                @foreach($items as $k)
                <tr class="border hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    <td class="p-3 border dark:border-gray-700">{{ $k[0] }}</td>
                    <td class="p-3 border text-emerald-700 dark:text-emerald-300 font-semibold dark:border-gray-700">{{ $k[1] }}</td>
                    <td class="p-3 border dark:border-gray-700">{{ $k[2] }}</td>
                    <td class="p-3 border dark:border-gray-700">{{ $k[3] }}</td>
                    <td class="p-3 border italic text-gray-600 dark:text-gray-300 dark:border-gray-700">{{ $k[4] }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

<!-- PAGINATION MOBILE FRIENDLY -->
<div class="mt-6 w-full flex flex-col items-center gap-3">

    <!-- Info Halaman -->
    <div class="text-sm text-gray-600 dark:text-gray-300">
        Halaman {{ $page }} dari {{ $totalPages }}
    </div>

    <!-- Wrapper Navigation -->
    <div class="flex items-center justify-center gap-2 w-full">

        {{-- Prev --}}
        @if($page > 1)
        <a href="?page={{ $page - 1 }}"
           class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-full text-sm 
                  hover:bg-gray-300 dark:hover:bg-gray-600 transition">
            Prev
        </a>
        @else
        <span class="px-4 py-2 bg-gray-100 dark:bg-gray-800 rounded-full text-sm text-gray-400">
            Prev
        </span>
        @endif

        <!-- NOMOR HALAMAN (SCROLLABLE PADA MOBILE) -->
        <div class="flex gap-2 overflow-x-auto no-scrollbar px-2 max-w-[260px]">
            @for($i = 1; $i <= $totalPages; $i++)
                <a href="?page={{ $i }}"
                   class="px-3 py-1 rounded-full text-sm min-w-[38px] text-center
                   {{ $page == $i 
                        ? 'bg-emerald-600 text-white' 
                        : 'bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-600' }}">
                    {{ $i }}
                </a>
            @endfor
        </div>

        {{-- Next --}}
        @if($page < $totalPages)
        <a href="?page={{ $page + 1 }}"
           class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded-full text-sm
                  hover:bg-gray-300 dark:hover:bg-gray-600 transition">
            Next
        </a>
        @else
        <span class="px-4 py-2 bg-gray-100 dark:bg-gray-800 rounded-full text-sm text-gray-400">
            Next
        </span>
        @endif

    </div>
</div>

    </div>

</section>

<!-- HILANGKAN SCROLLBAR DI MOBILE -->
<style>
.no-scrollbar::-webkit-scrollbar { display: none; }
.no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<script>
function toggleKamus() {
    document.getElementById("kamusSection").classList.toggle("hidden");
}

document.addEventListener("DOMContentLoaded", () => {
    if (window.location.search.includes("page=")) {
        const sec = document.getElementById("kamusSection");
        sec.classList.remove("hidden");
        window.scrollTo({ top: sec.offsetTop - 50, behavior: "smooth" });
    }
});
</script>

@endsection
