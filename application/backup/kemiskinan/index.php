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
		                                <button class="btn btn-xs btn-light bigger" data-toggle="modal" data-target="#myModal">
		                                    <i class="ace-icon fa fa-plus"></i>
		                                    Tambah Data Kemiskinan
		                                </button>
		                        </div>
				<div class="panel-heading" style="background-color:#204E8A;color:white">
                        		<h3 class="panel-title"><i class="fa fa-users"></i> Data Kemiskinan</h3> 
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
				               	<th width="200px" align="left">Nama</th>
				               	<th width="150px" align="left">Kecamatan</th>
				               	<th width="200px" align="left">Kelurahan</th>
				               	<th width="100px" align="left">Kategori</th>
				               	<th width="200px" align="left">Jenis</th>
						<th width="100px" align="left">NIK</th>
						<th width="100px" align="left">No KK</th>
						<th width="100px" align="left">Jenis Kelamin</th>
						<th width="200px" align="left">Alamat</th>
				               </tr>
				        </thead>
				        <tbody>
					<?php 
						$no=0;
						$r=mysql_query("select * from tbl_kemiskinan");
						while($r1=mysql_fetch_array($r)){
							$no++
					?>
					<tr>
						<td>
						<a href="home.php?hal=edit_kemiskinan&id=<?php echo $r1['ID'] ?>">
						<button class="btn btn-sm btn-success" title="Edit"><span class="fa fa-edit"></span></button>
						</a>
						<a href="home.php?hal=hapus_kemiskinan&id=<?php echo $r1['ID'] ?>" onclick="return confirmhapus()">
						<button class="btn btn-sm btn-danger" title="Hapus"><span class="fa fa-trash"></span></button>
						</a>
						</td>

						<td><?php echo $no ?></td>
						<td align="left"><?php echo $r1['NAMA'] ?></td>
						<?php
							$id_kecamatan1 = $r1['KECAMATAN'];
							$g=mysql_query("select * from tbl_kecamatan where id='$id_kecamatan1'");
							$g1=mysql_fetch_array($g);
						?>
						<td align="left"><?php echo $g1['nama_kecamatan'] ?></td>
						<?php
							$id_kelurahan = $r1['KELURAHAN'];
							$g2=mysql_query("select * from tbl_kelurahan where id='$id_kelurahan'");
							$g12=mysql_fetch_array($g2);
						?>
						<td align="left"><?php echo $g12['nama_kelurahan'] ?></td>
						<?php
							$id_kategori = $r1['KATEGORI'];
							$g3=mysql_query("select * from tbl_kategori where id='$id_kategori'");
							$g13=mysql_fetch_array($g3);
						?>
						<td align="left"><?php echo $g13['nama_kategori'] ?></td>
						<?php
							$id_jenis = $r1['JENIS'];
							$g4=mysql_query("select * from tbl_jenis where id='$id_jenis'");
							$g14=mysql_fetch_array($g4);
						?>
						<td align="left"><?php echo $g14['nama_jenis'] ?></td>
						<td align="left"><?php echo $r1['NIK'] ?></td>
						<td align="left"><?php echo $r1['NO_KK'] ?></td>
						<td align="center"><?php echo $r1['JK'] ?></td>
						<td align="left"><?php echo $r1['ALAMAT'] ?></td>
					</tr>
					
					<?php
						}
					?>
					</tbody>
			</table>
	</div>
</div>
<form method="POST" action="home.php?hal=simpan_kemiskinan">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #204E8A;color: white">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-users"></span> Tambah Data Kemiskinan</h4>
        </div>
        <div class="modal-body">
          <table class="table">
          	<tr>
          		<td>Kecamatan</td>
          		<td>:</td>
          		<td>
          			<select class="form-control" name="id_kecamatan" id="id_kecamatan">
          				<option>...</option>
          				<?php
          					$d=mysql_query("Select * from tbl_kecamatan");
          					while ($d1=mysql_fetch_array($d)) {
          				?>
          				<option value="<?php echo $d1['id'] ?>"><?php echo $d1['nama_kecamatan'] ?></option>
          				<?php
          					}
          				?>
          			</select>
          		</td>
          	</tr>
          	<tr>
          		<td>Kelurahan</td>
          		<td>:</td>
          		<td>
          			<select class="form-control" id="id_kelurahan" name="id_kelurahan">
          				<option value="">...</option>
          			</select>
          		</td>
          	</tr>
          	<tr>
          		<td align="right">Kategori</td>
          		<td>:</td>
          		<td>	
          			<select class="form-control" name="KATEGORI">
          				<?php
          					$k=mysql_query("Select * from tbl_kategori");
          					while ($k1=mysql_fetch_array($k)) {
          				?>
          				<option value="<?php echo $k1['id'] ?>"><?php echo $k1['nama_kategori'] ?></option>
          				<?php
          					}
          				?>
          			</select>
          		</td>
          	</tr>
          	<tr>
          		<td align="right">Jenis</td>
          		<td>:</td>
          		<td>	
          			<select class="form-control" name="JENIS">
          				<?php
          					$k5=mysql_query("Select * from tbl_jenis");
          					while ($k15=mysql_fetch_array($k5)) {
          				?>
          				<option value="<?php echo $k15['id'] ?>"><?php echo $k15['nama_jenis'] ?></option>
          				<?php
          					}
          				?>
          			</select>
          		</td>
          	</tr>
          	<tr>
          		<td align="right">Nama</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="NAMA"></td>
          	</tr>
          	<tr>
          		<td align="right">NIK</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="NIK"></td>
          	</tr>
          	<tr>
          		<td align="right">No. KK</td>
          		<td>:</td>
          		<td><textarea name="NO_KK" class="form-control"></textarea></td>
          	</tr>
          	<tr>
          		<td align="right">Jenis Kelamin</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="JK"></td>
          	</tr>
          	<tr>
          		<td align="right">Alamat</td>
          		<td>:</td>
          		<td><input type="text" class="form-control" name="ALAMAT"></td>
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