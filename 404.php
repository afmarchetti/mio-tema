<?php get_header(); ?>

<div class="content">

		<article id="post-404" class="post">

			<h1 class="content__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'miotema' ); ?></h1>
			<h2><?php esc_html_e( '404 Error', 'fullbase' ); ?></h2>

		</article>

</div>

<aside class="sidebar">
		<?php get_sidebar(); ?>
</aside>

<?php get_footer(); ?>
