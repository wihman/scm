<?php
	$id_jenis = $_GET['id'];
	$nama_jenis = $_POST['nama_jenis'];

	$u=mysql_query("update tbl_jenis 
		set nama_jenis='$nama_jenis'
		where id='$id_jenis'");
	if($u){
	        echo "<script>alert('Berhasil Memperbaharui')
	        window.location = 'home.php?hal=jenis'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbaharui')
	        window.location = 'home.php?hal=jenis'</script>";
	    }
?>