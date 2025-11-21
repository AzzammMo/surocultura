@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-8 px-6">

        <a href="/" 
           class="px-3 py-2 bg-gray-700 text-white text-sm font-medium rounded-md shadow hover:bg-gray-900 
                  transition flex items-center gap-1 w-fit mb-6">
            <i class="fa-solid fa-arrow-left text-xs"></i> Kembali
        </a>

    <h1 class="text-3xl font-bold mb-2">Data Cagar Budaya Surabaya — (Sumber: Satu Data Surabaya)</h1>
    <p class="text-sm text-gray-600 mb-6">
        Data diambil dari portal data resmi Surabaya (CKAN). Daftar ini memuat informasi resmi mengenai cagar budaya yang tercatat di Kota Surabaya, 
        termasuk nama objek, alamat, wilayah administrasi, dan lokasi terkait. Data ditampilkan 
        untuk mendukung pelestarian serta akses informasi publik.
    </p>

    

    {{-- SKELETON + PROGRESS --}}
    <div id="skeletonLoader" class="mb-6">
        <div class="flex items-center justify-between mb-3">
            <div class="text-gray-700 font-medium">Mengambil data... <span id="progressNum">0%</span></div>
            <div class="w-1/3 bg-gray-200 rounded overflow-hidden h-3">
                <div id="progressBar" class="h-3 bg-amber-600 w-0"></div>
            </div>
        </div>

        <div class="space-y-3">
            @for ($i = 0; $i < 8; $i++)
            <div class="grid grid-cols-12 gap-3 items-center animate-pulse">
                <div class="col-span-3 h-6 bg-gray-200 rounded"></div>
                <div class="col-span-3 h-6 bg-gray-200 rounded"></div>
                <div class="col-span-2 h-6 bg-gray-200 rounded"></div>
                <div class="col-span-2 h-6 bg-gray-200 rounded"></div>
                <div class="col-span-2 h-6 bg-gray-200 rounded"></div>
            </div>
            @endfor
        </div>
    </div>

    <div id="loading" class="text-gray-700 mb-4">Memuat data cagar budaya... harap tunggu.</div>

    <div class="overflow-x-auto bg-white rounded-lg shadow">
        <table id="tabelData" class="hidden min-w-full border-collapse">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="p-3 border">Nama</th>
                    <th class="p-3 border">Alamat</th>
                    <th class="p-3 border">Kecamatan</th>
                    <th class="p-3 border">Kelurahan</th>
                    <th class="p-3 border">Koordinat</th>
                    <th class="p-3 border">Jarak</th>
                    <th class="p-3 border">Estimasi</th>
                    <th class="p-3 border">Aksi</th>
                </tr>
            </thead>
            <tbody id="dataBody" class="text-gray-700"></tbody>
        </table>
    </div>

    <div id="pagination" class="mt-6"></div>

</div>

<style>
/* optional small polish */
#tabelData td, #tabelData th { vertical-align: middle; }
</style>

<script>
/*
 CKAN JSONP + CACHE + GEOCODE + PAGINATION + FULL PAGE PERSISTENCE
*/

const CKAN_JSONP_URL_BASE = "https://ckan.surabaya.go.id/id/api/3/action/datastore_search";
const RESOURCE_ID = "3fc61201-ca94-4825-9f50-6b6b92520981";
const CKAN_JSONP_URL = `${CKAN_JSONP_URL_BASE}?resource_id=${RESOURCE_ID}&limit=1000&callback=handleCKAN`;

const RAW_DATA_CACHE = "cagar_ckan_raw_v1";
const GLOBAL_CACHE = "cagar_ckan_global_records";
const GEOCACHE_KEY = "cagar_geocode_cache_v1";

let geocache = JSON.parse(localStorage.getItem(GEOCACHE_KEY) || "{}");
let GLOBAL_RECORDS = [];
let CURRENT_PAGE = 1;
let USER_LOCATION = null;

const PER_PAGE = 10;

// UI helpers
function setProgress(p){ 
    const val = Math.min(100, Math.max(0, Math.round(p)));
    document.getElementById('progressNum').innerText = `${val}%`;
    document.getElementById('progressBar').style.width = `${val}%`;
}

function showLoadingText(t){ 
    document.getElementById('loading').innerText = t; 
}

// JSONP Loader
function loadJSONP(url, timeout = 6000){
    return new Promise((resolve, reject)=>{
        const cb = 'jsonp_' + Math.random().toString(36).slice(2);
        window[cb] = data => { cleanup(); resolve(data); };

        const script = document.createElement('script');
        script.src = url.replace(/callback=.*/, `callback=${cb}`);
        script.async = true;

        let done = false;

        function cleanup(){
            if(done) return;
            done = true;
            delete window[cb];
            script.remove();
            clearTimeout(timer);
        }

        script.onerror = () => { cleanup(); reject("error"); };
        document.body.appendChild(script);

        const timer = setTimeout(() => { cleanup(); reject("timeout"); }, timeout);
    });
}

