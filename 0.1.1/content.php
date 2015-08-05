<?php
/**
 * @package Semifolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="row">
		<div class="col-md-4 entry-meta">
			<div> 
				<i class="fa fa-user"></i> <?php the_author(); ?> 
			</div>
			<div>
				<i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
			</div>
			<div>
				<i class="fa fa-tag"></i> <?php the_category(' &bull;'); ?>
			</div>
			<div>
				 <i class="fa fa-comment"></i> <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			</div>
			
		</div>
		<div class="col-md-8">
			<div class="entry-content">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="postimg">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
			<?php endif; ?>
			<?php the_excerpt( 'semifolio_excerptlength_default', 'semifolio_excerpmore' ); ?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
