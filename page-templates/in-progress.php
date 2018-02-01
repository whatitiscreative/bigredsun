<?php
  /**
   * Template Name: Field Notes
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  
  get_header(); ?>
<div id="main-content" class="main-content">
  <div id="primary" class="content-area">
    <div class="container">
      <div class="row">
        <!-- Page Header Block -->
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-sm-10 col-md-8" id="fi-intro">
          <h1 class="feed-title"><?php echo $cfs->get('page_title'); ?></h1>
          <h3 class="feed-subtitle"><?php echo $cfs->get('page_subtitle'); ?></h3>
          <p class="feed-intro"><?php echo $cfs->get('intro_text'); ?></p>
        </div>
        <div class="col-sm-1 col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10" id="intro-block-border">
          <hr>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <div class="row">
        <div class="col-md-12 blog-feed">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 5,
            'order' => 'date',
              'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
              );
            
            query_posts($args); 
            while(have_posts()): the_post(); ?>
          <?php
            // Must be inside a loop.
            
            if ( has_post_thumbnail() ) {
            ?>
          <div class="row blog-row">
            <div class="col-sm-1 col-md-1 col-lg-2"></div>
            <div class="col-sm-7 col-md-6 col-lg-5 post-image-frame">
              <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
            </div>
            <div id="post-details" class="col-sm-3 col-md-4 col-lg-3">
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p class="post-info"><?php the_date(); ?> • Posted By <?php the_author();?></p>
              <a href="<?php the_permalink(); ?>"><button type="button" class="read-more-button btn">Read More</button></a>
            </div>
            <div class="col-sm-1 col-md-1 col-lg-2"></div>
          </div>
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
              <hr>
            </div>
            <div class="col-lg-1"></div>
          </div>
          <?php } else { ?>
          <div class="row blog-row">
            <div class="col-sm-2 col-md-2"></div>
            <div class="col-sm-5 col-md-5">
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p class="post-info"><?php the_date(); ?> • Posted By <?php the_author();?></p>
            </div>
            <div class="col-sm-3 col-md-3">
              <a href="<?php the_permalink(); ?>"><button type="button" class="read-more-button">Read More</button>
              </a>
            </div>
            <div class="col-sm-2 col-md-2"></div>
          </div>
          <?php   } ?>
          <?php endwhile;?>
          <div class="navigation">
            <?php next_posts_link(' Older Posts') ?>
            <?php previous_posts_link('Newer Posts') ?>
            <?php wp_reset_query(); ?> <!-- Restore global post data -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- #content -->
</div>
<!-- #primary -->
<?php
get_footer();