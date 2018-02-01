<?php
/**
 * The Template for displaying all single testimonial posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
                    <div class="container">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                    	<div class="col-md-2">
                        </div>
                        <div class="col-md-8 testimonial-single-exceprt" >
                    <h1 class="testimonial-quote"><?php the_excerpt(); ?>

</h1>
                        </div>
                    	<div class="col-md-2">
                        </div>
                    </div>
                    
                    
                  <div class="single-testimonials">  
                  <div class="blog-wrapper">
                    <div class="row">
                    	<div class="col-md-2"></div>
                        <div class="col-md-8 quote-text">
						<p><?php echo CFS()->get('quote_text'); ?></p>
                        </div>
                <div class="col-sm-2 col-md-2"></div>
                    </div>
                    <div class="row">
                    <div class="col-md-2"></div>
                <div class="col-md-8 testimony-quote">
                                   <p class="post-info">
					 <span class="name"><?php echo $cfs->get('quote_author'); ?></span><br/>
                     <?php echo $cfs->get('city_state'); ?>
                   </p>
                     <p class="post-note"><?php echo $cfs->get('auxiliary_note'); ?></p>
</div>
                    <div class="col-md-2"></div>
                    </div>

                    </div>
                    </div>
				<?php endwhile;
			?>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->
    
    
    
    

<?php
get_footer();
