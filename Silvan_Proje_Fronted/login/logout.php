<?php
session_start();

// Tüm oturum değişkenlerini sil
session_unset();

// Oturum verilerini sil
session_destroy();

// Ana sayfaya yönlendir
header("Location: ../HTML/index.php");
exit();
?>

