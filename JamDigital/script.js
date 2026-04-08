/* JamDigital/script.js */

// Daftar nama hari dalam Bahasa Indonesia
const namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

// Daftar nama bulan dalam Bahasa Indonesia
const namaBulan = [
  'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];

function updateJam() {
    const sekarang = new Date();
    
    // --- MENDAPATKAN WAKTU ---
    let jam = sekarang.getHours();
    let menit = sekarang.getMinutes();
    let detik = sekarang.getSeconds();
    
    // Menambahkan angka '0' di depan jika angka satuan
    jam = jam < 10 ? '0' + jam : jam;
    menit = menit < 10 ? '0' + menit : menit;
    detik = detik < 10 ? '0' + detik : detik;
    
    // Menampilkan format HH:MM:SS
    const formatWaktu = jam + ' : ' + menit + ' : ' + detik;
    
    // Memperbarui elemen HTML Waktu
    document.getElementById('jam').innerText = formatWaktu;
    
    // --- MENDAPATKAN HARI & TANGGAL ---
    const hari = namaHari[sekarang.getDay()]; // Mendapatkan nama hari
    const tanggal = sekarang.getDate(); // Mendapatkan tanggal
    const bulan = namaBulan[sekarang.getMonth()]; // Mendapatkan nama bulan
    const tahun = sekarang.getFullYear(); // Mendapatkan tahun
    
    // Menampilkan format Hari, Tanggal Bulan Tahun
    const formatHariTanggal = hari + ', ' + tanggal + ' ' + bulan + ' ' + tahun;
    
    // Memperbarui elemen HTML Hari & Tanggal
    document.getElementById('hari-tanggal').innerText = formatHariTanggal;
}

// Menjalankan fungsi updateJam setiap 1 detik
setInterval(updateJam, 1000);

// Menjalankan fungsi sekali saat halaman pertama kali dimuat agar jam langsung muncul
updateJam();