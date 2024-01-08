<?php
	$sqlj = mysql_query("delete from jasakirim where idjasa='$_GET[idj]'");
	if($sqlj){
		echo "Jasa Kirim Berhasil Dihapus";
	}else{
		echo "Gagal Menghapus";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kotaview'>";
?>