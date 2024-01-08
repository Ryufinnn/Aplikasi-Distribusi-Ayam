<form name="form1" method="post" action="" enctype="multipart/form-data">
  <input name="namajasa" type="text" id="namajasa" placeholder="Nama Kota">  
  <input name="tarif" type="text" id="tarif" placeholder="Tarif per Kg">  
  <input type="submit" name="simpan" value="SIMPAN">
</form>

<?php
include "koneksi.php";
if($_POST["simpan"]){
	$sqladm = mysql_query("select * from admin where username='$_SESSION[useradm]'");
	$radm = mysql_fetch_array($sqladm);
   
	$sqlj = mysql_query("insert into jasakirim (idadmin, namajasa,  tarif) values ('$radm[idadmin]', '$_POST[namajasa]', '$_POST[tarif]')");
	if($sqlj){
		echo "Kota Berhasil Disimpan";
	}else{
		echo "Gagal Menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=kotaview'>";
}
?>