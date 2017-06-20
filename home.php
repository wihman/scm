<?php
ob_start();
error_reporting(0);
session_start();
if ($_SESSION['id_session']) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Supply Chain Management</title>
		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/css/ace-fonts.css" />
		<link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<script src="assets/js/ace-extra.js"></script>
		<script src="assets/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
        		<script src="assets/jquery/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

        		<!-- <script src="assets/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
        		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
        		<!-- <link rel="stylesheet" href="assets/datatables/css/jquery.dataTables.min.css" /> -->
        		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        		<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css" />
        		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
        		<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>

	</head>
	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<!-- /section:basics/navbar.layout -->
		<?php
			include "header.php";
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
								<!-- disini tempat kontennya	 -->
								<?php include "konten.php"; ?>
								</div>
								<!-- PAGE CONTENT ENDS -->
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
							<span class="blue bolder">Supply Chain Management</span>
							Application &copy; <?php echo date("Y") ?>
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="https://facebook.com/x78coy">
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

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			// jQuery(function($) {
			//  var $sidebar = $('.sidebar').eq(0);
			//  if( !$sidebar.hasClass('h-sidebar') ) return;

			//  $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
			// 	if( event_name !== 'sidebar_fixed' ) return;

			// 	var sidebar = $sidebar.get(0);
			// 	var $window = $(window);

			// 	//return if sidebar is not fixed or in mobile view mode
			// 	var sidebar_vars = $sidebar.ace_sidebar('vars');
			// 	if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
			// 		$sidebar.removeClass('lower-highlight');
			// 		//restore original, default marginTop
			// 		sidebar.style.marginTop = '';

			// 		$window.off('scroll.ace.top_menu')
			// 		return;
			// 	}


			// 	 var done = false;
			// 	 $window.on('scroll.ace.top_menu', function(e) {

			// 		var scroll = $window.scrollTop();
			// 		scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
			// 		if (scroll > 17) scroll = 17;


			// 		if (scroll > 16) {
			// 			if(!done) {
			// 				$sidebar.addClass('lower-highlight');
			// 				done = true;
			// 			}
			// 		}
			// 		else {
			// 			if(done) {
			// 				$sidebar.removeClass('lower-highlight');
			// 				done = false;
			// 			}
			// 		}

			// 		sidebar.style['marginTop'] = (17-scroll)+'px';
			// 	 }).triggerHandler('scroll.ace.top_menu');

			//  }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);

			//  $(window).on('resize.ace.top_menu', function() {
			// 	$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			//  });


			// });
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

		<!-- <script src="tes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
        		<script src="tes/datatables/jquery.dataTables.js"></script>
        		<script src="tes/datatables/dataTables.bootstrap.js"></script>
	</body>
</html>
<?php
} else {
header("location:index.php");
}
 ob_flush();
?>
<!-- <script>
$(document).ready(function(){
	$("#tanggal_dari").datepicker({
	});

	$("#tanggal_ke").datepicker({
	});
});
</script> -->

<script>
// var j = jQuery.noConflict();
$(document).ready(function(){
	$("#tanggal_dari").datepicker({
	});

	$("#tanggal_ke").datepicker({
	});

	$("#tanggal_dari_sisa").datepicker({
	});

	$("#tanggal_ke_sisa").datepicker({
	});
});
</script>
