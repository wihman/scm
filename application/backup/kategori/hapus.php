<?php
	$kategori = $_GET['id'];

	$r=mysql_query("delete from tbl_kategori where id='$kategori'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=kategori'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=kategori'</script>";
	    }
?>