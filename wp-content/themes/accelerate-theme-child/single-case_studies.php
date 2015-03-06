<?php
/**
 * The template for displaying "Case Study" pages.
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

$size = "full";

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

				

			?>
				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<h6>Client: <?php echo $clientname; ?></h6>
						<p><?php the_content(); ?></p>
						<a href="<?php echo $clientsitelink; ?>">Visit Live Site</a>
					</aside>

					<div class="case-study-main">

						<?php if($image_1) {
							echo wp_get_attachment_image( $image_1, $size );
						} ?>

						<?php if($image_2) {
							echo wp_get_attachment_image( $image_2, $size );
						} ?>

						<?php if($image_3) {
							echo wp_get_attachment_image( $image_3, $size );
						} ?>

						<?php if($image_4) {
							echo wp_get_attachment_image( $image_4, $size );
						} ?>




					</div>
				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>