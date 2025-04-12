<?php
include "connect.php";

$sql = "SELECT u.ad, u.soyad, y.yorum, y.olusturma_tarihi FROM users u
        INNER JOIN yorumlar y ON u.id = y.kullanici_id
        ORDER BY y.olusturma_tarihi DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<div class='yorum'>";
    echo "<b>" . $row['ad'] . " " . $row['soyad'] . "</b> - " . $row['olusturma_tarihi'] . "<br>";
    echo $row['yorum'];
    echo "</div>";
}
?>