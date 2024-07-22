<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xtra Blog</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
  }
</style>
</head>
<body>
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
                <ul>
                    <li class="tm-nav-item active"><a href="kurye.php" class="tm-nav-link">
                    <i class="fa-sharp fa-solid fa-rectangle-list"></i>
                        Sipariş Listesi
                    </a></li>
                    <li class="tm-nav-item"><a href="kurye2.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Düzenleme
                    </a></li>
                    
                   
                </ul>
            </nav>
            <div class="tm-mb-65">
               
            </div>
            <p class="tm-mb-80 pr-5 text-white">
               
            </p>
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
            <h2 text-center >Siparişler</h2>
</center>
  <!-- Veri ekleme formu buraya eklenebilir -->

            
            <table class="">
            <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Soyad</th>
            <th>Adres</th>
            <th>Telefon</th>
            <th>Durum</th>
            </tr>

            <?php
    // Veritabanı bağlantısı ve sorgusu
    include ("baglan.php");
    $sorgu = "SELECT * FROM siparisbilgi";
    $sonuc = mysqli_query($baglanti, $sorgu); 

    // Verileri tablo satırlarına döngüyle yazma
    if ($sonuc->num_rows > 0) {
      while ($satir = $sonuc->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $satir["ID"] . "</td>";
        echo "<td>" . $satir["isim"] . "</td>";
        echo "<td>" . $satir["soyad"] . "</td>";
        echo "<td>" . $satir["adres"] . "</td>";
        echo "<td>" . $satir["telefon"] . "</td>";
        echo "<td>" . $satir["durum"] . "</td>";
        echo "<td>";
       // echo "<button class='duzenle-btn'>Düzenle</button>";
        //echo "<button class='sil-btn'>Sil</button>";
        echo "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='4'>Veri bulunamadı.</td></tr>";
    }

    // Bağlantıyı kapat
   
    ?>
  </table>

  <script src="script.js"></script>
                
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    
                </div>
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