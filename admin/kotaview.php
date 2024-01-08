<?php
	$sqlj = mysql_query("select * from jasakirim order by idjasa asc");
	echo "<a href='?p=kotaadd'><div class='btn btn-more'>Tambah Kota</div></a><p>";
	echo "<table border='0' width='90%'>";
	echo "<tr align='center'>";
	echo "<th width='10%'>No</th>";
	
	echo "<th>Nama Kota</th>";
	echo "<th>Tarif</th>";
	echo "<th width='15%'>Aksi</th>";
	echo "</tr>";
	$no = 1;
	while($rj = mysql_fetch_array($sqlj)){
		echo "<tr>";
		echo "<td align='center'>$no</td>";
		echo "<td><b>$rj[namajasa]</b></td>";
		echo "<td><b>$rj[tarif]</b></td>";
		echo "<td align='center'> 
		<a href='kotadel.php?idj=$rj[id_kota]'>Hapus</a></td>";
		echo "</tr>";
		$no++;
	}	
	echo "</table>";
?>