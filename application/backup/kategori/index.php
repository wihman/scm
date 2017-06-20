<?php
	include "koneksi.php";
?>
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<tr style="background-color: #F0F0F0">
				<td>
				<div class="widget-toolbar no-border">
		                                <button class="btn btn-xs btn-light bigger" data-toggle="modal" data-target="#myModal">
		                                    <i class="ace-icon fa fa-plus"></i>
		                                    Tambah Data Kategori
		                                </button>
		                        </div>
				<div class="panel-heading" style="background-color:#204E8A;color:white">
                        		<h3 class="panel-title"><i class="fa fa-leaf"></i> Data Kategori</h3> 
				</td>
			</tr>
			<tr>
				<td>
				<table id="example" class="display" cellspacing="0" width="100%">
				        <thead>
				               <tr>
				               	<th>No</th>
						<th>Nama Kategori</th>
						<th>Pilihan</th>
				               </tr>
				        </thead>
				        <tbody>
					<?php 
						$no=0;
						$r=mysql_query("select * from tbl_kategori");
						while($r1=mysql_fetch_array($r)){
							$no++
					?>
					<tr>
						<td><?php echo $no ?></td>
						<td><?php echo $r1['nama_kategori'] ?></td>
						<td>
						<a href="home.php?hal=edit_kategori&id=<?php echo $r1['id'] ?>">
						<button class="btn btn-sm btn-warning"><span class="fa fa-edit"></span> Edit</button>
						</a>
						<a href="home.php?hal=hapus_kategori&id=<?php echo $r1['id'] ?>" onclick="return confirmhapus()">
						<button class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Hapus</button>
						</a>
						</td>
					</tr>
					
					<?php
						}
					?>
					</tbody>
				</table>
				</td>
			</tr>
		</table>
	</div>
</div>
<form method="POST" action="home.php?hal=simpan_kategori">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #FF892A;color: white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-leaf"></span> Tambah Data Kategori</h4>
        </div>
        <div class="modal-body">
          <table class="table">
          	<tr>
          		<td align="right">Nama</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="nama_kategori"></td>
          	</tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
</div>
</form>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable({
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