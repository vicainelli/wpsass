<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( $size, $attr ); ?></a>

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<h2 class="entry-subtitle">Por <span class="the_author"><?php the_author(); ?></span>	 em <?php the_date('d/m/Y') ?></h2>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'continue lendo <span class="meta-nav">&rarr;</span>') ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tags: %1$s'), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
