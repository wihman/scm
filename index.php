<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Supply Chain Management</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/ace-fonts.css" />
    <link rel="stylesheet" href="assets/css/ace.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.css" />
  </head>

  <body class="login-layout light-login" style="background-color: white">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h2>
                  <br>
                  <br>
                </h2>
              </div>
              <div class="space-6"></div>
              <div class="position-relative">
                <div id="login-box" class="login-box visible widget-box no-border" style='background-color:#03A9F4;'>
                  <div class="widget-body">
                    <div class="widget-main">
                    <center><img src="logohome.png" width="130px;"></center>
                      <center>
                        <h4 class="header blue lighter bigger">
                        <i class="ace-icon fa fa-lock orange"></i>
                        Masukkan informasi login
                      </h4>
                      </center>
                      <div class="space-6"></div>
                      <form action="login.php" method="POST" >
                        <fieldset>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="text" class="form-control" placeholder="Username" name="username" />
                              <i class="ace-icon fa fa-user"></i>
                            </span>
                          </label>
                          <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                              <input type="password" class="form-control" placeholder="Password" name="password" />
                              <i class="ace-icon fa fa-lock"></i>
                            </span>
                          </label>
                          <div class="space"></div>
                          <div class="clearfix">
                            <label class="inline">
                              <input type="checkbox" class="ace" />
                            </label>
                            <button type="submit" class="width-35 pull-right btn btn-sm btn-warning">
                              <i class="ace-icon fa fa-key"></i>
                              <span class="bigger-110">Login</span>
                            </button>
                          </div>
                          <div class="space-4"></div>
                        </fieldset>
                      </form>
                    </div><!-- /.widget-main -->
                    <div class="toolbar clearfix" style="background-color:#03A9F4;" class="col-md-12">
                    <center><p style="color: white;padding-top: 20px;font-size: 15px">Supply Chain Management System</p></center>
                    <div></div>
                    </div>
                  </div><!-- /.widget-body -->
                </div><!-- /.login-box -->
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.main-content -->
    </div><!-- /.main-container -->
    <script type="text/javascript">
      window.jQuery || document.write("<script src='assets/js/jquery.js'>"+"<"+"/script>");
    </script>
    <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
    </script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('.widget-box.visible').removeClass('visible');//hide others
        $(target).addClass('visible');//show target
       });
      });
      jQuery(function($) {
       $('#btn-login-dark').on('click', function(e) {
        $('body').attr('class', 'login-layout');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
       });
       $('#btn-login-light').on('click', function(e) {
        $('body').attr('class', 'login-layout light-login');
        $('#id-text2').attr('class', 'grey');
        $('#id-company-text').attr('class', 'blue');

        e.preventDefault();
       });
       $('#btn-login-blur').on('click', function(e) {
        $('body').attr('class', 'login-layout blur-login');
        $('#id-text2').attr('class', 'white');
        $('#id-company-text').attr('class', 'light-blue');

        e.preventDefault();
       });

      });
    </script>
  </body>
</html>
