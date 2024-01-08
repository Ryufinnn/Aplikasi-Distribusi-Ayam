<div id="formadd">
<fieldset>
<h3>PROSES CHECKOUT</h3>
<form name="form1" method="post" action="<?php echo "?p=selesaibelanjaaksi"; ?>">

  <input type="hidden" name="ida" value="<?php echo "$ra[idanggota]"; ?>" />
  
  <input name="namalengkap" type="text" value="<?php echo "$ra[namalengkap]"; ?>">
  
  <textarea name="alamat" rows="5"><?php echo "$ra[alamat]"; ?></textarea>
  
  <input name="nohp" type="text" value="<?php echo "$ra[nohp]"; ?>">
  
  <textarea name="alamatkirim" placeholder="Alamat Pengiriman"></textarea>
  
  <?php
	$sqlj = mysql_query("select * from jasakirim order by namajasa asc");
	echo "<select name='idjasa'>";
	echo "<option value='$rj[idjasa]'>Pilih Kota</option>";
	while($rj = mysql_fetch_array($sqlj)){
		echo "<option value='$rj[idjasa]'>$rj[namajasa]</option>";		
	}
	echo "</select>";
  ?>
  
  <input name="checkout" type="submit"  value="CHECKOUT">
</form>
</fieldset> 
</div>