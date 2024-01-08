<?php 
$bln_ini=date("Y-m");
	?>

<h3 align="center"><span class="glyphicon glyphicon-briefcase"></span>  Laporan Pemesanan Perbulan</h3>
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<form name="f1" method=post action="cetakperbulan.php" target="_blank">
						<input type="month" name="bulan" class="form-control" value="<?php echo $bln_ini;?>" >

<input type="submit" name="simpan" value="Print" class="btn btn-success" style="width: 70px;">
</form>
						</div>
                        <!-- /.panel-heading -->
                       
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
	