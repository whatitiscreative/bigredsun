<?php
  /**
   * The Header for our theme
   *
   * Displays all of the <head> section and everything up till <div id="main">
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  ?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
  <![endif]-->
  <!--[if IE 8]>
  <html class="ie ie8" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if !(IE 7) | !(IE 8) ]><!-->
    <html <?php language_attributes(); ?>>
      <!--<![endif]-->
      <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/10/favicon.ico">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
        <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.js"></script>
        <!-- INCLUDE TYPEKIT EMBED -->
        <script type="text/javascript" src="//use.typekit.net/akx8ksm.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script
          src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBlA_C_DtUILPsgwiVuUN3hJ80rSG4g4AA&sensor=false"></script>
        <script>
          var myCenter=new google.maps.LatLng(30.2590613,-97.7307702,17);
          var marker;
          
          function initialize()
          {
          var mapProp = {
            center:myCenter,
            zoom:17,
            mapTypeId:google.maps.MapTypeId.ROADMAP
            };
          
          var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
          
          marker=new google.maps.Marker({
            position:myCenter,
            animation:google.maps.Animation.DROP,
          
            });
          
          marker.setMap(map);
          }
          
          google.maps.event.addDomListener(window, 'load', initialize);
          
            $(document).ready(function () {
              // will fire IMMEDIATELY after the DOM is constructed
          
              $(window).load(function() {
                  // will only fire AFTER all pages assets have loaded
              $(".fade-in").removeClass("preload");
              })
          
          });
          
        </script>
        <?php wp_head(); ?>
      </head>
      <body <?php body_class(); ?>>
        <div id="page" class="hfeed site" style="height: 100% !important;">
        	<div id="main" class="site-main">        <div class="container" id="venice">
          <div class="venice-link">
            <a href="http://www.bigredsun.com/" target="_blank">Big Red Sun: Venice&nbsp;&nbsp;&nbsp;<i class="fa fa-long-arrow-right" style="font-size:14px;"></i></a>
          </div>
        </div>
        <div class="container">
          <header id="masthead" class="site-header" role="banner">
            <div class="header-main">
              <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                <div class="menu-top-left">
                  <?php
                    wp_nav_menu( array(
                    	'menu'              => 'browser-left',
                    	'theme_location'    => 'top-left',
                    	'depth'             => 2,
                    	'container'         => 'div',
                    	'container_class'   => '',
                    	'menu_class'        => 'nav-menu',
                    	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    	'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
                <div class="menu-top-center main-logo">
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <div class="menu-top-right">
                  <?php
                    wp_nav_menu( array(
                    	'menu'              => 'browser-right',
                    	'theme_location'    => 'top-right',
                    	'depth'             => 2,
                    	'container'         => 'div',
                    	'container_class'   => '',
                    	'menu_class'        => 'nav-menu',
                    	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    	'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div>
              </nav>
              <div class="mobile-menu">
                <div class="mobile-menu-logo">
                  <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
                </div>
                <button class="navbar-toggle collapsed trigger-overlay" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <div class="overlay overlay-hugeinc">
                  <button type="button" class="overlay-close">Close</button>
                  <nav>
                    <?php
                      wp_nav_menu( array(
                      	'menu'              => 'mobile-menu',
                      	'theme_location'    => 'mobile-menu',
                      	'depth'             => 2,
                      	'container'         => 'div',
                      	'container_class'   => '',
                      	'menu_class'        => 'nav-menu',
                      	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      	'walker'            => new wp_bootstrap_navwalker())
                      );
                      ?>
                  </nav>
                </div>
              </div>
            </div>
          </header>
          <!-- #masthead -->
        </div>
        <script>
          (function() {
          var triggerBttn = document.getElementsByClassName( 'trigger-overlay' ),
          overlay = document.querySelectorAll( 'div.overlay' ),
          transEndEventNames = {
          'WebkitTransition': 'webkitTransitionEnd',
          'MozTransition': 'transitionend',
          'OTransition': 'oTransitionEnd',
          'msTransition': 'MSTransitionEnd',
          'transition': 'transitionend'
          },
          transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
          support = { transitions : Modernizr.csstransitions };
          
          for(var i=0; i < triggerBttn.length ; i++)
          {
            triggerBttn[i].addEventListener( 'click', toggleOverlay(overlay[i]) );
          closeBttn = overlay[i].querySelector( 'button.overlay-close' );
          closeBttn.addEventListener( 'click', toggleOverlay(overlay[i]) );
          }
          
          function toggleOverlay(overlay) {
          return function(){
          if( classie.has( overlay, 'open' ) ) {
          classie.remove( overlay, 'open' );
          classie.add( overlay, 'close' );
          var onEndTransitionFn = function( ev ) {
          if( support.transitions ) {
          if( ev.propertyName !== 'visibility' ) return;
          this.removeEventListener( transEndEventName, onEndTransitionFn );
          }
          classie.remove( overlay, 'close' );
          };
          if( support.transitions ) {
          overlay.addEventListener( transEndEventName, onEndTransitionFn );
          }
          else {
          onEndTransitionFn();
          }
          }
          else if( !classie.has( overlay, 'close' ) ) {
          classie.add( overlay, 'open' );
          }
          }
           }
          })();
                
        </script>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="brs-logo" src="<?php echo get_template_directory_uri(); ?>/images/brs-mark-austin@2x.png" width="75" height="118"></a>
