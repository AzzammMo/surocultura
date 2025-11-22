@extends('layouts.app')

@section('content')

<section class="py-20 bg-amber-50">

    <div class="max-w-4xl mx-auto px-6">

        <h1 class="text-4xl font-bold text-amber-900 mb-6 text-center flex items-center justify-center gap-3">
            <i class="fa-solid fa-bowl-food text-amber-700"></i>
            Kuliner Tradisional Surabaya
        </h1>

        <p class="text-gray-700 text-lg mb-10 text-center">
            Ragam kuliner khas Surabaya dikenal dengan rasa kuat, penggunaan petis, serta karakter bumbu yang intens. 
            Berikut makanan otentik yang menjadi ikon Kota Pahlawan.
        </p>

        {{-- BUTTON KEMBALI --}}
        <a href="/" 
           class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 
                  transition flex items-center gap-1 w-fit mb-6">
            <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
        </a>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            {{-- RUJAK CINGUR --}}
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform hover:-translate-y-2 
                        hover:shadow-2xl transition duration-300">
                <div class="h-64 w-full">
                    <img src="/budaya/rujakcingur.png" class="w-full h-full object-cover">
                </div>
                <div class="p-7">
                    <h3 class="text-2xl font-bold text-amber-800 mb-3">Rujak Cingur</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Perpaduan cingur sapi, sayuran rebus, buah, tahu–tempe, dengan bumbu petis hitam khas Surabaya.
                    </p>
                    <button onclick="openModal('modalRujak')"
                        class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition">
                        Detail
                    </button>
                </div>
            </div>

            {{-- RAWON --}}
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform hover:-translate-y-2 
                        hover:shadow-2xl transition duration-300">
                <div class="h-64 w-full">
                    <img src="/budaya/rawon.png" class="w-full h-full object-cover">
                </div>
                <div class="p-7">
                    <h3 class="text-2xl font-bold text-amber-800 mb-3">Rawon</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sup daging berkuah hitam dari kluwek dengan aroma rempah dan rasa gurih khas Jawa Timur.
                    </p>
                    <button onclick="openModal('modalRawon')"
                        class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition">
                        Detail
                    </button>
                </div>
            </div>

            {{-- LONTONG BALAP --}}
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform hover:-translate-y-2 
                        hover:shadow-2xl transition duration-300">
                <div class="h-64 w-full">
                    <img src="/budaya/lontongbalap.png" class="w-full h-full object-cover">
                </div>
                <div class="p-7">
                    <h3 class="text-2xl font-bold text-amber-800 mb-3">Lontong Balap</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Hidangan ringan berisi lontong, tauge, tahu goreng, lentho, dan kuah kaldu gurih.
                    </p>
                    <button onclick="openModal('modalBalap')"
                        class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition">
                        Detail
                    </button>
                </div>
            </div>

            {{-- TAHU TEK --}}
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform hover:-translate-y-2 
                        hover:shadow-2xl transition duration-300">
                <div class="h-64 w-full">
                    <img src="/budaya/tahutek.png" class="w-full h-full object-cover">
                </div>
                <div class="p-7">
                    <h3 class="text-2xl font-bold text-amber-800 mb-3">Tahu Tek</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tahu goreng dengan lontong, mie, tauge, dan saus petis kacang yang gurih.
                    </p>
                    <button onclick="openModal('modalTahu')"
                        class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition">
                        Detail
                    </button>
                </div>
            </div>

            {{-- SEMANGGI SURABAYA --}}
<div class="bg-white shadow-lg rounded-2xl overflow-hidden transform hover:-translate-y-2 
            hover:shadow-2xl transition duration-300">
    <div class="h-64 w-full">
        <img src="/budaya/semanggifood.png" class="w-full h-full object-cover">
    </div>
    <div class="p-7">
        <h3 class="text-2xl font-bold text-amber-800 mb-3">Semanggi Surabaya</h3>
        <p class="text-gray-600 leading-relaxed">
            Semanggi adalah hidangan khas Surabaya yang berbahan daun semanggi segar, kecambah, dan disiram saus kacang manis pedas. 
            Hidangan ini menonjolkan kesegaran sayuran dan rasa saus kacang yang khas.
        </p>
        <button onclick="openModal('modalSemanggi')"
            class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800 transition">
            Detail
        </button>
    </div>
