<div id="view">
<fieldset>
<?php
	include "koneksi.php";
	$sqla = mysql_query("select * from anggota where username='$_SESSION[userag]'");
	$ra = mysql_fetch_array($sqla);
	
	$sqlo = mysql_query("select * from orders where idanggota='$ra[idanggota]'");
	
	echo "<br>";
	echo "<table border='0' width='100%'>";
	echo "<tr>";
		echo "<td width='5%'>No.</td>";
		echo "<td width='10%'>No Order</td>";
		echo "<td>Nama Pemesan</td>";
		echo "<td>Tanggal Pemesanan</td>";
		echo "<td>Status Pemesanan</td>";
		echo "<td>Status Pembayaran</td>";
		echo "<td>Aksi</td>";
	echo "</tr>";
	$no = 1;
	while($ro = mysql_fetch_array($sqlo)){
		$sqlod = mysql_query("select * from orders where idorder='$ro[idorder]'");
		$rod = mysql_fetch_array($sqlod);
		$sqla = mysql_query("select * from anggota where idanggota='$rod[idanggota]'");
		$ra = mysql_fetch_array($sqla);
		$sqlpr = mysql_query("select * from produk where idproduk='$ro[idproduk]'");
		$rpr = mysql_fetch_array($sqlpr);
		$sqlbyr = mysql_query("select * from konfirmasibayar where idorder='$ro[idorder]'");
		$rbyr = mysql_fetch_array($sqlbyr);
		if($rbyr["idorder"]==$ro["idorder"]){
			$stbyr = "Sudah Dikonfirmasi";
		}else{
			$stbyr = "Belum Dikonfirmasi";
		}
		echo "<tr>";
			echo "<td>$no</td>";
			echo "<td>$ro[idorder]</td>";
			echo "<td>$ra[namalengkap]</td>";
			echo "<td>$rod[tglorder] WIB</td>";
			echo "<td>$rod[statusorder]</td>";
			echo "<td>$stbyr</td>";
			echo "<td><a href='?p=orderdetail&ido=$ro[idorder]'><button type='button' class='btn btn-more'>Detail Order</button></a></td>";
		echo "</tr>";
		$no++;
	}
	echo "</table>";
?>
</fieldset>
</div>