<?php
	$id_kemiskinan = $_GET['id'];
	$y=mysql_query("select * from tbl_kemiskinan where ID='$id_kemiskinan'");
	$y1=mysql_fetch_array($y);
?>
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<td>
					<div class="panel-heading" style="background-color:#204E8A;color:white">
	                        		<h3 class="panel-title"><i class="fa fa-list"></i> Edit Data Produk</h3>
				</td>
			</tr>
			<form method="POST" action="home.php?hal=edit_logic_kemiskinan&id=<?php echo $id_kemiskinan ?>">
			<tr>
				<td>
					<table class="table">
						<tr>
          		<td align="right">Nama Spare Part</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="NAMA"></td>
          	</tr>
          	<tr>
          		<td align="right">Kategori</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="KATEGORI"></td>
          	</tr>
          	<tr>
          		<td align="right">Stok</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="STOK" value=""></td>
          	</tr>
          	<tr>
          		<td align="right">Letak Barang</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="LETAK_BARANG"></td>
          	</tr>
          	<tr>
          		<td align="right">Harga Beli</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="HARGA_BELI"></td>
          	</tr>
						<tr>
							<td align="right">Harga Jual</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="HARGA_JUAL" value=""></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Update</button>
					<a href="home.php?hal=kemiskinan"><button type="button" class="btn btn-danger"><span class="fa fa-times"></span> Batal</button></a>
				</td>
			</tr>
			</form>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	   $("#id_kecamatan").change(function(){
                                var id_kecamatan = $("#id_kecamatan").val();
                                $.ajax({
                                    url : "application/kemiskinan/kelurahan.php",
                                    data : "kecamatan=" + id_kecamatan,
                                    success:function(data){
                                        $("#id_kelurahan").html(data);
                                    }
                                });
                          });
	} );
</script>
