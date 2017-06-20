<?php
	$kecamatan = $_GET['id'];

	$r=mysql_query("delete from tbl_kecamatan where id='$kecamatan'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=kecamatan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=kecamatan'</script>";
	    }
?>