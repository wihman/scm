<?php
	$nama_kategori = $_POST['nama_kategori'];
	
	$r=mysql_query("select * from tbl_kategori where nama_kategori='$nama_kategori'");
	$r1=mysql_num_rows($r);
	if ($r1 > 0) {
	        echo "<script>alert('Data yang anda masukkan telah ada sebelumnya')
	        window.location = 'home.php?hal=kategori'</script>";
	}else{
	$t=mysql_query("insert into tbl_kategori values('','$nama_kategori')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=kategori'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=kategori'</script>";
	    }
	}
?>