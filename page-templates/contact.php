<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/browser-selector.js"></script>
<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
          <div class="container">


            <div class="row">
                <div class="col-sm-1 col-md-1">
                </div>
                <div class="col-sm-10 col-md-10 map">
                  <div class="map-wrapper">
                    <div id="googleMap" style="width:100%;height:400px;"></div>
                	</div>
                      </div>
                  <div class="col-sm-1 col-md-1">
                  </div>
            </div>
            
            <div class="row">
            	<div class="col-sm-2 col-md-2"></div>
                <div class="col-sm-5 col-md-5">
                  <h1 class="contact-intro-statement"><?php echo $cfs->get('contact_intro_statement'); ?></h1>
                </div>
                <div class="col-sm-5 col-md-5">
                
    <div class="ie9-morph">
        <a data-toggle="modal" href="#myModal"><img class="new-business" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/09/new-bus-FILL@2x.png" width="188" height="107">
</a>

<div class="modal" id="myModal">
            <div class="morph-content">
              <div>
                <div class="content-style-overlay">
                           <a href="#" data-dismiss="modal" class="btn"><img class="ie-close" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/09/x.png"></a>
    
                  <h1 class="site-title-popup"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <img class="brs-logo brs-white" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/06/logo-white.png">
                  <img class="morph-button-white" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/09/new-bus-WHI@2x.png" width="188" height="107">
                  <div class="row">
                    <div class="col-sm-1 col-md-1 col-lg-3"></div>
                    <div class="col-sm-10 col-md-10 col-lg-6">
                      <h1 class="intro-statement-popup"><?php echo $cfs->get('popup_intro_statement'); ?></h1>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-2"></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-1 col-md-1 col-lg-3"></div>
                    <div class="col-sm-10 col-md-10 col-lg-6">
                      <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                          <p><?php echo $cfs->get('popup_blurb'); ?></p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                          <p><?php echo $cfs->get('popup_contact_info_title'); ?></p>
                          <hr class="top-hr">
                          <p class="number"><?php echo $cfs->get('phone_number'); ?></p>
                          <hr>
                          <p class="email"><?php echo $cfs->get('email_address'); ?></p>
                          <hr>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-1 col-md-1 col-lg-3"></div>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div><!-- ie 9 morph -->
                
                
                            <div class="morph-button morph-button-overlay morph-button-fixed no-ie">
<button type="button"><img class="new-business" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/09/new-bus-FILL@2x.png" width="188" height="107"></button>
<div class="morph-content">
<div>
<div class="content-style-overlay">
<span class="icon icon-close"></span>
                                <h1 class="site-title-popup"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <img class="brs-logo brs-white" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/06/logo-white.png">
    <img class="morph-button-white" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/09/new-bus-WHI@2x.png" width="188" height="107">
                                  <div class="row">
								   <div class="col-sm-1 col-md-1 col-lg-3"></div>
                                    <div class="col-sm-10 col-md-10 col-lg-6">
                                      <h1 class="intro-statement-popup"><?php echo $cfs->get('popup_intro_statement'); ?></h1></div>
                                  <div class="col-sm-1 col-md-1 col-lg-2"></div>
                                  </div>
                                <div class="row">
                                  <div class="col-sm-1 col-md-1 col-lg-3"></div>
                                    <div class="col-sm-10 col-md-10 col-lg-6">
                                    <div class="row">
                                    	<div class="col-sm-6 col-md-6 col-lg-6">
                                        	                                      <p><?php echo $cfs->get('popup_blurb'); ?></p>

                                        </div>
                                    	<div class="col-sm-6 col-md-6 col-lg-6">
                                                                              <p><?php echo $cfs->get('popup_contact_info_title'); ?></p>
                                      <hr class="top-hr">
                                      <p class="number"><?php echo $cfs->get('phone_number'); ?></p>
                                      <hr>
                                      <p class="email"><?php echo $cfs->get('email_address'); ?></p>
                                      <hr>
                                      </div>

                                    </div>
                                    </div>
                                  <div class="col-sm-1 col-md-1 col-lg-3"></div>
                                  </div>

</div>
</div>
</div>
</div><!-- morph-button -->

                </div>

            </div>
            
               <div class="row">
            	<div class="col-sm-2 col-md-2"></div>
                <div class="col-sm-2 col-md-2">
                  <p><?php echo $cfs->get('contact_info'); ?></p>
                </div>
                <div class="col-sm-2 col-md-2">
                  <p><?php echo $cfs->get('office_hours'); ?></p>
                </div>
                <div class="col-sm-6 col-md-6">                  
                </div>

            </div>

            
		</div><!-- container -->
	</div><!-- #primary -->
</div><!-- #main-content -->



<?php
get_footer();
