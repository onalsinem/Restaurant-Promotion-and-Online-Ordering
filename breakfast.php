<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--! font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!--! bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--! style.css -->
    <link rel="stylesheet" href="stylee.css">

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

    <link href="css/style.css" rel="stylesheet">
    <style>

   .btn-daha-fazla {
    display: inline-block;
    float: right;
    background-color: #FEA116;
    border-radius: 4px;
    color: #FFFFFF;
    padding: 9px;
}
   .product {
        height: 100%; 
        width:240px;
    }

    .product-image img {
        max-width: 100%;
        height: auto;
        max-height: 150px; /* Set a fixed height for the product images */
        object-fit: cover; /* Maintain aspect ratio and cover the entire container */
    }

</style>
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


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <?php 
include ("baglan.php");
//$sec="select *from ustkisim";
//$sonuc=$baglanti->query($sec);
$cekme = "SELECT * FROM ustkisim";
$sonuc = mysqli_query($baglanti, $cekme); 

// Veriyi çekme
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
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Pera</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-2 pe-4">
                        <!-- <a href="index.php" class="nav-item nav-link active"><?php echo $anasayfa;?></a>
                        <a href="about.php" class="nav-item nav-link"><?php echo $hakkımda;?></a>
                        <a href="service.php" class="nav-item nav-link"><?php echo $secenek;?></a>
                        <a href="menu.php" class="nav-item nav-link"><?php echo $menu;?></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $sayfalar;?></a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item"><?php echo $rezerve;?></a>
                                <a href="team.php" class="dropdown-item"><?php echo $ekip;?></a>
                                <a href="testimonial.php" class="dropdown-item"><?php echo $yorumlar;?></a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link"><?php echo $iletisim;?></a>
                    </div> -->
                   
                    <button class="cart-btn m-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                        <span class="cart-items">0</span>
                        <i class="fas fa-cart-shopping"></i>
                    </button>
                </div>
                </div>
                
</nav>

      <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Kahvaltı Ürünleri</h1>
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <div class="product-area">
           <div class="container">
            <div class="row" id="products-dom">
                <!-- <div class="col-lg-3 col-md-4">
                    <div class="product">
                        <div class="product-image">
                            <img src="images/product11.jpg" alt="product">
                        </div>
                        <div class="product-hover">
                            <span class="product-title">table</span>
                            <span class="product-price">$300</span>
                            <button class="btn-add-to-cart">
                                <i class="fas fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>  -->
                <!-- <div class="col-lg-3 col-md-4">
                    <div class="product">
                        <div class="product-image">
                            <img src="images/product1.png" alt="product">
                        </div>
                        <div class="product-hover">
                            <span class="product-title">table</span>
                            <span class="product-price">$300</span>
                            <button class="btn-add-to-cart">
                                <i class="fas fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-4">
                    <div class="product">
                        <div class="product-image">
                            <img src="images/product1.png" alt="product">
                        </div>
                        <div class="product-hover">
                            <span class="product-title">table</span>
                            <span class="product-price">$300</span>
                            <button class="btn-add-to-cart">
                                <i class="fas fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-4">
                    <div class="product">
                        <div class="product-image">
                            <img src="images/product1.png" alt="product">
                        </div>
                        <div class="product-hover">
                            <span class="product-title">table</span>
                            <span class="product-price">$300</span>
                            <button class="btn-add-to-cart">
                                <i class="fas fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </div>  -->
            </div>     
                 <a  href="order.php" class="btn btn-daha-fazla ">Diğer Ürünler</a>         
           </div>
        </div>


        <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    
                </div>
                <!-- <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="admin.php" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="admin3.php" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="admin2.php" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>                 -->
                
</div>      

        <div class="offcanvas offcanvas-end" id="offcanvasRight">
        <div class="offcanvas-header">
            <h5>Alışveriş Sepeti</h5>
            <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="shopping-cart">
                <ul class="cart-list">
                    <!-- <li class="cart-list-item">
                        <div class="cart-left">
                            <div class="cart-left-image">
                                <img src="images/product1.png" alt="product" />
                            </div>
                            <div class="cart-left-info">
                                <a class="cart-left-info-title" href="#">table</a>
                                <span class="cart-left-info-price">$300</span>
                            </div>
                        </div>
                        <div class="cart-right">
                            <div class="cart-right-quantity">
                                <button class="quantity-minus">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="quantity">0</span>
                                <button class="quantity-plus">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="cart-right-remove">
                                <button class="cart-remove-btn">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </li> -->
                </ul>
                <div class="shopping-cart-bottom">
                    <div class="total">
                    <div class="total-title">Toplam:</div>
                     <span class="total-value">0 TL</span>
                    </div>
                    
                    <a href="information.php" class="btn btn-clear" type="button">Sipariş Ver</a>

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
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Bize Dair</h4>
                        <a class="btn btn-link" href="">İletişim</a>
                        <a class="btn btn-link" href="">Rezervasyon</a>
                        <a class="btn btn-link" href="">Politikalar</a>
                        <a class="btn btn-link" href="">Hakkımızda</a>
                        <a class="btn btn-link" href="">Ekibimiz</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">İletişim</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Sokak İstanbul,Turkey</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+905546783456</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Çalışma Saatlerimiz</h4>
                        <h5 class="text-light fw-normal">Pazartesi-Cuma</h5>
                        <p>Sabah 9-Akşam 10</p>
                        <h5 class="text-light fw-normal">Cumartesi-Pazar</h5>
                        <p>Sabah 10-Akşam 11</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Bilgi</h4>
                        <p>Bizden ileti almak isterseniz mail adresinizi yazınız.</p>
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
    <script src="js/script3.js"></script>

</body>

</html>