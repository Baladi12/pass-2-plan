<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
</div>
	</div>

<section class="blg-bner" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')" >
	<div class="container">
	<div class="row">
		<h2>Blog</h2>
	</div>
	</div>
    
</section>
<div class="container">
    <div class="row">

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<div id="main" class="site-main" role="main">

		    <div class="row single-post-blogs">
        <div class="col-md-12">
            <div class="entry-header">
		        <?php 
		        
		        if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		        ?>
	        </div>
        </div>
        <div class="col-md-12">
          
	    <div class="entry-content">
		<?php
        if ( is_single() ) :
			the_content();
        else :
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
        endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
        </div>
    </div>

		</div><!-- #main -->
	</section><!-- #primary -->
<?php

get_footer();
