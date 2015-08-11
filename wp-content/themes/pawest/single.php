<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

		<div class="page-container">
			<div class="grid-row">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-3">
						<h2 class="main-heading main-heading--alternate main-heading--small main-heading--flat-bottom"><?php the_date('m/d/Y'); ?></h2>
					</div>

					<div class="col-10">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<!--
							<header class="entry-header">
								<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<div class="entry-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>
								<?php endif; ?>
							-->

								<h1 class="entry-title main-heading"><?php the_title(); ?></h1>
								<h2 class="main-heading main-heading--alternate main-heading--small main-heading--flat-top"><?php echo $cat_name; ?></h2>

						<div class="col-3">
						</div>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
							</div><!-- .entry-content -->

							<!--
							<footer class="entry-meta">
								<?php //edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
							</footer>--><!-- .entry-meta -->
						</article><!-- #post -->

						<?php comments_template(); ?>
					</div><!-- .col-10 .skip-3 -->
				<?php endwhile; ?>
			</div><!-- .grid-row -->

		</div><!-- .page-container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
