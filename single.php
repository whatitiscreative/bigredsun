<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
                    <div class="container blog">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
                    <div class="row" id="post-header">
                    	<div class="col-sm-3 col-md-3">
                             <p class="post-info single-info date"><?php the_date(); ?></p>
                        </div>
                        <div class="col-sm-6 col-md-6 post-title-single" id="center-title">
                    <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </div>
                    	<div class="col-sm-3 col-md-3">
                             <p class="post-info single-info">POSTED BY: <?php the_author(); ?></p>
                        </div>
                    </div>
                    <div class="blog-wrapper">
                    <div class="row">
                    	<div class="col-md-2"></div>
                        <div class="col-md-8">
							<?php the_content() ?>
                        </div>
                    	<div class="col-md-2"></div>
                    </div>
                    </div>
                    
				<?php endwhile;
			?>
       

            </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
