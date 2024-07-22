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
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i><?php echo $isim; ?></h1>
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active"><?php echo $anasayfa;?></a>
                        <a href="about.php" class="nav-item nav-link"><?php echo $hakkımda;?></a>
                        <a href="service.php" class="nav-item nav-link"><?php echo $secenek;?></a>
                        <a href="menu.php" class="nav-item nav-link"><?php echo $menu;?></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $sayfalar;?></a>
                            <div class="dropdown-menu m-0">
                            <a href="order.php" class="dropdown-item">Sipariş Ver</a>
                            <a href="siparistakip.php" class="dropdown-item">Sipariş takip</a>
                             
                                <a href="booking.php" class="dropdown-item"><?php echo $rezerve;?></a>
                                <a href="team.php" class="dropdown-item"><?php echo $ekip;?></a>
                                <a href="testimonial.php" class="dropdown-item"><?php echo $yorumlar;?></a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link"><?php echo $iletisim;?></a>
                    </div>
                    <a href="login.php" class="btn btn-primary py-2 px-4"><?php echo $buton;?></a>
                </div>
                
            </nav>
            
            <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM navbar";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft"><?php echo $veriler[0]['baslik']; ?></h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?php echo $veriler[0]['aciklama']; ?></p>
                            <a href="booking.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"><?php echo $veriler[0]['buton']; ?></a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar  -->


        <!-- Service Start -->
        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM kartlar";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5><?php echo $veriler[0]['sef']; ?></h5>
                                <p><?php echo $veriler[0]['sefacıklama']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5><?php echo $veriler[0]['saglık']; ?></h5>
                                <p><?php echo $veriler[0]['saglıkacıklama']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5><?php echo $veriler[0]['online']; ?></h5>
                                <p><?php echo $veriler[0]['onlineaciklama']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5><?php echo $veriler[0]['hizmet']; ?></h5>
                                <p><?php echo $veriler[0]['hizmetaciklama']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>

                    <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM hakkımızda";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Hakkımızda</h5>
                        <h1 class="mb-4">Restorantımıza <i class="fa fa-utensils text-primary me-2"></i>Hosgeldiniz</h1>
                        <p class="mb-4"><?php echo $veriler[0]['acıklama']; ?></p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Yıllık</p>
                                        <h6 class="text-uppercase mb-0">Deneyim</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popüler</p>
                                        <h6 class="text-uppercase mb-0">Şef</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Daha Fazla</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM menu";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Yemek Menüsü</h5>
                    <h1 class="mb-5">Bazı Popüler Tercihler</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0"><?php echo $veriler[0]['kahvaltı']; ?></h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0"><?php echo $veriler[0]['ögle']; ?></h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0"><?php echo $veriler[0]['aksam']; ?></h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM menukahvaltı";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veri = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veri[] = $row;
            }
            ?>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/klasikkahvaltı.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekbir']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['birfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['biraciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/akdeniz.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekiki']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['ikifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['ikiaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/simit.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekuc']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['ucfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['ucaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/omlet.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekdort']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['dortfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['dortaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kahvaltı.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekbes']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['besfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['besaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/yulaf1.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekalti']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['altifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['altiaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menemen1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekyedi']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['yedifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['yediaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/tost.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemeksekiz']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['sekizfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['sekizaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM arayemek";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veri = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veri[] = $row;
            }
            ?>
                        <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mantar.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekbir']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['birfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['biraciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kızartma.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekiki']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['ikifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['ikiaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/dolma.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekuc']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['ucfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['ucaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/sigara.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekdort']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['dortfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['dortaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/manti.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekbes']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['besfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['besaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/hellim.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekalti']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['altifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['altiaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/lahana.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekyedi']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['yedifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['yediaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/midye.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemeksekiz']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['sekizfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['sekizaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM anayemek";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veri = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veri[] = $row;
            }
            ?>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/tavuk.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekbir']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['birfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['biriaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/somon.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekiki']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['ikifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['ikiaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/sote.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekuc']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['ucfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['ucaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/noodle.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekdor']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['dortfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['dortaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/risotto.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekbes']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['besfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['besaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/et.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekalti']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['altifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['altiaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/kuskus.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemekyedi']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['yedifiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['yediaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/parmesanlı.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $veri[0]['yemeksekiz']; ?></span>
                                                <span class="text-primary"><?php echo $veri[0]['sekizfiyat']; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $veri[0]['sekizaciklama']; ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <?php 
            include ("baglan.php");
            
            if (isset($_POST["buton"]))
            {
                $isim = ($_POST['isim']) ; 
                $mail = ($_POST["mail"]) ; 
                $tarih = ($_POST["tarih"]) ; 
                $kişi = ($_POST["kişi"]) ; 
                $mesaj = ($_POST["mesaj"]) ; 
                $menu = ($_POST["menu"]) ; 
                $tercih = ($_POST["tercih"]) ; 
            $ekleme = "INSERT INTO rezervasyon (isim,mail, tarih,kisisayisi,mesaj,menu,tercih) VALUES ('".$isim."', '".$mail."','".$tarih."','".$kişi."','".$menu."','".$tercih."','".$mesaj."')";
            $sonuc = mysqli_query($baglanti, $ekleme); 
            }

        ?>
       
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Rezervasyon</h5>
                        <h1 class="text-white mb-4">Online Rezervasyon</h1>
                        <form action="booking.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Adınız" name="isim">
                                        <label for="name">Ad Soyad</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Mail Adresi" name="mail" >
                                        <label for="email" >Mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Tarih ve Saat" data-target="#date3" data-toggle="datetimepicker" name="tarih" />
                                        <label for="datetime" >Tarih & Saat</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1" name="kişi">
                                          <option value="1">Bir kişi</option>
                                          <option value="2">İki kişi</option>
                                          <option value="3">Üç kişi</option>
                                          <option value="4">Dört kişi</option>
                                          <option value="5">Beş kişi</option>
                                        </select>
                                        <label for="select1">Kişi Sayısı</label>
                                      </div>
                                </div>
                                <?php 
                                include ("baglan.php");
                                $cekme1 = "SELECT * FROM menuisimleri";
                                $sonuc1 = mysqli_query($baglanti, $cekme); 
                                $veriler1 = array();
                                while ($row = mysqli_fetch_assoc($sonuc1)) {
                               $veriler1[] = $row;
                                 }
                                ?>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select2" name="menu">
                                        <option value="1">ana</option>
                                        <option value="2">ara</option>
                                        <option value="3"></option>
                                        </select>
                                        <label for="select1">Menü seç</label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1" name="tercih" >
                                        <option value="1">Evet</option>
                                        <option value="2">Hayır</option>
                                        </select>
                                        <label for="select1">Aynı menü mü?</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px" name="mesaj" ></textarea>
                                        <label for="message" >Başka menü tercihiniz varsa lütfen yazınız.</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="buton">Rezerve Et</button>
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
        <!-- Reservation Start -->

        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM hakkımızda";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal"><?php echo $veriler[0]['kucukbaslik']; ?></h5>
                    <h1 class="mb-5"><?php echo $veriler[0]['buyukbaslik']; ?></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?php echo $veriler[0]['sefbir']; ?></h5>
                            <small><?php echo $veriler[0]['sefbiraciklama']; ?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?php echo $veriler[0]['sefiki']; ?></h5>
                            <small><?php echo $veriler[0]['sefikiaciklama']; ?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?php echo $veriler[0]['sefuc']; ?></h5>
                            <small><?php echo $veriler[0]['sefucaciklama']; ?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0"><?php echo $veriler[0]['sefdort']; ?></h5>
                            <small><?php echo $veriler[0]['sefdortaciklama']; ?></small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <?php 
            include ("baglan.php");
            $cekme = "SELECT * FROM yorum";
            $sonuc = mysqli_query($baglanti, $cekme); 
            $veriler = array();
            while ($row = mysqli_fetch_assoc($sonuc)) {
             $veriler[] = $row;
            }
            ?>
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Yorumlar</h5>
                    <h1 class="mb-5">Hakkımızda Yorumlar</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $veriler[0]['yorumbir']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $veriler[0]['isimbir']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $veriler[0]['yorumiki']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $veriler[0]['isimiki']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $veriler[0]['yorumuc']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $veriler[0]['isimuc']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?php echo $veriler[0]['yorumdort']; ?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $veriler[0]['isimdort']; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

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