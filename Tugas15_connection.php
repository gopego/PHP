<?php
class Connection{
    public function konek(){
        $conn=mysqli_connect("localhost", "root", "","toko2");
        return $conn;
    }
    public function ambilbarang(){
        return "select * from barang";
    }
    public function hasilbarang ($conn, $perintah){
        return mysqli_query($conn,$perintah);
    }
        
}

?>
