<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<meta charset=<?php bloginfo( 'charset' ); ?> />
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel=profile href=http://gmpg.org/xfn/11 />
<link rel=pingback href=<?php bloginfo( 'pingback_url' ); ?> /> 
<!--[if lt IE 9]>
<script src=<?php echo get_template_directory_uri(); ?>/js/html5.js type=text/javascript></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll">

<div class="headermore">
<div class="container">
<div class="row">
<div class="col-lg-12">
<a class="accordion-toggle-top fa fa-chevron-down collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
</a>
</div>
</div>
</div>
</div>

<div id="collapseOne" class="headerwrapper panel-collapse collapse">  
<div class="row headersearchform">    
<div class="col-lg-2 col-md-3 col-sm-4">   
<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-6' ); ?>	
<?php endif; ?>			
</div>
<div class="col-lg-10 col-md-9 col-sm-8">   
<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-7' ); ?>	
<?php endif; ?>			
</div>
</div>
</div>








