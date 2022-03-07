<!DOCTYPE html>
<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
<meta name="author" content="">

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.5.1.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/bootstrap-4.5.0-dist/js/bootstrap.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/theme_javascript.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/bootstrap-4.5.0-dist/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/styles.css'; ?>">
<?php wp_head();?>
</head>

<body>

	<div id="main_bar">
		<div class="container">
			<div class="row">
					<div class="col-sm-12">
						<div id="main_bar_logo">
							<a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
						</div>
						<div id="main_bar_menu_toggle">
							<a href="javascript:;">Menu</a>
						</div>
						<div id="main_menu_desktop">
							<?php
								wp_nav_menu( array(
								    'theme_location' => 'custom-menu') );
							?>
						</div>
					</div>
			</div>
		</div>
	</div>

	<div id="mobile_menu_container">
		&nbsp;
		<div id="mobile_menu_close">
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/close.svg" width="50px" height="50px">
		</div>
		<div id="mobile_menu">
			<?php
				wp_nav_menu( array(
						'theme_location' => 'custom-menu') );
			?>
		</div>
	</div>
