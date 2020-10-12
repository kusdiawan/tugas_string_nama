<?php
$nama = "Wawan Kusdiawan";
$acak = rand(1, 100);
$kata = explode(" ", $nama);
echo "<br>";
//mengambil array
echo "<br> Nama : ", $nama;
echo "<br> Kode User : ", $kata[0], $acak, $kata[1] ; 

?>