

<?php  get_header(); ?>

<div class="container">
            <div class="row">
              <div class="col-lg-12"></div>
       <?php
           	   if ( have_posts() ) {
           	   	?>
           	   	 <div class="titre-author">
           	   	 	<h2><?php the_author_meta('nickname'); ?> Posts </h2>
           	   	 </div>
                  
           	   	<?php
            while ( have_posts() ) {
 
                   the_post(); ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="post-page">
                      	<?php the_post_thumbnail('', ['class' => 'image-author']); ?>
                      	 <div class="content-author">
                  <h1>
                  	<a href="<?php the_permalink();?>">
                  		<?php the_title(); ?>
                  	</a>
                  </h1>
                   <span class="post-card"><i class="fas fa-id-card"></i> <?php the_author_posts_link(); ?></span>
                    <span class="post-comment"><i class="far fa-comments"></i> <?php comments_popup_link('0 Comment','1 Comment');?> </span>
                   <span class="post-date"><i class="far fa-calendar-alt"></i> <?php the_time();?></span>
                   <p><?php the_excerpt(); ?></p>
                   
                  </div>
                      	



                      </div>
                    </div>

                    <?php 
                }
            }
            ?>

            <div class='clear'></div>
	<div id='pagenation'><?php echo paginate_links();?></div>

           </div>
       </div>
     

<?php get_footer(); ?>