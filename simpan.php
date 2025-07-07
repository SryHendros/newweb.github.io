<?php
$koneksi = mysqli_connect("localhost", "root", "", "pesan");

// Ambil data dari form
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
// Tentukan keterangan
if ($produk == "Laptop" && $jumlah >= 5) {
    $keterangan = "Butuh konfirmasi";
} else {
    $keterangan = "Langsung diproses";
}

// Simpan ke database
$sql = "INSERT INTO pesanan (nama, telepon, produk, jumlah, keterangan) 
            VALUES ('$nama', '$telepon', '$produk', '$jumlah', '$keterangan')";

    if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan. <a href='tabel.php'>Lihat Pesanan</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>