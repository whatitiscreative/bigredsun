<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
        <div class="container">
        <div class="row">
        	<div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                <h1><?php single_cat_title(); ?></h1>	
            </div>
        	<div class="col-md-2"></div>
        </div>
</div><!-- #content -->
</div>
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
