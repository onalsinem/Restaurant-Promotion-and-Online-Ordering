<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <link href="img/favicon.ico" rel="icon">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <style>
    .my-custom-margin {
      margin-top: 15rem;
      margin-bottom: 8rem;
    }
  </style>
  <?php
  include("baglan.php");
  //$sec="select *from ustkisim";
  //$sonuc=$baglanti->query($sec);
  $cekme = "SELECT * FROM ustkisim";
  $sonuc = mysqli_query($baglanti, $cekme);


  $row = mysqli_fetch_assoc($sonuc);
  $isim = $row['isim_ıd'];
  $anasayfa = $row['anasayfa_ıd'];
  $hakkımda = $row['hakkımda_ıd'];
  $secenek = $row['secenek_ıd'];
  $menu = $row['menu_ıd'];
  $sayfalar = $row['sayfalar_ıd'];
  $rezerve = $row['birinci_rezerve_ıd'];
  $ekip = $row['ikinci_ekip_ıd'];
  $yorumlar = $row['ucuncu_yorumlar_ıd'];
  $iletisim = $row['iletisim_ıd'];
  $buton = $row['buton_ıd'];
  ?>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
      <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><?php echo $isim; ?></h1>

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0 pe-4">
        <a href="index.php" class="nav-item nav-link active"><?php echo $anasayfa; ?></a>
        <a href="about.php" class="nav-item nav-link"><?php echo $hakkımda; ?></a>
        <a href="service.php" class="nav-item nav-link"><?php echo $secenek; ?></a>
        <a href="menu.php" class="nav-item nav-link"><?php echo $menu; ?></a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $sayfalar; ?></a>
          <div class="dropdown-menu m-0">
            <a href="order.php" class="dropdown-item">Sipariş Ver</a>
            <a href="siparistakip.php" class="dropdown-item">Sipariş Takip</a>
            
            <a href="booking.php" class="dropdown-item"><?php echo $rezerve; ?></a>
            <a href="team.php" class="dropdown-item"><?php echo $ekip; ?></a>
            <a href="testimonial.php" class="dropdown-item"><?php echo $yorumlar; ?></a>
          </div>
        </div>
        <a href="contact.php" class="nav-item nav-link"><?php echo $iletisim; ?></a>
      </div>
      <a href="login.php" class="btn btn-primary py-2 px-4"><?php echo $buton; ?></a>
    </div>

  </nav>
  <div class="  p-0">
   

   <?php

    include("baglan.php");
    if (isset($_POST["buton1"])) {
      $kullaniciAdi = $_POST['kisim'];
      $sifre = $_POST['sifre'];

      // Kullanıcı adı ve şifre kontrolü yapma
      $sql = "SELECT * FROM kullanici WHERE kullaniciadi = '$kullaniciAdi' AND sifre = '$sifre'";
      $sorgu = mysqli_query($baglanti, $sql);

      if (mysqli_num_rows($sorgu) == 1) { // Geçerli kullanıcı adı ve şifre varsa
        $_SESSION['giris'] = true; // Oturum değişkenini true olarak işaretle
        echo '<script>window.location.href = "index.php";</script>'; // JavaScript ile yönlendirme yap
        exit; // Kodun devam etmesini engelle
      } else {
        // Kullanıcı adı veya şifre hatalı ise hata mesajı gösterilebilir
        echo "Kullanıcı adı veya şifre hatalı.";
      }
    }

    ?> 

    



<?php
include("baglan.php");

