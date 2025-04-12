<?php 
include 'connect.php'; // Bağlantı dosyasını dahil etme

if(isset($_POST['signUp'])){ // Kayıt formu gönderilmişse
    // Formdan gelen verileri al
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); // Şifreyi MD5 ile hashle (güvenlik için)

    // E-posta adresinin daha önce kullanılıp kullanılmadığını kontrol et
    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Bu e-posta adresi zaten kullanılıyor!";
    } else {
        // Yeni kullanıcıyı veritabanına ekle
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                      VALUES ('$firstName','$lastName','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: index.php"); // Kayıt işlemi başarılıysa ana sayfaya yönlendir
        } else {
            echo "Hata:".$conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password);
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['user_id']=$row['id']; // user_id'yi ayarla
    $_SESSION['email']=$row['email'];
    header("Location: ../HTML/index.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }
}
?>