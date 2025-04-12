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
    <title>Hasuni Antik Kenti</title>
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
      <h1 class="heading">Hasuni Antik Kenti</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/HM4.png" alt="about" />
        </div>
        <div class="content">
          <p>
            İlçemizde bulunan Hasuni Mağaraları, Anadolu'nun en eski mağara
            yerleşim yerlerinden biri olarak biliniyor. Hasuni Mağaraları,
            ilçemizin 6 kilometre doğusundaki uluslararası yol güzergahında yer
            alıyor. Albat Dağı'nın güney eteklerindeki Hasuni Vadisi'nde
            kurulmuş olan antik şehir, Silvan Ovası'na hâkim bir noktada
            bulunuyor. Hasuni Mağaraları, arkeolojik değere sahiptir ve tarihi,
            mezolitik döneme kadar gidiyor. Yontma taş devri olarak bilinen bu
            dönemde insanlar, yerleşik hayata geçmiş, kendilerini korumak ve
            avlanmak için taşları yontmaya başlamışlardır. Hasuni de bu dönemde
            kurulmuştur.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <p>
            Yekpare kaya parçaları üzerine oyularak yapılmış irili ufaklı 300
            odadan oluşan ve bir kaleyi andıran Hasuni Mağaraları, kapladığı
            alan ve mağara sayısı itibariyle Anadolu'da emsal teşkil etmektedir.
            Bir kaya kilisesi olmak üzere iki kiliseye sahip olan Hasuni
            Mağaraları, koridorlarla birbirine bağlıdır. Mağaralarda sarnıçlar,
            taştan oyma su depoları ve su kanalları yer almaktadır. Kaya
            şehrinin en zirve noktasında ise uzun bir taş merdivenle çıkılan ve
            adak yeri olarak kullanıldığı tahmin edilen küçük bir alan
            bulunuyor.Kayalara oyularak yapılan ve birkaç bölümden oluşan Hasuni
            Kaya Kilisesi, Anadolu'daki en eski mabedlerinden biridir. Tepesi
            huni şeklindeki 4 katlı kaya kilisesinin yanında eğitim amaçlı
            kullanıldığı düşünülen bölümün içinde mini bir amfiye benzeyen 5
            basamaklı merdiven vardır. Zamanla tahrip olmuş Hasuni Kaya
            Kilisesi, Hristiyanlığın yayıldığı ilk dönemlerden 13'üncü yüzyıla
            kadar kilise olarak kullanılmıştır.
          </p>
        </div>
        <div class="image">
          <img src="../Image/HM6.png" alt="about" />
        </div>
      </div>
      <div class="row">
        <div class="image">
          <img src="../Image/HM7.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Antik Hasuni Kaya Kilisesi'nin bütün duvarlarında, kayaların
            kazınmasıyla duvar delikleri ve kulplar yapılmıştır. Ayrıca, kapı
            üstlerinde ve pencere kenarlarına kazınmış farklı kabartmalar da
            bulunmaktadır. Kesme taş ve tuğla kullanılarak yapılmış olan kilise,
            mağara şehrinin eteklerindeki düz alanda bulunmaktadır. Kimler
            tarafından yapıldığı bilinmeyen kilisenin yapım tarihi kesin
            olmamakla birlikte 13'üncü yüzyıl olarak kabul edilmektedir.
            Yapımında Silvan yöresine özgü renkli kesme taşlar
            kullanılmıştır.Devasa kaya parçaları oyularak apartman şeklinde
            yapılmış mağaralardan oluşan Hasuni'nin görüntüsü oldukça ilgi
            çekiyor.Bölgeye gelen yerli ve yabancı turistler de kaya
            merdivenler, taş döşeme yollar, kaya kilisesi ve bu tarihi yapıları
            fotoğraflıyorlar.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="content">
          <p>
            Mağaraların aralarında kayalığın düzleştirilmesi ile yollar ve çıkış
            merdivenleri, sarnıçlar ve su arkları, kaya kiliseleri, dokuma
            atölyeleri gibi yerleşimin sosyal ve kültürel ihtiyacını
            karşılayacak yapıların yanı sıra Orta çağda inşa edilmiş bir kilise
            de bulunmaktadır.
          </p>
        </div>
        <div class="image">
          <img src="../Image/HM0.png" alt="about" />
        </div>
      </div>
    </section>

    <!-- about end -->
   

    <!-- Contact Start-->
    <section class="contact">
      <h1 class="heading">Haritalar</h1>
      <div class="harita">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12552.61610558605!2d41.08088241179906!3d38.13661132964407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074aa534807c369%3A0xa9b200da2895c0a4!2zSGFzdW5pIE1hxJ9hcmEgxZ5laHJp!5e0!3m2!1str!2snl!4v1734887048179!5m2!1str!2snl" 
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
