<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
</div>
	</div>

<section class="intructor-banner">
	<div class="container">
	<div class="row">
		<h2>Instructor</h2>
	</div>
	</div>
    
</section>
<div class="container">
    <div class="row">
	<section id="primary" class="content-area col-sm-12 col-lg-12 instructor-archive">
		<div id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
            <header class="page-header">
			 <div class="cstm-search-form" >
                <div class="form">                            
                <form role="search" method="get" class="search-form">
                <label>
                    <input type="search" class="search-field form-control" placeholder="Search Instructor" value="" name="s" title="Search for:">
                </label>
                <span>
                     <i class="fas fa-search"></i>
                     <input type="submit" class="search-submit btn btn-default" value="Search">
                </span>
                
                </form>
                </div>
            </div>
			</header><!-- .page-header -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="instructor-listng row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
            		<div class="col-md-4 col-sm-12"> 
            		    <div class="instructor">
            		       	<div class="topInfo">
								
							
            		        <div class="img-intruc">
            		            <img src="<?php echo get_field('thumbnail');?>">
            		        </div>
            		        <div class="content-instructr">
            		            <h2> <a href="<?php echo get_the_permalink();?>" class="blog-single-url"><?php the_title(); ?></a></h2>
            		            <strong><?php echo get_field('designation');?></strong>
            		            
            		        </div>
							</div>
							<div class="ctn">
							   <p><?php the_content(); ?></p>
							</div>
							<?php if (get_field('testimonial_heading_one')) {?>
								<div class="instructorTestimonial">
									<h3><?php echo get_field('testimonial_heading_one');?></h3>
									<p><?php echo get_field('testimonial_content_one');?></p>
								</div>
							<?php } ?>
							<?php if (get_field('testimonial_heading_two')) {?>
								<div class="instructorTestimonial">
									<h3><?php echo get_field('testimonial_heading_two');?></h3>
									<p><?php echo get_field('testimonial_content_two');?></p>
								</div>
							<?php } ?>
            		    </div>
        			</div>	
        
    	
       <?php

			endwhile;?>
</div>
</article><!-- #post-## -->
<?php
// 			the_posts_navigation();
wp_pagenavi();
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();
