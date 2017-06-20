<?php
include "../koneksi.php";
$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

if ($pass<>$pass2) {
	echo "Password baru dan konfirmasi password tidak sesuai";
}else{
$session_user = $_SESSION['id_session'];
$pass3=md5($pass);
$u=mysql_query("update tbl_admin set PASS='$pass3' where NAMA='$username'");
if($u){
        echo "<script>alert('Berhasil Menyimpan')
        window.location = 'home.php'</script>";
    }
    else
    {
        echo "<script>alert('Gagal Menyimpan')
        window.location = 'home.php'</script>";
    }
}
?>