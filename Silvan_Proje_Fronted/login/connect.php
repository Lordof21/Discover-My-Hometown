
<?php
$host="localhost"; // Veritabanı sunucu adı
$user="root"; // Veritabanı kullanıcı adı
$pass=""; // Veritabanı şifresi
$db="login"; // Veritabanı adı
$conn=new mysqli($host,$user,$pass,$db, 3306); // Veritabanına bağlantı kurma
if($conn->connect_error){
    echo "Veritabanına bağlanılamadı: ".$conn->connect_error;
}
?>