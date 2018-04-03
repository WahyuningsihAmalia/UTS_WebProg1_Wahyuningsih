<h2>Formulir Hapus Data</h2>
<hr>
<?php
include "koneksi.php";

    $konkesiObj = new koneksi();
    $koneksi = $konkesiObj->getKoneksi();
            
            
    if($koneksi->connect_error) {
        echo "Gagal Koneksi : " . $koneksi->connect_error;
    }
    $query = "delete from data_mahasiswa where nim='" .
            $_GET["nim"] . "'";
    $data = $koneksi->query($query);

    if($koneksi->query($query)===true){
        echo "<br>Data ". $_GET["nim"] . 
            'berhasil dihapus';
    } else{
        echo "<br> Data gagal dihapus";
        
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";

   
?>