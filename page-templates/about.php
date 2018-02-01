<?php
/**
 * Template Name: About
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
              <div class="col-md-1"></div>
            	<div class="col-md-10">
                	<img class="img-responsive about-image" data-src="<?php echo $cfs->get('main_image'); ?>">
                </div>
              <div class="col-md-1"></div>
            </div>
            
              <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8">
                  <h1 class="intro-statement"><?php echo $cfs->get('intro_statement'); ?></h1>
                </div>
              <div class="col-md-2"></div>
              </div>
              
              <div class="row dots-row">
              <div class="col-md-5"></div>
                <div class="col-md-2 dots">
            <ol class="carousel-indicators">
                <li></li>
                <li></li>
                <li></li>
            </ol>
                </div>
              <div class="col-md-5"></div>
              </div>


              <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8">
                  <p class="secondary-statement"><?php echo $cfs->get('secondary_statement'); ?></p>
                </div>
              <div class="col-md-2"></div>
              </div>
              <div class="row timeline">
              <?php foreach ($cfs->get('timeline') AS $timeline): ?> <!-- open external loop -->
                <div class="col-sm-4 col-md-4 timeline-content">
                  <h3 class="timeline-title"><span class="year"><?php echo $timeline['year']?></span></h3>
                  <p class="timeline-text"><?php echo $timeline['timeline_event']?></p>
                </div>
              <?php endforeach ?>
              </div>
              
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
