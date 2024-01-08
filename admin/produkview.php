<?php
	$sqlp = mysql_query("select * from produk order by tglpost desc");
	//echo "<a href='?p=produkadd'><div class='btn btn-more'>Tambah Produk</div></a><p>";
	echo "<table border='0' width='90%'>";
	echo "<tr align='center'>";
	echo "<th>No</th>";
	echo "<th width='20%'>Foto</th>";
	echo "<th>Keterangan</th>";
	echo "<th width='15%'>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rp = mysql_fetch_array($sqlp)){
	  
		echo "<tr>";
		echo "<td align='center'>$no</td>";
		echo "<td valign='top'><img src='../fotoproduk/$rp[foto1]' width='100%'></td>";
		echo "<td><h3>$rp[namaproduk]</h3>
		Rp. $rp[hargaproduk] 
		<br>Sisa $rp[stok] Unit
		
		<p><b>Detail Produk :</b> 
		<br>$rp[detailproduk]</td>";
		echo "<td align='center'><a href='?p=produkedit&idp=$rp[idproduk]'>Ubah</a> | 
				  <a href='?p=produkdel&idp=$rp[idproduk]'>Hapus</a></td>";
		echo "</tr>";
		$no++;
	}	
	echo "</table>";
?>