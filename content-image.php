<?php
/**
 * @package manifest
 * @since Manifest 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php manifest_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php if ( is_multi_author() ) : ?>
		<hgroup>
		<?php endif; ?>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'manifest' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php if ( is_multi_author() ) : ?>
		<h4 class="vcard author">by <span class="fn"><?php the_author(); ?></span></h4>
		</hgroup>
		<?php endif; ?>
	</header><!-- .entry-header -->



	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'manifest' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'manifest' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>


	<footer class="entry-meta">
<!--
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'manifest' ) );
				if ( $categories_list && manifest_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'manifest' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'manifest' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> | </span>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'manifest' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
-->

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>

		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'manifest' ), __( '1 Comment', 'manifest' ), __( '% Comments', 'manifest' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'manifest' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
