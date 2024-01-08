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
						      Laporan Data Pemesanan Ayam<br>7 Berlian Farm<br>Laporan Perhari<br><hr> Tanggal : <?php echo " $_POST[hari]";?></div>
							 </td>
							</tr>
							</table>
</div>

<table id='theList' border=1 width='100%' class='table table-bordered table-striped' cellspacing="0">
				<tr><th >No.</th>
				<th>Id Order</th>
				<th>Nama Produk</th>
				<th>Tanggal Order</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
</tr>
<?php
$sql = mysql_query("SELECT * FROM orders, orderdetail, produk WHERE orders.idorder = orderdetail.idorder AND orderdetail.idproduk = produk.idproduk AND orders.tglorder LIKE '$_POST[hari]%'");
$no=1;
while($r = mysql_fetch_array($sql)){

?>
<tr>
	<td class='td' align='center'><span class="style3"><?php echo $no; ?></span></td>

					<td align="center">P00-<?php echo $r['idorder']; ?></td>
					<td><?php echo $r['namaproduk']; ?></td>
					<td align="center"><?php echo $r['tglorder']; ?></td>
					<td align="right">Rp.    <?php echo number_format($r['hargaproduk'], 2, ".", ","); ?></td>
					<td align="center"><?php echo $r['jumlahbeli']; ?></td>
					<td align="right">Rp.    <?php echo number_format($r['subtotal'], 2, ".", "."); ?></td>
</tr>
<?
$no++;
$total+=$r['subtotal'];
}
?>
<tr>
<td colspan="6">
<div align="center">Total Keseluruhan </div></td>
<td align="right">Rp.<?php echo number_format($total, 2, ".", ","); ?> </td>
</tr>
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

