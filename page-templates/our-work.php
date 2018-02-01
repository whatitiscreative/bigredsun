<?php
/**
 * Template Name: Our Work
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="mainbody">
				<div class="slider responsive slider-full no-ie-slider">
					  <?php foreach ($cfs->get('work') AS $work): ?> <!-- open external loop -->
                          <div class="img" style="background:linear-gradient(
          rgba(255, 255, 255, 0.80), 
          rgba(255, 255, 255, 0.85) ), url(<?php echo $work['category_image']?>);">   
                          <div class="container">
                          <div class="row text-center slider-main-content">              
                             <h1 class="slider-title"><?php echo $work['category_title']?></h1>
                            <p class="slider-description"><span class="title-dot">&#x25cf;</span><?php echo $work['category_description']?><span class="title-dot">&#x25cf;</span></p>
                <a href="<?php echo $work['category_button_url']?>"><button type="button" class="browse-button btn browse-desktop"><?php echo $work['category_button_text']?></button>
                </a>
                <a href="<?php echo $work['grid_view_category_button_url']?>"><button type="button" class="browse-button btn browse-mobile"><?php echo $work['category_button_text']?></button>
                </a>
                            </div>
                            </div>
                            </div>
                      <?php endforeach ?>
				</div>
				<div class="slider responsive slider-full ie-slider">
					  <?php foreach ($cfs->get('work') AS $work): ?> <!-- open external loop -->
                          <div class="img" style="background:url(http://bigredsun.staging.wpengine.com/wp-content/uploads/2014/10/gel2.png), url(<?php echo $work['category_image']?>);">   
                          <div class="container">
                          <div class="row text-center slider-main-content">              
                             <h1 class="slider-title"><?php echo $work['category_title']?></h1>
                            <p class="slider-description"><span class="title-dot">&#x25cf;</span><?php echo $work['category_description']?><span class="title-dot">&#x25cf;</span></p>
                <a href="<?php echo $work['category_button_url']?>"><button type="button" class="browse-button btn"><?php echo $work['category_button_text']?></button>
                </a>
                            </div>
                            </div>
                            </div>
                      <?php endforeach ?>
				</div>
</div>
</div>
<?php
get_footer();

