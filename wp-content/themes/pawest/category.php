<?php

get_header(); ?>

		<div class="page-container">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<div class="grid-row">
					<div class="col-9 skip-3">
						<h1 class="main-heading main-heading--flat-top main-heading--alternate"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

						<?php if ( category_description() ) : // Show an optional category description ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>
					</div><!-- .col-12 -->
				</div> <!-- .grid-row -->
			</header><!-- .archive-header -->

			<div class="grid-row">
				<div class="col-12">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<article class="group">
						<div class="col-3">
							<h4 class="main-heading main-heading--alternate main-heading--small main-heading--flat-top main-heading--flat-bottom"><?php the_date('m/d/Y'); ?></h4>
						</div>

						<div class="col-9">
							<h3 class="main-heading main-heading--flat-top">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>

							<?php the_content(); ?>
						</div>
					</article>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

				</div><!-- .col-12 -->
			</div><!-- .grid-row -->
		</div><!-- .page-container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
