<?php get_header() ?>
<?php while(have_posts()):the_post() ?>
	
	<article <?php post_class() ?>>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>
<a href="<?php bloginfo("url") ?>">Voltar</a>
<?php get_footer() ?>