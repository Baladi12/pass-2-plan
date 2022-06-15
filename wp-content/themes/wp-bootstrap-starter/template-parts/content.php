<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<div class="col-md-4">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post-listng">
    		<div class="bg-img-blog"> 

    		<img src="<?php echo get_field('thumbnail'); ?>">	
			</div>	
			<div class="contnt-listng">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				
				<?php
				endif; ?>
				<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
				 By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>
				</div>
				<?php	
				endif; ?>
				<div class="txt-lintng">
					<p><?php the_excerpt(); ?></p>
				</div>
				<div class="readmore-btn-div">
    			<a href="<?php echo get_the_permalink();?>" class="blog-single-url">Read More</a>
    			</div>

			</div>
    		
    	</div>

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
</div>