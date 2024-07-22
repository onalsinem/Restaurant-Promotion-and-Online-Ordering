// document.addEventListener("DOMContentLoaded", function() {
//     var form = document.querySelector("form");
//     form.addEventListener("submit", function(e) {
//       e.preventDefault(); // Formun otomatik olarak gönderilmesini engellemek için
      
//       submitForm();
//     });
//   });
  
//   function submitForm() {
//     // Form verilerini al
//     var isim = document.getElementById("isim").value;
//     var soyad = document.getElementById("soyad").value;
//     var il = document.getElementById("il").value;
//     var ilce = document.getElementById("ilce").value;
//     var adres = document.getElementById("adres").value;
//     var mail = document.getElementById("mail").value;
//     var telefon = document.getElementById("telefon").value;
    
//     // AJAX kullanarak verileri kaydet
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "onay.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//     xhr.onreadystatechange = function() {
//       if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
//         // İstek tamamlandıktan sonra yönlendirme yapabilirsiniz
//         window.location.href = "onay.php";
//       }
//     };
    
//     // Form verilerini isteğe ekleyin
//     var data = "isim=" + encodeURIComponent(isim) +
//                "&soyad=" + encodeURIComponent(soyad) +
//                "&il=" + encodeURIComponent(il) +
//                "&ilce=" + encodeURIComponent(ilce) +
//                "&adres=" + encodeURIComponent(adres) +
//                "&mail=" + encodeURIComponent(mail) +
//                "&telefon=" + encodeURIComponent(telefon);
    
//     // İsteği gönder
//     xhr.send(data);
 
// }
