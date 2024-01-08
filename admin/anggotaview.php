<?php
	$sqla = mysql_query("select * from anggota order by idanggota asc");
	echo "<table border='0' width='90%'>";
	echo "<tr align='center'>";
	echo "<th width='10%'>No</th>";
	echo "<th width='20%'>Nama</th>";
	echo "<th width='10%'>Jenis Kelamin</th>";
	echo "<th width='20%'>No Hp</th>";
	echo "<th width='20%'>Alamat</th>";
	echo "<th>Tanggal Daftar</th>";
	echo "</tr>";
	$no = 1;
	while($ra = mysql_fetch_array($sqla)){
		echo "<tr>";
		echo "<td valign='top' align='center'><h3>$no</h3></td>";
		
		echo "<td>$ra[namalengkap] </td>";
		echo "<td>$ra[jk] </td>";
		echo "<td>$ra[nohp] </td>";
		echo "<td>$ra[alamat] </td>";
		echo "<td>$ra[tgldaftar] </td>";
		echo "</tr>";
		$no++;
	}	
	echo "</table>";
?>