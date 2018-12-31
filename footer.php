
<?php wp_footer(); ?>
         <!--footer-->
          <footer class="gt-footer">
            <div class="container-fliud">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12" >
                  <div class="deco">
                    <h3><b>SABAR DECO</b></h3>
                    <p>Sabardeco une enterprise qui se spécialise dans les domaines de la renovation et la decoration il se compose d’un équipe professionnels formés apporterat tout son savoir faire pour avoir coseiller et accompagner ses clients  dans la realisation des traveaux d’embellissement 
                    d’ extérieur et intérieur.
                    </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
                  <div class="tags">
                    <h3><b>Contactez Nous!</b></h3>
                   <?php echo do_shortcode('[TheChamp-Sharing ]') ?>
                   <div class="archives-page">
                    <h3>Archives</h3>
                    <div class="archives-page1">
                     <?php get_archives() ?>
                     </div>
                   </div>
                   
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="pagefb">
                    <h3>Facebook</h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=http%3A%2F%2Ffb.com%2Fsabardeco&tabs=timeline&width=350&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  </div>
                </div>
              </div>


              <div class="info">
                <div class="container-fliud">
                  <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                      <span><i class="fas fa-envelope"></i> sabardeco@gmail.com</span>
                     <span><i class="fas fa-phone"></i> 0661-915899</span>
                     <span><i class="fas fa-location-arrow"></i> Hay My Abdellah rue223,NR 98 Casablanca</span>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 ">
                     <span> &copy COPYRIGHT <?php echo date('Y') ?></span>
                    </div>
                  </div>
                </div>
              </div>
 

          </footer>

         <!--endfooter-->

          
       



        <script src="<?php bloginfo('stylesheet_directory');?>/js/jquery-2.0.2.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory');?>/js/popper.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory');?>/js/bootstrap.min.js"></script>

</body>
</html>
