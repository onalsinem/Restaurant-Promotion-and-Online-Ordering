<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Metin Dosyası İşlemleri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        #container {
            margin: 0 auto;
            width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }
        textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Metin Dosyası İşlemleri</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="dosyaadi">Dosya Adı:</label>
            <input type="text" name="dosyaadi" id="dosyaadi">
            <input type="submit" name="dosyaolustur" value="Dosya Oluştur">
            <hr>
            <label for="yazilacakmetin">Yazılacak Metin:</label>
            <textarea name="yazilacakmetin" id="yazilacakmetin"></textarea>
            <input type="submit" name="metinyaz" value="Metin Dosyasına Yaz">
            <hr>
            <label for="okunacakdosya">Okunacak Dosya:</label>
            <select name="okunacakdosya" id="okunacakdosya">
                <?php
                    // Dosyaları listele
                    $dosyalar = glob("*.txt");
                    foreach ($dosyalar as $dosya) {
                        echo "<option value=\"$dosya\">$dosya</option>";
                    }
                ?>
            </select>
            <input type="submit" name="metinoku" value="Metin Dosyasından Oku">
            <hr>
            <label for="okunanmetin">Okunan Metin:</label>
            <textarea name="okunanmetin" id="okunanmetin" readonly></textarea>
        </form>
    </div>
    <?php
        // Dosya oluşturma işlemi
        if (isset($_POST['dosyaolustur'])) {
            $dosyaadi = $_POST['dosyaadi'];
            if (!empty($dosyaadi)) {
                $dosya = fopen("$dosyaadi.txt", "w");
                if ($dosya) {
                    echo "<script>alert('Dosya oluşturuldu.');</script>";
                    fclose($dosya);
                } else {
                    echo "<script>alert('Dosya oluşturma hatası.');</script>";
                }
            } else {
                echo "<script>alert('Dosya adı boş bırakılamaz.');</script>";
            }
        }

        // Metin dosyasına yazma işlemi
        if (isset($_POST['metinyaz'])) {
            $dosyaadi = $_POST['okunacakdosya'];
            $yazilacakmetin = $_POST['yazilacakmetin'];
            if (!empty($dosyaadi)) {
                $dosya = fopen($dosyaadi, "a");
                if ($dosya) {
                    fwrite($dosya, $yazilacakmetin . "\n");
                    fclose($dosya);
                    echo "<script>alert('Metin dosyasına yazıldı.');</script>";
                } else {
                    echo "<script>alert('Dosya açma hatası.');</script>";
                }
            } else {
                echo "<script>alert('Dosya seçilmedi.');</script>";
            }
        }

        // Metin dosyasından okuma işlemi
       if (isset($_POST['metinoku'])) {
            $dosyaadi = $_POST['okunacakdosya'];
            if (!empty($dosyaadi)) {
                $dosya = fopen($dosyaadi, "r");
                if ($dosya) {
                    $okunanmetin = fread($dosya, 10000);
                    fclose($dosya);
                    echo "<script>
                            document.getElementById('okunanmetin').value = '$okunanmetin';
                            alert('Metin dosyasından okundu.');
                        </script>";
                } else {
                    echo "<script>alert('Dosya açma hatası.');</script>";
                }
            } else {
                echo "<script>alert('Dosya seçilmedi.');</script>";
            }
        }
    ?>
</body>
</html>