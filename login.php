<?php

// db.php faylini daxil edirik (database ile elaqe burada qurulub)
include "db.php";


// Formdan gelen melumatlari gotururuk
$username = $_POST['Username'];
$password = $_POST['password'];


// 1. Sorgunu sablon kimi hazirlayiriq (deyisenlerin yerinde ? isaresi var)
$stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");


// 2. Melumatlari tehlukesiz sekilde baglayiriq
// "ss" -> iki dene string demekdir (username ve password)
$stmt->bind_param("ss", $username, $password);


// 3. Sorgunu icra edirik
$stmt->execute();
$result = $stmt->get_result();


// Eger bazada bu istifadeci varsa
if($result->num_rows > 0){

// Istifadeci login oldu ve home sehifesine kecir
header("Location: home.php");
exit();

}else{

// Eger username ve ya password sehvdirse fix.html sehifesine yonlendirir
header( "Location: fix.html");

}

?>

