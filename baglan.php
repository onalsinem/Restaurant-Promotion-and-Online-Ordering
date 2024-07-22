<?php

$server = "localhost";  
$user = "root";  
$password = ""; 
$dbname="bitirme"; 

// Bağlantı Oluşturma
 $baglanti = mysqli_connect($server, $user, $password, $dbname);

// Bağlantıyı kontrol etme
if (!$baglanti) {
  die("Bağlantı Hatası! " . mysqli_connect_error());
 
}
?>