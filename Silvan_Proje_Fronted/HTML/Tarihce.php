<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tarihçe</title>
    <link rel="stylesheet" href="../Style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <!--! header start-->
    <header class="header ">
      <a href="index.php" class="logo">
        <img src="../Image/silvan_logo.png" alt="silvan_logo" />
      </a>
      <nav class="navbar ">
      
        <a href="index.php" >Ana Sayfa</a>
        <a href="Tarihce.php"class="active">Tarihi</a>
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
      <h1 class="heading">Tarihçesi</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/S.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Asurlar Zamanında kurulmuş olduğu söylenen Silvan; Diyarbakır ile
            ortak bir geçmişe sahiptir. Büyük Tigran tarafından kurulan
            Tigranokerta olarak bilinen Silvan, Helenistik Çağın en büyük ve en
            önemli kentlerinin başında gelmektedir.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/AK.png" alt="about" />
        </div>
        <div class="content">
          <p>
            M.S 410 yılında Mar Marutha tarafından İran hükümdarı II. Şapur
            tarafından katledilen Hıristiyan askerleri arasında 'Kırklar' diye
            bilinen 40 Hıristiyan şehidinin kemiklerinin büyük bir merasimle
            getirtip inşa ettirttiği kalede yapılan kemerlere bu kemikleri
            gömdüğü için Bizanslılar şehre Matryropolis (Şehitler Şehri) adını
            vermişlerdir. 6. yy'da Bizans İmparatoru Justinanus'un Silvan
            Kalesini güçlendirip bu kale şehre kendi adını vererek,
            Justinianopolois'i Perslere karşı çok önemli bir garnizon olarak
            kullandı.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/AB2.png" alt="about" />
        </div>
        <div class="content">
          <p>
            639 senesinde, Hz.Ömer döneminde, Iyaz Bin Ganm tarafından
            Bizanslıların idaresindeki Silvan fethedilir. Sonraki dönemlerde
            Hamdaniler (980-984), Mervaniler (984-1085), Büyük Selçuklu
            İmparatorluğu - Artuklu Beyliği (1118), Eyyubiler, Anadolu
            Selçuklular'ın idaresinde kalan Silvan 1259 yılında Hulagu
            önderliğindeki Moğollar tarafından zapt edilip, harabeye
            çevirilmiştir. Daha sonra İlhanlılar, Akkoyunlular (1375'e kadar),
            Karakoyunlular, Timur Döneminde ise (1397-1506) Silvan tekrar
            Akkoyunlulara veriliyor.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/EM1.png" alt="about" />
        </div>
        <div class="content">
          <p>
            1506'da Safevilerin idaresine geçen Silvan, 1514 Çaldıran
            Savaşı'ndan sonra 1524 senesinde Osmanlı Devleti'nin idaresine
            geçmiştir. İslamiyet döneminde de Ortaçağ'ın en parlak kentlerinden
            biri olması, Meyyefarkin adıyla Mervani Devleti'nin başkenti,
            Artuklu Devleti'nin ikinci başkenti, Eyyubilerin ana merkezi olması
            Silvan'ın tarihte önemli bir rol almasına sebep olmuştur. Mipherket,
            Muhargin, Farkin, Sliv, Sıliva ve bugünkü adıyla Silvan, 1873
            yılında ilçe merkezi olarak Diyarbakır'a bağlanan en büyük
            ilçelerden biri olmuştur.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/UK.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Atatürk, Silvan'da bulunan 16. Kolordu Karargahı'na, 14 Nisan
            1916'da Mirliva (General) olarak terfi etmiştir. Burada görev
            yaptığı sırada verdiği taarruz emri ile 7 Ağustos'ta Muş, 8
            Ağustos'ta da Bitlis, Rusların elinden geri alınır. Atatürk'ün,
            Silvan'da kaldığı dönemlerde Sadık Üstün'e göndermiş olduğu
            mektupları, hala bu aile tarafından muhafaza edilmektedir.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/HM0.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Silvan sahip olduğu tarihle eşdeğer önemli tarihi eserlere sahiptir.
            Surlarla çevrili kalesi ve burçlarıyla yüksekliği 25 metreyi geçen
            ve dünyada dolgu sistemiyle yapılan tek kale-şehir olması; efsane
            aşka konu olan Zembilfroş Burcu, dünyanın en geniş taş kemerli
            köprüsü olan Malabadi Köprüsü, Kemuk Köprüsü(baraj altında kaldı);
            Bizans bazilikanı sütunlarında kullanmak suretiyle yapılan ve
            bölgenin büyük camilerinden olan Selahattin-i Eyyubi Camii(Ulu
            Camii), Karabehlülbey Camii, Kıldan Kilisesi(Belediye Camii), Eyyubi
            Camii(Kırık Minare), Boşat Kalesi, Helda Kalesi, Şemak Kalesi
            kalıntıları, Roma Eseri olan Başıka Kalesi; yine ilçe merkezinde
            bulunan Atatürk Evi Müzesi, Üstünler Konağı, Azizoğulları Konağı,
            çeşmeler, türbeler; Temtemburg ve Hemido Mağarası, Paleolitik çağdan
            kalma buluntuların olduğu ve Ortaçağ'da Hıristiyanlar tarafından
            iskan edilen , birbirine koridorlarla bağlı 300 adet odadan oluşan
            ve kapladığı alan itibariyle dünyada emsal teşkil eden Hasuni
            Mağaraları ve Hasuni Kilisesi; çok önemli tarihi miraslarımızdandır.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/KC2.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Bu Kale-Şehir, tarihin bütün dönemlerinde ayrı bir önem ve zenginlik
            kazanmıştır. Ayrıca Malabadi Köprüsü yakınlarında, Silvan-Kozluk
            İlçe (Batman ili sınırlarında yer alan) sınırlarında bulunan ve
            Anadolu'nun ilk yerleşim yerlerinden olan Hallan Çemi Höyüğü'ndeki
            Neolitik Dönemden kalma buluntular da , Silvan'ın ve bölgenin tarihi
            geçmişine ışık tutmaktadır.
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
