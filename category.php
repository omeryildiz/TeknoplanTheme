<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header(); ?>

	<section id="primary"  class="hfeed site container-fluid"style="margin-left:2%;">>
		<div id="content" class="site-container span12" style="margin-top:-5%;" role="main">
<?php get_header(); ?>

	<div id="blog">
	
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><?php //single_cat_title(); ?></h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><?php single_tag_title(); ?></h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><?php the_time('F jS, Y'); ?>:</h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2> <?php the_time('F, Y'); ?>:</h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2><?php the_time('Y'); ?>:</h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2></h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2></h2>
		<?php } ?>
	
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
		
		<div class="post">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
			<?php the_content(); ?>

				<p class="postmetadata">
				  <?php// the_category(', ') ?> <?php // the_author(); ?> <?php //_e('tarafından'); ?><?php //_e('oluşturuldu'); ?><br />
				<?php //comments_popup_link('Yorum yok &#187;', '1 Yorum &#187;', '% Yorumlar &#187;'); ?> <?php //edit_post_link('Düzenle', ' &#124; ', ''); ?>
				</p>

			</div>

		</div>
		
<?php endwhile; ?>

	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

<?php endif; ?>

</div>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>