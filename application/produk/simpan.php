<?php

	$NAMA = $_POST['NAMA'];
	$KATEGORI = $_POST['KATEGORI'];
	$STOK = $_POST['STOK'];
	$LETAK_BARANG = $_POST['LETAK_BARANG'];
	$HARGA_BELI = $_POST['HARGA_BELI'];
	$HARGA_JUAL = $_POST['HARGA_JUAL'];

	$t=mysql_query("insert into tbl_sparepart values('','$NAMA','$KATEGORI','$STOK','$LETAK_BARANG','$HARGA_BELI','$HARGA_JUAL','')");
	if($t){
	        echo "<script>alert('Berhasil Menyimpan')
	        window.location = 'home.php?hal=produk'</script>";
	    }
	    else
	    {
	        echo "<script>alert('Gagal Menyimpan')
	        window.location = 'home.php?hal=produk'</script>";
	    }
?>
