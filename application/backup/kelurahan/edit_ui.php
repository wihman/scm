<?php
	$id_kelurahan = $_GET['id'];
	$y=mysql_query("select * from tbl_kelurahan where id='$id_kelurahan'");
	$y1=mysql_fetch_array($y);
?>	
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<td>
					<div class="panel-heading" style="background-color:#204E8A;color:white">
	                        		<h3 class="panel-title"><i class="fa fa-leaf"></i> Edit Data Kelurahan</h3> 
				</td>
			</tr>
			<form method="POST" action="home.php?hal=edit_logic_kelurahan&id=<?php echo $id_kelurahan ?>">
			<tr>
				<td>
					<table class="table">
					<tr>
						<td>Nama Kecamatan</td>
						<td>:</td>
						<td>
							<select class="form-control" name="id_kecamatan">
								<?php
									$id_kecamatan = $y1['id_kecamatan'];
									$r=mysql_query("select * from tbl_kecamatan where id='$id_kecamatan'");
									$r1=mysql_fetch_array($r);
								?>
								<option value="<?php echo $id_kecamatan ?>"><?php echo $r1['nama_kecamatan'] ?></option>
								<?php
									$o=mysql_query("Select * from tbl_kecamatan");
									while ($o1=mysql_fetch_array($o)) {
								?>
								<option value="<?php echo $o1['id'] ?>"><?php echo $o1['nama_kecamatan'] ?></option>
								<?php
									}
								?>
							</select>
						</td>
					</tr>
				          	<tr>
				          		<td>Nama Kelurahan</td>
				          		<td>:</td>
				          		<td><input type="text" class="form-control" name="nama_kelurahan" value="<?php echo $y1['nama_kelurahan'] ?>"></td>
				          	</tr>
				          </table>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Update</button>
					<a href="home.php?hal=kelurahan"><button type="button" class="btn btn-danger"><span class="fa fa-times"></span> Batal</button></a>
				</td>
			</tr>
			</form>
		</table>
	</div>
</div>