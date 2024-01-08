


<form name="form1" method="post" action="" enctype="multipart/form-data">
 <input name="namaproduk" type="text" id="namaproduk" placeholder="Nama">
 <input name="hargaproduk" type="text" id="hargaproduk" placeholder="Harga" />
 <input name="stok" type="text" id="stok" placeholder="Stok" />
 <textarea name="detailproduk" id="detailproduk" placeholder="Keterangan"></textarea>

 <input name="foto1" type="file" id="foto1" />
 <input name="foto2" type="file" id="foto2" />
 <input name="simpan" type="submit" id="simpan" value="SIMPAN PRODUK">
</form>

<?php
include "koneksi.php";
if($_POST["simpan"]){
   $nmfoto1  = $_FILES["foto1"]["name"];
   $lokfoto1 = $_FILES["foto1"]["tmp_name"];
	if(!empty($lokfoto1)){
		move_uploaded_file($lokfoto1, "../fotoproduk/$nmfoto1");
	}
	
   $nmfoto2  = $_FILES["foto2"]["name"];
   $lokfoto2 = $_FILES["foto2"]["tmp_name"];
	if(!empty($lokfoto2)){
		move_uploaded_file($lokfoto2, "../fotoproduk/$nmfoto2");
	}
	
	$sqlpr = mysql_query("insert into produk (namaproduk, hargaproduk, stok,  detailproduk,   foto1, foto2, tglpost) values ('$_POST[namaproduk]', '$_POST[hargaproduk]', '$_POST[stok]', '$_POST[detailproduk]', '$nmfoto1', '$nmfoto2', NOW())");
	
	if($sqlpr){
		echo "Data Produk Berhasil Disimpan";
	}else{
		echo "Gagal Menyimpan";
	}
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=produkview'>";
}
?>