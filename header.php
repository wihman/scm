<?php
INCLUDE "koneksi.php";
$id_session = $_SESSION['id_session'];
$y=mysql_query("select * from tbl_admin where ID='$id_session'");
$y1=mysql_fetch_array($y);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Supply Chain Management</title>
		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/css/ace-fonts.css" />
		<link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<script src="assets/js/ace-extra.js"></script>

	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<!-- <i class="fa fa-leaf"></i> -->
							Supply Chain Management
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->
					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="assets/avatars/user.jpg" alt="Muhammad Faisal" />
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						<!-- #section:basics/navbar.user_menu -->
						<li class="blue user-min">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="User Foto" />
								<span class="user-info">
									<small>Selamat Datang,</small>
									<?php
										$ID_SESSION = $_SESSION['id_session'];
										$i=mysql_query("select * from tbl_admin where NAMA='$ID_SESSION'");
										$i1=mysql_fetch_array($i);
										echo $i1['NAMA'];
									?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<!-- <a href="#" data-toggle="modal" data-target="#myModal_Ganti_Sandi"> -->
									<a href="#" data-toggle="modal" data-target="#myModal_Ganti_Sandi">
										<i class="ace-icon fa fa-cog"></i>
										Ganti Kata Sandi
									</a>
								</li>
								<!-- <li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li> -->
								<li class="divider"></li>
								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->

			</div><!-- /.navbar-container -->
		</div>

<!-- Start Modal Ganti Kata Sandi -->
<div class="modal fade" id="myModal_Ganti_Sandi" role="dialog">
<!-- <div class="modal fade" id="myModal_Ganti_Sandi" role="dialog"> -->
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #FF892A;color: white;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title"><span class="glyphicon glyphicon-user"> </span>&nbsp;<span class="glyphicon glyphicon-cog"> </span>&nbsp;&nbsp; Data User | Ganti Kata Sandi</h4></center>
        </div>
        <div class="modal-body">
			<form action="?hal=ganti_sandi" method="POST">
			<table class="table" style="width:500px" align="center" >
				<tr>
					<td><label>Nama Pengguna</label></td>
					<td><div style="width:200px"><input class="form-control" type="text" name="username" value="<?php echo $y1['NAMA'] ?>"  /></div></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><div style="width:200px" ><input class="form-control" type="text" name="pass"  value="" placeholder="Masukkan Kata Sandi Baru" /></div></td>
				</tr>
				<tr>
					<td><label>Konfirmasi Password</label></td>
					<td><div style="width:200px" ><input class="form-control" type="text" name="pass2"  value="" placeholder="Konfirmasi Kata Sandi Baru" /></div></td>
				</tr>
				<tr>
					<td colspan="2"><center></center></td>
				</tr>
			</table>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"> </span> Ganti Sandi</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"> </span> Batal</button>
        </div>
      </div>
	</form>
    </div>
 </div>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar.horizontal -->
			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<img src="logohome.png" width="40px;">
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="hover">
						<a href="home.php?hal=home">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Home</span>
						</a>
					</li>
					<li class="hover administrator">
						<a href="home.php?hal=admin">
							<i class="menu-icon fa fa-lock"></i>
							<span class="menu-text"> User </span>
						</a>
					</li>
					<li class="hover administrator">
						<a href="home.php?hal=produk">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Spare Part </span>
						</a>
					</li>
					<li class="hover <?php echo $master_data ?>">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							<i class="menu-icon fa fa-area-chart"></i>
							<span class="menu-text"> Transaksi </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="home.php?hal=laporan_sisa_anggaran">
									<i class="menu-icon fa fa-caret-right"></i>
									Pembelian
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="#" data-toggle="modal" data-target="#AnggaranDivisi">
									<i class="menu-icon fa fa-caret-right"></i>
									Return Pembelian
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="home.php?hal=anggaran_vs_realisasi">
									<i class="menu-icon fa fa-caret-right"></i>
									Penjualan
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="home.php?hal=revisi_anggaran">
									<i class="menu-icon fa fa-caret-right"></i>
									Return Penjualan
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover <?php echo $master_data ?>">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							<i class="menu-icon fa fa-area-chart"></i>
							<span class="menu-text"> Laporan </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="home.php?hal=laporan_sisa_anggaran">
									<i class="menu-icon fa fa-caret-right"></i>
									Pembelian
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="#" data-toggle="modal" data-target="#AnggaranDivisi">
									<i class="menu-icon fa fa-caret-right"></i>
									Return Pembelian
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="home.php?hal=anggaran_vs_realisasi">
									<i class="menu-icon fa fa-caret-right"></i>
									Penjualan
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="home.php?hal=revisi_anggaran">
									<i class="menu-icon fa fa-caret-right"></i>
									Return Penjualan
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover <?php echo $master_data ?>">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							<i class="menu-icon fa fa-area-chart"></i>
							<span class="menu-text"> Analisis SCM </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="hover">
								<a href="home.php?hal=laporan_sisa_anggaran">
									<i class="menu-icon fa fa-caret-right"></i>
									DSS Pembelian
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul>
				<!-- start modal -->
