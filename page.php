<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header(); ?>

	<div id="primary"  class="hfeed site container-fluid"style="margin-left:2%;">

		<div id="content" class="site-container span12" style="margin-top:-5%;" role="main">
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post" style="min-height:20px">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
				
			<?php the_content(); ?>

			</div>

		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>