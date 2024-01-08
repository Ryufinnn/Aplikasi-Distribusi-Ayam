<?php
if(!empty($_SESSION["userag"]) and !empty($_SESSION["passag"])){
  echo "Selamat Datang, <b>$ra[namalengkap]</b> | ";
  echo "<a href='?p=keranjangbelanja&ida=$ra[idanggota]'>Keranjang Saya</a> | ";
  echo "<a href='?p=order&ida=$ra[idanggota]'>Pesanan Saya</a> | ";
  echo "<a href='?p=konfirmasi&ida=$ra[idanggota]'>Konfirmasi Pembayaran</a> | ";
  echo "<a href='?p=logout'>Logout</a>";
}else{
  echo "<a href='?p=login'>Login</a> | ";
  echo "<a href='?p=register'>Register</a>";
}
?>
