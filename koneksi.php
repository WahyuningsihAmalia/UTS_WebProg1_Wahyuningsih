<?php
class koneksi {
    private $server = "localhost";
    private $username = "root";//root
    private $password = "";//""
    private $db = "uts";

    function getKoneksi(){
        return new mysqli($this->server, $this->username,$this->password, $this->db);
    }
}
?>