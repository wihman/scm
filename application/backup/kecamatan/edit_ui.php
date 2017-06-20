<?php
	$id_kecamatan = $_GET['id'];
	$y=mysql_query("select * from tbl_kecamatan where id='$id_kecamatan'");
	$y1=mysql_fetch_array($y);
?>	
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<td>
					<div class="panel-heading" style="background-color:#204E8A;color:white">
	                        		<h3 class="panel-title"><i class="fa fa-leaf"></i> Edit Data Kecamatan</h3> 
				</td>
			</tr>
			<form method="POST" action="home.php?hal=edit_logic_kecamatan&id=<?php echo $id_kecamatan ?>">
			<tr>
				<td>
					<table class="table">
				          	<tr>
				          		<td>Nama Kecamatan</td>
				          		<td>:</td>
				          		<td><input type="text" class="form-control" name="nama_kecamatan" value="<?php echo $y1['nama_kecamatan'] ?>"></td>
				          	</tr>
				          </table>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Update</button>
					<a href="home.php?hal=kategori"><button type="button" class="btn btn-danger"><span class="fa fa-times"></span> Batal</button></a>
				</td>
			</tr>
			</form>
		</table>
	</div>
</div>