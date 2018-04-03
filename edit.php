<h2>Form Edit Data</h2>
<hr>
<?php
include "koneksi.php";

    $konkesiObj = new koneksi();
    $koneksi = $konkesiObj->getKoneksi();
            
            
    if($koneksi->connect_error) {
        echo "Gagal Koneksi : " . $koneksi->connect_error;
    }
    $query = "select * from data_mahasiswa where nim='" . $_GET["nim"] . "'";
    $data = $koneksi->query($query);

    if($data->num_rows <=0){
      echo "Data tidak ada";
    } else { 
       while($row = $data->fetch_assoc()){
            $nama = $row["nama"];
            $jurusan = $row["jurusan"];
       }
    }
?>
<form action="update.php" method="post">
    <table>
        <tr>
            <td>NIM </td>
            <td>: <input type="text" name="nim" readonly="true"
                    value="<?php echo $_GET["nim"];?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td> : <input type="text" name="nama" 
                    value="<?php echo $nama;?>" ></td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td> : <input type="text" name="jurusan"
                    value="<?php echo $jurusan;?>" ></td>
        </tr>
    </table>
    <input type="submit" value="Simpan">
</form>