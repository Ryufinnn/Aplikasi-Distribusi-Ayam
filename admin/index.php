<?php
	session_start();
	include "koneksi.php";
?>

<link rel="stylesheet" type="text/css" href="style.css">

<?php
if(!empty($_SESSION["useradm"]) && !empty($_SESSION["passadm"])){
?>
<div class="container1">
  <div class="grid">
    <div class="dh3">
	  <ul id="menu">
		<li><a href="">MENU ADMINISTRATOR</a></li>
		<li><a href="<?php echo "?p=beranda"; ?>">Home</a></li>
		<li><a href="<?php echo "?p=produkview"; ?>">Produk</a></li>
		
		<li><a href="<?php echo "?p=order"; ?>">Order</a></li>
		<li><a href="<?php echo "?p=anggotaview"; ?>">Anggota</a></li>
		<li><a href="<?php echo "?p=kotaview"; ?>">Ongkos Kirim</a></li>
		
		<li><a href="<?php echo "?p=laporan_hari"; ?>">Laporan Perhari</a></li>
		<li><a href="<?php echo "?p=laporan_bulan"; ?>">Laporan Perbulan</a></li>
		<li><a href="<?php echo "?p=laporan_tahun"; ?>">Laporan Pertahun</a></li>
		<li><a href="<?php echo "?p=logout"; ?>">Logout</a></li>
	  </ul>
	</div>
	<div class="dh9">
	  <div id="isiadmin">	  
<?php
	if($_GET["p"] == "logout"){
		include "logout.php";
	
	}else if($_GET["p"] == "kotaview"){
		include "kotaview.php";
	}else if($_GET["p"] == "kotaadd"){
		include "kotaadd.php";
	}else if($_GET["p"] == "kotaedit"){
		include "kotaedit.php";
	}else if($_GET["p"] == "kotadel"){
		include "kotadel.php";
	}else if($_GET["p"] == "produkview"){
		include "produkview.php";
	}else if($_GET["p"] == "produkadd"){
		include "produkadd.php";
	}else if($_GET["p"] == "produkedit"){
		include "produkedit.php";
	}else if($_GET["p"] == "produkdel"){
		include "produkdel.php";
	}else if($_GET["p"] == "order"){
		include "order.php";
	}else if($_GET["p"] == "orderdetail"){
		include "orderdetail.php";
	}else if($_GET["p"] == "orderdetailstatus"){
		include "orderdetailstatus.php";
	}else if($_GET["p"] == "anggotaview"){
		include "anggotaview.php";
	}else if($_GET["p"] == "konfirmasiview"){
		include "konfirmasiview.php";
	}else if($_GET["p"] == "laporan_hari"){
		include "laporan_perhari.php";
	}else if($_GET["p"] == "laporan_bulan"){
		include "laporan_perbulan.php";
	}else if($_GET["p"] == "laporan_tahun"){
		include "laporan_pertahun.php";
	}else{
		include "home.php";
	}
?>
 	  </div>
	</div>
  </div>
</div>
<?php
}else{
	include "login.php";
}
?>
