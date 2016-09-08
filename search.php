<?php get_header(); ?>

<div class="content">

	<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<a href="<?php the_permalink(); ?>">
			  <?php the_post_thumbnail('miotema_single', array('class' => 'img-res','alt' => get_the_title())); ?>
			</a>

			<?php the_excerpt();?>

		</article>

	<?php endwhile; ?>

		<div class="pagination">

			<?php /* Pagination */

			global $wp_query;
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages
			) );

			?>

		</div>

	<?php else : ?>

	  <h3> <?php esc_html_e('Sorry, no posts matched your criteria.', 'miotema'); ?> </h3>

	<?php endif; ?>

</div>

<aside class="sidebar">
		<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
