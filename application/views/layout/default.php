
<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Kappe</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/responsive.css" media="screen">
	
</head>
<body>
<?php $page = $this->uri->segment(1);?>
	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header>
			<div class="logo-box">
				<a class="logo" href="<?php echo base_url(); ?>"><img alt="" src="<?php echo base_url()?>images/logo.png"></a>
			</div>
			
			<a class="elemadded responsive-link" href="#">Menu</a>

			<div class="menu-box">
				<ul class="menu">
					<li><a <?php if($page=='' || $page=='projects') echo 'class="active"';  ?> href="<?php echo base_url(); ?>"><span>Home</span></a></li>
					<li><a <?php if($page=='about') echo 'class="active"';  ?> href="<?php echo base_url(); ?>about/"><span>About</span></a></li>
					<li><a <?php if($page=='blogs') echo 'class="active"';  ?> href="<?php echo base_url(); ?>blogs/"><span>Blog</span></a></li>					
					<li><a <?php if($page=='contact') echo 'class="active"';  ?> href="<?php echo base_url(); ?>contact/"><span>Contact</span></a></li>
				</ul>				
			</div>

			<div class="filter-box">
				<h3>Filter<i class="fa fa-th-large"></i></h3>
				<ul class="filhter">
					<li><a href="<?php echo base_url(); ?>" class="active" data-filter="*">All Works</a></li>
<?php 				
					$CI =& get_instance();
        			$CI->load->model('categories_model'); 
        			$categories = $CI->categories_model->get_all();
					foreach ($categories as $category) 
					{
?>	
						<li><a href="<?php echo base_url('projects/get_project_by_category/').$category['id']; ?>" ><?php echo $category['name']; ?> </a></li>
<?php
					}
?>	
				</ul>
			</div>

<?php
					$CI =& get_instance();
					$CI->load->model('setting_model');				
					$setting_data = $CI->setting_model->get_all(); 
?>	

			<div class="social-box">
				<ul class="social-icons">
					<li><a href="<?php echo "https://".$setting_data[0]['facebook_url']; ?>" class="facebook" ><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo "https://".$setting_data[0]['twitter_url']; ?>" class="twitter" ><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo "https://".$setting_data[0]['google_plus_url']; ?>" class="google" ><i class="fa fa-goog//le-plus"></i></a></li>
					<li><a href="<?php echo "https://".$setting_data[0]['linked_in_url']; ?>" class="linkedin" ><i class="fa fa-linkedin"></i></a></li>
					<li><a href="<?php echo "https://".$setting_data[0]['pinterest_url']; ?>" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
					<li><a href="<?php echo "https://".$setting_data[0]['youtbe_url']; ?>" class="youtube" ><i class="fa fa-youtube"></i></a></li>
				</ul>
				<p class="copyright">&#169; <?php echo date('Y'); ?> Kappe, All Rights Reserved</p>
			</div>
		</header> 
		<!-- End Header -->

		<?php echo $content; ?>

	</div>
	<!-- End Container -->

	<div class="info-box">
		<a class="info-toggle" href="#"><i class="fa fa-info-circle"></i></a>
		<div class="info-content">
			<ul>
				<li><i class="fa fa-phone"></i><?php echo $setting_data[0]['contact_no']; ?></li>
				<li><i class="fa fa-envelope"></i><a href=<?php echo "https://".$setting_data[0]['email']; ?>"><?php echo $setting_data[0]['email']; ?></a></li>
				<li><i class="fa fa-home"></i><?php echo $setting_data[0]['address']; ?></li>
			</ul>
		</div>
	</div>

	<div class="preloader">
		<img alt="" src="images/preloader.gif">
	</div>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.migrate.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>


</body>
</html>