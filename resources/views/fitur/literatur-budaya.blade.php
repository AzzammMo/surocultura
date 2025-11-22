@extends('layouts.app')

@section('content')

<section class="py-16 bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-100">

    <div class="max-w-6xl mx-auto px-6">

    {{-- JUDUL RATATENGAH --}}
    <h1 class="text-4xl font-bold text-amber-900 mb-6 text-center">
        <i class="fa-solid fa-masks-theater mr-2"></i>
        Literatur Budaya 
    </h1>

    <p class="text-gray-700 mb-10 leading-relaxed max-w-3xl mx-auto text-center">
        Informasi budaya Kota Surabaya mencakup baju adat, rumah adat, alat musik tradisional,
        serta lagu daerah yang dekat dengan identitas lokal.
    </p>

            {{-- BUTTON KEMBALI --}}
        <a href="/" 
           class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 
                  transition flex items-center gap-1 w-fit mb-6">
            <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
        </a>
        {{-- ===== GRID CARD ===== --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div onclick="showDetail('bajuAdat')" 
                class="cursor-pointer bg-white rounded-xl shadow-xl p-6 hover:scale-105 transition border-t-8 border-red-500">
                <i class="fa-solid fa-shirt text-red-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-red-700">Baju Adat</h3>
                <p class="text-gray-600 mt-2">Pakaian adat khas Surabaya.</p>
            </div>

            <div onclick="showDetail('rumahAdat')" 
                class="cursor-pointer bg-white rounded-xl shadow-xl p-6 hover:scale-105 transition border-t-8 border-blue-500">
                <i class="fa-solid fa-house-chimney text-blue-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-blue-700">Rumah Adat</h3>
                <p class="text-gray-600 mt-2">Rumah tradisional Jawa Timur.</p>
            </div>

            <div onclick="showDetail('alatMusik')" 
                class="cursor-pointer bg-white rounded-xl shadow-xl p-6 hover:scale-105 transition border-t-8 border-green-600">
                <i class="fa-solid fa-drum text-green-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-green-700">Alat Musik</h3>
                <p class="text-gray-600 mt-2">Instrumen tradisi di Surabaya.</p>
            </div>

            <div onclick="showDetail('laguDaerah')" 
                class="cursor-pointer bg-white rounded-xl shadow-xl p-6 hover:scale-105 transition border-t-8 border-yellow-600">
                <i class="fa-solid fa-music text-yellow-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-yellow-700">Lagu Daerah</h3>
                <p class="text-gray-600 mt-2">Lagu tradisional khas Surabaya.</p>
            </div>

        </div>

        {{-- ================= DETAIL SECTION ================= --}}
        <div id="detailSection" class="mt-14 hidden">
            
            <h2 id="detailTitle" class="text-3xl font-bold text-amber-900 mb-4"></h2>

            <div id="detailContent" class="space-y-6"></div>

            <button onclick="hideDetail()"
                class="mt-6 px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow">
                Tutup
            </button>

        </div>

    </div>
</section>

<script>
    const placeholderImg = "/placeholder.png";

    function autoResolveImg(name) {
        return `/budaya/${name}`;
    }

    const details = {

bajuAdat: {
    title: "Baju Adat Surabaya",
    items: [
        {
            name: "Pakaian Cak",
            desc: `
                Pakaian Cak adalah busana adat khas laki-laki Surabaya. Biasanya terdiri dari baju hitam sederhana,
                celana panjang, kain jarik sebagai sabuk, serta udheng (ikat kepala). 

                <br><br><b>Bahan Utama:</b> Kain katun, beludru tipis, dan jarik batik bermotif Surabaya seperti
                Sawunggaling atau Semanggi.  
                <br><b>Makna Filosofis:</b> Melambangkan keberanian, ketegasan, dan sifat egaliter khas arek Suroboyo.  
                <br><b>Dipakai Saat:</b> Acara kesenian, penyambutan tamu, festival budaya, dan karnaval Surabaya.  
                <br><b>Ciri Khas:</b> Dominasi warna gelap yang menggambarkan kesederhanaan dan sikap tegas.
            `,
            img: autoResolveImg("cak2.png")
        },

        {
            name: "Pakaian Ning",
            desc: `
                Pakaian Ning adalah busana adat wanita Surabaya. Bentuknya berupa kebaya dengan bordir halus 
                serta bawahan jarik batik. Kebaya Ning menonjolkan keanggunan perempuan Jawa Timur.

                <br><br><b>Bahan Utama:</b> Brokat, katun lembut, satin, dan beberapa menggunakan payet.  
                <br><b>Makna Filosofis:</b> Menunjukkan kelembutan, keanggunan, dan keteguhan perempuan Suroboyo.  
                <br><b>Dipakai Saat:</b> Upacara adat, acara resmi, dan pentas tari tradisional.  
                <br><b>Ciri Khas:</b> Warna cerah, motif bordir floral, dan penggunaan sanggul sebagai pelengkap.
            `,
            img: autoResolveImg("pakaianning.png")
        },

        // {
        //     name: "Baju Mantenan",
        //     desc: `
        //         Baju Mantenan adalah busana pengantin adat Jawa Timur, sering ditemukan dalam pernikahan adat 
        //         Surabaya dan daerah sekitarnya. Bahan dasarnya adalah beledu (velvet) hitam dengan ornamen emas.

        //         <br><br><b>Bahan Utama:</b> Kain beludru hitam, benang emas, dan aksesoris prada.  
        //         <br><b>Makna Filosofis:</b> Hitam melambangkan kewibawaan, sedangkan emas melambangkan kemuliaan dan keberkahan.  
        //         <br><b>Dipakai Saat:</b> Upacara pernikahan adat Jawa Timur.  
        //         <br><b>Ciri Khas:</b> Hiasan kepala Paes Ageng, ornamen keemasan, dan selempang batik bermotif klasik.
        //     `,
        //     img: autoResolveImg("bajumantenan.png")
        // },

        // {
        //     name: "Kebaya Rancongan",
        //     desc: `
        //         Kebaya Rancongan merupakan busana tradisional Madura yang banyak digunakan di wilayah Jawa Timur. 
        //         Modelnya ketat dan mengikuti bentuk tubuh dengan warna-warna mencolok.

        //         <br><br><b>Bahan Utama:</b> Katun, brokat tipis, dan jarik khas Madura seperti motif tabir atau storjan.  
        //         <br><b>Makna Filosofis:</b> Warna mencolok melambangkan keberanian masyarakat Madura.  
        //         <br><b>Dipakai Saat:</b> Upacara adat, tarian Madura, serta kegiatan budaya.  
        //         <br><b>Ciri Khas:</b> Warna merah, kuning, dan hijau terang, serta penggunaan kalung emas panjang (kalung tumpal).
        //     `,
        //     img: autoResolveImg("kebayarancongan.png")
        // }
    ]
},


/* ===================== RUMAH ADAT ===================== */
rumahAdat: {
    title: "Rumah Adat Jawa Timur",
    items: [
        {
            name: "Rumah Joglo",
            desc: `
                Rumah Joglo adalah rumah tradisional masyarakat Jawa yang memiliki struktur khas berupa 
                empat tiang utama bernama <i>saka guru</i> dan atap bertingkat. Di Jawa Timur, Joglo
                digunakan untuk rumah bangsawan, balai adat, serta tempat upacara tradisi.

                <br><br><b>Ciri Khas:</b> 
                Atap bertumpuk (tajug), pendopo luas, dan struktur kayu simetris dengan ornamen ukir.

                <br><b>Bahan Utama:</b> 
                Kayu jati sebagai tiang utama, anyaman bambu, serta genteng tanah liat.

                <br><b>Fungsi Ruang:</b> 
                Pendopo sebagai ruang tamu & kegiatan adat, <i>dalem</i> sebagai ruang keluarga, 
                dan <i>senthong</i> untuk ruang pribadi.

                <br><b>Filosofi:</b> 
                Atap menjulang melambangkan hubungan manusia dengan Tuhan serta keharmonisan sosial.
            `,
            img: autoResolveImg("rumahjonglo.png")
        },

        {
            name: "Rumah Limasan",
            desc: `
                Rumah Limasan adalah rumah tradisional Jawa Timur yang memiliki bentuk atap limas
                empat sisi berundak. Rumah ini banyak digunakan masyarakat pedesaan dan menjadi simbol
                kesederhanaan serta ketertiban hidup.

                <br><br><b>Ciri Khas:</b> 
                Atap limas bertingkat, struktur balok kayu tersusun, serta serambi depan yang luas.

                <br><b>Bahan Utama:</b> 
                Kayu jati atau nangka, rotan sebagai pengikat, dan genteng tanah liat.

                <br><b>Fungsi Ruang:</b> 
                Serambi depan untuk menerima tamu, ruang tengah untuk musyawarah keluarga, 
                dan ruang dalam untuk tempat istirahat.

                <br><b>Filosofi:</b>
                Bentuk limasan melambangkan keseimbangan, ketertiban hidup, dan kesederhanaan rakyat Jawa.
            `,
            img: autoResolveImg("rumahlimasan.png")
        }
    ]
},


      /* ===================== ALAT MUSIK ===================== */
alatMusik: {
    title: "Alat Musik Tradisional Surabaya & Jawa Timur",
    items: [
        {
            name: "Jidor",
            desc: `
                Jidor adalah alat musik pukul tradisional yang berkembang di Jawa Timur, terutama di Surabaya 
                dan Madura. Suaranya nyaring dan kuat sehingga banyak digunakan dalam kesenian rakyat 
                dan kegiatan keagamaan.

                <br><br><b>Bahan Utama:</b> 
                Badan dari kayu besar, membran dari kulit sapi atau kerbau, dan pengikat rotan.

                <br><b>Cara Memainkan:</b> 
                Dipukul menggunakan pemukul kayu besar untuk menghasilkan ritme keras dan bergetar.

                <br><b>Digunakan Pada:</b> 
                Kesenian patrol, penyambutan tamu, pengajian, dan acara masyarakat.

                <br><b>Ciri Khas:</b> 
                Suara dentuman dalam dan kuat, ritme sederhana namun sangat dominan.
            `,
            img: autoResolveImg("jidor.png")
        },

        {
            name: "Angklung",
            desc: `
                Angklung merupakan alat musik tradisional dari bambu yang juga banyak digunakan di 
                wilayah Jawa Timur, terutama dalam pendidikan seni, upacara sekolah, dan pertunjukan budaya.

                <br><br><b>Bahan Utama:</b> 
                Bambu hitam atau bambu putih yang disusun membentuk resonansi nada.

                <br><b>Cara Memainkan:</b> 
                Digoyang sehingga potongan bambu bergetar menghasilkan suara sesuai nadanya.

                <br><b>Digunakan Pada:</b> 
                Pentas seni, upacara adat, pendidikan sekolah, dan orkestra angklung modern.

                <br><b>Ciri Khas:</b> 
                Suaranya bergetar lembut, dapat dimainkan berkelompok untuk harmoni nada.
            `,
            img: autoResolveImg("angklung.png")
        },

        {
            name: "Kendang",
            desc: `
                Kendang adalah alat musik ritmis utama dalam gamelan Jawa Timur. Instrumen ini menjadi 
                pengatur tempo musik dan sering dimainkan dalam kesenian ludruk maupun tari tradisional.

                <br><br><b>Bahan Utama:</b> 
                Kayu nangka atau jati, kulit kambing atau sapi, serta tali rotan sebagai pengencang.

                <br><b>Cara Memainkan:</b> 
                Dipukul menggunakan telapak tangan untuk menghasilkan nada tinggi maupun rendah.

                <br><b>Digunakan Pada:</b> 
                Karawitan Jawa Timur, tari remo, ludruk, campursari, dan upacara tradisi.

                <br><b>Ciri Khas:</b> 
                Memiliki dua sisi membran dengan nada berbeda, teknik pukulan kompleks dan dinamis.
            `,
            img: autoResolveImg("kendang.png")
        },

        {
            name: "Tong-tong",
            desc: `
                Tong-tong adalah alat musik pukul tradisional dari Madura. Biasanya dimainkan sebagai 
                penanda ronda malam dan juga digunakan dalam seni musik khas Madura yang disebut 
                "Tong-tong Musik Patrol".

                <br><br><b>Bahan Utama:</b> 
                Kayu tebal atau bambu besar yang dilubangi sebagai resonator.

                <br><b>Cara Memainkan:</b> 
                Dipukul menggunakan pemukul kayu sehingga menghasilkan suara keras dan ritmis.

                <br><b>Digunakan Pada:</b> 
                Ronda malam, festival budaya Madura, dan pertunjukan kesenian patrol.

                <br><b>Ciri Khas:</b> 
                Suara keras bergema, ritme cepat dan energik, sering dimainkan berkelompok.
            `,
            img: autoResolveImg("tongtong.png")
        }
    ]
},


/* ===================== LAGU DAERAH ===================== */
laguDaerah: {
    title: "Lagu Daerah Khas Surabaya",
    items: [
        {
            name: "Rek Ayo Rek",
            desc: `
                "Rek Ayo Rek" adalah lagu yang sangat identik dengan dialek Surabaya (“rek” artinya kawan / teman). Lagu ini menggambarkan keramaian Kota Surabaya, semangat warganya, dan suasana khas Tunjungan – salah satu kawasan paling ikonik di Surabaya.

                <br><br><b>Latar Sejarah:</b>  
                Lagu ini muncul sebagai ungkapan cinta terhadap kota Surabaya, terutama daerah Tunjungan dan jalan-jalan kuno. Banyak versi menyatakan lagu ini diciptakan sebagai apresiasi terhadap semangat sosial arek-arek Suroboyo.

                <br><b>Makna Budaya:</b>  
                “Rek ayo rek” mendorong kebersamaan, guyub, dan rasa persaudaraan warga Surabaya. Liriknya sederhana namun penuh energi, mencerminkan hidup di kota dengan karakter pekerja keras dan ramah.

                <br><b>Penggunaan dalam Budaya:</b>  
                Sering dipakai dalam acara festival lokal, parade budaya, dan pentas seni. Lagu ini juga populer di sekolah sebagai bagian dari pendidikan kebanggaan lokal.

                <br><b>Ciri Musik:</b>  
                Melodi ceria, ritme agak cepat, dan biasanya diiringi alat musik tradisional maupun modern untuk menciptakan rasa energik khas Surabaya.
            `,
            img: autoResolveImg("rekayorek.png")
        },
        {
            name: "Tanjung Perak",
            desc: `
                "Tanjung Perak" adalah lagu yang menggambarkan kemegahan pelabuhan Surabaya, yaitu Pelabuhan Tanjung Perak – salah satu pelabuhan tersibuk di Indonesia dan simbol kegiatan maritim di Kota Pahlawan.

                <br><br><b>Latar Sejarah:</b>  
                Lagu ini diciptakan untuk mengenang dan merayakan pentingnya Pelabuhan Tanjung Perak dalam jalur perdagangan dan transportasi laut di Jawa Timur. Pelabuhan ini menjadi saksi sejarah perkembangan ekonomi Surabaya.

                <br><b>Makna Budaya:</b>  
                Liriknya melambangkan kebanggaan akan identitas pelaut Surabaya, semangat dagang, dan pengorbanan para pekerja pelabuhan. Lagu ini juga menunjukkan keterikatan masyarakat Surabaya dengan laut dan perdagangan.

                <br><b>Penggunaan dalam Budaya:</b>  
                Dinyanyikan dalam acara upacara kota, peringatan sejarah lokal, serta festival kemaritiman. Lagu ini juga sering dinyanyikan oleh pelajar sebagai bagian pendidikan sejarah lokal.

                <br><b>Ciri Musik:</b>  
                Melodi nostalgik namun penuh tenaga, dengan perpaduan tangga nada tradisional dan elemen orkestrasi modern untuk menonjolkan rasa kebanggaan dan semangat maritim.
            `,
            img: autoResolveImg("tanjungperak.png")
        },
        {
            name: "Semanggi Suroboyo",
            desc: `
                "Semanggi Suroboyo" adalah lagu yang mengangkat identitas kuliner dan semangat masyarakat Surabaya melalui simbol semanggi – makanan khas kota yang populer di kalangan warga lokal. Lagu ini menonjolkan rasa kekeluargaan dan kebersamaan masyarakat dalam tradisi makan di warung maupun rumah.

                <br><br><b>Latar Sejarah:</b>  
                Lagu ini tercipta sebagai apresiasi terhadap budaya kuliner Surabaya, khususnya semanggi yang dikenal sebagai hidangan sederhana namun sarat nilai budaya. Lagu ini juga memperkenalkan tradisi kuliner lokal kepada generasi muda.

                <br><b>Makna Budaya:</b>  
                Liriknya mencerminkan keramahtamahan dan kebersamaan warga Surabaya. Semanggi bukan hanya makanan, tapi simbol interaksi sosial, persaudaraan, dan nilai budaya Kota Pahlawan.

                <br><b>Penggunaan dalam Budaya:</b>  
                Sering dibawakan dalam festival kuliner, acara sekolah, atau pentas seni lokal untuk memperkenalkan budaya kuliner Surabaya kepada masyarakat luas. Lagu ini juga digunakan sebagai media edukasi budaya bagi generasi muda.

                <br><b>Ciri Musik:</b>  
                Melodi riang dan mudah diikuti, ritme santai namun hangat, dengan unsur gamelan ringan atau alat musik perkusi untuk memberi nuansa tradisional dan khas Surabaya.
            `,
            img: autoResolveImg("semanggi.png")
        }
    ]
}


    };

    function showDetail(key) {
        const section = details[key];

        document.getElementById("detailTitle").innerHTML = section.title;
        
        const container = document.getElementById("detailContent");
        container.innerHTML = "";

        section.items.forEach(item => {
            container.innerHTML += `
                <div class="flex flex-col md:flex-row gap-6 bg-white rounded-xl shadow-lg p-6">

                    <!-- IMG RESPONSIVE -->
                    <div class="w-full md:w-40">
                        <img src="${item.img}"
                             onerror="this.src='${placeholderImg}'"
                             class="w-full aspect-square object-cover rounded-xl border shadow" />
                    </div>

                    <!-- TEXT -->
                    <div class="flex-1">
                        <h3 class="text-2xl font-bold text-amber-800">${item.name}</h3>
                        <p class="text-gray-700 mt-2 text-lg leading-relaxed">${item.desc}</p>
                    </div>
                </div>
            `;
        });

        document.getElementById("detailSection").classList.remove("hidden");
        window.scrollTo({ top: 500, behavior: "smooth" });
    }

    function hideDetail() {
        document.getElementById("detailSection").classList.add("hidden");
    }
</script>


@endsection
