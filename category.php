<?php get_header(); ?>
  
  <div class="catg">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  				<h2>Categories</h2>
  			</div>
  		</div>
  	</div>
  </div><br><br>

  <div class="container">
  	<div class="catgs">
  		<?php 
  		if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
        <div class="col-lg-4">
        	  	<?php the_post_thumbnail('', ['class' => 'catgs-pic']); ?><br>
        	  	<h1>
                  	<a href="<?php the_permalink();?>">
                  		<?php the_title(); ?>
                  	</a>
                  </h1>
        </div>
        <?php 
    }
}
?>
  	</div>
  </div>

<?php get_footer(); ?>