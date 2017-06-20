
<?php
	include "../../koneksi.php";
	$kecamatan2 = $_GET['kecamatan'];
	$j67=mysql_query("Select * from tbl_kelurahan where id_kecamatan='$kecamatan2'");
	echo "<option value=''> -- Pilih Kecamatan -- </option>";
	while($j1=mysql_fetch_array($j67)){
		// echo "<option value=$j1['ID']>$j1['NAMA_ANGGARAN']</option> \n";
		echo "<option value='".$j1['id']."'>".$j1['nama_kelurahan']."</option>";
	}
?>