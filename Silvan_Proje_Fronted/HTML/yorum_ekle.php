<?php
session_start();
include "connect.php";

if (isset($_POST['yorum'])) {
    if (isset($_SESSION['user_id'])) {
        $yorum = $_POST['yorum'];
        $userId = $_SESSION['user_id'];

        $sql = "INSERT INTO yorumlar (kullanici_id, yorum_metni) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $userId, $yorum);
        $stmt->execute();
        echo "Yorum başarıyla eklendi.";
    } else {
        echo "Lütfen önce giriş yapın.";
    }
}
?>