// Geocode
async function geocodeAddress(addr){
    if(!addr) return null;
    if(geocache[addr]) return geocache[addr];

    try{
        const url = `https://nominatim.openstreetmap.org/search?q=${encodeURIComponent(addr+' Surabaya')}&format=json&limit=1`;
        const res = await fetch(url, { headers: { "Accept":"application/json" }});
        const js = await res.json();
        if(js && js.length > 0){
            geocache[addr] = { lat:+js[0].lat, lon:+js[0].lon };
            localStorage.setItem(GEOCACHE_KEY, JSON.stringify(geocache));
            return geocache[addr];
        }
    }catch{}
    return null;
}

// Haversine
function haversineKm(a,b,c,d){
    const R = 6371;
    const toRad = x=>x*Math.PI/180;
    const dLat = toRad(c-a);
    const dLon = toRad(d-b);
    const A = Math.sin(dLat/2)**2 + Math.cos(toRad(a))*Math.cos(toRad(c))*Math.sin(dLon/2)**2;
    return R * (2 * Math.atan2(Math.sqrt(A), Math.sqrt(1-A)));
}

// Render Tabel
function renderTable(){
    const tbody = document.getElementById('dataBody');
    tbody.innerHTML = '';

    const start = (CURRENT_PAGE-1) * PER_PAGE;
    const page = GLOBAL_RECORDS.slice(start, start + PER_PAGE);

    page.forEach(rec=>{
        const name =
            rec.item["Nama bangunan cagar budaya yang ditetapkan"] ||
            rec.item.nama ||
            rec.item.Nama ||
            "(Tanpa Nama)";

        const id = btoa(name).substring(0,8);

        const coords = rec.coords 
            ? `${rec.coords.lat.toFixed(6)}, ${rec.coords.lon.toFixed(6)}`
            : '-';

        tbody.insertAdjacentHTML('beforeend', `
            <tr class="border">
                <td class="p-3 border">${name}</td>
                <td class="p-3 border">${rec.item.Alamat || '-'}</td>
                <td class="p-3 border">${rec.item.Kecamatan || '-'}</td>
                <td class="p-3 border">${rec.item.Kelurahan || '-'}</td>
                <td class="p-3 border">${coords}</td>
                <td class="p-3 border">-</td>
                <td class="p-3 border">-</td>
                <td class="p-3 border">
                    <button onclick="openRoute('${id}')" class="px-3 py-1 bg-amber-600 text-white rounded">Rute</button>
                </td>
            </tr>
        `);
    });

    renderPagination();
}

// Pagination
function renderPagination(){
    const total = GLOBAL_RECORDS.length;
    const pages = Math.ceil(total / PER_PAGE);
    const el = document.getElementById('pagination');

    el.innerHTML = `
        <div class="flex justify-center gap-4">
            <button ${CURRENT_PAGE===1?'disabled':''}
                onclick="CURRENT_PAGE--;renderTable()" 
                class="px-3 py-1 border rounded">Prev</button>

            <span>Halaman ${CURRENT_PAGE} / ${pages}</span>

            <button ${CURRENT_PAGE===pages?'disabled':''}
                onclick="CURRENT_PAGE++;renderTable()" 
                class="px-3 py-1 border rounded">Next</button>
        </div>
    `;
}

// Save Cache
function saveGlobalRecords(){
    localStorage.setItem(GLOBAL_CACHE, JSON.stringify(GLOBAL_RECORDS));
}

// Try load cache
function tryLoadGlobalCache(){
    const c = localStorage.getItem(GLOBAL_CACHE);
    if(!c) return false;

    try{
        GLOBAL_RECORDS = JSON.parse(c);

        document.getElementById('skeletonLoader').classList.add('hidden');
        document.getElementById('loading').classList.add('hidden');
        document.getElementById('tabelData').classList.remove('hidden');

        renderTable();
        return true;

    }catch{
        return false;
    }
}

