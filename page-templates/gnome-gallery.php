<?php
  /**
   * Template Name: Gnome Gallery
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  
  get_header(); ?>
  <div class="wrap-section">
    <div class="wrap-all">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($cfs->get('gnome_gallery') AS $gg): ?>
          <div class="swiper-slide">
            <div class="slider single-item">
              <div>
                <img data-src="<?php echo $gg['gnome_gallery_image']?>">
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
            <h1 class="featured-press-title"><?php echo $cfs->get('gnome_gallery_title'); ?></h1>

          </div>
        </div>
      </div>
    </div>
    <!-- wrap all -->
  </div>
<?php
get_footer();