<?php
include "db.php";
$page=$_GET['hal'];

// if ($page=="home") {
// include "beranda.php";
if ($page=="home") {
include "application/home/home.php";
} elseif ($page=="") {
include "beranda.php";

// Administrator
} elseif ($page=="admin") {
include "application/admin/index.php";
} elseif ($page=="simpan_admin") {
include "application/admin/simpan.php";
} elseif ($page=="edit_admin") {
include "application/admin/edit_ui.php";
} elseif ($page=="edit_logic") {
include "application/admin/edit_logic.php";
} elseif ($page=="hapus_admin") {
include "application/admin/hapus_admin.php";

// Produk
} elseif ($page=="produk") {
include "application/produk/index.php";
} elseif ($page=="simpan_produk") {
include "application/produk/simpan.php";
} elseif ($page=="edit_produk") {
include "application/produk/edit_ui.php";
} elseif ($page=="edit_logic_produk") {
include "application/produk/edit_logic.php";
} elseif ($page=="hapus_produk") {
include "application/produk/hapus.php";

// kategori
} elseif ($page=="kategori") {
include "application/kategori/index.php";
} elseif ($page=="simpan_kategori") {
include "application/kategori/simpan.php";
} elseif ($page=="edit_kategori") {
include "application/kategori/edit_ui.php";
} elseif ($page=="edit_logic_kategori") {
include "application/kategori/edit_logic.php";
} elseif ($page=="hapus_kategori") {
include "application/kategori/hapus.php";

// kemiskinan
} elseif ($page=="kemiskinan") {
include "application/kemiskinan/index.php";
} elseif ($page=="simpan_kemiskinan") {
include "application/kemiskinan/simpan.php";
} elseif ($page=="edit_kemiskinan") {
include "application/kemiskinan/edit_ui.php";
} elseif ($page=="edit_logic_kemiskinan") {
include "application/kemiskinan/edit_logic.php";
} elseif ($page=="hapus_kemiskinan") {
include "application/kemiskinan/hapus.php";

// kecamatan
} elseif ($page=="kecamatan") {
include "application/kecamatan/index.php";
} elseif ($page=="simpan_kecamatan") {
include "application/kecamatan/simpan.php";
} elseif ($page=="edit_kecamatan") {
include "application/kecamatan/edit_ui.php";
} elseif ($page=="edit_logic_kecamatan") {
include "application/kecamatan/edit_logic.php";
} elseif ($page=="hapus_kecamatan") {
include "application/kecamatan/hapus.php";

// kelurahan
} elseif ($page=="kelurahan") {
include "application/kelurahan/index.php";
} elseif ($page=="simpan_kelurahan") {
include "application/kelurahan/simpan.php";
} elseif ($page=="edit_kelurahan") {
include "application/kelurahan/edit_ui.php";
} elseif ($page=="edit_logic_kelurahan") {
include "application/kelurahan/edit_logic.php";
} elseif ($page=="hapus_kelurahan") {
include "application/kelurahan/hapus.php";

// jenis
} elseif ($page=="jenis") {
include "application/jenis/index.php";
} elseif ($page=="simpan_jenis") {
include "application/jenis/simpan.php";
} elseif ($page=="edit_jenis") {
include "application/jenis/edit_ui.php";
} elseif ($page=="edit_logic_jenis") {
include "application/jenis/edit_logic.php";
} elseif ($page=="hapus_jenis") {
include "application/jenis/hapus.php";

// Ganti Kata Sandi
} elseif ($page=="ganti_sandi") {
include "application/ganti_sandi.php";

} else {
include "beranda.php" ;
}
?>
