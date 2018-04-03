<h2>Formulir Entry Data</h2>
<hr>
<form action="simpan.php" method="post">
    <table>
        <tr>
            <td>NIM </td>
            <td>: <input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td> : <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td> : <input type="text" name="jurusan"></td>
        </tr>
    </table>
    <input type="submit" value="Simpan">
    <button type="button" onclick="window.location.href='index.php'">Batal</button>
</form>