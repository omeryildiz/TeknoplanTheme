<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header(); ?>
<div id="primary"  class="hfeed site container-fluid" style="margin-left:2%;">

		<div id="content" class="site-container span12" style="margin-top:-6%;" role="main">
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
<?php get_footer(); ?>