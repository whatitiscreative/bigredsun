<?php
  /**
   * Template Name: Home
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
      <!--[if IE 9]>
      <div class="ie9-morph home-ie-morph">
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
      </div>
      <![endif]-->

      <div class="morph-button morph-button-overlay morph-button-fixed new-business no-ie">
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
      <div class="homepage-desktop-view">
        <div class="row level-one">
          <div class="col-sm-2 col-md-2"></div>
          <div class="col-sm-3 col-md-3 stacked">
            <!-- first level feature -->
            <div class="homepage-image-wrapper feat1">
              <!--[if IE 9]>
              <img class="img-responsive img-2" src="<?php echo $cfs->get('featured_image_one'); ?>">
              <![endif]-->
              <img class="img-responsive img-1 fade-in four preload" src="<?php echo $cfs->get('featured_image_one'); ?>">
              <div class="label-container feat1">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_1_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_1_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_1_link_url'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_1_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-md-2"></div>
          <div class="col-sm-5 col-md-5 stacked">
            <!-- second level image -->
            <div class="homepage-image-wrapper feat2">
              <!--[if IE 9]>
              <img class="img-responsive img-2" src="<?php echo $cfs->get('featured_image_two'); ?>">
              <![endif]-->
              <img class="img-responsive img-2 fade-in two preload" src="<?php echo $cfs->get('featured_image_two'); ?>">
              <div class="label-container feat2">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_2_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_2_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_2_link_url'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_2_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row level-two">
          <div class="col-sm-5 col-md-5 stacked num4">
            <!-- fourth level image -->
            <div class="homepage-image-wrapper feat4">
              <!--[if IE 9]>
              <img class="img-responsive img-4" src="<?php echo $cfs->get('featured_image_four'); ?>">
              <![endif]-->
              <img class="img-responsive img-4 fade-in one preload" src="<?php echo $cfs->get('featured_image_four'); ?>">
              <div class="label-container feat4">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_4_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_4_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_4_link_url'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_4_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-5 stacked">
            <!-- third level image -->
            <div class="homepage-image-wrapper feat3">
              <!--[if IE 9]>
              <img class="img-responsive img-3" src="<?php echo $cfs->get('featured_image_three'); ?>">
              <![endif]-->
              <img class="img-responsive img-3 fade-in three preload" src="<?php echo $cfs->get('featured_image_three'); ?>">
              <div class="label-container feat3">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_3_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_3_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_3_link_url'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_3_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-2 col-md-2"></div>
        </div>
      </div>
      <!--desktop-->
      <div class="homepage-mobile-view">
        <div class="row level-one">
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
          <div class="col-sm-10 col-md-10 col-lg-3 stacked">
            <!-- first level feature -->                      
            <!-- second level image -->
            <div class="homepage-image-wrapper feat2">
              <img class="img-responsive img-2" src="<?php echo $cfs->get('featured_image_two'); ?>">
              <div class="label-container feat2">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_2_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_2_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_2_mobile_link'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_2_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
        </div>
        <div class="row">
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
          <div class="col-sm-10 col-md-10 col-lg-5 stacked">
            <!-- second level image -->
            <div class="homepage-image-wrapper feat3">
              <img class="img-responsive img-3" src="<?php echo $cfs->get('featured_image_three'); ?>">
              <div class="label-container feat3">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_3_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_3_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_3_mobile_link'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_3_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
        </div>
        <div class="row level-two">
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
          <div class="col-sm-10 col-md-10 col-lg-5 stacked">
            <!-- fourth level image -->
            <div class="homepage-image-wrapper feat4">
              <img class="img-responsive img-4" src="<?php echo $cfs->get('featured_image_four'); ?>">
              <div class="label-container feat4">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_4_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_4_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_4_link_url'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_4_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
        </div>
        <div class="row">
          <div class="col-sm-1 col-md-1 col-lg-2"></div>
          <div class="col-sm-10 col-md-10 col-lg-5 stacked">
            <!-- third level image -->
            <div class="homepage-image-wrapper feat1">
              <img class="img-responsive img-1" src="<?php echo $cfs->get('featured_image_one'); ?>">
              <div class="label-container feat1">
                <div class="label-bg">
                  <div class="gel-border">
                    <table class="gel-title">
                      <tr>
                        <td>
                          <p class="subtitle"><?php echo $cfs->get('feature_1_subtitle'); ?></p>
                          <p class="title"><?php echo $cfs->get('feature_1_title'); ?></p>
                          <a href="<?php echo $cfs->get('feature_1_mobile_link'); ?>"><button type="button" class="browse-button btn"><?php echo $cfs->get('feature_1_link_text'); ?></button></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-2"></div>
          </div>
        </div>
        <!--mobile-->
      </div>
    </div>
    <!-- #content -->
  </div>
  <!-- #primary -->
</div>
<!-- #main-content -->

<?php
get_footer();