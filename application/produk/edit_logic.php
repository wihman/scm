<?php
	$id_kemiskinan = $_GET['id'];

	$id_kecamatan = $_POST['id_kecamatan'];
	$id_kelurahan = $_POST['id_kelurahan'];
	$KATEGORI = $_POST['KATEGORI'];
	$JENIS = $_POST['JENIS'];
	$NAMA = $_POST['NAMA'];
	$NIK = $_POST['NIK'];
	$NO_KK = $_POST['NO_KK'];
	$JK = $_POST['JK'];
	$ALAMAT = $_POST['ALAMAT'];

	$u=mysql_query("update tbl_kemiskinan 
		set KECAMATAN='$id_kecamatan', 
		KELURAHAN='$id_kelurahan',
		KATEGORI='$KATEGORI',
		JENIS='$JENIS',
		NAMA='$NAMA',
		NIK='$NIK',
		NO_KK='$NO_KK',
		JK='$JK',
		ALAMAT='$ALAMAT'
		where ID='$id_kemiskinan'");
	if($u){
	        echo "<script>alert('Berhasil Memperbaharui')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbaharui')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	    }
?>