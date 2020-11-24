<?php
    function hitungharga($panjang) {
        if ($panjang <= 10){
          return 300*$panjang;
        }
        elseif ($panjang <= 20){
          return 500*$panjang;
        } 
        else{
        return $panjang * 700;
        }
    }
    $nama="Yosua Rori Hasudungan";
    echo "Nama: ".$nama;
    echo "<br>";
    echo "Harga bet = ";
    echo hitungharga(strlen($nama));
?>