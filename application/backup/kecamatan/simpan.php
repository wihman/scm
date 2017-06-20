<?php
	$nama_kecamatan = $_POST['nama_kecamatan'];
	
	$r=mysql_query("select * from tbl_kecamatan where nama_kecamatan='$nama_kecamatan'");
	$r1=mysql_num_rows($r);
	if ($r1 > 0) {
	        echo "<script>alert('Data yang anda masukkan telah ada sebelumnya')
	        window.location = 'home.php?hal=kecamatan'</script>";
	}else{
	$t=mysql_query("insert into tbl_kecamatan values('','$nama_kecamatan')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=kecamatan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=kecamatan'</script>";
	    }
	}
?>