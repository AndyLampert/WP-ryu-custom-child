<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ryu
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
  $email_link = get_theme_mod( 'email_link' );
  $twitter_link = get_theme_mod( 'twitter_link' );
  $facebook_link = get_theme_mod( 'facebook_link' );
  $pinterest_link = get_theme_mod( 'pinterest_link' );
  $google_plus_link = get_theme_mod( 'google_plus_link' );
  $linkedin_link = get_theme_mod( 'linkedin_link' );
  $flickr_link = get_theme_mod( 'flickr_link' );
  $github_link = get_theme_mod( 'github_link' );
  $dribbble_link = get_theme_mod( 'dribbble_link' );
  $vimeo_link = get_theme_mod( 'vimeo_link' );
  $youtube_link = get_theme_mod( 'youtube_link' );
  $tumblr_link = get_theme_mod( 'tumblr_link' );
  $social_links = ( '' != $email_link
    || '' != $twitter_link
    || '' != $facebook_link
    || '' != $pinterest_link
    || '' != $google_plus_link
    || '' != $flickr_link
    || '' != $github_link
    || '' != $dribbble_link
    || '' != $vimeo_link
    || '' != $youtube_link
    || '' != $tumblr_link
    ) ? true : false;
    ?>

    <div id="page" class="hfeed site">
      <?php
      if ( is_active_sidebar( 'sidebar-1' )
        || is_active_sidebar( 'sidebar-2' )
        || is_active_sidebar( 'sidebar-3' )
        || is_active_sidebar( 'sidebar-4' )
        ) :
        ?>
        <div id="widgets-wrapper" class="toppanel hide">
          <?php get_sidebar(); ?>
        </div>
      <?php endif ;?>

    <!-- Removed all of Ryu's social functions -->

    </ul>
  </div>

<div id="search-wrapper" class="toppanel hide">
  <?php get_search_form(); ?>
</div>

<header id="masthead" class="site-header" role="banner">
  <div class="wrap">
    <?php do_action( 'before' ); ?>

    <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) { ?>
    <a class="site-logo"  href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" class="no-grav header-image" />
    </a>
    <?php } // if ( ! empty( $header_image ) ) ?>

    <hgroup>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
    <hgroup>
      <div class="stitches">
        <a href="http://github.com/andylampert" target="_blank"><i class="sprite sprite-github"></i></a>
        <a href="mailto:lamperta@gmail.com"><i class="sprite sprite-gmail"></i></a>
        <a href="http://www.linkedin.com/in/lamperta" target="_blank"><i class="sprite sprite-linkedin"></i></a>
        <a href="http://twitter.com/lamperta" target="_blank"><i class="sprite sprite-twitter"></i></a>
      </div>
    </hgroup>
  </div><!-- .wrap -->

  <?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="site-navigation" class="navigation-main clear" role="navigation">
    <h1 class="menu-toggle"><?php _e( 'Menu', 'ryu' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'ryu' ); ?>"><?php _e( 'Skip to content', 'ryu' ); ?></a></div>

    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'wrap' ) ); ?>
  </nav><!-- #site-navigation -->
<?php endif; ?>
</header><!-- #masthead -->

<div id="main" class="site-main">