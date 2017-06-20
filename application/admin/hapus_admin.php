<?php
	$id_admin = $_GET['id'];

	$r=mysql_query("delete from tbl_user where ID='$id_admin'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=admin'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=admin'</script>";
	    }
?>
