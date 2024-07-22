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
        $sifre = $_POST["sifre"];
       

        // SQL sorgusunu hazırlayın
        $sql = "INSERT INTO admin (kullaniciadi, sifre) VALUES ('$isim', '$sifre')";

        // Sorguyu çalıştırın
        if ($baglanti->query($sql) === TRUE) {
            echo "Kişi başarıyla eklendi.";
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
    <div class="container-fluid  ">
        <main class="tm-main">
            <!-- Search form -->
                    
    <div class="col-12 align-items-center justify-content-center ">
                <center>
            <h2 text-center >Yeni Admin Ekleme Menüsü</h2>
                </center>
  <!-- Veri ekleme formu buraya eklenebilir -->

          <div class="bg-dark d-flex align-items-center justify-content-center">
                        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Ekleme</h5>
                            <h1 class="text-white mb-4">Admin Ekleme</h1>
                            <form method="poxtrst" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                                <div class="row g-4">
                                    <div class="col-md-9">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Kullanıcı Adı" name="isim">
                                            <label for="name">Kullanıcı Adı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-floating">
                                        <input type="text" class="form-control" id="sifre" placeholder="Şifre" name="sifre">
                                            <label for="sifre" >Şifre</label>
                                        
                                        </div>
                                    </div>
                                
                                    
                                    <div class="row g-2 text-white">
                                    <div class="col-4 p-2">
                                        <button class="btn btn-primary text-white w-100 py-3 " type="submit" name="buton1">Ekle</button>
                                    </div>
                                    
                                </div>
                                </div>
                            </form>
                        </div>
                </div>


          
  <script src="script.js"></script>
                
            </div>
           
                   
                    </nav>
                </div>                
            </div>            
           
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>