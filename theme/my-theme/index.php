<?php get_header(); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<div class="row">
		<div class="twelve columns">
			<h1 class="page-header"><?php the_title(); ?>
			</h1>
		</div>
	</div>
	<hr />
		<?php the_content();
	} // end while
} // end if
?>
<?php get_footer(); ?>

