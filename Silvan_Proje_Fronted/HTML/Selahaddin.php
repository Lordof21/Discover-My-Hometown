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
    <title>Malabadi Köprüsü</title>

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
      <h1 class="heading">Selahaddin-i Eyyubi Camii</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/SEC1.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Diyarbakır ilçesi Silvan'da yer alan cami, Artuklu Emîri Necmeddin
            Alpı oğlu Timurtaş tarafından 1152- 1157 yılları arasında inşa
            ettirilmiş. Eyyûbî döneminde 1227 yılında onarılmış ve bu onarımda
            bir mihrap ilave edilmiş. Bu yüzden Selahaddin-i Eyyûbî Camii adıyla
            da biliniyor. Daha sonra çeşitli dönemlerde gördüğü tamirler
            neticesinde özgün durumunu büyük ölçüde yitirmiş. Enine dikdörtgen
            planlı caminin kuzey ve güney cepheleri birbirinden oldukça farklı.
            Güney cephesinde mihrap önündeki kubbeli bölüme denk gelen
            kısımda,dikdörtgen kesitli üç iri payanda yer alıyor. Bu
            payandaların iki yanında da birer kapı var. Buradaki taş
            işçiliğinden, bunların 20. yüzyılda yapıldığı anlaşılıyor. Caminin
            kuzey cephesiyse konsollar ve sütunlarla farklı bir düzenlemeye
            sahip. Burada da iki kapı bulunuyor.
          </p>
        </div>
      </div>
      <div class="row marjin">
        <div class="content">
          <p>
            Doğudaki kapı oldukça süslüyken batıdaki sadeliğiyle dikkat çekiyor.
            Bu cephede görülen eski izler yapının önünde bir avlunun varlığını
            işaret ediyor. Caminin ibadet mekanı doğu- batı doğrultusunda enine
            dikdörtgen planlı bir yapıya sahip. Mihraba paralel dört neften üçü
            mihrap önü kubbesiyle kesilmiş. Büyük kubbe oldukça geniş bir alanı
            örtüyor. Kıble duvarında birbirinden farklı dört mihrap bulunuyor.
            Bunlardan ikisi doğu tarafında, biri orta eksende, diğeri batı
            tarafında yer alıyor. Doğu tarafındaki mihraplardan birisi 1227
            yılındaki onarım sırasında Eyyûbîler tarafından konulmuş. Caminin iç
            mekânında geçirdiği onarımlar ve değişikliklere işaret eden izler de
            bulunuyor. Çöken kubbenin de yeniden yapıldığı anlaşılıyor. Kuzey
            cephede doğu ve batı yönünde kademeli silmelerden meydana gelen
            sövelere sahip konsollu bir düzenleme bulunuyor. Bütün cepheyi
            kapladığı anlaşılan bu süslemenin doğu ucunda bir tonoz başlangıcı
            ve bir duvar izi görülüyor. Batı ucunda bu düzenlemenin üzerinde
            küçük bir kapı var.
          </p>
        </div>
        <div class="image">
          <img src="../Image/SEC2.png" alt="about" />
        </div>
      </div>
      <div class="row marjin">
        <div class="image">
          <img src="../Image/SEC5.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Caminin kıble duvarında dört mihrap var. Bunlardan ikisi doğu
            tarafında, biri orta eksende, diğeri batı tarafında yer alıyor. Doğu
            tarafındaki mihraplardan biri, mukarnas kavsaralı nişe sahip. Nişin
            içi bitkisel, geometrik süslemeler ve âyet kitâbeleriyle süslenmiş.
            Kemer üzerinde rûmîli kıvrık dallı zeminde 1227 tarihli celî sülüs
            Eyyûbî kitâbesi bulunuyor. Halat silmeli diğer mihrabın da Eyyûbî
            devrinde yapıldığı söyleniyor. Fakat 15. yüzyılla tarihlendirenler
            de var.
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

    <!-- Contact Start-->
    <section class="contact">
      <h1 class="heading">Haritalar</h1>
      <div class="harita">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6275.519920440823!2d41.00243635112414!3d38.14577417470553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a948356e09e1%3A0x7b6cad621cb8beea!2sSelahaddin-i%20Eyubi%20Cami!5e0!3m2!1str!2snl!4v1734888896735!5m2!1str!2snl" 
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
