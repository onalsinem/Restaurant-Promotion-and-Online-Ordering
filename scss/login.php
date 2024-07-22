<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <?php 
include ("baglan.php");
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
             <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><?php echo $isim; ?></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
               
                
            </nav>
            

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Giriş Yap&Kayıt Ol</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        
        <!-- Reservation Start -->
        <?php 
        
            include ("baglan.php");
            if (isset($_POST["buton1"]))
            {
                $kullaniciAdi = $_POST['kisim'];
                $sifre = $_POST['sifre'];
                
                // Kullanıcı adı ve şifre kontrolü yapma
                $sql = "SELECT * FROM kullanici WHERE kullaniciadi = '$kullaniciAdi' AND kullanicisifre = '$sifre'";
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
        
            include ("baglan.php");
            if (isset($_POST["buton3"]))
            {
                $kullaniciAdi = $_POST['kisim1'];
                $sifre = $_POST['sifre1'];
                
                // Kullanıcı adı ve şifre kontrolü yapma
                $sql = "SELECT * FROM admin WHERE kullaniciadi = '$kullaniciAdi' AND kullanicisifre = '$sifre'";
                $sorgu = mysqli_query($baglanti, $sql);
                
                if (mysqli_num_rows($sorgu) == 1) { // Geçerli kullanıcı adı ve şifre varsa
                    $_SESSION['giris'] = true; // Oturum değişkenini true olarak işaretle
                    echo '<script>window.location.href = "admin.php";</script>'; // JavaScript ile yönlendirme yap
                    exit; // Kodun devam etmesini engelle
                } else {
                    // Kullanıcı adı veya şifre hatalı ise hata mesajı gösterilebilir
                    echo "Kullanıcı adı veya şifre hatalı.";
                }
            }

        ?>
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
            <div class="col-md-6 bg-dark d-flex align-items-center">

                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Hoşgeldiniz</h5>
                        <h1 class="text-white mb-3">Giriş Yap</h1>
                        <form action="index.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="kname" placeholder="Kullanıcı Adınız" name="kisim">
                                        <label for="name">Kullanıcı Adı</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="sifre" placeholder="Şifre" name="sifre" >
                                        <label for="password" >Şifre</label>
                                    </div>
                                </div>
                               
                                <div class="col-12 p-2">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="buton1">Kullanıcı Girişi Yap</button>
                                </div>
                            </div>
                        </form>

                        <form action="admin.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="kname" placeholder="Kullanıcı Adınız" name="kisim1">
                                        <label for="name">Kullanıcı Adı</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="sifre" placeholder="Şifre" name="sifre1" >
                                        <label for="password" >Şifre</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="buton3">Admin Girişi Yap</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

           

                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Yeni Kullanici</h5>
                        <h1 class="text-white mb-4">Kayit Ol</h1>
                       
                        <?php 
    include ("baglan.php");
    if (isset($_POST["buton8"])) {
        $isim = $_POST["kname"];
        $soyad = $_POST["ksurname"];
        $kadi = $_POST["kullaniciadi"];
        $sifre= $_POST["kpassword"];
        $mail = $_POST["kemail"];
        $tel = $_POST["kphone"];
        

        // SQL sorgusunu hazırlayın
        $sql = "INSERT INTO kullanici (adi, soyadi,kullaniciadi,mail,telefon,sifre ) VALUES ('$isim', '$soyad', '$kadi', '$mail','$tel','$sifre')";

        // Sorguyu çalıştırın
        if ($baglanti->query($sql) === TRUE) {
            
        } else {
            echo "Hata: " . $sql . "<br>" . $baglanti->error;
        }
    }
    ?>
                        <form method="post" action="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Adiniz" name="kname">
                                        <label for="name">İsim</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="email" placeholder="Soyad" name="ksurname" >
                                        <label for="soyad" >Soyad</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" >
                                    <input type="text" class="form-control" id="kadi" placeholder="Kuallnici adi" name="kullaniciadi" >
                                        <label for="kadi" >Kullanici Adi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="sifre" placeholder="Şifre" name="kpassword" >
                                        <label for="sifre" >Şifre</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" >
                                    <input type="email" class="form-control" id="email" placeholder="Mail Adresi" name="kemail" >
                                        <label for="email" >Mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="telefon" placeholder="Telefon Numarasi" name="kphone" >
                                        <label for="telefon " >+90 Telefon Numarasi</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="buton8">Kayit Ol</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
                
                       
            </div>
        </div>
       
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM footer";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
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
        </div>
        <!-- Footer End -->


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