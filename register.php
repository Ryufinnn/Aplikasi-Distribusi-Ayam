<div id="formtambah">
<fieldset>
<h3>FORM REGISTRASI MEMBER</h3>
<form name="form1" method="post" action="">
  <input name="username" type="text" id="username" placeholder="Username">
  <input name="password" type="text" id="password" placeholder="Password">
  <input name="namalengkap" type="text" id="namalengkap" placeholder="Nama Lengkap">
  <p>Jenis Kelamin :
  <input name="jk" type="radio" value="L"> Laki-Laki
  <input name="jk" type="radio" value="P"> Perempuan
  <select name="tgl" id="tgl">
  <?php
  echo "<option value=''>Tanggal Lahir</option>";
  for($i=1; $i<=31; $i++){
    echo "<option value='$i'>$i</option>";
  }
  ?>
  </select>
  <select name="bln" id="bln">
  <?php
  echo "<option value=''>Bulan Lahir</option>";
  for($j=1; $j<=12; $j++){
    if($j==1){ $bulan = "Januari"; }
    else if($j==2){ $bulan = "Februari"; }
    else if($j==3){ $bulan = "Maret"; }
    else if($j==4){ $bulan = "April"; }
    else if($j==5){ $bulan = "Mei"; }
    else if($j==6){ $bulan = "Juni"; }
    else if($j==7){ $bulan = "Juli"; }
    else if($j==8){ $bulan = "Agustus"; }
    else if($j==9){ $bulan = "September"; }
    else if($j==10){ $bulan = "Oktober"; }
    else if($j==11){ $bulan = "November"; }
    else if($j==12){ $bulan = "Desember"; }
    echo "<option value='$j'>$bulan</option>";
  }
  ?>
  </select>
 
  <select name="thn">
  <option value="">Tahun Lahir</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>
  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
   <option value="1998">1998</option>
  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
   <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  </select>
  <textarea name="alamat" rows="5" id="alamat" placeholder="Alamat Lengkap"></textarea>
  <input name="nohp" type="text" id="nohp" placeholder="No. Handphone">
  <input name="register" type="submit" id="register" value="REGISTER">
</form>
<?php
include "koneksi.php";
if($_POST["register"]){
  $sqla = mysql_query("insert into anggota (username, password, namalengkap, jk, tgllahir, alamat, nohp, tgldaftar) values ('$_POST[username]', '$_POST[password]', '$_POST[namalengkap]', '$_POST[jk]', '$_POST[thn]-$_POST[bln]-$_POST[tgl]', '$_POST[alamat]', '$_POST[nohp]', NOW())");
  if($sqla){
    echo "Proses Registrasi Berhasil";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=login'>";
  }else{
    echo "Proses Registrasi Gagal";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=register'>";
  }
}
?>
</fieldset>
</div>