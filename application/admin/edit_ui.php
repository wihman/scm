<?php
	$id_admin = $_GET['id'];
	$y=mysql_query("select * from tbl_user where ID='$id_admin'");
	$y1=mysql_fetch_array($y);
?>
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr>
				<td>
					<div class="panel-heading" style="background-color:#204E8A;color:white">
	                        		<h3 class="panel-title"><i class="fa fa-lock"></i> Data Administrator</h3>
				</td>
			</tr>
			<form method="POST" action="home.php?hal=edit_logic&id=<?php echo $id_admin ?>">
			<tr>
				<td>
					<input type="text" class="form-control" name="NAMA_USER" value="<?php echo $y1['NAMA'] ?>" placeholder="Masukkan Nama User"><br>
          					<input type="text" class="form-control" name="PASSW" placeholder="Masukkan Kata Sandi">
				</td>
			</tr>
			<tr>
				<td>
					<select class="form-control" name="HAK_AKSES">
						<option value="<?php echo $y1['HAK_AKSES'] ?>"><?php echo $y1['HAK_AKSES'] ?></option>
						<option value="">........................</option>
						<option value="admin">Administrator</option>
						<option value="kasir">Kasir</option>
						<option value="Mekanik">Mekanik</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Update</button>
					<a href="home.php?hal=admin"><button type="button" class="btn btn-danger"><span class="fa fa-times"></span> Batal</button></a>
				</td>
			</tr>
			</form>
		</table>
	</div>
</div>
