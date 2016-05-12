<?php get_header(); ?>
	
	<div id="main">	
		<div id="slider">
				<div id="carousel-example-generic" class="carousel slide " data-ride="carousel" data-interval="3000">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li class="" data-target="#carousel-example-generic" data-slide-to="1"></li>
						</ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <a href="../blog/?p=451"><img src="../blog/wp-content/uploads/2015/10/公牛情景全面解决方案.jpg" width="1920px"></a>
						</div>
						<div class="item">
						  <a href="../blog/?p=430"><img src="../blog/wp-content/uploads/2015/10/WD-40让金属返老还童.jpg" alt="大光物资商城" width="1920px"></a>
						</div>
					  </div>

					  <!-- Controls -->  
					  
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>		
		</div>

			<hr />
			
		<div id="main-post" class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<?php if ( have_posts() ) : ?>
					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					
						<?php get_template_part( 'content-index', get_post_format() ); ?>
					
					<?php endwhile; ?>

					<?php twentythirteen_paging_nav(); ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
			</div>
			



<?php get_footer(); ?>



















































































































