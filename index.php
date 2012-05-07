<?php get_header(); ?>
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID() ?>" <?php post_class() ?>>
									
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>

			<?php the_content() ?>
			
		</article>
		
		<?php comments_template() ?>
		
		<?php endwhile; ?>	
		
		<?php else : ?>
		
		<article class="post-not-found">
			  <h1>404 - Page Not Found</h1>
		</article>
		
		<?php endif; ?>

<?php get_footer();