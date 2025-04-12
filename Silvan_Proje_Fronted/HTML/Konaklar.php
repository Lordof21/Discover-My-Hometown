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
    <title>Konaklar</title>
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
      <h1 class="heading">Azizoğlu Konağı</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/AK.png" alt="about" />
        </div>
        <div class="content">
          <p>
            İlçe merkezinde Mescit Mahallesi, Azizoğulları Caddesi'nde
            Azizoğulları ailesin ait olan evler, Silvan surlarının hemen
            üzerinde, surlarla bütünleşmiş bir mimariye sahiptir. Plan ve inşa
            tarzı ile 18-19. yy'a tarihlenen bu evler, ilçenin geleneksel
            mimarisinin vazgeçilmez malzemesi olan kalker taşından 2 katlı
            olarak inşa edilmiştir. Yapı, Silvan'a hakim bir noktada ve
            devamındaki diğer Azizoğulları evleri ile surlarla birlikte ilçenin
            tarihi dokusunun önemli bir parçasını oluşturmaktadır.
          </p>
        </div>
      </div>
    </section>
        <!-- Contact Start-->
        <section class="contact">
          <h1 class="heading">Haritalar</h1>
          <div class="harita">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25104.037713988477!2d40.98708349712602!3d38.14008336223553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a94937c1b459%3A0x607d926943d9d192!2zQXppem_En2x1IEtvbmHEn8Sx!5e0!3m2!1str!2snl!4v1734887770262!5m2!1str!2snl"
              width="810"
              height="450"
              style="border: 0"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </section>
    
        <!-- Contact End-->
    <section class="about">
      <h1 class="heading">Ali Ağa Konağı</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/AAK.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Kale Mahallesi sınırları içerisinde yaklaşık olarak 2 bin 500
            metrekarelik alanda yapılan tarihi Ali Ağa Konağı 1860 yılında
            yapılmıştır.
          </p>
        </div>
      </div>
    </section>
            <!-- Contact Start-->
            <section class="contact">
              <h1 class="heading">Haritalar</h1>
              <div class="harita">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7462.793121782487!2d40.99845164039085!3d38.14674991309912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a9ae623c12db%3A0xde1d3a559c9771cd!2zQWxpIGHEn2Ega29uYcSfxLE!5e0!3m2!1str!2snl!4v1734888297903!5m2!1str!2snl" 
                  width="810"
                  height="450"
                  style="border: 0"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </section>
        
            <!-- Contact End-->
    <section class="about">
      <h1 class="heading">Üstünler Konağı</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/UK.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Evin batı kesiminde yer alan kitabeye göre elik Kamil Muzaffer'e
            aittir. Ancak bu kitabenin evin üzerinde kurulduğu surlara ait
            olduğu sanılmaktadır. Ev ise 18 .y.y'da yapılmıştır.
          </p>
        </div>
      </div>
    </section>
        <!-- Contact Start-->
        <section class="contact">
          <h1 class="heading">Haritalar</h1>
          <div class="harita">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6275.435983886972!2d40.99845164039085!3d38.14674991309912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a9004da1cf15%3A0xcd0d8a795c6f9c08!2zw5xzdMO8bmxlciBLb25hxJ_EsQ!5e0!3m2!1str!2snl!4v1734888323091!5m2!1str!2snl"
            width="810"
            height="450"
            style="border: 0"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </section>
    
        <!-- Contact End-->
    <section class="about">
      <h1 class="heading">Gazi İlkokul (Bedri Bey Konağı)</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/BBK.png" alt="about" />
        </div>
        <div class="content">
          <p>
            Silvan ilçemizde bulunan yapı 1908 yılında inşa edilmiştir.
            Silvan’ın yerlilerinden olan Sadık (Üstün) beye ait olan bu yapı,
            Mustafa Kemal Atatürk ün Silvan da bulunduğu sırada (7 Kasım 1916-24
            Aralık 1916) karargâh binası olarak kullanılmıştır.1918 yılında
            Mektebi İbtidai-ye adıyla eğitim hizmeti vermeye başlayan bu yapı,
            daha sonra Silvan Merkez Okulu, Gazi İlkokulu ,Gazi İlköğretim Okulu
            ve en olarak Gazi İlkokulu olarak hizmet vermeye devam etmektedir.
            Yapı 2005 yılında Diyarbakır Koruma Kurulu tarafından tescillenerek
            koruma altına alınmıştır. Cephe özellikleri bakımından yöresel konut
            mimarisinin izlerini taşırken, plan işleyişi bakımından 1. Ulusal
            mimarlık dönemi kamu yapıları izlerini taşımaktadır.
          </p>
        </div>
      </div>
    </section>
        <!-- Contact Start-->
        <section class="contact">
          <h1 class="heading">Haritalar</h1>
          <div class="harita">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.866706048994!2d41.002648199999996!3d38.1432923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4074a937b4b8fa01%3A0x46f85b3f9abdb80e!2sGazi%20%C4%B0lkokulu!5e0!3m2!1str!2snl!4v1734888622392!5m2!1str!2snl" 
              width="810"
              height="450"
              style="border: 0"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </section>
    
        <!-- Contact End-->

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
  </body>
</html>
