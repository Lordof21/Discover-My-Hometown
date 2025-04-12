<?php
session_start();
include("../login/connect.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yorumlar</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../Style/style.css" />
</head>
<body>
   <!--! header start-->
   <header class="header ">
      <a href="index.php" class="logo">
        <img src="../Image/silvan_logo.png" alt="silvan_logo" />
      </a>
      <nav class="navbar ">
      
        <a href="index.php" >Ana Sayfa</a>
        <a href="Tarihce.php">Tarihi</a>
        <a href="index.php#bolum">Gezilecek Yerler</a>
        <a href="Yorumlar.php"class="active">yorumlar</a>
        <?php

// Kullanıcı giriş yapmışsa
if (isset($_SESSION['email'])) {
    // Veritabanından çekme işlemi
    $sql = "SELECT firstName, lastName FROM users WHERE email='".$_SESSION['email']."'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        echo "<a href='#'>" . $firstName . " " . $lastName . "</a>";
    } else {
        echo "Kullanıcı bulunamadı.";
    }
} else {
    echo "<a href='../login/index.php'>Giriş/Üye</a>";
}

echo "<a href='../login/logout.php'>Çıkış</a>";
?>
      </nav>
      
      <div class="buttons">
        <button id="search-btn">
          <i class=""></i>
        </button>
        
        <button id="menu-btn">
          <i class="fas fa-bars"></i>
        </button>
      </div>

      <!-- <div class="search-form">
        <input type="text" 
        class="search-input"
        id="search-box"
        placeholder="search here">
        <i class="fas fa-search"></i>
      </div> -->

    </header>
    <!--! header end-->

    <!-- Review Start -->
    <section class="review">
        <h1 class="heading">Yorumlar</h1>
        <div class="box-container">
            <?php
            $sql = "SELECT u.firstName, u.lastName, y.yorum_metni 
                    FROM users u 
                    INNER JOIN yorumlar y ON u.id = y.kullanici_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="box">';
                    echo '<img src="../Image/q2.png" alt="yorum_resmi" />';
                    echo '<p>' . $row['yorum_metni'] . '</p>';
                    echo '<img src="../Image/indiir.jpeg" alt="avatar resmi" class="user" />';
                    echo '<h3>' . $row['firstName'] . ' ' . $row['lastName'] . '</h3>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </section>
    <!-- Review End -->

    <!-- Yorum Formu -->
    <section class="review" id="asdasd">
        <h1 class="heading">Yorum Yap</h1>
        <form method="post" action="Yorumlar.php#asdasd">
            <textarea class="formalite" name="yorum" placeholder="Yorumunuzu buraya yazın..." required style="width:60rem; height: 25rem "></textarea><br>
            <input class="btn" type="submit" name="submitYorum" value="Gönder">
        </form>
    </section>
    <!-- Review End -->
    <?php


if (isset($_POST['submitYorum'])) {
    if (isset($_SESSION['user_id'])) {
        $yorum = $_POST['yorum'];
        $userId = $_SESSION['user_id'];
        $sql = "INSERT INTO yorumlar (kullanici_id, yorum_metni) VALUES ('$userId', '$yorum')";
        if ($conn->query($sql) === TRUE) {
            echo "Yorum başarıyla kaydedildi!";
        } else {
            echo "Hata: " . $conn->error;
        }
    } else {
        echo "Lütfen önce giriş yapın.";
    }
}
?>

    <!-- Footer Start -->
    <section class="footer">
        <p>2024-2025 Tüm Hakları Saklıdır.</p>
        <p>Rojhat G. Tarafından Oluşturuldu.</p>
    </section>
    <!-- Footer End -->

    <script src="../Script/script.js"></script>
</body>
</html>