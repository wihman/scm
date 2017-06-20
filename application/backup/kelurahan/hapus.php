<?php
	$kelurahan = $_GET['id'];

	$r=mysql_query("delete from tbl_kelurahan where id='$kelurahan'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=kelurahan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=kelurahan'</script>";
	    }
?>