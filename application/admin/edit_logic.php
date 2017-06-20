<?php
	$id_admin = $_GET['id'];
	$NAMA = $_POST['NAMA_USER'];
	$PASSW1 = $_POST['PASSW'];
	$HAK_AKSES = $_POST['HAK_AKSES'];

	$PASSW = md5($PASSW1);

	$u=mysql_query("update tbl_user set NAMA='$NAMA', PASS='$PASSW', HAK_AKSES='$HAK_AKSES' where ID='$id_admin'");
	if($u){
	        echo "<script>alert('Berhasil Memperbaharui')
	        window.location = 'home.php?hal=admin'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbaharui')
	        window.location = 'home.php?hal=admin'</script>";
	    }
?>
