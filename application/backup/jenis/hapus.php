<?php
	$jenis = $_GET['id'];

	$r=mysql_query("delete from tbl_jenis where id='$jenis'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=jenis'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=jenis'</script>";
	    }
?>