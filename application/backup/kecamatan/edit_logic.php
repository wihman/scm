<?php
	$id_kecamatan = $_GET['id'];
	$nama_kecamatan = $_POST['nama_kecamatan'];

	$u=mysql_query("update tbl_kecamatan 
		set nama_kecamatan='$nama_kecamatan'
		where id='$id_kecamatan'");
	if($u){
	        echo "<script>alert('Berhasil Memperbaharui')
	        window.location = 'home.php?hal=kecamatan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbaharui')
	        window.location = 'home.php?hal=kecamatan'</script>";
	    }
?>