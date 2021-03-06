<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div id="container">
	<div id="contentss" role="main">

		<?php the_post(); ?>
		
		
		    <?php get_template_part('searchform'); ?>
		
		<h2>Archives by Month:</h2>
		<ul class="month">
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul class="cat-archive">
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>