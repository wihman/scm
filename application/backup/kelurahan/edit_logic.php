<?php
	$id_kelurahan = $_GET['id'];
	$id_kecamatan = $_POST['id_kecamatan'];
	$nama_kelurahan = $_POST['nama_kelurahan'];

	$u=mysql_query("update tbl_kelurahan 
		set nama_kelurahan='$nama_kelurahan',
		id_kecamatan='$id_kecamatan'
		where id='$id_kelurahan'");
	if($u){
	        echo "<script>alert('Berhasil Memperbaharui')
	        window.location = 'home.php?hal=kelurahan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbaharui')
	        window.location = 'home.php?hal=kelurahan'</script>";
	    }
?>