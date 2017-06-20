<?php
	$id_kecamatan = $_POST['id_kecamatan'];
	$id_kelurahan = $_POST['id_kelurahan'];
	$KATEGORI = $_POST['KATEGORI'];
	$JENIS = $_POST['JENIS'];
	$NAMA = $_POST['NAMA'];
	$NIK = $_POST['NIK'];
	$NO_KK = $_POST['NO_KK'];
	$JK = $_POST['JK'];
	$ALAMAT = $_POST['ALAMAT'];
	$TANGGAL = date('Y-m-d');
	$TAHUN = date('Y');
	
	$r=mysql_query("select * from tbl_kemiskinan where NIK='$NIK'");
	$r1=mysql_num_rows($r);
	if ($r1 > 0) {
	        echo "<script>alert('Data yang anda masukkan telah ada sebelumnya')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	}else{
	$t=mysql_query("insert into tbl_kemiskinan values('','$id_kecamatan','$id_kelurahan','$KATEGORI','$JENIS','$NIK','$NAMA','$NO_KK','$JK','$ALAMAT','','$TANGGAL','$TAHUN')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=kemiskinan'</script>";
	    }
	}
?>