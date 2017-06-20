<?php
	$kemiskinan = $_GET['id'];

	$r=mysql_query("delete from tbl_kemiskinan where id='$kemiskinan'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	    }
?>