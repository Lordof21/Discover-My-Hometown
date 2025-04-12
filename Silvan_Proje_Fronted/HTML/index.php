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
    <title>Silvan Tanıtım</title>
  </head>
  <link rel="stylesheet" href="../Style/style.css" />
  <body>
    <!--! header start-->
    <header class="header ">
      <a href="index.php" class="logo">
        <img src="../Image/silvan_logo.png" alt="silvan_logo" />
      </a>
      <nav class="navbar ">
      
        <a href="index.php" class="active">Ana Sayfa</a>
        <a href="Tarihce.php">Tarihi</a>
        <a href="index.php#bolum">Gezilecek Yerler</a>
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
        <!-- fas fa-search  diğerlerindede bu olacak ama siliğim için gözükmeyecek-->
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
    <!-- Ana Sayfa Start -->
     
    <section class="home">
      <div class="content">
        <h3>TARİHİN İNCİSİ</h3>
        <h3>Silvan</h3>
      </div>
    </section>
    <!-- Ana Sayfa End -->
    <!-- eğer css veya html de kod etkilememişse isimlendirmede hata olabilir -->
    <!-- travel start  -->
    <section class="travel">
      <h1 class="heading" id="bolum">Gezilecek Yerler</h1>
      <div class="box-container">
        <div class="box">
          <div class="box-head">
            <img src="../Image/MK4.jpg" alt="resim" class="hover-to-zoom" />
            <h2>Malabadi Köprüsü</h2>
            <p class="category">
              Batman Nehri üzerinde uzanan; insan, güneş ve aslan kabartmaları
              bulunan, 12. yüzyıldan kalma kemerli taş köprü.
            </p>
          </div>
          <div class="box-bottom">
            <a href="MBK.php" class="btn">Devamı</a>
          </div>
        </div>

        <div class="box">
          <div class="box-head">
            <img src="../Image/HM0.png" alt="resim" class="hover-to-zoom" />
            <h2>Hasuni Antik Kenti</h2>
            <p class="category">
              Tarih öncesi dönemlerden Orta Çağ'a kadar kullanılmış büyüleyici
              bir antik yerleşimdir. Bu mağaralar, 300'den fazla odası ve
              etkileyici kaya kiliseleriyle ziyaretçilerine adeta bir zaman
              yolculuğu sunar
            </p>
          </div>
          <div class="box-bottom">
            <a href="Hasuni.php" class="btn">Devamı</a>
          </div>
        </div>

        <div class="box">
          <div class="box-head">
            <img src="../Image/SEC1.png" alt="resim" class="hover-to-zoom" />
            <h2>Selahaddin-i Eyyübi Camii</h2>
            <p class="category">
              1152-1157 yılları arasında Artuklu Emiri Necmeddin Alpı tarafından
              inşa edilmiş ve 1227 yılında Eyyubiler tarafından onarılmıştır. Bu
              tarihi cami, etkileyici taş işçiliği ve dört farklı mihrabıyla
              dikkat çeker.
            </p>
          </div>
          <div class="box-bottom">
            <a href="Selahaddin.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/KC2.png" alt="resim" class="hover-to-zoom" />
            <h2>Karabehlülbey Camisi</h2>
            <p class="category">
              Bu tarihi cami, kare planlı yapısı, yüksek kasnağa oturtulmuş tek
              kubbesi ve beş gözlü son cemaat yeri ile dikkat çeker.
            </p>
          </div>
          <div class="box-bottom">
            <a href="KaraBC.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/BC.png" alt="resim" class="hover-to-zoom" />
            <h2>Belediye Camisi</h2>
            <p class="category">
              Silvan'daki Belediye Camii, zarif mimarisi ve tarihi dokusuyla
              dikkat çeken bir ibadet yeridir. Caminin etkileyici taş işçiliği
              ve süslemeleri, ziyaretçilere geçmişin izlerini sunar. Geniş
              avlusu ve huzurlu atmosferiyle Belediye Camii, Silvan'da
              keşfedilmeyi bekleyen önemli bir yapıdır.
            </p>
          </div>
          <div class="box-bottom">
            <a href="BelediyeC.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/AE.png" alt="resim" class="hover-to-zoom" />
            <h2>Atatürk Evi Müzesi</h2>
            <p class="category">
              Silvan'daki Atatürk Evi Müzesi, 1916 yılında Kolordu Komutanı
              olarak Silvan'a atanan Mustafa Kemal Atatürk'ün 6 ay boyunca
              ikamet ettiği tarihi bir konaktır. Bu müze, Atatürk'ün Ruslar'ın
              Diyarbakır'a ilerlemesini durdurduğu ve Bitlis ile Muş'u düşman
              işgalinden kurtardığı döneme tanıklık eder.
            </p>
          </div>
          <div class="box-bottom">
            <a href="Atatürk.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/AB.png" alt="resim" class="hover-to-zoom" />
            <h2>Aslanlı Burç</h2>
            <p class="category">
              Silvan'daki Aslanlı Burç, Eyyubi sultanlarından Melik Evhad Eyyub
              tarafından yaptırılmıştır. Kare planlı bu burç, ön yüzündeki gül
              bezeği ve karşılıklı duran aslan kabartmalarıyla dikkat çeker.
            </p>
          </div>
          <div class="box-bottom">
            <a href="Aslan.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/AC.png" alt="resim" class="hover-to-zoom" />
            <h2>Altıbulak Çeşmesi<br />(Kaniya Derge)</h2>
            <p class="category">Yapım tarihi bilinmeyen bir çeşme</p>
          </div>
          <div class="box-bottom">
            <a href="Cesme.php" class="btn">Continue</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/AK.png" alt="resim" class="hover-to-zoom"/>
            <h2>Silvanda Bulunan Tarihi Konaklar</h2>
            <p class="category">
              <b>
                Azizoğlu Konağı <br />
                Ali Ağa Konağı <br />
                Üstünler Konağı <br />
                Gazi İlkokul (Bedri Bey Konağı)
              </b>
            </p>
          </div>
          <div class="box-bottom">
            <a href="Konaklar.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/BK1.png" alt="resim" class="hover-to-zoom" />
            <h2>Boşat Kalesi</h2>
            <p class="category">
              Silvan'ın yakınlarında bulunan tarihi ve doğal güzellikleri bir
              arada sunan bir kale. Özellikle üzerindeki I. Ardeşir kabartması
              ile ünlü. Bu kabartma, atlı bir kral figürü ve bir de ayakta duran
              kişi figürü içeriyor. Roma ve Sasanilerin ortak eseri olan kale,
              tarihi dokusu ve çevresindeki doğasıyla ziyaretçilerini büyülüyor.
            </p>
          </div>
          <div class="box-bottom">
            <a href="Bosat.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/EM1.png" alt="resim" class="hover-to-zoom"/>
            <h2>Eyyübiler Cami Minaresi</h2>
            <p class="category">
              Silvan'daki Eyyübiler Cami Minaresi, 1199-1244 yılları arasında
              inşa edilmiş ve günümüze kadar ayakta kalmayı başarmış etkileyici
              bir yapıdır. Halk arasında <b>"Kırık Minare"</b> olarak bilinen bu
              minare, dört cephesindeki süslü yazıtlar ve 35 metre yüksekliğiyle
              dikkat çeker.
            </p>
          </div>
          <div class="box-bottom">
            <a href="Eyyup.php" class="btn">Devamı</a>
          </div>
        </div>
        <div class="box">
          <div class="box-head">
            <img src="../Image/SM1.png" alt="resim" class="hover-to-zoom" />
            <h2>Sahabe Mescidi</h2>
            <p class="category">
              Mescit, Şeyh Halil Mezarlığı içerisinde bulunur ve İslam
              topraklarına katılan şehit sahabelerden ikisinin mezarını
              barındırır.
            </p>
          </div>
          <div class="box-bottom">
            <a href="Sahabe.php" class="btn">Devamı</a>
          </div>
        </div>
      </div>
    </section>
    <!-- travel end -->
    <!-- Footer Start -->

    <section class="footer">
      <p>2024-2025 Tüm Hakları Saklıdır.</p>

      <p>Rojhat G. Tarafından Oluşturuldu.</p>

      <p style="text-transform: none;">İletişim: silvanTanıtım@gmail.com</p>
    </section>

    <!-- Footer End -->
     <script src="../Script/script.js"></script>
  </body>
</html>
