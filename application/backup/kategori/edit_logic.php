<?php
	$id_kategori = $_GET['id'];
	$nama_kategori = $_POST['nama_kategori'];

	$u=mysql_query("update tbl_kategori 
		set nama_kategori='$nama_kategori'
		where id='$id_kategori'");
	if($u){
	        echo "<script>alert('Berhasil Memperbaharui')
	        window.location = 'home.php?hal=kategori'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Memperbaharui')
	        window.location = 'home.php?hal=kategori'</script>";
	    }
?>