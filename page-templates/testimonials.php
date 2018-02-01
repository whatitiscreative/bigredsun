<?php
/**
 * Template Name: Testimonials
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
        <div class="container">
        <div class="row"> <!-- Page Header Block -->
            <div class="col-sm-1 col-md-2"></div>
                <div class="col-sm-10 col-md-8" id="fi-intro">
                <h1 class="feed-title"><?php the_title(); ?></h1>
                <h3 class="feed-subtitle">BIG RED SUN AUSTIN</h3>
                </div>
            <div class="col-sm-1 col-md-2"></div>
        </div>

		<div class="row">
               <div class="col-sm-1 col-md-1"></div>
               <div class="col-sm-10 col-md-10" id="intro-block-border">
                   <hr>
               </div>
               <div class="col-sm-1 col-md-1"></div>
  		</div>
        
          <div class="row">
            <div class="col-md-12 blog-feed">
              <?php
                $args = array(
                  'post_type' => 'testimonials',
                  'posts_per_page' => 5,
				  'order' => 'date',
                  'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                  );
                
                query_posts($args); 
                while(have_posts()): the_post(); ?>
                
                
<?php if ('' != $cfs->get('quote_text')) : { ?>
                <div class="row blog-row">
                <div class="col-sm-2 col-md-2"></div>
                <div class="col-sm-6 col-md-6">
                    <h1 class="testimonial-quote"><?php the_excerpt(); ?>

</h1>
                </div>
                <div class="col-sm-2 col-md-2">
                   <p class="post-info">
					 <span class="name"><?php echo $cfs->get('quote_author'); ?></span><br/>
                     <?php echo $cfs->get('month_year'); ?><br/>
                     <?php echo $cfs->get('city_state'); ?>
                   </p>
                     <p class="post-note"><?php echo $cfs->get('auxiliary_note'); ?></p>
                <a href="<?php the_permalink(); ?>"><button type="button" class="read-more-button btn">Read More</button></a>
                </div>
                <div class="col-sm-2 col-md-2"></div>
               </div>
               
               
               
               <?php } else : {  ?>              
              
                <div class="row blog-row">
                <div class="col-sm-2 col-md-2"></div>
                <div class="col-sm-6 col-md-6">
                    <h1 class="testimonial-quote"><?php the_excerpt(); ?>

</h1>
                </div>
                <div class="col-sm-2 col-md-2">
                   <p class="post-info">
					 <span class="name"><?php echo $cfs->get('quote_author'); ?></span><br/>
                     <?php echo $cfs->get('month_year'); ?><br/>
                     <?php echo $cfs->get('city_state'); ?>
                   </p>
                     <p class="post-note"><?php echo $cfs->get('auxiliary_note'); ?></p>
                </div>
                <div class="col-sm-2 col-md-2"></div>
               </div>
			   <?php } ?>

<?php endif; ?>
              	<div class="row">  <!-- POST DIVIDER -->
                       <div class="col-sm-1 col-md-1"></div>
                       <div class="col-sm-10 col-md-10" id="intro-block-border">
                           <hr>
                       </div>
                       <div class="col-sm-1 col-md-1"></div>
  				</div>

              
              <?php endwhile;?>
            <div class="navigation">
              <?php next_posts_link(' Older Posts') ?>
              <?php previous_posts_link('Newer Posts') ?>
            <?php wp_reset_query(); ?> <!-- Restore global post data -->
            </div>
            </div>
          </div>
        </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
