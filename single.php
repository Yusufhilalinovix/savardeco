<?php get_header(); ?>

<div class="container-fluid">

  <?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
         <div class=" contents-post">
               
                      	<?php the_post_thumbnail('', ['class' => 'image-single']); ?>
                <div class="content-post">
                
                   <p><?php the_content(); ?></p>
                   <hr>
                    <div class="cat-post">
                     <?php the_category(['class' => 'cats']); ?>
                    </div>
                  </div>
         </div>
    <?php 
     }
 }
 ?>


 <?php 
 //les commentaires
  comments_template();
    ?>

 
</div>



<?php get_footer(); ?>