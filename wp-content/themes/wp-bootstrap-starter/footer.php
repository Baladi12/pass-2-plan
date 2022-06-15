<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
		    <div class="row">
		        
		    
            <div class="site-info col-md-6">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>. All Rights Reserved
             </div><!-- close .site-info -->
             <div class="social-links col-md-6">
                 <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                 <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                 <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                 <p><a href="#"><i class="fab fa-youtube"></i></a></p>
             </div>
            </div>
            
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
<script>
    
    jQuery(document).ready(function($) {
		$(".header_search").click(function(){
			$(".header_search_tog").slideToggle();
		});
		$(".header-cart img").click(function(){
			$(".header-minicart").slideToggle();
		});
		var showing = $(".woocommerce-result-count").detach();
		$( ".woocommerce-shop header.entry-header.shop_title" ).append(showing);
		
		var invoicebtn = $(".displayNone a.woocommerce-button.button.wpifw-my-account-invoice").detach();
		$( ".order_view_ibs .order_infoleft .order_content-left" ).append(invoicebtn);

		//$('#wc-stripe-cc-form .form-row-first label').text('Expiration Date');
	});	
jQuery('.navbar-toggler').on('click',function(){
    jQuery('body').toggleClass('show-menu');
});
    
</script>
</html>