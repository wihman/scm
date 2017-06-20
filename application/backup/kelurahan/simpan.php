<?php
	$id_kecamatan = $_POST['id_kecamatan'];
	$nama_kelurahan = $_POST['nama_kelurahan'];

	$r=mysql_query("select * from tbl_kelurahan where nama_kelurahan='$nama_kelurahan'");
	$r1=mysql_num_rows($r);
	if ($r1 > 0) {
	        echo "<script>alert('Data yang anda masukkan telah ada sebelumnya')
	        window.location = 'home.php?hal=kelurahan'</script>";
	}else{
	$t=mysql_query("insert into tbl_kelurahan values('','$id_kecamatan','$nama_kelurahan')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=kelurahan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=kelurahan'</script>";
	    }
	}
?>