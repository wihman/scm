<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - System Monitoring Ujian UNM</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/ace-fonts.css" />
    <link rel="stylesheet" href="assets/css/ace.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.css" />
  </head>

  <body class="no-skin">
    <?php
      include "header-guest.php";
    ?>
    <div class="main-container" id="main-container">
      <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
      </script>
      <div class="main-content">
        <div class="main-content-inner">
          <div class="page-content">
            <div class="row">
              <div class="col-xs-12">
                <div class="center">
                <img src="logohome.png" width="100px"><br>
                <h3>DAFTAR PESERTA UJIAN PER HARI INI</h3><br>
                <table class="table table-bordered">
                <thead>
                       <tr align="center">
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>NIM</td>
                        <td>Nama Mahasiswa</td>
                        <td>Ujian</td>
                        <td>Jam</td>
                        <td>Ketua</td>
                        <td>Sekretaris</td>
                       </tr>
                </thead>
                <tbody>
          <?php 
            $no=0;
            $r=mysql_query("select * from tbl_jadwal");
            while($r1=mysql_fetch_array($r)){
              $no++
          ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo date("d-m-Y", strtotime($r1['TGL'])) ?></td>
            <td><?php echo $r1['NIM'] ?></td>
            <?php
              $NIM_ = $r1['NIM'];
              $h=mysql_query("select * from tbl_mahasiswa where NIM='$NIM_'");
              $h1=mysql_fetch_array($h);
            ?>
            <td><?php echo $h1['NAMA'] ?></td>
            <td><?php echo $r1['UJIAN'] ?></td>
            <td><?php echo $r1['JAM'] ?></td>
            <?php
              $P1_ = $r1['KETUA'];
              $k=mysql_query("select * from tbl_pembimbing where ID='$P1_'");
              $k1=mysql_fetch_array($k);
                $NIP_ = $k1['NIP'];
                $g=mysql_query("select * from tbl_dosen where NIP='$NIP_'");
                $g1=mysql_fetch_array($g);
            ?>
            <td><?php echo $g1['NIP']." - ".$g1['NAMA'] ?></td>
            <?php
              $P1_2 = $r1['SEKRETARIS'];
              $k2=mysql_query("select * from tbl_pembimbing where ID='$P1_2'");
              $k12=mysql_fetch_array($k2);
                $NIP_2 = $k12['NIP'];
                $g2=mysql_query("select * from tbl_dosen where NIP='$NIP_2'");
                $g12=mysql_fetch_array($g2);
            ?>
            <td><?php echo $g12['NIP']." - ".$g12['NAMA'] ?></td>
          </tr>
          
          <?php
            }
          ?>
          </tbody>
        </table>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->

      <div class="footer">
        <div class="footer-inner">
          <!-- #section:basics/footer -->
          <div class="footer-content">
            <span class="bigger-120">
              <span class="blue bolder">Sistem Monitoring Ujian</span>
              Application &copy; <?php echo date("Y") ?> | Muhammad Faisal | 
              <a href="login-page.php">Admin Area</a>
            </span>

            &nbsp; &nbsp;
            <span class="action-buttons">
              <a href="#">
                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
              </a>

              <a href="#">
                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
              </a>

              <a href="#">
                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
              </a>
            </span>
          </div>

          <!-- /section:basics/footer -->
        </div>
      </div>

      <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
      </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='assets/js/jquery.js'>"+"<"+"/script>");
    </script>
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
    </script>
    <!-- <script src="assets/js/bootstrap.js"></script> -->
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
    <script type="text/javascript">
      
    </script>

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
            <script src="tes/datatables/jquery.dataTables.js"></script>
            <script src="tes/datatables/dataTables.bootstrap.js"></script>
  </body>
</html>
