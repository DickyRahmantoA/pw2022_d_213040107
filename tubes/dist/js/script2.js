// ambil elemen2 yang dibutuhkan
var keyword2 = document.getElementById("keyword2");
var klikCari = document.getElementById("klik-cari");
var container = document.getElementById("container");

// tambahkan event ketika keyword2 ditulis
keyword2.addEventListener("keyup", function () {
  // buat object ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "../ajax/ajax_cari_home.php?keyword=" + keyword2.value, true);
  xhr.send();
});
