<?php
/**
 * Template Name: Our Team
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
    
          <div class="container">
          <div class="main-profile-section">
          
          	<div class="row" id="boss">
            <div class="col-lg-1"></div>
            	<div class="col-sm-3 col-md-3 col-lg-3">
                	<img class="julie-profile-image img-responsive" data-src="<?php echo $cfs->get('julie_blakeslee_image'); ?>">

                </div>
                <div class="col-sm-9 col-md-9 col-lg-6 main-feature">
                	<h1 class="name"><?php echo $cfs->get('julie_blakeslee_name'); ?></h1>
                    <p class="title"><?php echo $cfs->get('julie_blakeslee_title'); ?></p>
                    <p class="bio"><?php echo $cfs->get('julie_blakeslee_bio'); ?></p>
                </div>
            <div class="col-lg-2"></div>
            </div>
          </div>
          <hr>
            <div class="team-section">
              <div class="row team-row">
                <div class="col-md-12">
                  <h1 class="project-team">Project Team</h1>
                </div>
              </div>
              <div class="row project-team">
              <?php foreach ($cfs->get('project_team') AS $team): ?> <!-- open external loop -->
                <div class="col-sm-4 col-md-4 team-member">
                  <img class="team-member-image" data-src="<?php echo $team['team_member_image']?>">
                  <h3 class="team-member-name"><?php echo $team['name']?></h3>
                  <p class="title"><?php echo $team['title']?></p>
                  <hr>
                </div>
              <?php endforeach ?>
              </div>
            </div>
            <!-- container -->
          </div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
