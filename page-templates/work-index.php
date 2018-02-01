<?php
  /**
   * Template Name: Work Index
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  
  get_header(); ?>

  <div class="container">
    <!-- tabs -->
    <div class="tabbable grid-tabs">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#residential" data-toggle="tab">Residential</a></li>
        <li><a href="#hanging-gardens" data-toggle="tab">Hanging Gardens</a></li>
        <li><a href="#commercial" data-toggle="tab">Commercial</a></li>
      </ul>
    </div>
    <hr class="work-hr">
    <!-- /tabs -->
    <div class="row featured-press">
      <div class="tab-content">
          <div class="tab-pane active" id="residential">
            <?php
              $args = array(
                'post_type' => 'projects',
              'taxonomy' =>'residential',
                'posts_per_page' => 2000,
              'orderby'=> 'title', 
              'order' => 'ASC',
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                );
              
              query_posts($args); 
              while(have_posts()): the_post(); ?>
            <div class="col-sm-6 col-md-4 img-box">
              <a href="<?php the_permalink(); ?>">
                <div class="grid-container">
                  <div class="grid-gel-wrapper">
                    <div class="label-bg">
                      <div class="gel-title">
                        <div class="gel-title-wrapper">
                          <p>
                            <span class="project-title-grid"><?php the_title(); ?></span>
                            <span class="location"><?php echo $cfs->get('location'); ?></span>
                            <span class="location">&nbsp;<span class="triangle">&nbsp;</span>
                          </p>
                        </div><!-- gel title wrapper -->
                      </div><!-- gel title -->
                    </div><!-- label bg -->
                    <div class="grid-image-wrapper">
                      <?php echo get_the_post_thumbnail(); ?>
                    </div><!--grid image wrapper -->
                  </div><!-- grid gel wrapper -->
                </div><!-- grid container -->
              </a><!-- permalink -->
            </div><!-- img box -->
            <?php endwhile;
              wp_reset_query();  // Restore global post data stomped by the_post().
              ?>
        </div><!-- tab pane residential -->
        <div class="tab-pane" id="hanging-gardens">
          <?php
            $args = array(
              'post_type' => 'projects',
            'taxonomy' =>'hanging-gardens',
              'posts_per_page' => 2000,
            'orderby'=> 'title', 
            'order' => 'ASC',
              'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
              );
            
            query_posts($args); 
            while(have_posts()): the_post(); ?>                
            <div class="col-sm-6 col-md-4 img-box">
              <a href="<?php the_permalink(); ?>">
                <div class="grid-container">
                  <div class="grid-gel-wrapper">
                    <div class="label-bg">
                      <div class="gel-title">
                        <div class="gel-title-wrapper">
                          <p>
                            <span class="project-title-grid"><?php the_title(); ?></span>
                            <span class="location"><?php echo $cfs->get('location'); ?></span>
                            <span class="location">&nbsp;<span class="triangle">&nbsp;</span>
                          </p>
                        </div><!-- gel title wrapper -->
                      </div><!-- gel title -->
                    </div><!-- label bg -->
                    <div class="grid-image-wrapper">
                      <?php echo get_the_post_thumbnail(); ?>
                    </div><!--grid image wrapper -->
                  </div><!-- grid gel wrapper -->
                </div><!-- grid container -->
              </a><!-- permalink -->
            </div><!-- img box -->
          <?php endwhile;
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        </div><!-- tab pane hanging gardens -->
        <div class="tab-pane" id="commercial">
          <div class="modal-section">
              <div class="cd-modal-action">
                <a href="#0" class="btn" data-type="modal-trigger">Selected Clients</a>
                <span class="cd-modal-bg"></span>
              </div> <!-- cd-modal-action -->

              <div class="cd-modal">
                <div class="cd-modal-content">
                  <div class="morph-content">
                    <div>
                      <div class="content-style-overlay">
                  
                        <h1 class="site-title-popup"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <img class="brs-logo brs-white" src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/06/logo-white.png">
                     <div class="row css-columns">
                      <?php foreach ($cfs->get('selected_clients') AS $sc): ?>
                        <p><?php echo $sc['selected_client']?></p>
                        <?php endforeach ?>
                      </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- cd-modal-content -->
              </div> <!-- cd-modal -->

              <a href="#" class="cd-modal-close">Close</a>
            </div> <!-- .modal-section -->      
          <?php
            $args = array(
              'post_type' => 'projects',
            'taxonomy' =>'commercial',
              'posts_per_page' => 2000,
            'orderby'=> 'title', 
            'order' => 'ASC',
              'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
              );
            
            query_posts($args); 
            while(have_posts()): the_post(); ?>
            <div class="col-sm-6 col-md-4 img-box">
              <a href="<?php the_permalink(); ?>">
                <div class="grid-container">
                  <div class="grid-gel-wrapper">
                    <div class="label-bg">
                      <div class="gel-title">
                        <div class="gel-title-wrapper">
                          <p>
                            <span class="project-title-grid"><?php the_title(); ?></span>
                            <span class="location"><?php echo $cfs->get('location'); ?></span>
                            <span class="location">&nbsp;<span class="triangle">&nbsp;</span>
                          </p>
                        </div><!-- gel title wrapper -->
                      </div><!-- gel title -->
                    </div><!-- label bg -->
                    <div class="grid-image-wrapper">
                      <?php echo get_the_post_thumbnail(); ?>
                    </div><!--grid image wrapper -->
                  </div><!-- grid gel wrapper -->
                </div><!-- grid container -->
              </a><!-- permalink -->
            </div><!-- img box -->
          <?php endwhile;
            wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">

// Create the hashtabs

  var hash = window.location.hash;
   hash && $('ul.nav a[href="' + hash + '"]').tab('show');



   $('.nav-tabs a').click(function (e) {
     $(this).tab('show');
     var scrollmem = $('body').scrollTop();
     window.location.hash = this.hash;
     $('html,body').scrollTop(scrollmem);
   });


// Animated Morphing Circle Modal -- credits to codyhouse.co

   jQuery(document).ready(function($){
    //trigger the animation - open modal window
    $('[data-type="modal-trigger"]').on('click', function(){
      var actionBtn = $(this),
        scaleValue = retrieveScale(actionBtn.next('.cd-modal-bg'));
      
      actionBtn.addClass('to-circle');
      actionBtn.next('.cd-modal-bg').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        animateLayer(actionBtn.next('.cd-modal-bg'), scaleValue, true);
      });

      //if browser doesn't support transitions...
      if(actionBtn.parents('.no-csstransitions').length > 0 ) animateLayer(actionBtn.next('.cd-modal-bg'), scaleValue, true);
    });

    //trigger the animation - close modal window
    $('.modal-section .cd-modal-close').on('click', function(){
      closeModal();
    });
    $(document).keyup(function(event){
      if(event.which=='27') closeModal();
    });

    $(window).on('resize', function(){
      //on window resize - update cover layer dimention and position
      if($('.modal-section.modal-is-visible').length > 0) window.requestAnimationFrame(updateLayer);
    });

    function retrieveScale(btn) {
      var btnRadius = btn.width()/2,
        left = btn.offset().left + btnRadius,
        top = btn.offset().top + btnRadius - $(window).scrollTop(),
        scale = scaleValue(top, left, btnRadius, $(window).height(), $(window).width());

      btn.css('position', 'fixed').velocity({
        top: top - btnRadius,
        left: left - btnRadius,
        translateX: 0,
      }, 0);

      return scale;
    }

    function scaleValue( topValue, leftValue, radiusValue, windowW, windowH) {
      var maxDistHor = ( leftValue > windowW/2) ? leftValue : (windowW - leftValue),
        maxDistVert = ( topValue > windowH/2) ? topValue : (windowH - topValue);
      return Math.ceil(Math.sqrt( Math.pow(maxDistHor, 2) + Math.pow(maxDistVert, 2) )/radiusValue);
    }

    function animateLayer(layer, scaleVal, bool) {
      layer.velocity({ scale: scaleVal }, 400, function(){
        $('body').toggleClass('overflow-hidden', bool);
        (bool) 
          ? layer.parents('.modal-section').addClass('modal-is-visible').end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend')
          : layer.removeClass('is-visible').removeAttr( 'style' ).siblings('[data-type="modal-trigger"]').removeClass('to-circle');
      });
    }

    function updateLayer() {
      var layer = $('.modal-section.modal-is-visible').find('.cd-modal-bg'),
        layerRadius = layer.width()/2,
        layerTop = layer.siblings('.btn').offset().top + layerRadius - $(window).scrollTop(),
        layerLeft = layer.siblings('.btn').offset().left + layerRadius,
        scale = scaleValue(layerTop, layerLeft, layerRadius, $(window).height(), $(window).width());
      
      layer.velocity({
        top: layerTop - layerRadius,
        left: layerLeft - layerRadius,
        scale: scale,
      }, 0);
    }

    function closeModal() {
      var section = $('.modal-section.modal-is-visible');
      section.removeClass('modal-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        animateLayer(section.find('.cd-modal-bg'), 1, false);
      });
      //if browser doesn't support transitions...
      if(section.parents('.no-csstransitions').length > 0 ) animateLayer(section.find('.cd-modal-bg'), 1, false);
    }
   });
   


  </script>



<?php
get_footer();