</div>


        </div>
    </div>



    {{-- ========================= MODAL SECTION ========================= --}}

    {{-- ====================== RUJAK CINGUR ====================== --}}
    <div id="modalRujak" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 max-h-[80vh] overflow-y-auto p-6 rounded-xl shadow-xl 
                    animate-[fadeIn_0.2s_ease-out]">
            
            <img src="/budaya/rujakcingur.png" class="w-full h-56 object-cover rounded-lg mb-4">

            <h2 class="text-2xl font-bold text-amber-800 mb-4">Rujak Cingur</h2>
            <p class="text-gray-700 leading-relaxed">
                <b>Deskripsi:</b><br>
                Rujak Cingur merupakan hidangan khas Surabaya yang menggabungkan cingur sapi, 
                sayuran rebus, buah segar, tahu–tempe goreng, dan disiram bumbu petis hitam yang 
                pekat dan aromatik. Rasa manis, gurih, asam, dan pedas berpadu kuat sehingga menjadi 
                salah satu makanan paling ikonik di Jawa Timur.<br><br>

                <b>Bahan Utama:</b> Cingur sapi, kangkung, tauge, mentimun, bengkoang, nanas, mangga muda, 
                tahu goreng, tempe, lontong.<br><br>

                <b>Bumbu:</b> Petis udang hitam, kacang tanah goreng, cabai rawit, gula merah, bawang putih, garam, air asam jawa.<br><br>

                <b>Ciri Khas:</b> Aroma petis yang kuat dan tekstur kenyal cingur.
            </p>

            <button onclick="closeModal('modalRujak')"
                class="mt-6 w-full bg-gray-700 hover:bg-gray-900 text-white py-2 rounded-lg">Tutup</button>
        </div>
    </div>



    {{-- ====================== RAWON ====================== --}}
    <div id="modalRawon" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 max-h-[80vh] overflow-y-auto p-6 rounded-xl shadow-xl 
                    animate-[fadeIn_0.2s_ease-out]">

            <img src="/budaya/rawon.png" class="w-full h-56 object-cover rounded-lg mb-4">

            <h2 class="text-2xl font-bold text-amber-800 mb-4">Rawon</h2>
            <p class="text-gray-700 leading-relaxed">
                <b>Deskripsi:</b><br>
                Rawon adalah sup daging berkuah hitam pekat yang berasal dari kluwek. 
                Rasanya gurih, aromatik, dan memiliki sentuhan earthy yang khas. 
                Daging sapi dimasak hingga empuk dan disajikan bersama tauge pendek, sambal terasi, dan kerupuk udang.<br><br>

                <b>Bahan Utama:</b> Daging sapi (sengkel/brisket), kluwek, daun jeruk, serai, bawang merah, bawang putih, lengkuas.<br><br>

                <b>Bumbu Halus:</b> Kluwek, kemiri, kunyit, ketumbar, lada, bawang putih, bawang merah, jahe, garam, sedikit gula.<br><br>

                <b>Pelengkap:</b> Tauge pendek, bawang goreng, sambal terasi, telur asin, jeruk limau.<br><br>

                <b>Ciri Khas:</b> Kuah hitam dari kluwek dan aroma rempah yang kuat.
            </p>

            <button onclick="closeModal('modalRawon')"
                class="mt-6 w-full bg-gray-700 hover:bg-gray-900 text-white py-2 rounded-lg">Tutup</button>
        </div>
    </div>



    {{-- ====================== LONTONG BALAP ====================== --}}
    <div id="modalBalap" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 max-h-[80vh] overflow-y-auto p-6 rounded-xl shadow-xl 
                    animate-[fadeIn_0.2s_ease-out]">

            <img src="/budaya/lontongbalap.png" class="w-full h-56 object-cover rounded-lg mb-4">

            <h2 class="text-2xl font-bold text-amber-800 mb-4">Lontong Balap</h2>
            <p class="text-gray-700 leading-relaxed">
                <b>Deskripsi:</b><br>
                Lontong Balap adalah hidangan khas Surabaya yang berisi lontong, 
                tauge melimpah, tahu goreng, dan lentho—perkedel kacang tolo khas. 
                Disajikan dengan kuah kaldu bawang yang ringan serta sambal petis 
                sebagai penambah rasa. Nama “balap” muncul dari penjual tempo dulu 
                yang berlari cepat saat berjualan.<br><br>

                <b>Bahan Utama:</b> Lontong, tauge, tahu goreng, lentho kacang tolo, bawang goreng.<br><br>

                <b>Kuah:</b> Kaldu sapi ringan, bawang putih, garam, bawang merah goreng, merica.<br><br>

                <b>Ciri Khas:</b> Penggunaan lentho dan sambal petis Surabaya.
            </p>

            <button onclick="closeModal('modalBalap')"
                class="mt-6 w-full bg-gray-700 hover:bg-gray-900 text-white py-2 rounded-lg">Tutup</button>
        </div>
    </div>



    {{-- ====================== TAHU TEK ====================== --}}
    <div id="modalTahu" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 max-h-[80vh] overflow-y-auto p-6 rounded-xl shadow-xl 
                    animate-[fadeIn_0.2s_ease-out]">

            <img src="/budaya/tahutek.png" class="w-full h-56 object-cover rounded-lg mb-4">

            <h2 class="text-2xl font-bold text-amber-800 mb-4">Tahu Tek</h2>
            <p class="text-gray-700 leading-relaxed">
                <b>Deskripsi:</b><br>
                Tahu Tek adalah hidangan khas Surabaya yang terdiri dari tahu goreng setengah matang, 
                lontong, mie kuning, dan tauge. Semua bahan disiram saus petis kacang yang gurih, 
                manis, dan sedikit pedas. Nama “Tahu Tek” berasal dari suara gunting penjual 
                (“tek-tek”) yang digunakan untuk memotong bahan langsung di piring.<br><br>

                <b>Bahan Utama:</b> Tahu goreng, lontong, mie kuning, tauge, terkadang telur.<br><br>

                <b>Bumbu Saus:</b> Petis udang, kacang tanah halus, kecap manis, cabai rawit, bawang putih, garam.<br><br>

                <b>Ciri Khas:</b> Saus petis kacang kental dan suara gunting khas dari cara penyajian tradisional.
            </p>

            <button onclick="closeModal('modalTahu')"
                class="mt-6 w-full bg-gray-700 hover:bg-gray-900 text-white py-2 rounded-lg">Tutup</button>
        </div>
    </div>

    {{-- ====================== SEMANGGI SURABAYA ====================== --}}
