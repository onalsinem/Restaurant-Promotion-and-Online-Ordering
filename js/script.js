// document.addEventListener("DOMContentLoaded", function() {
//   const onaylabtn = document.querySelector(".onaylabtn");
//   const telno = document.querySelector(".telno");

//   onaylabtn.addEventListener("click", function() {
//       const phoneNumber = telno.value;
//       sendVerificationCode(phoneNumber);
//   });

//   function sendVerificationCode(phoneNumber) {
//       const verificationCode = generateVerificationCode();
//       console.log(`Doğrulama kodu ${phoneNumber} numarasına gönderildi: ${verificationCode}`);
      
//       const userEnteredCode = prompt('Lütfen doğrulama kodunu girin:');
//       if (userEnteredCode === verificationCode) {
//           console.log('Doğrulama başarılı!');
          
//           window.location.href = 'index.php';
//       } else {
//           console.error('Doğrulama başarısız!');
          
//           alert('Hatalı doğrulama kodu!',);
//       }
//   }

//   // Doğrulama kodu oluşturma fonksiyonu
//   function generateVerificationCode() {
//       return Math.floor(100000 + Math.random() * 900000).toString(); // 6 basamaklı kod
//   }
// });

document.addEventListener("DOMContentLoaded", function () {
    const onaylabtn = document.querySelector(".onaylabtn");
    const telno = document.querySelector(".telno");

    onaylabtn.addEventListener("click", function () {
        const telefonNumarasi = telno.value;
        dogrulamaKoduGonder(telefonNumarasi);
    });

    function dogrulamaKoduGonder(telefonNumarasi) {
        const dogrulamaKodu = dogrulamaKoduOlustur();
        console.log(`Doğrulama kodu ${telefonNumarasi} numarasına gönderildi: ${dogrulamaKodu}`);
        console.log("dogru yer");

        const kullaniciGirdigiKod = prompt('Lütfen doğrulama kodunu girin:');
        if (kullaniciGirdigiKod === dogrulamaKodu) {
            console.log('Doğrulama başarılı!');
            window.location.href = 'onay.php'; // Doğrulama başarılıysa onay.php'ye yönlendir

        } else {
            console.error('Doğrulama başarısız!');
            alert('Hatalı doğrulama kodu!');
        }
    }

    // Doğrulama kodu oluşturma fonksiyonu
    function dogrulamaKoduOlustur() {
        return Math.floor(100000 + Math.random() * 900000).toString(); // 6 basamaklı kod
    }
});

