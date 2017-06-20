<?php
	$NAMA 			= $_POST['NAMA_USER'];
	$HAK_AKSES 	= $_POST['HAK_AKSES'];
	$PASSW1			= $_POST['PASSW'];
	$PASSW 			= md5($PASSW1);

	$t=mysql_query("insert into tbl_user values('','$NAMA','$PASSW','$HAK_AKSES')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=admin'</script>";	
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=admin'</script>";
	    }
?>
