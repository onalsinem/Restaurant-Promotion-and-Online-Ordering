<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
<!--
    


-->
</head>
<body>


<?php 
    include ("baglan.php");
    if (isset($_POST["buton2"])) {
        $isim = $_POST["isim"];
        $soyad = $_POST["soyad"];
        $telefon = $_POST["telefon"];
        $durum = $_POST["durum"];
        $yeniID = $_POST["id"]; // Düzenlenecek ürünün yeni ID'si

        // SQL sorgusunu hazırlayın
        $sql = "UPDATE siparisbilgi SET  durum='$durum' WHERE ID='$yeniID'";

        // Sorguyu çalıştırın
        if ($baglanti->query($sql) === TRUE) {
            echo "Ürün başarıyla güncellendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $baglanti->error;
        }
    }
?>

<?php 
    include ("baglan.php");
    if (isset($_POST["buton3"])) {
        $silID = $_POST["id"]; // Silinecek ürünün ID'si

        // SQL sorgusunu hazırlayın
        $sql = "DELETE FROM siparisbilgi WHERE ID='$silID'";

        // Sorguyu çalıştırın
        if ($baglanti->query($sql) === TRUE) {
            echo "Ürün başarıyla silindi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $baglanti->error;
        }
    }
?>


	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fa-solid fa-address-card"></i></div>                       
                <h1 class="text-center text-white">Kurye Sayfası</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul >
                    <li class="tm-nav-item active"><a href="kurye.php" class="tm-nav-link">
                    <i class="fa-sharp fa-solid fa-rectangle-list"></i>
                        Sipariş Listesi
                    </a></li>
                    <li class="tm-nav-item"><a href="kurye2.php" class="tm-nav-link" >
                        <i class="fas fa-pen"></i>
                        Düzenleme
                    </a></li>
                    
                    
                </ul>
            </nav>
            
          
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    
                </div>                
            </div>            
            <div class="row tm-row">
                <center>
            <h2 text-center >Sipariş Düzenleme Ekranı</h2>
                </center>
  <!-- Veri ekleme formu buraya eklenebilir -->

     <div class="bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Düzenleme</h5>
                        
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Alıcı İsmi" name="isim">
                                        <label for="name">Alıcı İsmi</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="fiyat" placeholder="Soyadı" name="soyad">
                                        <label for="fiyat" >Soyadı</label>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="ID" name="id">
                                        <label for="ID">ID</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating  custom-width" >
                                    <input class="form-control" id="aciklama" placeholder="telefon numarası" name="telefon" ></input>
                                    <label for="text" >Telefon</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating  custom-width" >
                                    <input class="form-control" id="aciklama" placeholder="Sipariş Durumu" name="durum" ></input>
                                    <label for="text" >Sipariş Durumu</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="row g-2 text-white">
                                
                                <div class="col-6">
                                    <button class="btn btn-primary text-white w-100 py-3" type="submit" name="buton2">Düzenle</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary text-white  w-100 py-3" type="submit" name="buton3">Sil</button>
                                </div>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>


          
  <script src="script.js"></script>
                
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
               
                <!-- <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>                 -->
            </div>            
            <footer class="row tm-row">
                <hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                   
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                 
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>