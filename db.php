<?php
// MySQL serverine qosuluruq
// "localhost" -> server unvani
// "root" -> istifadeci adi
// "" -> sifre (sende bosdur)
// "user_system" -> qosulacagimiz verilenler bazasinin adi
$conn = new mysqli("localhost","root","","user_system");
// Eger qosulma zamani xeta olarsa
// connect_error avtomatik olaraq xetani saxlayir
if($conn->connect_error){
// Sayti dayandirir ve xetani ekranda gosterir
die("Connection failed: " . $conn->connect_error);
}

?>