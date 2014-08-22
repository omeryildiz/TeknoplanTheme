<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header(); ?>

	<section id="primary"  class="hfeed site container-fluid"style="margin-left:2%;">
		<div id="content" class="container span12" style="margin-top:-3%;" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( '%s  için arama sonuçları:', 'boilerstrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php boilerstrap_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>


			<div class="entry">
				
			<?php the_content(); ?>

			</div>
			<?php endwhile; ?>

			<?php boilerstrap_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Sonuç Bulunamadı', 'boilerstrap' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Üzgünüz,aradığınız karakter ile ilgili bilgi bulunamadı.', 'boilerstrap' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>