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
    <title>Karabehlülbey Camii</title>
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
      <h1 class="heading">Karabehlülbey Camisi</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/KC00.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Silvan şehir merkezinde aynı adı taşıyan cadde üzerindedir. Mervani
            Şehir mezarlığına bitişik olup Ulu Caminin 500 metre kuzeyindedir.
            Caminin önünde, yakın zamanlarda yeniden düzenlendiği anlaşılan üç
            kenarı revaklı geniş bir avlusu vardır. Dış duvarlarının tamamı bej
            renkli kesme taşlarla kaplanmıştır. Son cemaat yerini ayakta tutan
            ahşap çatıyı altı adet taş sütun ayakta tutmaktadır. Taç kapının
            kırık kemerli bir tonoz parçası ile örtülü bir nişi vardır. Ana
            nişin köşelerinde üzerleri geometrik örneklerle süslü iki gömme
            sütuncuk görülmektedir. Yapının herhangi bir yerinde inşa kitabesi
            yoktur. Avlu revaklarının kuzey kanadındaki kufi kitabe başka bir
            yapıdan taşınmıştır. Caminin XVI.yy.da Diyarbakır valisi İskender
            paşa mahiyetinde bulunan Silvanlı Şeyh Ahmet zade Elvend Bey’in oğlu
            Karabehlül Bey tarafından yaptırılmıştır.
          </p>
        </div>
      </div>
    </section>

    <!-- about end -->


    <!-- Contact Start-->
    <section class="contact">
      <h1 class="heading">Haritalar</h1>
      <div class="harita">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12551.315925246598!2d40.994580711805!3d38.144169427867105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a937f2f40c19%3A0x1a9f17c35c65c1e8!2sKarabehl%C3%BClbey%20Cami!5e0!3m2!1str!2snl!4v1734887133908!5m2!1str!2snl" 
          width="810"
          height="450"
          style="border: 0"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <!-- Contact End-->

    <!-- Footer Start -->

    <section class="footer">
      <p>2024-2025 Tüm Hakları Saklıdır.</p>

      <p>Rojhat G. Tarafından Oluşturuldu.</p>
    </section>

    <!-- Footer End -->
    <script src="../Script/script.js"></script>
  </body>
</html>
