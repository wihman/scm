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
	                        		<h3 class="panel-title"><i class="fa fa-users"></i> Edit Data Kemiskinan</h3> 
				</td>
			</tr>
			<form method="POST" action="home.php?hal=edit_logic_kemiskinan&id=<?php echo $id_kemiskinan ?>">
			<tr>
				<td>
					<table class="table">
						<tr>
					          		<td align="right">Kecamatan</td>
					          		<td>:</td>
					          		<td>
					          			<select class="form-control" name="id_kecamatan" id="id_kecamatan">
					          				<?php
					          					$id_kecamatan_ = $y1['KECAMATAN'];
					          					$m=mysql_query("Select * from tbl_kecamatan where id='$id_kecamatan_'");
					          					$m1=mysql_fetch_array($m);
					          				?>
					          				<option value="<?php echo $m1['id'] ?>"><?php echo $m1['nama_kecamatan'] ?></option>
					          				<option>...</option>
					          				<?php
					          					$d=mysql_query("Select * from tbl_kecamatan");
					          					while ($d1=mysql_fetch_array($d)) {
					          				?>
					          				<option value="<?php echo $d1['id'] ?>"><?php echo $d1['nama_kecamatan'] ?></option>
					          				<?php
					          					}
					          				?>
					          			</select>
					          		</td>
					          	</tr>
					          	<tr>
					          		<td align="right">Kelurahan</td>
					          		<td>:</td>
					          		<td>
					          			<select class="form-control" id="id_kelurahan" name="id_kelurahan">
					          				<?php
					          					$id_kelurahan_ = $y1['KELURAHAN'];
					          					$m9=mysql_query("Select * from tbl_kelurahan where id='$id_kelurahan_'");
					          					$m19=mysql_fetch_array($m9);
					          				?>
					          				<option value="<?php echo $m19['id'] ?>"><?php echo $m19['nama_kelurahan'] ?></option>
					          				<option value="">...</option>
					          			</select>
					          		</td>
					          	</tr>
					          	<tr>
					          		<td align="right">Kategori</td>
					          		<td>:</td>
					          		<td>	
					          			<select class="form-control" name="KATEGORI">
					          				<?php
					          					$id_kategori_ = $y1['KATEGORI'];
					          					$m8=mysql_query("Select * from tbl_kategori where id='$id_kategori_'");
					          					$m18=mysql_fetch_array($m8);
					          				?>
					          				<option value="<?php echo $m18['id'] ?>"><?php echo $m18['nama_kategori'] ?></option>
					          				<?php
					          					$k=mysql_query("Select * from tbl_kategori");
					          					while ($k1=mysql_fetch_array($k)) {
					          				?>
					          				<option value="<?php echo $k1['id'] ?>"><?php echo $k1['nama_kategori'] ?></option>
					          				<?php
					          					}
					          				?>
					          			</select>
					          		</td>
					          	</tr>
					          	<tr>
					          		<td align="right">Jenis</td>
					          		<td>:</td>
					          		<td>	
					          			<select class="form-control" name="JENIS">
					          				<?php
					          					$id_jenis_ = $y1['JENIS'];
					          					$m7=mysql_query("Select * from tbl_jenis where id='$id_jenis_'");
					          					$m17=mysql_fetch_array($m7);
					          				?>
					          				<option value="<?php echo $m17['id'] ?>"><?php echo $m17['nama_jenis'] ?></option>
					          				<?php
					          					$k5=mysql_query("Select * from tbl_jenis");
					          					while ($k15=mysql_fetch_array($k5)) {
					          				?>
					          				<option value="<?php echo $k15['id'] ?>"><?php echo $k15['nama_jenis'] ?></option>
					          				<?php
					          					}
					          				?>
					          			</select>
					          		</td>
					          	</tr>
					          	<tr>
					          		<td align="right">Nama</td>
					          		<td>:</td>
					          		<td><input type="text" class="form-control" name="NAMA" value="<?php echo $y1['NAMA'] ?>"></td>
					          	</tr>
					          	<tr>
					          		<td align="right">NIK</td>
					          		<td>:</td>
					          		<td><input type="text" class="form-control" name="NIK" value="<?php echo $y1['NIK'] ?>"></td>
					          	</tr>
					          	<tr>
					          		<td align="right">No. KK</td>
					          		<td>:</td>
					          		<td><input type="text" class="form-control" name="NO_KK" value="<?php echo $y1['NO_KK'] ?>"></td>
					          	</tr>
					          	<tr>
					          		<td align="right">Jenis Kelamin</td>
					          		<td>:</td>
					          		<td><input type="text" class="form-control" name="JK" value="<?php echo $y1['JK'] ?>"></td>
					          	</tr>
					          	<tr>
					          		<td align="right">Alamat</td>
					          		<td>:</td>
					          		<td><input type="text" class="form-control" name="ALAMAT" value="<?php echo $y1['ALAMAT'] ?>"></td>
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