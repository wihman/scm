<?php
	include "koneksi.php";
?>
<style type="text/css">
	div.container { max-width: 1200px }
</style>
<div class="container">
	<div class="row">
		<table class="table">
			<tr style="background-color: #F0F0F0">
				<td>
					<div class="widget-toolbar no-border">
						<button class="btn btn-xs bigger" data-toggle="modal" data-target="#myModal">
							<i class="ace-icon fa fa-plus"></i>Tambah Data Produk
						</button>
					</div>
					<div class="panel-heading" style="background-color:#00BCD4;color:white">
						<h3 class="panel-title"><i class="fa fa-list"></i> Data Produk</h3>
					</td>
				</tr>
				<tr>
					<td>
					</td>
				</tr>
			</table>
			<table id="example" class="display" cellspacing="0">
				        <thead>
				               <tr style="background-color: #204E8A; color: white">
				               	<th width="100px">Pilihan</th>
				               	<th width="40px">No</th>
				               	<th width="250px" align="left">Nama Spare Part</th>
				               	<th width="150px" align="left">Kategori</th>
				               	<th width="50px" align="left">Stok</th>
				               	<th width="100px" align="left">Letak Barang</th>
				               	<th width="100px" align="left">Harga Beli</th>
												<th width="100px" align="left">Harga Jual</th>
				               </tr>
				        </thead>
				        <tbody>
					<?php
						$no=0;
						$r=mysql_query("select * from tbl_sparepart");
						while($r1=mysql_fetch_array($r)){
							$no++
					?>
					<tr>
						<td>
						<a href="home.php?hal=edit_produk&id=<?php echo $r1['id']?>">
						<button class="btn btn-sm btn-success" title="Edit"><span class="fa fa-edit"></span></button>
						</a>
						<a href="home.php?hal=hapus_produk&id=<?php echo $r1['id'] ?>" onclick="return confirmhapus()">
						<button class="btn btn-sm btn-danger" title="Hapus"><span class="fa fa-trash"></span></button>
						</a>
						</td>
						<td><?php echo $no ?></td>
						<td align="left"><?php echo $r1['nm_sparepart'] ?></td>
						<td align="left"><?php echo $r1['kategori'] ?></td>
						<td align="left"><?php echo $r1['stok'] ?></td>
						<td align="left"><?php echo $r1['letak_brg'] ?></td>
						<td align="left"><?php echo number_format($r1['hrg_beli']) ?></td>
						<td align="left"><?php echo number_format($r1['hrg_jual']) ?></td>>
					</tr>

					<?php
						}
					?>
					</tbody>
			</table>
	</div>
</div>
<form method="POST" action="home.php?hal=simpan_produk">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00BCD4;color: white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-list"></span> Tambah Data Produk</h4>
        </div>
        <div class="modal-body">
          <table class="table">
          	<tr>
          		<td align="right">Nama Spare Part</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="NAMA"></td>
          	</tr>
          	<tr>
          		<td align="right">Kategori</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="KATEGORI"></td>
          	</tr>
          	<tr>
          		<td align="right">Stok</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="STOK" value=""></td>
          	</tr>
          	<tr>
          		<td align="right">Letak Barang</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="LETAK_BARANG"></td>
          	</tr>
          	<tr>
          		<td align="right">Harga Beli</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="HARGA_BELI"></td>
          	</tr>
						<tr>
							<td align="right">Harga Jual</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="HARGA_JUAL" value=""></td>
						</tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
          <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="fa fa-times"> Batal</span></button>
        </div>
      </div>
    </div>
</div>
</form>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable({
	    	// "scrollY": 500,
        		"scrollX": true,

	    	"language": {
	            "lengthMenu": "Menampilkan _MENU_ Data Per Halaman",
	            "zeroRecords": "Maaf - Data tidak ditemukan",
	            "info": "Menampilkan Halaman _PAGE_ Dari _PAGES_",
	            "infoEmpty": "Tidak Ada Data",
	            "search": "Cari",
	            "oPaginate": {
                                                                "sFirst":    "Pertama",
                                                                "sPrevious": "Sebelumnya",
                                                                "sNext":     "Selanjutnya",
                                                                "sLast":     "Terakhir"
                                                            },
	            "infoFiltered": "(disortir dari _MAX_ total data)"
	        }
	        });

	   $("#id_kecamatan").change(function(){
                                var id_kecamatan = $("#id_kecamatan").val();
                                $.ajax({
                                    url : "application/kemiskinan/kelurahan.php",
                                    data : "kecamatan=" + id_kecamatan,
                                    success:function(data){
                                        $("#id_kelurahan").html(data);
                                    }
                                });
                          });
	} );
</script>
<script>
function confirmhapus(){
var msg="Apakah anda yakin ingin menghapus data ini ?";
var setuju=confirm(msg);
if (setuju)
  return true;
else
  return false;
}
</script>