if (isset($_POST["buton3"])) {
    $kullaniciAdi = $_POST['kisim1'];
    $sifre = $_POST['sifre1'];
    $yetki = $_POST['yetki'];

    // Kullanıcı adı ve şifre kontrolü yapma
    $sql = "SELECT * FROM admin2 WHERE kullaniciadi = '$kullaniciAdi' AND sifre = '$sifre' AND yetki = '$yetki'";
    $sorgu = mysqli_query($baglanti, $sql);

    if (mysqli_num_rows($sorgu) == 1) { // Geçerli kullanıcı adı ve şifre varsa
        $row = mysqli_fetch_assoc($sorgu);
        $yetki = $row['yetki'];
        
        if ($yetki == 1) {
            echo '<script>window.location.href = "admin.php";</script>'; // JavaScript ile admin.php'ye yönlendirme yap
            exit; // Kodun devam etmesini engelle
        } elseif ($yetki == 2) {
            echo '<script>window.location.href = "kurye.php";</script>'; // JavaScript ile kuryelgn.php'ye yönlendirme yap
            exit; // Kodun devam etmesini engelle
        }
    } else {
        // Kullanıcı adı veya şifre hatalı ise hata mesajı gösterilebilir
        echo "Kullanıcı adı veya şifre hatalı.";
    }
}
?>



    <?php
    include("baglan.php");
    $cekme = "SELECT * FROM navbar";
    $sonuc = mysqli_query($baglanti, $cekme);
    $veriler = array();
    while ($row = mysqli_fetch_assoc($sonuc)) {
      $veriler[] = $row;
    }
    ?>
    <div class="py-5 bg-dark hero-header ">
      <div class="container my-5 py-5">
        <div class="row align-items-center g-5">

          <div class="row">

            <div class="col mt-5 ">
              <h5 class="section-title ff-secondary text-start text-primary fw-normal">Hoşgeldiniz</h5>
              <h1 class="text-white mb-3 text-center">Giriş Yap</h1>
              <div class="row g-3">

                <div class="col">
                  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="row ">
                      <div class="col">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="kname" placeholder="Kullanıcı Adınız" name="kisim">
                          <label for="kname">Kullanıcı Adı</label>
                        </div>
                      </div>
                    </div>
                    <div class="row  my-2">
                      <div class="col">
                        <div class="form-floating">
                          <input type="password" class="form-control" id="sifre" placeholder="Şifre" name="sifre">
                          <label for="sifre">Şifre</label>
                        </div>
                      </div>

                    </div>
                    <div class="row  my-2">
                      <div class="col">
                        <button class="btn btn-primary w-100 py-3" type="submit" name="buton1">Kullanıcı Girişi Yap</button>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="col">
                  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="loginform">
                    <div class="row ">
                      <div class="col">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="kname" placeholder="Kullanıcı Adınız" name="kisim1">
                          <label for="kname">Yönetici Adı</label>
                        </div>
                      </div>
                    </div>
                    <div class="row  my-2">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-floating">
                              <input type="password" class="form-control" id="sifre" placeholder="Şifre" name="sifre1">
                              <label for="sifre">Şifre</label>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="yetki" placeholder="yetki" name="yetki">
                              <label for="yetki">Yetki</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ">
                      <div class="col">
                        <button class="btn btn-primary w-100 py-3" type="submit" name="buton3">Yönetici Girişi Yap</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="row">
                <div class=" py-2">
                   <a href="kayıt.php" class="btn btn-primary w-100 py-3" type="submit" name="buton1">Yeni Kullanıcı Oluştur</a>
                </div>
              </div>

            </div>

            <div class="col-md-5 text-center text-md-end overflow-hidden">
              <img class="img-fluid" src="img/foti9.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <!-- Navbar  -->



    <!-- Footer Start -->
    <!-- <?php
          include("baglan.php");
          $cekme = "SELECT * FROM footer";
          $sonuc = mysqli_query($baglanti, $cekme);
          $veriler = array();
          while ($row = mysqli_fetch_assoc($sonuc)) {
            $veriler[] = $row;
          }
          ?>
        <div class="container-fluid bg-white text-dark footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo $veriler[0]['baslikbir']; ?></h4>
                        <a class="btn btn-link" href=""><?php echo $veriler[0]['biralt1']; ?></a>
                        <a class="btn btn-link" href=""><?php echo $veriler[0]['biralt2']; ?></a>
                        <a class="btn btn-link" href=""><?php echo $veriler[0]['biralt3']; ?></a>
                        <a class="btn btn-link" href=""><?php echo $veriler[0]['biralt4']; ?></a>
                        <a class="btn btn-link" href=""><?php echo $veriler[0]['biralt5']; ?></a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo $veriler[0]['baslikiki']; ?></h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $veriler[0]['ikialt1']; ?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $veriler[0]['ikialt2']; ?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $veriler[0]['ikialt3']; ?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo $veriler[0]['baslıkuc']; ?></h4>
                        <h5 class="text-light fw-normal"><?php echo $veriler[0]['ucalt1']; ?></h5>
                        <p><?php echo $veriler[0]['ucalt11']; ?></p>
                        <h5 class="text-light fw-normal"><?php echo $veriler[0]['ucalt2']; ?></h5>
                        <p><?php echo $veriler[0]['ucalt22']; ?></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4"><?php echo $veriler[0]['baslıkdort']; ?></h4>
                        <p><?php echo $veriler[0]['dortalt1']; ?></p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Mail Adresi">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Gönder</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Ana Menü</a>
                                <a href="">Cookies</a>
                                <a href="">Yardım</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


  <script src="js/main.js"></script>
</body>

</html>