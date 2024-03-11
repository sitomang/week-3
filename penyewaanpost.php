<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul_buku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $lama_pinjam = $_POST['lama_pinjam'];
    $nama_anggota = $_POST['nama_anggota'];
    $nama_petugas = $_POST['nama_petugas'];

    if ($kategori == "kategori"){
        $tarif_sewa = 10000;
    } else{
        $tarif_sewa = 5000;
    }
    $biaya_sewa = $lama_pinjam * $tarif_sewa;

    echo "Data Berhasil Disimpan:<br>";
    echo "Judul Buku: $judul_buku<br>";
    echo "Kategori: $kategori<br>";
    echo "Tanggal Pinjam: $tanggal_pinjam $bulan $tahun<br>";
    echo "Lama Pinjam: $lama_pinjam hari<br>";
    echo "biaya sewa: $biaya_sewa<br>";
    echo "Nama Anggota: $nama_anggota<br>";
    echo "Nama Petugas: $nama_petugas<br>";
}
?>
<a href="penyewaan.php">Kembali ke Form Penyewaan</a>