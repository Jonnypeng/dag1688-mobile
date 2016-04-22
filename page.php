<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area container">
		<div id="content" class="site-content row text--center" role="main">
			<div class="col-xs-12 col-md-12" id="page">
						<div id="breadcrumb">
							<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &raquo;
							<?php
							if( is_single() ){
							$categorys = get_the_category();
							$category = $categorys[0];
							echo( get_category_parents($category->term_id,true,' &raquo; ') );
							the_title();
							} elseif ( is_page() ){
							the_title();
							} elseif ( is_category() ){
							single_cat_title();
							} elseif ( is_tag() ){
							single_tag_title();
							} elseif ( is_day() ){
							the_time('Y年Fj日');
							} elseif ( is_month() ){
							the_time('Y年F');
							} elseif ( is_year() ){
							the_time('Y年');
							} elseif ( is_search() ){
							echo $s.' 的搜索结果';
							}
							?>
			</div>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-page', get_post_format() ); ?>
			<?php endwhile; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

    

<?php get_footer(); ?>
