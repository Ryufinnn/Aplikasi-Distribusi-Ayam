<?php include "koneksi.php" ;
include "tglindo.php" ;
$tgl = date('d M Y');
?>
<body onLoad="javascript:print()"> 
<style type="text/css">
<!--
.style3 {font-size: 12px}
-->
.style5 {font-size: 24px}
</style>

<div class="panel-heading">
                            <table width="100%">
							<tr>
							<td><div align="center">
							<div align="center">
						      Laporan Data Produk Rumah Batik Minang<br>Kabupaten Solok<br><hr> </div>
							 </td>
							</tr>
							</table>
</div>

<table id='theList' border=1 width='100%' class='table table-bordered table-striped' cellspacing="0">
				<tr><th >No.</th>
				<th>Id Produk</th>
				<th>Kategori</th>
				<th>Nama Produk</th>
				<th>Stok</th>
				<th>Harga</th>
				<th>Tanggal Masuk</th>
				
</tr>
<?php
$sql = mysql_query("SELECT * FROM produk, kategori WHERE produk.idkat=kategori.idkat order by idproduk asc");
$no=1;
while($r = mysql_fetch_array($sql)){

?>
<tr>
	<td class='td' align='center'><span class="style3"><?php echo $no; ?></span></td>

					<td align="center">PR0-<?php echo $r['idproduk']; ?></td>
					<td><?php echo $r['namakat']; ?></td>
					<td><?php echo $r['namaproduk']; ?></td>
					<td><?php echo $r['stok']; ?></td>
					<td align="right">Rp.    <?php echo number_format($r['hargaproduk'], 2, ".", ","); ?></td>
					<td><?php echo $r['tglpost']; ?></td>
</tr>
<?
$no++;

}
?>

</table>
<br>


<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >
<tr>
<td width="63%" bgcolor="#FFFFFF">
<p align="center"><br/>
</td>
 <td width="37%" bgcolor="#FFFFFF"><div align="center"> <?php $tgl = date('d M Y');
echo " $tgl";?><br/>
Pemilik
<br/><br/>
<br/><br/>
(...............................)
<br/>
</div>
</td>
</tr></table> 

