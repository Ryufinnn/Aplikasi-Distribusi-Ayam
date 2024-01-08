<html>
<head>
<script language="javascript">
<!--
var image1=new Image()
image1.src="slide/1.jpg"
var image2=new Image()
image2.src="slide/2.jpg"
var image3=new Image()
image3.src="slide/3.jpg"
//-->
</script>
</head>
<body>
<left><img src="images.jpg" name="slide" width="100%" height="300">
<script>
<!--
//variable yang akan menaikan hitungan gambar
var step=1
function slideit(){
//jika browser tidak mendukung metode dokumen.image maka keluar.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<3)
step++
else
step=1
//memanggil function "slideit()" setiap 3 detik
setTimeout("slideit()",3000)
}
slideit()
//-->
</script>

</body>
</html>
