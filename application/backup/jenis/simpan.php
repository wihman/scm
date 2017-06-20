<?php
	$nama_jenis = $_POST['nama_jenis'];
	
	$r=mysql_query("select * from tbl_jenis where nama_jenis='$nama_jenis'");
	$r1=mysql_num_rows($r);
	if ($r1 > 0) {
	        echo "<script>alert('Data yang anda masukkan telah ada sebelumnya')
	        window.location = 'home.php?hal=jenis'</script>";
	}else{
	$t=mysql_query("insert into tbl_jenis values('','$nama_jenis')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=jenis'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=jenis'</script>";
	    }
	}
?>