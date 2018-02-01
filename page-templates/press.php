<?php
  /**
   * Template Name: Selected Press
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  
  get_header(); ?>
<div id="main-content" class="main-content">
  <div id="primary" class="content-area">
    <div class="container single-press-title top">
      <div class="row featured-press">
        <?php
          $args = array(
            'post_type' => 'press',
            'posts_per_page' => 2000,
          'order' => 'date',
            'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
            );
          query_posts($args); 
          while(have_posts()): the_post(); 
          
          if( $wp_query->current_post == 0 && !is_paged() ) { ?>
        <div class="col-lg-2"></div>
        <div class="col-sm-3 col-md-3 col-lg-3 featured-article-image">
          <?php echo the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?>
        </div>
        <div class="col-sm-9 col-md-9 col-lg-5 featured-article-content">
          <h1 class="featured-press-title"><a href="<?php echo $cfs->get('read_story_link_url'); ?>"><?php the_title(); ?></a></h1>
          <p class="post-info"><?php echo $cfs->get('featured_story_issue_title'); ?></p>
          <p><?php the_content(); ?></p>
          <a href="<?php echo $cfs->get('read_story_link_url'); ?>" target="_blank"><button type="button" class="read-more-button press-read-more">Read Story</button>
          </a>
        </div>
        <div class="col-lg-2"></div>
      </div>
      <hr>
      <h1 class="press-feed-title">Previous Stories</h1>
      <?php } else { ?>
      <div class="col-sm-6 col-md-4 press-box">
        <div class="press-img"><?php echo the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?></div>
        <h1><a href="<?php echo $cfs->get('read_story_link_url'); ?>"><?php the_title(); ?></a></h1>
        <p class="post-info"><?php echo $cfs->get('featured_story_issue_title'); ?></p>
        <?php if ('' != $cfs->get('read_story_link_url')) : { ?>
        <a href="<?php echo $cfs->get('read_story_link_url'); ?>" target="_blank"><button type="button" class="read-more-button">Read Story</button>
        <?php } else : {  ?>  
        <a href="<?php the_permalink(); ?>"><button type="button" class="read-more-button">Read Story</button>
        <?php } ?>
        <?php endif; ?>                          
        </a>
      </div>
      <?php   } ?>
      <?php endwhile;
        wp_reset_query();  // Restore global post data stomped by the_post().
        
        ?>
    </div>
  </div>
  <!-- #content -->
</div>
<!-- #primary -->
<?php
get_footer();