<?php
/**
 * The template for displaying the archives for Case Studies
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$clientname = get_field('client_name');
				$clientsitelink = get_field('client_site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$image_4 = get_field('image_4');
				$size = "full"

			?>
				<article class="case-study">
					<div>
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">Visit Project <span>&rsaquo;</span></a>
					</aside>

					<div class="case-study-main">
						<a href="<?php the_permalink(); ?>">
						<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						} 
						else {
							echo wp_get_attachment_image( 47342, $size );
						}?>
						</a>

					</div>
					</div>
				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
