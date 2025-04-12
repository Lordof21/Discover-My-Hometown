<?php
session_start();
include("../login/connect.php");

if (isset($_POST['submitYorum'])) {
    $yorum = $_POST['yorum'];
    $email = $_SESSION['email'];
    $sql = "UPDATE users SET yorum='$yorum' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
        echo "Yorum başarıyla kaydedildi!";
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>



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
  </head>
  <link rel="stylesheet" href="../Style/style.css" />
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
        <button>
          <i class="fas fa-shopping-cart"></i>
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
      <h1 class="heading">MALABADİ KÖPRÜSÜ</h1>
      <div class="row">
        <div class="image">
          <img src="../Image/MK2.jpg" alt="about" />
        </div>
        <div class="content">
          <h3>Tarihçesi</h3>
          <p>
            İlçemiz sınırları içerisinde olan ve Batman Çayı üzerinde bulunan
            Malabadi Köprüsü, Artuklular döneminde Timurtaş bin İlgazi bin Artuk
            tarafından yaptırıldı. 1147 yılında döneminin şaheseri olarak inşa
            edilen köprü, 7 metre eninde ve 150 metre uzunluğundadır. Taşlarla
            inşa edilen köprünün yüksekliği, su seviyesinden kilit taşına kadar
            19 metredir. Anıtsal mühendislik ve mimarlık başyapıtlarından olan
            Malabadi Köprüsü, 40.86 metre açıklığındaki sivri ana kemeri ile
            dünyanın günümüze ulaşan en büyük kemer açıklığına sahip taş kemer
            köprüsüdür.Onarımlarla günümüze kadar ulaşan köprünün üzerinde
            insan, güneş ve arslan figürlü kabartmalar bulunuyor. Dünyadaki en
            nadide eserler arasında olan tarihi köprüyü, kervanların sıklıkla
            kullandıkları biliniyor.Bu amaçla köprüdeki kemerin her iki yanında
            ve iç tarafta, kervan ve yolcular tarafından barınak olarak
            kullanılan iki oda bulunuyor.
          </p>
        </div>
      </div>
      <div class="row marjin">
        <div class="content">
          <h3>"Evliya Çelebi'nin gözünden Malabadi Köprüsü"</h3>
          <p>
            17' nci yüzyıl gezginlerinden Evliya Çelebi, Malabadi Köprüsü
            hakkında şunları kaydetmiştir: "Köprünün iki tarafında kale kapıları
            gibi demir kapıları vardır. Bu kapıların içinde sağ ve solda
            köprünün temeli beraberliğinde kemerin altında hanlar vardır ki
            gelip geçenler, sağdan ve soldan geldikleri vakit misafir olurlar.
            Köprünün kemeri altında birçok oda vardır. Demir pencereler
            şahneşinlerine misafirler oturup kemerin karşı tarafındaki adamlarla
            kimi sohbet eder, kimi ağ ve oltalarla balık avlarlar. Köprünün sağ
            ve solundaki bütün korkuluklar Nehcivan çeliğindendir ama demirci
            ustası da var kudretini sarf ederek bir tür sanatlı kafesli
            korkuluklar yapmış ve doğrusu elinin ustalığını göstermiştir.
            Doğrusu, üstad mühendis var kuvvetini sarf ederek bu köprüde öyle
            sanatlar göstermiştir ki bu işçiliği geçmiş mimarlardan hiçbirisi
            göstermemiştir. Malabadi Köprüsü'nün altına Ayasofya'nın kubbesi
            girer."
          </p>
        </div>
        <div class="image">
          <img src="../Image/MK3.jpg" alt="about" />
        </div>
      </div>
      <div class="row marjin">
        <div class="image">
          <img src="../Image/MK7.7.jpg" alt="about" />
        </div>
        <div class="content">
          <h3>"Orta Şark'ta bu yaşta köprü yok"</h3>

          <p>
            Fransız mimar <b>Albert Gabriel</b> ise
            <i>
              "Modern statik hesabının olmadığı devirde bu açıklıkta o zaman
              için böyle bir eser hayranlık ve takdiri muciptir. Ayasofya'nın
              kubbesi köprünün altına rahatlıkla girer. Balkanlarda, Türkiye'de,
              Orta Şark'ta bu açıklıkta, bu yaşta köprü yoktur."
            </i>
            diyor. Görüntülerde, tarihi köprünün 700 metre kuzeyindeki Batman
            Barajı da görülüyor. Bu baraj; sulama, enerji üretme ve taşkınlardan
            koruma amacıyla 1986-1999 yılları arasında inşa edilmişti.
          </p>
        </div>
      </div>

      
    </section>
<!-- about end -->


<!-- 
     Review Start
     <section class="review">
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
        </div> 


        <div class="box">
          <img src="../Image/q2.png" alt="yorum_resmi" />
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique,
            voluptatibus!
          </p>
          <img src="../Image/indiir.jpeg" alt="avatar resmi" class="user" />
          <h3>Rojhat Gülük 2</h3>
        </div> 


         <div class="box">
          <img src="../Image/q2.png" alt="yorum_resmi" />
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique,
            voluptatibus!
          </p>
          <img src="../Image/indiir.jpeg" alt="avatar resmi" class="user" />
          <h3>Rojhat Gülük 3</h3>
        </div> 


      </div>
    </section>

    Review End
---------------------------------------------------- 
     Review Start-
    <section class="review">
    <h1 class="heading">Yorumlar</h1>
    <div class="box-container">
         Mevcut yorumlar burada gösterilecek 
        
    </div>
     Yorum formu -
    <form method="post" action="MBK.php">
        <textarea name="yorum" placeholder="Yorumunuzu buraya yazın..." required></textarea>
        <input type="submit" name="submitYorum" value="Gönder">
    </form>
</section>
     Review End--

---------------------------------------------------------->

    <!-- Contact Start-->
    <section class="contact">
      <h1 class="heading">Haritalar</h1>
      <div class="harita">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.4292029661096!2d41.199004082233095!3d38.15346351779954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4073552d6cc77e81%3A0x22d74596db664702!2zTWFsYWJhZGkgS8O2cHLDvHPDvA!5e0!3m2!1str!2snl!4v1734171026704!5m2!1str!2snl"
          width="810"
          height="450"
          style="border: 0"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>

    <!-- Contact End-->
   <!--  -->

   <section class="contact">
      <h1 class="heading">Tanıtım Videosu</h1>
      <div class="harita">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/Ylz1GaXy10A?si=OyxfdNCv5D0naTdl" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen
        
        ></iframe>
      </div>
    </section>

   <!--  -->

    <!-- Footer Start -->

    <section class="footer">
      <p>2024-2025 Tüm Hakları Saklıdır.</p>

      <p>Rojhat G. Tarafından Oluşturuldu.</p>
    </section>

    <!-- Footer End -->
    <script src="../Script/script.js"></script>
  </body>
</html>
