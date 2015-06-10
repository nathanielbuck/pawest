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

					<article class="group">
						<div class="col-3">
							<h4 class="main-heading main-heading--alternate main-heading--small main-heading--flat-top main-heading--flat-bottom"><?php the_date('m/d/Y'); ?></h4>
							<h4 class="main-heading main-heading--alternate main-heading--small main-heading--flat-top"><?php echo $cat_name; ?></h4>
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
					<?php endforeach; 
					wp_reset_postdata(); ?>
				</div>

				<div class="col-4">
					<h2 class="main-heading main-heading--alternate main-heading--flat-top">Categories</h2>
					<ul class="heading-list">
						<?php wp_list_categories( array(
							title_li => ''
						) ); ?>
					</ul>
				</div>
			</div>
		</div><!-- .page-container -->

<!--<?php //get_sidebar(); ?>-->
<?php get_footer(); ?>
