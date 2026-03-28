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

//Eger qeydiyat ugurlu olsa home acilacaq
if($result->num_rows > 0){

    // Doğrudursa
    header("Location: home.php");
    exit();

}else{

    // Səhv login
    echo "<script>
            alert('Username və ya şifrə yanlışdır!');
            window.history.back();
          </script>";
    exit();

}

?>

