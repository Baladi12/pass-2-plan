<?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); 

$year_pro = getAllMetaData();
$years = array();
foreach($year_pro as $year){
    $orgDate = $year->meta_value;  
    $years[$year->meta_value] = date("F Y", strtotime($orgDate));  
   
}
 ?>

    <section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12 product-page">
        <div id="main" class="site-main" role="main">
            <?php
?>

<?php

		if ( is_singular( 'product' ) ) {

			while ( have_posts() ) :
				the_post();
				?>
				<section class="single-prod">
				    <div class="row">
				        <div class="col-md-4">
				            <div class="clases-sidebar">
				                <h2>class details</h2>
				                <h3><?php echo get_field('date');  ?></h3>
				                <p><?php echo get_field('min_time'); ?>-<?php echo get_field('max_time'); ?></p>
				                <h3>LOCATION:</h3>
				                <p><?php echo get_field('location');  ?></p>
				                <h3>INSTRUCTOR:</h3>
				                <p><?php echo get_field('instructor');  ?></p>
				                <h3>CEUS:</h3>
				                <p><?php echo get_field('ceus');  ?></p>
				            </div>
				            <div class="clases-sidebar">
				                <h2>Upcoming Classes & Events</h2>
				                <table class="side-bar-tbl">
				                <?php 
				                foreach ($years as $key => $value) {?>
                            	
                            	<?php
                            	$args = array(
                            		'post_type' => 'product',    
                            		'meta_query' => array(
                            		array(
                            		'key' => 'month_year',
                            		'type' => 'date',
                            		'value'   => $key,
                            		'compare' => '=',
                            		), 
                            		),
                            		);
                            		
                            		$upcoming = get_posts($args);
                            		if(!empty($upcoming)):
                            		foreach($upcoming as $post){ ?>
                            		    <tr>
                                    		<td><h3><?php echo get_field('date', $post->ID);  ?></h3></td>
                                    		<td>
                                    		<h2><a href="<?php echo get_the_permalink($post->ID);?>"><?php echo get_the_title($post->ID);  ?></a></h2>
                                            <h4><?php echo get_field('min_time', $post->ID); ?>-<?php echo get_field('max_time', $post->ID); ?></h4>
                                            </td>
                                    	</tr>
                            		<?php }
                            		endif; ?>
                                  
                               <?php
                                }
                                
				                
				                ?>
				                </table> 
				                <div class="side-btn">
				                <a href="#" class="sidebar-btn1">Register for Multiple Classes ></a>
				                <a href="#" class="sidebar-btn2">View Entire Calendar ></a>
				                </div>
				               
				               
				               
				            </div>
				            
				        </div>
				        <div class="col-md-8 main-content">
				            <div class="btn-top">
				                       <a href="#" class="print-btn"><i class="fa fa-print" aria-hidden="true"></i>
 PRINT</a>
				            <a href="#" class="email-btn"><i class="fa fa-envelope" aria-hidden="true"></i>
 email a friend</a>
				            </div>
				            <div class="product-img">
				                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
				            </div>
				            <div class="product-des">
				                <?php woocommerce_product_description_tab() ?>
				                <a href="?add-to-cart=<?= get_the_ID() ?>" class="book-class">Enrolled Now</a>
				                <!--<button type="submit" class="single_add_to_cart_button button alt">Enrolled Now</button>-->
				            </div>
				           
				            
				        </div>
				    </div>
				    
				</section>
				
				
				
				
				<?php
				
				
				
			endwhile;

		} else {
			?>

			<?php do_action( 'woocommerce_archive_description' ); ?>
			<?php
			foreach ($years as $key => $value) {?>
			<h2 class="product-mnth-head"><?php echo($value) ?></h2>
	                <table class="tbl-archive-page">
						    <thead>
						        <tr>
						        <th>Date</th>
						        <th></th>
						        <th>Description</th>
						        <th>Time</th>
						        </tr>
						    </thead>
						      <tbody>
			<?php if ( woocommerce_product_loop() ) : ?>


				<?php woocommerce_product_loop_start(); ?>

				<?php if ( wc_get_loop_prop( 'total' ) ) : ?>
					<?php
					$args = array(
					    'post_type' => 'product',    
					    'meta_query' => array(
					       array(
					           'key' => 'month_year',
					           'type' => 'date',
					           'value'   => $key,
					           'compare' => '=',
					       ), 
					     ),
					);
					$query = new WP_Query($args);
					while ( $query->have_posts() ) : ?>
						<?php $query->the_post(); ?>
					
						  
						        <tr>
						            <td><h3><?php echo get_field('date');  ?></h3></td>
						            <td><img src="<?php echo get_field('thumbnail'); ?>"></td>
						            <td>
                                    	<a href="<?php echo get_the_permalink();?>">
		                                    <h2><?php echo get_the_title();  ?></h2>
		                                    <h5><?php echo get_field('subtitle');  ?></h5> 
		                                    <h5 class="mt-5"><?php echo get_field('detail_one');  ?></h5> 
                                    	</a>
                                    </td>
						            <td>
						            	<h4><?php echo get_field('min_time'); ?>-<?php echo get_field('max_time'); ?></h4>
						            	<span><?php echo get_field('classes'); ?></span>
						            	<h5><?php echo get_field('detail_two');  ?></h5> 
						            </td>
						        </tr>
						   
						    
						
					<?php endwhile; ?>
				<?php endif; ?>
				</tbody>
            </table>
        
				<?php woocommerce_product_loop_end(); ?>

				<?php do_action( 'woocommerce_after_shop_loop' ); ?>

				<?php
			else :
				do_action( 'woocommerce_no_products_found' );
			endif;
		}
		}
 ?>

        </div><!-- #main -->
    </section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