// MAIN
async function start(){
    // Cek cache global
    if(tryLoadGlobalCache()) return;

    // Jika tidak ada cache → fetch CKAN
    document.getElementById('skeletonLoader').classList.remove('hidden');
    setProgress(5);
    showLoadingText("Mengambil data CKAN...");

    let records = [];

    try{
        const data = await loadJSONP(CKAN_JSONP_URL, 6000);
        records = data?.result?.records || [];
        localStorage.setItem(RAW_DATA_CACHE, JSON.stringify(records));
    }catch{
        const raw = localStorage.getItem(RAW_DATA_CACHE);
        if(raw) records = JSON.parse(raw);
    }

    GLOBAL_RECORDS = [];

    // PROSES DATA
    for(let i=0; i<records.length; i++){
        const it = records[i];

        const name =
            it["Nama bangunan cagar budaya yang ditetapkan"] ||
            it.nama || it.Nama || "(Tanpa Nama)";

        // tampilkan nama saat memuat
        showLoadingText(`Mengambil data… ${name}`);

        const addr = it.Alamat || "";
        let coords = null;

        if(it.geom){
            const m = it.geom.match(/(-?\d+\.\d+)[ ,]+(-?\d+\.\d+)/);
            if(m) coords = { lat:+m[1], lon:+m[2] };
        }

        if(!coords && addr){
            coords = await geocodeAddress(addr);
            await new Promise(r=>setTimeout(r, 700));
        }

        GLOBAL_RECORDS.push({ item: it, coords });

        setProgress(((i+1)/records.length)*100);
    }

    saveGlobalRecords();

    document.getElementById('skeletonLoader').classList.add('hidden');
    document.getElementById('loading').classList.add('hidden');
    document.getElementById('tabelData').classList.remove('hidden');

    renderTable();
}

start();

// Dapatkan lokasi user
function detectLocation(){
    return new Promise((resolve)=>{
        if(!navigator.geolocation) return resolve(null);

        navigator.geolocation.getCurrentPosition(
            pos=>{
                USER_LOCATION = {
                    lat: pos.coords.latitude,
                    lon: pos.coords.longitude
                };
                resolve(USER_LOCATION);
            },
            ()=> resolve(null),
            { enableHighAccuracy:true, timeout:5000 }
        );
    });
}

// Hitung estimasi waktu (kecepatan rata2 40 km/jam)
function estimateTime(distanceKm){
    if(!distanceKm || distanceKm===0) return "-";
    const minutes = Math.round((distanceKm / 40) * 60);
    return `${minutes} menit`;
}

// Update tabel dengan jarak & waktu (setelah lokasi didapat)
function updateDistanceTime(){
    if(!USER_LOCATION) return;

    GLOBAL_RECORDS = GLOBAL_RECORDS.map(rec=>{
        if(!rec.coords){
            return { ...rec, jarak: "-", waktu: "-" };
        }

        const km = haversineKm(
            USER_LOCATION.lat, USER_LOCATION.lon,
            rec.coords.lat, rec.coords.lon
        );

        return {
            ...rec,
            jarak: km.toFixed(2) + " km",
            waktu: estimateTime(km)
        };
    });

    renderTable();
}

// Override renderTable agar menampilkan jarak + waktu
const _oldRenderTable = renderTable;
renderTable = function(){
    const tbody = document.getElementById('dataBody');
    tbody.innerHTML = '';

    const start = (CURRENT_PAGE-1) * PER_PAGE;
    const page = GLOBAL_RECORDS.slice(start, start + PER_PAGE);

    page.forEach(rec=>{
        const name =
            rec.item["Nama bangunan cagar budaya yang ditetapkan"] ||
            rec.item.nama ||
            rec.item.Nama ||
            "(Tanpa Nama)";

        const id = btoa(name).substring(0,8);

        const coords = rec.coords 
            ? `${rec.coords.lat.toFixed(6)}, ${rec.coords.lon.toFixed(6)}`
            : '-';

        tbody.insertAdjacentHTML('beforeend', `
            <tr class="border">
                <td class="p-3 border">${name}</td>
                <td class="p-3 border">${rec.item.Alamat || '-'}</td>
                <td class="p-3 border">${rec.item.Kecamatan || '-'}</td>
                <td class="p-3 border">${rec.item.Kelurahan || '-'}</td>
                <td class="p-3 border">${coords}</td>
                <td class="p-3 border">${rec.jarak || '-'}</td>
                <td class="p-3 border">${rec.waktu || '-'}</td>
                <td class="p-3 border">
                    <button onclick="openRoute('${id}')" class="px-3 py-1 bg-amber-600 text-white rounded">Rute</button>
                </td>
            </tr>
        `);
    });

    renderPagination();
};

// Fungsi buka rute Google Maps
function openRoute(id){
    const target = GLOBAL_RECORDS.find(r=> btoa(
        r.item["Nama bangunan cagar budaya yang ditetapkan"] ||
        r.item.nama || r.item.Nama || "(Tanpa Nama)"
    ).substring(0,8) === id);

    if(!target || !target.coords){
        alert("Koordinat tujuan tidak tersedia.");
        return;
    }

    if(!USER_LOCATION){
        alert("Lokasi Anda belum terdeteksi.");
        return;
    }

    const url = `https://www.google.com/maps/dir/${USER_LOCATION.lat},${USER_LOCATION.lon}/${target.coords.lat},${target.coords.lon}`;
    window.open(url, "_blank");
}

// Jalankan deteksi lokasi setelah data siap
document.addEventListener("DOMContentLoaded", async ()=>{
    const loc = await detectLocation();
    if(loc) updateDistanceTime();
});
</script>

@endsection
