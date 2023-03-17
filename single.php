<?php
get_header();
?>
<section>

	<?php
	/* Start the Loop */
	while (have_posts()):
		the_post();
		get_template_part('contents/content', 'single');
	endwhile;
	?>
</section>
<?php
get_footer();