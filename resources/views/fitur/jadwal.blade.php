@extends('layouts.app')

@section('content')

<style>
    /* BG modal transparan + blur */
    .modal-blur {
        backdrop-filter: blur(8px);
        background: rgba(255, 255, 255, 0.05) !important;
        transition: 0.25s ease-in-out;
    }

    /* Animasi modal muncul */
    @keyframes modalPop {
        0% { opacity: 0; transform: scale(0.7); }
        100% { opacity: 1; transform: scale(1); }
    }

    .modal-animate {
        animation: modalPop 0.28s ease-out;
    }

    /* Button ripple effect */
    .btn-buy-ticket {
        position: relative;
        overflow: hidden;
    }

    .btn-buy-ticket::after {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        background: rgba(255, 255, 255, 0.4);
        border-radius: 50%;
        transform: scale(1);
        opacity: 0;
        transition: 0.4s;
    }

    .btn-buy-ticket:active::after {
        transform: scale(18);
        opacity: 1;
        transition: 0s;
    }

    /* Success bounce */
    @keyframes bounce {
        0% { transform: scale(0.8); }
        60% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .ticket-success-bounce {
        animation: bounce 0.5s ease-out;
    }
</style>



<section class="py-20 bg-gray-100">

<div class="max-w-5xl mx-auto px-6">

    {{-- JUDUL --}}
    <h1 class="text-4xl font-bold text-amber-800 mb-8 text-center flex items-center justify-center gap-3">
        <i class="fa-solid fa-calendar-days"></i>
        Jadwal Pertunjukan Budaya Surabaya
    </h1>

    <p class="text-gray-600 text-center mb-10">
        Daftar festival dan pertunjukan budaya yang digelar di Surabaya.  
        Temukan jadwal lengkap, beli tiket, dan tonton live streaming event berlangsung.
    </p>

    {{-- BUTTON KEMBALI --}}
    <a href="/pertunjukan-budaya" 
       class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 transition w-fit mb-6 flex items-center gap-2">
       <i class="fa-solid fa-arrow-left"></i> Kembali
    </a>

    {{-- ========================= TABLE LIVE EVENT ========================= --}}
    <h2 class="text-2xl font-bold text-amber-800 mt-10 mb-4">Pertunjukan Sedang Berlangsung</h2>

    <div class="overflow-x-auto rounded-lg shadow-lg mb-8">
        <table class="w-full border">
            <thead class="bg-amber-700 text-white">
                <tr>
                    <th class="p-3 text-left">Event</th>
                    <th class="p-3 text-left">Lokasi</th>
                    <th class="p-3 text-left">Waktu</th>
                    <th class="p-3 text-center">Status</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y">

                {{-- ROW 1 --}}
                <tr>
                    <td class="p-3 font-semibold">Ludruk Arek Surabaya</td>
                    <td class="p-3">Balai Pemuda</td>
                    <td class="p-3">Sedang berlangsung</td>
                    <td class="p-3 text-center">
                        <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded-lg">LIVE</span>
                    </td>
                    <td class="p-3 text-center">
                        <a href="/stream/ludruk" 
                           class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            Lihat Streaming
                        </a>
                    </td>
                </tr>

                {{-- ROW 2 --}}
                <tr class="bg-gray-50">
                    <td class="p-3 font-semibold">Pentas Reog Surabaya</td>
                    <td class="p-3">Taman Hiburan Pantai</td>
                    <td class="p-3">Sedang berlangsung</td>
                    <td class="p-3 text-center">
                        <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded-lg">LIVE</span>
                    </td>
                    <td class="p-3 text-center">
                        <a href="/stream/reog" 
                           class="px-4 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            Lihat Streaming
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

   <div class="w-full flex justify-end mb-6">
    {{-- BUTTON TIKET SAYA --}}
    <button onclick="openTicketList()" 
        class="px-3 py-2 bg-green-700 text-white text-sm font-medium rounded-md shadow hover:bg-green-800 transition flex items-center gap-2">
        <i class="fa-solid fa-ticket"></i> Tiket Saya
    </button>
</div>


    {{-- ========================= DAFTAR EVENT (5 FESTIVAL) ========================= --}}
    <h2 class="text-2xl font-bold text-amber-800 mb-4">Jadwal Festival Budaya Mendatang</h2>

    <div class="space-y-8">

        {{-- FESTIVAL TEMPLATE --}}
        @foreach([
            [
                'event' => 'Festival Tari Remo 2025',
                'loc' => 'Gedung Cak Durasim',
                'date' => '12 April 2025',
                'time' => '19.00 WIB'
            ],
            [
                'event' => 'Pagelaran Hadrah Jidor Surabaya',
                'loc' => 'Balai Pemuda Surabaya',
                'date' => '20 Mei 2025',
                'time' => '18.30 WIB'
            ],
            [
                'event' => 'Pertunjukan Topeng Mulud & Teater Rakyat',
                'loc' => 'Taman Budaya Jawa Timur',
                'date' => '30 Juni 2025',
                'time' => '20.00 WIB'
            ],
            [
                'event' => 'Festival Ludruk Arek Surabaya',
                'loc' => 'Gedung Srimulat THR',
                'date' => '10 Juli 2025',
                'time' => '19.30 WIB'
            ],
            [
                'event' => 'Festival Reog & Barongan Surabaya',
                'loc' => 'Lapangan Kodam Brawijaya',
                'date' => '28 Agustus 2025',
                'time' => '17.00 WIB'
            ]
        ] as $f)
        <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col md:flex-row md:items-center justify-between">
            <div>
                <h3 class="text-2xl font-bold text-amber-800">{{ $f['event'] }}</h3>
                <p class="text-gray-600 mt-2">
                    <b>Lokasi:</b> {{ $f['loc'] }} <br>
                    <b>Tanggal:</b> {{ $f['date'] }} <br>
                    <b>Waktu:</b> {{ $f['time'] }}
                </p>
            </div>

            <button
                class="btn-buy-ticket mt-4 md:mt-0 px-5 py-2 bg-amber-700 text-white rounded-lg font-semibold hover:bg-amber-800 transition"
                data-event="{{ $f['event'] }}"
                data-location="{{ $f['loc'] }}"
                data-date="{{ $f['date'] }}"
                data-time="{{ $f['time'] }}"
            >
                <i class="fa-solid fa-ticket"></i> Beli Tiket
            </button>
        </div>
        @endforeach

    </div>

</div>



{{-- ======================= MODAL E-TICKET ======================= --}}
<div id="ticketModal" 
     class="fixed inset-0 modal-blur hidden items-center justify-center z-50">

    <div class="bg-white w-[420px] p-6 rounded-2xl shadow-2xl relative modal-animate ticket-success-bounce"
         id="ticketBox">

        {{-- CLOSE BUTTON --}}
        <button onclick="closeTicket()" 
                class="absolute top-2 right-3 text-red-600 text-2xl hover:text-red-800">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <h2 class="text-2xl font-bold text-amber-700 mb-4 text-center flex items-center justify-center gap-2">
            <i class="fa-solid fa-circle-check text-green-600"></i>
            Tiket Berhasil Dibeli
        </h2>

        <div class="border rounded-xl p-4 bg-gradient-to-br from-gray-50 to-gray-100 shadow-inner">

            <p class="text-lg font-bold text-gray-800 mb-2 text-center">E-Ticket Festival</p>

            <div class="space-y-1 text-sm">
                <p><b>Event:</b> <span id="ticketEvent"></span></p>
                <p><b>Lokasi:</b> <span id="ticketLocation"></span></p>
                <p><b>Tanggal:</b> <span id="ticketDate"></span></p>
                <p><b>Waktu:</b> <span id="ticketTime"></span></p>
                <p class="mt-2 text-green-700 font-bold">
                    Kode Tiket: <span id="ticketCode"></span>
                </p>
            </div>

            {{-- QR CODE --}}
            <div class="mt-4 flex flex-col items-center">
                <div id="qrcode" class="p-3 bg-white rounded-xl shadow"></div>
                <p class="text-[13px] text-gray-600 mt-2 italic text-center">
                    Tunjukkan QR Code ini saat hadir di lokasi acara.
                </p>
            </div>

            {{-- NOTIF SUKSES --}}
            <div class="mt-5 bg-green-50 border border-green-200 text-green-800 rounded-lg p-4 text-sm flex gap-3 items-start">
                <i class="fa-solid fa-circle-info text-green-600 text-lg mt-[2px]"></i>
                <p class="text-left">
                    Pembelian tiket Anda telah berhasil dan terdaftar dalam sistem 
                    <span class="font-semibold text-green-700">SuroCultura</span>.  
                    Silakan simpan e-ticket ini dan tunjukkan saat registrasi di lokasi acara.
                </p>
            </div>

        </div>

    </div>
</div>

{{-- ======================= MODAL TIKET SAYA ======================= --}}
<div id="ticketListModal" 
     class="fixed inset-0 modal-blur hidden items-center justify-center z-50">

    <div class="bg-white w-[560px] p-6 rounded-2xl shadow-2xl relative modal-animate">

        {{-- CLOSE BUTTON --}}
        <button onclick="closeTicketList()" 
                class="absolute top-2 right-3 text-red-600 text-2xl hover:text-red-800">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <div id="ticketListContent" class="space-y-4 max-h-[380px] overflow-y-auto p-1"></div>

        {{-- <button onclick="closeTicketList()" 
                class="mt-5 w-full py-2 bg-amber-700 text-white rounded-lg hover:bg-amber-800">
            Tutup
        </button> --}}

    </div>
</div>

{{-- ======================= QR LIBRARY ======================= --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

<script>
function saveTicket(data) {
    let tickets = JSON.parse(localStorage.getItem("tickets") || "[]");

    let existing = tickets.find(t =>
        t.event === data.event &&
        t.location === data.location &&
        t.date === data.date &&
        t.time === data.time
    );

    if (existing) {
        existing.qty += 1;
        data.code = existing.code;  // pakai kode lama
    } else {
        data.qty = 1;
        tickets.push(data);
    }

    localStorage.setItem("tickets", JSON.stringify(tickets));

    return existing ? existing.code : data.code;
}

function openTicketList() {
    const modal   = document.getElementById("ticketListModal");
    const content = document.getElementById("ticketListContent");

    const tickets = JSON.parse(localStorage.getItem("tickets") || "[]");

    content.innerHTML = "";

    if (tickets.length === 0) {
        content.innerHTML = `<p class="text-center text-gray-600">Anda belum membeli tiket apa pun.</p>`;
    } else {
        tickets.forEach((t, index) => {

            let qrId = "qr-small-" + index;

            content.innerHTML += `
                <div class="border rounded-lg p-3 bg-gray-50 shadow-sm flex items-center justify-between">
                    <div>
                        <p><b>Event:</b> ${t.event}</p>
                        <p><b>Lokasi:</b> ${t.location}</p>
                        <p><b>Tanggal:</b> ${t.date}</p>
                        <p><b>Waktu:</b> ${t.time}</p>
                        <p class="mt-1 text-green-700 font-bold">Kode: ${t.code}</p>
                        ${t.qty > 1 ? `<p class="text-sm mt-1"><b>Kuantitas:</b> ${t.qty}</p>` : ``}
                    </div>
                    <div id="${qrId}" class="p-2 bg-white rounded-lg shadow"></div>
                </div>
            `;

            setTimeout(() => {
                new QRCode(document.getElementById(qrId), {
                    text: t.code,
                    width: 60,
                    height: 60
                });
            }, 30);
        });
    }

    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeTicketList() {
    const modal = document.getElementById("ticketListModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

document.addEventListener("DOMContentLoaded", () => {

    const buttons = document.querySelectorAll(".btn-buy-ticket");

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {

            const modal = document.getElementById("ticketModal");

            document.getElementById("ticketEvent").textContent    = btn.dataset.event;
            document.getElementById("ticketLocation").textContent = btn.dataset.location;
            document.getElementById("ticketDate").textContent     = btn.dataset.date;
            document.getElementById("ticketTime").textContent     = btn.dataset.time;

            let generatedCode = "TB-" + Math.floor(100000 + Math.random() * 900000);

            let finalCode = saveTicket({
                event: btn.dataset.event,
                location: btn.dataset.location,
                date: btn.dataset.date,
                time: btn.dataset.time,
                code: generatedCode
            });

            document.getElementById("ticketCode").textContent = finalCode;

            document.getElementById("qrcode").innerHTML = "";
            new QRCode(document.getElementById("qrcode"), {
                text: finalCode,
                width: 140,
                height: 140
            });

            modal.classList.remove("hidden");
            modal.classList.add("flex");
        });
    });
});

function closeTicket() {
    const modal = document.getElementById("ticketModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}
</script>


@endsection
