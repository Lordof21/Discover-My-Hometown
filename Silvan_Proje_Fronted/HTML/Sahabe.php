<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Sahabe Mescidi</title>
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
        <a href="index.php#bolum"class="active">Gezilecek Yerler</a>
        <a href="Yorumlar.php">yorumlar</a>
        <?php
session_start();
include("../login/connect.php");

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
    <!-- about start -->
    <section class="about">
      <h1 class="heading">Sahabe Mescidi</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/SM1.png" alt="about" />
        </div>

        <div class="content">
          <p>
            Hz. Ömer döneminde yaptırılan <b> Anadolu'nun ilk mescidi</b> Şeyh
            Halil Mezarlığı içerisinde bulunuyor. Silvan'ı İslam topraklarına
            katan şehit Sahabeler’den iki tanesinin mezarının da bulunduğu
            manevi yapıdır. Mescidin Silvan'a Kur'an-ı Kerim'i öğretmek amacıyla
            bırakılan sahabenin yaptığı eser olduğunu, "Vakıdi'nin 'Fütuhul
            Cezire ve Habur, Diyarbekir ve Irak' isimli eserini incelediğimizde
            'Babbet b. Adiy, Hakim bin Hişam ve 10 arkadaşını mescitleri onarmak
            ve Kur'an-ı Kerim'i öğretmek için kalıyorlar.
          </p>
        </div>
      </div>
    </section>

    <!-- about end -->

    <!-- Review Start-->
    <!-- <section class="review">
      <h1 class="heading">Yorumlar</h1>
      <div class="box-container">
        <div class="box">
          <img src="../Image/q2.png" alt="yorum_resmi" />
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique,
            voluptatibus!
          </p>
          <img src="../Image/indiir.jpeg" alt="avatar resmi" class="user" />
          <h3>Rojhat Gülük</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="box">
          <img src="../Image/q2.png" alt="yorum_resmi" />
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique,
            voluptatibus!
          </p>
          <img src="../Image/indiir.jpeg" alt="avatar resmi" class="user" />
          <h3>Rojhat Gülük 2</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="box">
          <img src="../Image/q2.png" alt="yorum_resmi" />
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique,
            voluptatibus!
          </p>
          <img src="../Image/indiir.jpeg" alt="avatar resmi" class="user" />
          <h3>Rojhat Gülük 3</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Review End-->


    <!-- Footer Start -->

    <section class="footer">
      <p>2024-2025 Tüm Hakları Saklıdır.</p>

      <p>Rojhat G. Tarafından Oluşturuldu.</p>
    </section>

    <!-- Footer End -->
    <script src="../Script/script.js"></script>
  </body>
</html>
