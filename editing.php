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
    if (isset($_POST["buton1"])) {
        $isim = $_POST["isim"];
        $fiyat = $_POST["fiyat"];
        $aciklama = $_POST["aciklama"];

        // SQL sorgusunu hazırlayın
        $sql = "INSERT INTO kahvaltı1 (isim, fiyat, aciklama) VALUES ('$isim', '$fiyat', '$aciklama')";

        // Sorguyu çalıştırın
        if ($baglanti->query($sql) === TRUE) {
            echo "Ürün başarıyla eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . $baglanti->error;
        }
    }
    ?>

<?php 
    include ("baglan.php");
    if (isset($_POST["buton2"])) {
        $yeniIsim = $_POST["isim"];
        $yeniFiyat = $_POST["fiyat"];
        $yeniAciklama = $_POST["aciklama"];
        $yeniID = $_POST["id"]; // Düzenlenecek ürünün yeni ID'si

        // SQL sorgusunu hazırlayın
        $sql = "UPDATE kahvaltı1 SET isim='$yeniIsim', fiyat='$yeniFiyat', aciklama='$yeniAciklama' WHERE ID='$yeniID'";

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
        $sql = "DELETE FROM kahvaltı1 WHERE ID='$silID'";

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
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-users"></i></div>            
                <h1 class="text-center text-white">Admin Menüsü</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul >
                    <li class="tm-nav-item active"><a href="admin.php" class="tm-nav-link">
                    <i class="fa-sharp fa-solid fa-rectangle-list"></i>
                        Menü
                    </a></li>
                    <li class="tm-nav-item"><a href="editing.php" class="tm-nav-link" >
                        <i class="fas fa-pen"></i>
                        Düzenleme
                    </a></li>
                    <li class="tm-nav-item"><a href="addadmin.php" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Yeni Admin
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
            <h2 text-center >Kahvaltı Menüsü</h2>
                </center>
  <!-- Veri ekleme formu buraya eklenebilir -->

     <div class="bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Düzenleme</h5>
                        <h1 class="text-white mb-4">Menü Düzenleme</h1>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Yemek İsmi" name="isim">
                                        <label for="name">Yemek İsmi</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                    <input type="text" class="form-control" id="fiyat" placeholder="Fiyat" name="fiyat">
                                        <label for="fiyat" >Fiyat</label>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="ID" name="id">
                                        <label for="ID">ID</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating  custom-width" >
                                    <textarea class="form-control" id="aciklama" placeholder="aciklama" name="aciklama" ></textarea>
                                    <label for="aciklama" >Açıklama</label>
                                    </div>
                                    <br>
                                </div>
                                <div class="row g-2 text-white">
                                <div class="col-4">
                                    <button class="btn btn-primary text-white w-100 py-3 " type="submit" name="buton1">Ekle</button>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-primary text-white w-100 py-3" type="submit" name="buton2">Düzenle</button>
                                </div>
                                <div class="col-4">
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
               
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="editing.php" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="editing2.php" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="editing3.php" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>                
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