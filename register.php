<?php
include "db.php";

$username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username,email,password)
VALUES ('$username','$email','$password')";

// if($conn->query($sql)){
// echo "Register ugurlu oldu";
// }else{
// echo "Xeta bas verdi";
// }

if(isset($_POST['signup'])){
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Emailin bazada olub-olmadigini yoxlayiriq
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);

    if($result->num_rows > 0) {
        // Eger email tapilsa, xetani Fatal Error kimi yox, Alert kimi veririk
        echo "<script>
                alert('Bu email artıq qeydiyyatdan keçib! Zəhmət olmasa başqa email istifadə edin.');
                window.history.back(); // İstifadəçini geri - qeydiyyat səhifəsinə qaytarır
              </script>";
        exit(); // Kodun davam etmesini (yeni INSERT hissisini) dayandirir
    } else {
        // 2. Eger email yoxdursa, INSERT emeliyyatini indi icra edirik
        $insertQuery = "INSERT INTO users (username, email, password) 
                        VALUES ('$username', '$email', '$password')";
        
        if($conn->query($insertQuery) === TRUE){
            echo "<script>
                    alert('Qeydiyyat uğurla tamamlandı!');
                    window.location.href='index.html'; 
                  </script>";
        } else {
            // Ekrana xtani alert formasinda cixaririq
            echo "<script>
                    alert('Sistem xətası: " . addslashes($conn->error) . "');
                    window.history.back();
                </script>";
        }
    }
}
?>