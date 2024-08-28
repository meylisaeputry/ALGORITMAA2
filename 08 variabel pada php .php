<?php
$nisn1 ="meylisa";
$harga = 1000;
$nama_barang = "Kopi C++";
$harga = 4000;
$stok = 70;
// membuat variabel baru
$stok = 65;

// mengisi ulang variabel dengan nilai baru
$stok = 54;
//1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
//Contoh: ❌ Salah
//$!nama = "";
//$46rosi = "";
//Contoh: ✔️ Benar
$nama = "meylisa";
$rosi46 = "lisa";
//2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
//Contoh:
$nama_barang = "Laptop acer";
$namaPembeli = "Meylisa"; //  menggunakan camelCase

//3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
//Contoh:
$nama_barang = "Laptop acer";
$namaPembeli = "Meylisa";
$harga = 6000000;

//4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
//Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "Php";
$BELAJAR = "Css";
$belajar = "Html";

//==================== cara mencetak ====================
echo
$nisn1,"<p>".
$harga,"<p>".
$nama_barang,"<p>".
$harga,"<p>".
$stok,"<p>".
$nama,"<p>".
$rosi46,"<p>".
$nama_barang,"<p>".
$namaPembeli,"<p>".
$nama_barang,"<p>".
$namaPembeli,"<p>".
$harga,"<p>".
$Belajar,"<p>".
$BELAJAR,"<p>".
$belajar,"<p>";

echo "<br><br><br><br><strong>By meylisa eka putry</strong>";
