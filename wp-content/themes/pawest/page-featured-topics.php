<?php
get_header(); ?>

		<div class="page-container">
			<div class="grid-row">
				<div class="col-12">
				<?php
					$args = array( 'posts_per_page' => 3 );
					$lastposts = get_posts( $args );
					foreach ( $lastposts as $post ) :
						setup_postdata( $post );

						$cats = get_the_category();
						$cat_name = $cats[0]->name;
				?>

					<article>
						<div class="col-3">
							<h4 class="main-heading main-heading--alternate main-heading--pair-first"><?php the_date('m/d/Y'); ?></h4>
							<h4 class="main-heading main-heading--alternate main-heading--pair-last"><?php echo $cat_name; ?></h4> 
						</div>

						<div class="col-9">
							<h3 class="main-heading">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>

							<?php the_content(); ?>
						</div>
					</article>
					<?php endforeach; 
					wp_reset_postdata(); ?>
				</div>

				<div class="col-4">
					<h2 class="main-heading  main-heading--alternate">Categories</h2>
				</div>
			</div>
		</div><!-- .page-container -->

<!--<?php //get_sidebar(); ?>-->
<?php get_footer(); ?>
