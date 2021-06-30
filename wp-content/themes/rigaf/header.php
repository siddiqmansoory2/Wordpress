<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>


<body>


	<!--header start-->
	<header class="cms-header">
        <div class="header-top">
            <nav class="navbar navbar-main navbar-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="header-inner">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar top-bar"></span>
                                        <span class="icon-bar mid-bar"></span>
                                        <span class="icon-bar bot-bar"></span>
                                    </button>
                                    <a class="navbar-brand logo clearfix" href="<?php echo esc_url( home_url( '/' )); ?>">
										<img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" class="img-responsive" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
									</a>
                                </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="header-right">
                                    <div class="navbar-collapse collapse" id="main-nav" aria-expanded="false">
                                        <?php
											wp_nav_menu(array(
											'theme_location'    => 'primary',
											'container'       => '',
											'container_id'    => '',
											'container_class' => '',
											'menu_id'         => false,
											'menu_class'      => 'nav navbar-nav',
											'depth'           => 3,
											'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
											'walker'          => new wp_bootstrap_navwalker()
											));
										?>
                                        <ul class="nav navbar-nav navbar-right">
										
                                            <li class="contact-btn">
                                                <a href='<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>'>
													<?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
												</a>
                                            </li>
                                        </ul>
                                    </div><!-- navbar-collapse -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </nav><!-- navbar -->
        </div>
    </header>
	<!--header end-->