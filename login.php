<?php
include "koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

$enkrip=md5($pass);

if (empty ($user) && ($enkrip)) {
header ("location:index.php");
} else {

$sql=mysql_query("select * from tbl_user where NAMA='$user' AND PASS='$enkrip'");
$tampil=mysql_fetch_array($sql);

if ($tampil['NAMA']==$user && $tampil['PASS']==$enkrip) {
	session_start();
	$_SESSION[id_session]				=$tampil[ID];
	// if ($_SESSION[level]=="admin" || $_SESSION[level]=="user" || $_SESSION[level]=="pimpinan" || $_SESSION[level]=="perlengkapan") {
	header('location:home.php?hal=home');
	// } else {
	// echo "<script>alert('Login tidak berhasil, username $user tidak valid ');document.location='index.php'</script>";
	// }
} else {
header("location:index.php");
}
}
?>
