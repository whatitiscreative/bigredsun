  <?php
    /**
     * Template Name: Our Work Index
     *
     * @package WordPress
     * @subpackage Twenty_Fourteen
     * @since Twenty Fourteen 1.0
     */
    
    get_header(); ?>
  <!-- tabs -->
  <?php
    while(have_posts()): the_post(); ?>
  <div class="container">
    <div class="grid-margin">
      <ul class="nav nav-tabs">
        <?php $project_terms = wp_get_object_terms( get_the_ID(), 'taxonomy');
          $args= array(
          'fields' => 'ids'
          );
          if(!empty($project_terms)){
           if(!is_wp_error( $project_terms )){
          foreach($project_terms as $term){
           echo '<a href="http://bigredsunaustin.com/work/#'.$term->slug.'"><img src="http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/09/gridview-icon.png" width="26" height="17"></a>'; 
          }
           }
          } ?>
      </ul>
    </div>
    <!-- /tabs -->
  </div>
  <div class="wrap-section">
    <div class="wrap-all">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($cfs->get('our_work_gallery') AS $g): ?> 
          <div class="swiper-slide">
            <div class="slider single-item">
              <div>
                <img data-src="<?php echo $g['gallery_image']?>">
              </div>
            </div>
            <!-- slider single item -->
            <!-- code for modal -->
          </div>
          <?php endforeach ?>
        </div>
        <!-- swiper wrapper -->
      </div>
      <!-- swiper container -->
      <div class="container">
        <div class="row grid-margin">
          <div class="col-xs-12 text-center">
            <h4 class="project-cat">
              <?php $project_terms = wp_get_object_terms( get_the_ID(), 'taxonomy');
                $args= array(
                'fields' => 'ids'
                );
                if(!empty($project_terms)){
                 if(!is_wp_error( $project_terms )){
                foreach($project_terms as $term){
                 echo ''.$term->name.''; 
                }
                 }
                } ?>
            </h4>
            <h1 class="featured-press-title"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
        <?php
          $post_content = get_the_content();
          
            if( !is_null( $post_content ) && !empty($post_content ) ){?>
        <div class="overlay-button-wrapper">
        <button type="button" class="trigger-overlay-light read-more-button">Read More</button>
      </div>
    </div>

    <!-- wrap all -->
  </div>

  <div class="overlay overlay-hugeinc light">
    <span class="overlay-close-light close-it hairline"></span>
    <div class="content-text">
      <h1 class="featured-press-title"><?php the_title(); ?></h1>
      <p><?php echo get_the_content(); ?></p>
    </div>
  </div>
  <?php } ?>
  <?php endwhile;
    wp_reset_query();  // Restore global post data stomped by the_post().
    
    ?>
  <script>
    $('.trigger-overlay-light').click(function(){
        $('.overlay-hugeinc.light').addClass('open');
    });
    $('.overlay-close-light').click(function(e){
        e.stopPropagation();
        $('.overlay-hugeinc.light').removeClass('open');
    });
  </script>
  <?php
  get_footer();