<div id="modalSemanggi" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-white w-11/12 md:w-2/3 lg:w-1/2 max-h-[80vh] overflow-y-auto p-6 rounded-xl shadow-xl 
                animate-[fadeIn_0.2s_ease-out]">

        <img src="/budaya/semanggifood.png" class="w-full h-56 object-cover rounded-lg mb-4">

        <h2 class="text-2xl font-bold text-amber-800 mb-4">Semanggi Surabaya</h2>
        <p class="text-gray-700 leading-relaxed">
            <b>Deskripsi:</b><br>
            Semanggi Surabaya adalah hidangan khas yang memanfaatkan daun semanggi segar dan kecambah, disiram dengan saus kacang manis-pedas khas Surabaya. 
            Makanan ini dikenal sebagai camilan sehat, segar, dan ikonik di kawasan Tunjungan dan Surabaya Utara.<br><br>

            <b>Bahan Utama:</b> Daun semanggi segar, kecambah, tauge, irisan tempe goreng, kerupuk.<br><br>

            <b>Bumbu / Saus:</b> Kacang tanah sangrai dihaluskan, gula merah, cabai rawit, bawang putih, air asam jawa, garam.<br><br>

            <b>Ciri Khas:</b> Kesegaran sayuran berpadu dengan saus kacang gurih-manis pedas, biasa disantap sebagai camilan atau lauk pelengkap.
        </p>

        <button onclick="closeModal('modalSemanggi')"
            class="mt-6 w-full bg-gray-700 hover:bg-gray-900 text-white py-2 rounded-lg">Tutup</button>
    </div>
</div>


</section>


<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal(id) {
    document.getElementById(id).classList.add("hidden");
}
</script>

@endsection
