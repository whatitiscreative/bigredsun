<?php
  /**
   * The template for displaying the footer
   *
   * Contains footer content and the closing of the #main and #page div elements.
   *
   * @package WordPress
   * @subpackage Twenty_Fourteen
   * @since Twenty Fourteen 1.0
   */
  ?>
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    <div class="footer-left">
      <a href="https://www.google.com/maps/place/1311+E+Cesar+Chavez+St,+Austin,+TX+78702/@30.2590613,-97.7307702,15z/data=!4m2!3m1!1s0x8644b5adf8acf485:0x4d6522a22c08ee99" target="_blank">
        <p>1311 East Cesar Chavez</p>
        <p>Austin, Texas 78702</p>
      </a>
    </div>
    <div class="footer-right">
      <p>512.480.0688</p>
      <p><a href="mailto:design@bigredsunaustin.com">design@bigredsunaustin.com</a></p>
    </div>
    <a href="<?php echo esc_url( home_url( '/gnome-gallery' ) ); ?>">
      <div class="box"></div>
    </a>
  </div>
  <!-- .site-info -->
</footer>
</div><!-- #main -->

</div><!-- #page -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/idangerous.swiper.hashnav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/velocity.js"></script>

<script type="text/javascript">
  ( function( $ ) {
      $(document).ready(function() {
        $('.single-item').slick({
          fade: true,
          lazyLoad: 'progressive'
        });
      });
    } )( jQuery );

    ( function( $ ) {
        $(document).ready(function() {
          $('.morph-button.morph-button-modal.morph-button-modal-2.morph-button-fixed').click(function(){
              $(this).addClass('active open scroll');
          });
          $('.icon-close').click(function(e){
              e.stopPropagation();
              $('.morph-button.morph-button-modal.morph-button-modal-2.morph-button-fixed').addClass('active open scroll').removeClass('active open scroll');
          });
        });
      } )( jQuery );

   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-27042515-1']);
   _gaq.push(['_trackPageview']);
  
   (function() {
     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();

</script>
</body>
</html>