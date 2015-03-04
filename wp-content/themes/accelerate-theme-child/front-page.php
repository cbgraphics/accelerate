<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>


<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->


<!--Recent Blog Posts-->
<section class="recent-posts">
	<div class="site-content">
		<div class="blog-post">
			<h4>From the Blog</h4>

			<?php query_posts('posts_per_page=1'); ?>

			<?php while ( have_posts() ) : the_post(); ?>
			<article class="post-entry">
					<div class="entry-wrap">
						<header class="entry-header">
							<div class="entry-meta">
								<time class="entry-time" datetime="2014-09-29T04:33:51+00:00" itemprop="datePublished" title="Monday, September 29, 2014, 4:33 am"><?php the_date();?></time>
							</div>
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</header>
						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
					</div>
				</article>
			<?php endwhile; ?>
 
		</div>
	</div>
</section>



<?php get_footer(); ?>