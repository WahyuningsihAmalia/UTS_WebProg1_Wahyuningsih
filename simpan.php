<?php
include "koneksi.php";

$konkesiObj = new koneksi();
$koneksi = $konkesiObj->getKoneksi();


if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
}else {
    echo "Sambungan basis data berhasil";
}
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$jurusan = $_POST["jurusan"];


$query = "insert into data_mahasiswa values('$nim','$nama','$jurusan')";


if($koneksi->query($query) == true){
    echo "<br> Data" . $_POST["nama"] . "berhasil disimpin" . ' <a href="index.php">Lihat Data</a>';
}else {
    echo "<br> Data Gagal disimpan";
}

$koneksi->close();
?>