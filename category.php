<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<div id="content" class="site-content row" role="main">
	<div class="col-xs-12 col-md-8">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h3 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h3>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
			</div>
			<?php get_sidebar(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
