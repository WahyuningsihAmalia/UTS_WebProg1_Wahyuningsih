<?php


include "koneksi.php";

$konkesiObj = new koneksi();
$koneksi = $konkesiObj->getKoneksi();
        
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

if($koneksi->connect_error) {
    echo "Gagal Koneksi : " . $koneksi->connect_error;
}

$query = "update data_mahasiswa set nama='$nama', jurusan='$jurusan' where nim='$nim'";

if($koneksi->query($query)===true){
    echo "<br>Data ". $nama .' berhasil diupdate';
} else{
    echo "<br> Data gagal diupdate";
    
}
echo "<br>";
echo "<a href='index.php'>Kembali ke Halaman Utama</a>";


?>