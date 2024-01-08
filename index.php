<?php
  session_start();
  include "koneksi.php";
  $sqla = mysql_query("select * from anggota where username='$_SESSION[userag]'");
  $ra = mysql_fetch_array($sqla);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ayam </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div class="container1">
  <div class="grid">
   
  <div class="dh12" style="border:5px solid #009933; margin:  15px 0 0 0;">
   <img style="margin-bottom:2px;"  src="image/ayam.jpg" width="100%" />
  </div>
  </div>
</div>
<div class="container2" style="margin-top: -20px;">
  <ul id="menu">
  <li><a href='./'>Home</a></li>
    <li><a href='index.php?p=produkdetail&idp=22'>Produk</a></li>
    <li><a href='index.php?p=cara'>Cara Pembelian</a></li>
<?php
if(!empty($_SESSION["userag"]) and !empty($_SESSION["passag"])){
  echo " <li><a href='?p=keranjangbelanja&ida=$ra[idanggota]'>Keranjang Saya</a> </li> ";
  echo " <li><a href='?p=order&ida=$ra[idanggota]'>Pesanan Saya</a></li> ";
  echo " <li><a href='?p=konfirmasi&ida=$ra[idanggota]'>Konfirmasi Pembayaran</a> </li> ";
  echo " <li><a href='?p=logout'>Logout</a> </li>";
}else{
  echo " <li><a href='?p=login'>Login</a> </li> ";
  echo " <li><a href='?p=register'>Register</a> </li>";
}
?>

  </ul>
</div>
<div class="container4">
  <div class="grid">
  <?php
  if($_GET["p"] == "produkdetail"){
    include "produkdetail.php";
  }else if($_GET["p"] == "register"){
    include "register.php";
  }else if($_GET["p"] == "login"){
    include "login.php";
	  }else if($_GET["p"] == "cara"){
    include "cara.php";
	  }else if($_GET["p"] == "profil"){
    include "profil.php";
  }else if($_GET["p"] == "logout"){
    include "logout.php";
  }else if($_GET["p"] == "keranjang"){
    include "keranjang.php";
  }else if($_GET["p"] == "keranjangedit"){
    include "keranjangedit.php";
  }else if($_GET["p"] == "keranjangdel"){
    include "keranjangdel.php";
  }else if($_GET["p"] == "keranjangbelanja"){
    include "keranjangbelanja.php";
  }else if($_GET["p"] == "selesaibelanja"){
    include "selesaibelanja.php";
  }else if($_GET["p"] == "selesaibelanjaaksi"){
    include "selesaibelanjaaksi.php";
  }else if($_GET["p"] == "konfirmasi"){
    include "konfirmasi.php";
  }else if($_GET["p"] == "order"){
    include "order.php";
  }else if($_GET["p"] == "orderdetail"){
    include "orderdetail.php";
  }else{
    include "produk.php";
  }
  
  ?>
  </div>
</div>
<div class="container5">
  <?php include "footer.php"; ?>
</div>
</body>
</html>
