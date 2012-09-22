<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

<!--start-meta-->  
	<?php echo (isset($meta_view)) ? $meta_view : ''; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--end-meta-->

    <!-- Le styles -->
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>bootstrap/ico/favicon.ico">
  </head>

  <body>
<!--start_nav-->
	<?php echo (isset($header_view)) ? $header_view : ''; ?>
<!--end_nav-->

<!--start_nav-->
	<?php echo (isset($top_menu_view)) ? $top_menu_view : ''; ?>
<!--end_nav-->

    <div class="container-fluid">

	<?php echo $this->error->error_view()?>			
	
	<?php echo (isset($content_for_layout)) ? $content_for_layout : ''; ?>


<!--start_footer-->	  
	<?php echo (isset($footer_view)) ? $footer_view : ''; ?>
<!--end_footer-->	  

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap.js"></script>
<?php /*	
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>bootstrap/js/bootstrap-typeahead.js"></script>
*/?>
  </body>
</html>
