<?php 
  $sqlpr = mysql_query("select * from produk where idproduk='$_GET[idp]'");
  $rpr = mysql_fetch_array($sqlpr);
  
  echo "<div class='dh4'>";
  if(!empty($rpr["foto1"])){
    $foto1 = "<img src='fotoproduk/$rpr[foto1]' width='100%' border='1'>";
  }
  echo "$foto1";
  echo "</div>";
  
  echo "<div class='dh8' align='justify'>";
  echo "<h1>$rpr[namaproduk]</h1>";
  echo "<h2>Rp. $rpr[hargaproduk] </h2>";
  echo "<h3>Tersedia $rpr[stok] Ekor</h3>";

  echo "<b>Keterangan : </b><br>$rpr[detailproduk]<p>";
  echo "<a href='?p=keranjang&idp=$rpr[idproduk]&ida=$ra[idanggota]'><button type='button' class='btn btn-more'>Pesan Sekarang</button></a>";
  echo "</div>";
?>