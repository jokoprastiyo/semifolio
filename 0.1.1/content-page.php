<?php
/**
 * @package Semifolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="postimg">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'semifolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="row">
			<div class="col-md-6 footer-meta">
				<div> 
					<i class="fa fa-user"></i> <?php the_author(); ?> 
				</div>
				<div>
					<i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
				</div>				
			</div>
			<div class="col-md-6 footer-meta">
				<div>
					<i class="fa fa-tag"></i> <?php the_category(' &bull;'); ?>
				</div>
				<div>
					 <i class="fa fa-comment"></i> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
				</div>				
			</div>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