<div id="AnggaranDivisi" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #204E8A; color: white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-area-chart"></i> Laporan Per Kategori</h4>
      </div>
      <form method="post" action="home.php?hal=laporan_anggaran_divisi" name="form_laporan_Anggaran_divisi">
      <div class="modal-body">

      	<div class="row">
      		<div class="col-md-4">
      			<label>Dari :</label>
      		</div>
      		<div class="col-md-8">
      			<div class="col-md-5" align="left">
      				<input type="date" class="form-control" data-format="dd/MM/yyyy hh:mm:ss" name="tanggal_dari" id="tanggal_dari" placeholder="Masukkan Tanggal Mulai">
      			</div>
      			<div class="col-md-2">
      				<label>s.d</label>
      			</div>
      			<div class="col-md-5">
      				<input type="date" class="form-control" name="tanggal_ke" id="tanggal_ke" placeholder="Masukkan Tanggal ">
      			</div>
      		</div>
      		<br><br><br>
      		<div class="col-md-4">
      			<label>Kecamatan :</label>
      		</div>
      		<div class="col-md-8">
      			<select id="kecamatan" name="kecamatan" class="form-control">
      				<option value="">...</option>
      				<?php
      					$o=mysql_query("Select * from tbl_kecamatan");
      					while($o1=mysql_fetch_array($o)){
      				?>
      				<option value="<?php echo $o1['id'] ?>"><?php echo $o1['nama_kecamatan'] ?></option>
      				<?php
      					}
      				?>
      			</select>
      		</div>
      		<br>
      		<div class="col-md-4">
      			<label>Kelurahan :</label>
      		</div>
      		<div class="col-md-8">
      			<select id="kelurahan" name="kelurahan" class="form-control">
      				<option value="">...</option>
      			</select>
      		</div>
      		<br>
      		<div class="col-md-4">
      			<label>Kategori :</label>
      		</div>
      		<div class="col-md-8">
      			<select id="kategori" name="kategori" class="form-control">
      				<option value="">...</option>
      				<?php
      					$o=mysql_query("Select * from tbl_kategori");
      					while($o1=mysql_fetch_array($o)){
      				?>
      				<option value="<?php echo $o1['id'] ?>"><?php echo $o1['nama_kategori'] ?></option>
      				<?php
      					}
      				?>
      			</select>
      		</div>
      		<br>
      		<div class="col-md-4">
      			<label>Jenis :</label>
      		</div>
      		<div class="col-md-8">
      			<select id="jenis" name="jenis" class="form-control">
      				<option value="">...</option>
      				<?php
      					$o7=mysql_query("Select * from tbl_jenis");
      					while($o17=mysql_fetch_array($o7)){
      				?>
      				<option value="<?php echo $o17['id'] ?>"><?php echo $o17['nama_jenis'] ?></option>
      				<?php
      					}
      				?>
      			</select>
      		</div>
      		<br><br><br>

      	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Generate Report</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
      </form>
  </div>
</div>
<!-- end modal -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='../assets/js/jquery.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.js"></script>
		<!-- ace scripts -->
		<script src="assets/js/ace/elements.scroller.js"></script>
		<script src="assets/js/ace/elements.colorpicker.js"></script>
		<script src="assets/js/ace/elements.fileinput.js"></script>
		<script src="assets/js/ace/elements.typeahead.js"></script>
		<script src="assets/js/ace/elements.wysiwyg.js"></script>
		<script src="assets/js/ace/elements.spinner.js"></script>
		<script src="assets/js/ace/elements.treeview.js"></script>
		<script src="assets/js/ace/elements.wizard.js"></script>
		<script src="assets/js/ace/elements.aside.js"></script>
		<script src="assets/js/ace/ace.js"></script>
		<script src="assets/js/ace/ace.ajax-content.js"></script>
		<script src="assets/js/ace/ace.touch-drag.js"></script>
		<script src="assets/js/ace/ace.sidebar.js"></script>
		<script src="assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="assets/js/ace/ace.submenu-hover.js"></script>
		<script src="assets/js/ace/ace.widget-box.js"></script>
		<script src="assets/js/ace/ace.settings.js"></script>
		<script src="assets/js/ace/ace.settings-rtl.js"></script>
		<script src="assets/js/ace/ace.settings-skin.js"></script>
		<script src="assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="assets/js/ace/ace.searchbox-autocomplete.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;

			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;

				var sidebar = $sidebar.get(0);
				var $window = $(window);

				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';

					$window.off('scroll.ace.top_menu')
					return;
				}


				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {

					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;


					if (scroll > 16) {
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}

					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');

			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);

			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });


			});
		</script>

		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		<link rel="stylesheet" href="assets/css/ace.onpage-help.css" />
		<link rel="stylesheet" href="assets/docs/assets/js/themes/sunburst.css" />
		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="assets/js/ace/elements.onpage-help.js"></script>
		<script src="assets/js/ace/ace.onpage-help.js"></script>
		<script src="assets/docs/assets/js/rainbow.js"></script>
		<script src="assets/docs/assets/js/language/generic.js"></script>
		<script src="assets/docs/assets/js/language/html.js"></script>
		<script src="assets/docs/assets/js/language/css.js"></script>
		<script src="assets/docs/assets/js/language/javascript.js"></script>
		<!-- Modal Efek -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
		<script>
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			   $("#kecamatan").change(function(){
		                                var kecamatan = $("#kecamatan").val();
		                                $.ajax({
		                                    url : "application/kemiskinan/kelurahan.php",
		                                    data : "kecamatan=" + kecamatan,
		                                    success:function(data){
		                                        $("#kelurahan").html(data);
		                                    }
		                                });
		                          });
			} );
		</script>
	</body>

</html>
