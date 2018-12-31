
<?php get_header(); ?>
 <div class="page-error"> 
 	<div class="container">
 		<div class="row">
 			<div class="col-lg-12">
 				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" class="errorimg"><br>
 				 <p>Page n'a pas été trouvée</p><br><br>
 				 <div class="search-but">
 				 	<?php get_template_part('searchform'); ?>
 				 </div>
 			</div>
 		</div>
 	</div>
 </div>

 <?php get_footer(); ?>