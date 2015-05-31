<?php get_header(); ?>
<?php if ( ! have_posts() ) : ?>
        <h1>Not Found</h1>
            <p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>

<section id="nametitle">
	<h2><?php the_title(); ?></h2>
	<hr class="hr-large" />
</section>

<?php endwhile; ?>
<?php get_footer(); ?>

