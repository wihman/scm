<?php
	$produk = $_GET['id'];

	$r=mysql_query("delete from tbl_sparepart where id='$produk'");
	if($r){
	        echo "<script>alert('Berhasil Menghapus')
	        window.location = 'home.php?hal=produk'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menghapus')
	        window.location = 'home.php?hal=produk'</script>";
	    }
?>
