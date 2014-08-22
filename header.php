<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Boilerstrap
 * @subpackage boilerstrap
 * @since Boilerstrap 0.1
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-more-ie7.min.css">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=no" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
  
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
    <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
    <meta property="og:image" content="" />

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/ico/apple-touch-icon-57-precomposed.png">
    
    <!-- BoilerStrap CSS Goes Here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-corp.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-social.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ext.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/typography.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/palette.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" type="text/css" media="all" />
    <?php if ( is_admin_bar_showing() ) {?>
    	<style>
    		#site-navigation { top: 28px !important; }
    	</style>
    <?php }?>

    <!-- BoilerStrap JavaScript Goes Here -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/keypress-1.0.1.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/boilerstrap.js" type="text/javascript"></script>
    
  </head>

<body <?php body_class(); ?>>

	<div id="site-navigation" class="navbar navbar-fixed-top" role="navigation">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a style="margin-left:5%;" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerstrap' ); ?>"><?php _e( 'Skip to content', 'boilerstrap' ); ?></a>
					<div class="nav-collapse collapse" >
		<?php 
		wp_nav_menu( array(
  	  	'menu'       => 'top_menu',
  	  	'depth'      => 3,
  	  	'container'  => false,
  	  	'menu_class' => 'nav',
  	  	'walker' => new twitter_bootstrap_nav_walker())
  	  	);
  	  	?>
  			<p style="margin-top:9px;margin-left:20px;margin-right:20px" class="navbar-search pull-right">
            <?php // get_sidebar('teknoplan'); 
            ?>
            <?php if(get_bloginfo('language') == "tr-TR"): ?>
            <a tabindex="-1" href=<?php echo get_site_url()."/?lang=en" ?> ><img height="22" width="36" src="http://teknoplan.com.tr/wp-content/themes/teknoplantheme/assets/img/eng.png"></a></li>         
            <?php else: ?>
            <a tabindex="-1" href=<?php echo get_site_url() ?> ><img height="22" width="36" src="http://teknoplan.com.tr/wp-content/themes/teknoplantheme/assets/img/turk.png"></a></li>
            <?php endif; ?>            
			</p>
		<form method="get" id="searchform" class="navbar-search pull-right" action="<?php bloginfo('home'); ?>/">
		<form class="form-search">
		<input type="text" name="s" id="s" class="search-query" placeholder="Arama..." onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" x-webkit-speech tabindex="1">
  		</form>
  		</form>	
  
        </div><!--/.nav-collapse -->
      </div><!--container-fluid-->
    </div><!--navbar-inner-->
  </div><!-- navbar-fixed-top -->

<header style="margin-left:2%;" role="banner">
	<div id="header-image"  class="col-lg-12 visible-lg" style="margin-top:4%;">
   	<?php $post_quote = (query_posts('cat='.get_cat_ID('sözlerim')));?> 
    <div class="pull-right" style="margin-top:90px;margin-right:4%;color:white;font:bold;font-size:17px">
        <?php
            foreach ($post_quote as $value_quote) {
                $quotes[] = $value_quote->post_content;}
                      $max = count($quotes);
                      $rand_numb = rand(0,$max-1);                                    
                        echo "<p>".$quotes[$rand_numb]."</p>";
                        unset($post_quote);
                        wp_reset_query();
        ?>
	</div><!--header-image-->
	</div><!--pull-right-->
</header><!-- #masthead -->
  
<div id="page" class="hfeed site">
	<div class="row-fluid">