


<?php get_header(); ?>


         <!--content-->
         <div class="cover">
           <div class="container-fliud">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Room.jpg" class="pic"/>
                    <div class="text">
                    <div class="overlay">
                    <h1>WELCOME TO SABAR DECO</h1>
                    <a href="#start" class="btn btn-info">Get Started</a>
                    </div>
                 </div>
                </div>
              </div>
           </div>
         </div>

         <!--slider-->

 

         <!--endSlider-->


         

         <!--search-->
         <div class="search-button">
           <div class="container-fliud">
             <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="start">
                 <?php get_template_part('searchform'); ?>
               </div>
             </div>
           </div>
         </div>
         <!--end-search-->



       <!--oucle-post-->
       <div class="container">
            <div class="row">
              <div class="col-lg-12"></div>
       <?php
           	   if ( have_posts() ) {
            while ( have_posts() ) {
 
                   the_post(); ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="post-page">
                      	<?php the_post_thumbnail('', ['class' => 'image-post']); ?>
                      	 <div class="content-post">
                  <h1>
                  	<a href="<?php the_permalink();?>">
                  		<?php the_title(); ?>
                  	</a>
                  </h1>
                   <span class="post-card"><i class="fas fa-id-card"></i> <?php the_author_posts_link(); ?></span>
                    <span class="post-comment"><i class="far fa-comments"></i> <?php comments_popup_link('0 Comment','1 Comment');?> </span>
                   <span class="post-date"><i class="far fa-calendar-alt"></i> <?php the_time();?></span>
                   <p><?php the_excerpt(); ?></p>
                   <hr>
                    <div class="cat-post">
                     <?php the_category(['class' => 'cats']); ?>
                    </div>
                  </div>
                      	



                      </div>
                    </div>

                    <?php 
                }
            }
            ?>

 

           </div>
       </div>
     

      <div class='clear'></div>
  <div id='pagenations'><?php echo paginate_links();?></div>

        <!--oucle-post-->






        
        <!--services-->
         <div class="container">
         <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="service-content">
            <h3>Des Services</h3>
           </div>
           <div class="onglet-page">
             <div id="panneau">
      <ul id="onglets" class="clearfix">
        <li >Cuisine</li>
        <li >Salle de bain</li>
        <li >Dressing</li>
        <li >Papier peint</li>
        <li >Gazon</li>
        <li >Parquet</li>
      </ul>
      <ul id="contenus">
        <li>
          <p>Petit ou grand espace, moderne ou classique, pratique ou tendance, faites nous confiance, nous trouvons toujours la bonne solution personnalisée pour subvenir au besoin et ainsi satisfaire chaque demande individuelle. Découvrez la diversité de notre collection de cuisine au MEILLEUR PRIX GARANTI
          Avec leurs lignes épurées et leurs matériaux actuels, les cuisines deviennent des pièces où l'on aime recevoir et préparer nos petits plats à en avoir l’eau à la bouche . Aussi, les dernières technologies rendent les cuisines design pratiques à vivre pour un confort au quotidien. Découvrez avec Sabar Deco plusieurs modèles de cuisine au cœur de la tendance et aussi à la demande. </p>
        </li>
        <li >
          <p>Un nouveau revêtement de sol ou de mur et la salle de bains prend immédiatement un coup de frais. Du carrelage à la mosaïque en passant par
          la peinture, les sols vinyles, stratifiés ou même les parquets... Il n'est pas toujours facile de faire son choix. Produits existants, pose, prix, facilité d'entretien... Sabar Deco vous offre des nombreuses possibilités qui s'offrent à vous pour relooker votre salle de bains. </p>

        </li>
        <li >
          <p>Vous avez un peu de place pour intégrer un dressing dans votre chambre ou vous pourriez même y consacrer une pièce entière ?Vous ne mesurez pas la chance que vous avez ! Vous pouvez compter sur Sabar Deco pou pouvoir agencer, ranger, trier les pièces de vêtements par couleur, par saison, par modèle : pantalons, t­shirts, chemises mais aussi ceintures, chaussettes, sous­vêtements avec des organiseurs de vêtements ! Tout le monde peut donc avoir un dressing chez lui, petit ou grand ! Du dressing extensible au dressing modulable, tout est possible pour que même vos chaussures aient leur propre dressing ! Vous pourriez ainsi organiser tranquillement vos vêtements d'été et d'hiver, pour laisser la place à l'un ou à l'autre. Créez un espace totalement dédié au rangement dans lequel vous seriez à l'aise pour choisir vos tenues, en ayant tout à portée de main, avec miroirs pour tester les associations de couleur. Quoi de mieux qu’une cabine d’essayage qui vous ressemble, et tout ça chez vous en plus ! </p>
        </li>
        <li >
          <p>Qui n'a pas envie de changer de coiffure à certaines périodes de l'année ? Si cela fait du bien et aide à repartir du bon pied, pour votre intérieur, c'est exactement pareil ! Vous en avez peut­être assez de voir les mêmes couleurs, vous vous êtes peut être lassé de ce bordeaux foncé, du chocolat associé au turquoise ? Pourquoi ne pas faire entrer une nouvelle couleur voire même des motifs au sein de votre habitat ? Les
          papiers permettent de nombreuses fantaisies, en commençant par les motifs : abstraits avec les volutes, imitation bois, pierre, carrelage ou imprimé . SABAR DECO vous invite à découvrir sa gamme de papier peint diversifiée. Faites vous plaisir avec nos modèles grâce à la variété de couleurs et de motifs. Classique, contemporain, design ou multi couleurs</p>

        </li>
        <li >
          <p>Jardin, terrasse et balcon, pour profiter de sa déco extérieur on bichonne son aménagement et sa décoration. Couleurs gaies, meuble de jardin, barbecue, parasol… Pour des moments à l’extérieur réussis dès les beaux jours. Les extérieurs demandent un peu d’attention, retrouvez avec Sabar Deco toutes nos panoplies de gazons et notre expertise pour vous satisfaire.</p>

        </li>
        <li >
          <p>Durable et très résistant, le parquet est de loin un choix synonyme d’investissement, tant pour le confort qu'il procure, que pour la valeur qu’il donne à votre habitation.
          Le revêtement des sols et des murs de la maison est indispensable pour apporter caractère et confort à vos pièces. De purement pratique, le parquet intérieur et extérieur est devenu décoratif, au même titre que les lambris et habillages muraux. Quant au parquet massif, il se décline en sols stratifiés et vinyles de qualité pour toutes les pièces et budgets.</p>

        </li>
      </ul>
           </div>
         </div>  
           </div>
         </div>   
         </div>

          <script type="text/javascript">
             var onglets = document.getElementById("onglets");
            var contenus = document.getElementById("contenus");

             var liOnglet = onglets.getElementsByTagName("li");
            var liContenu = contenus.getElementsByTagName("li");

            liOnglet[0].className = "actif";
           liContenu[0].className = "actif";

             for (var i = 0; i < liOnglet.length; i++){
             liOnglet[i].num = i;

              liOnglet[i].addEventListener("click", function(){
    
               for (var j = 0; j < liOnglet.length; j++){
                 liOnglet[j].className="";
              liContenu[j].className="";
              }

              liOnglet[this.num].className="actif";
              liContenu[this.num].className="actif";
        });
       }
           </script>
        <!--end-services-->

        

        <!--Galerie-->
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="service-content">
            <h3>FaQs</h3>
           </div>

  <div class="container faq_section" id="faqs">
  <div class="FaQ_Each">
    <section class="box">
        <span>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" id="other" aria-hidden="true"></i>
        </span>
        &nbsp;&nbsp;<span>Quelle est la différence entre du parquet et du plancher ?</span>
      </section>
      <section class="draw">
        Un parquet désigne un revêtement de sol d'essence noble, excluant donc les résineux comme le pin. Un plancher, c'est lorsque des planches sont clouées sur un gîtage
      </section>
    </div>
    <div class="FaQ_Each">
    <section class="box">
        <span>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" id="other" aria-hidden="true"></i>
        </span>
        &nbsp;&nbsp;<span>Combien de temps faut-il pour placer un parquet ?</span>
      </section>
      <section class="draw">
        En moyenne, un poseur de parquet pose 10 à 15 m2 de parquet massif par jour. Mais il ne suffit pas de poser, il faut préparer le support, poncer,Colmater,reponcer puis appliquer les produits de finition qui eux doivent sécher, en n'oubliant pas les plinthes ou les profils de finition spéciaux et le rabotage des portes.
      </section>
    </div>
    <div class="FaQ_Each">
    <section class="box">
        <span>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" id="other" aria-hidden="true"></i>
        </span>
        &nbsp;&nbsp;<span>Comment veiller à ce que les taches au mur ne soient pas visibles à travers le papier?</span>
      </section>
      <section class="draw">
       Utilisez un spray antitaches blanc prêt à l'emploi pour recouvrir de façon rapide et simple les taches permanentes et récurrentes, de sorte qu'elles ne soient pas visibles plus tard à travers le papier.
      </section>
    </div>
    <div class="FaQ_Each">
    <section class="box">
        <span>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" id="other" aria-hidden="true"></i>
        </span>
        &nbsp;&nbsp;<span>Est-ce qu’il est difficile d’installer du gazon synthétique ? </span>
      </section>
      <section class="draw">
        Le gazon artificiel est comme une moquette et son installation est similaire. La base doit être un terrain aplani. De fait, si votre sol est de ciment ou carrelé, 90% du travail de préparation du terrain est déjà réalisé. En cas contraire du sable peut être utilisé pour aplanir le terrain. Nous rappelons que le terrain doit en effet être bien compacté et solide pour éviter des possibles dénivellations et donc des imperfections visuelles dans le gazon synthétique. De plus, vous compter sur notre assistance pour l’installation du gazon ou pour résoudre vos doutes.
      </section>
    </div>
    <div class="FaQ_Each">
    <section class="box">
        <span>
          <i class="fa fa-plus" aria-hidden="true"></i>
          <i class="fa fa-minus" id="other" aria-hidden="true"></i>
        </span>
        &nbsp;&nbsp;<span>Je interet d’opter pour un meuble de salle de bain avec beaucoup de compartiments ?</span>
      </section>
      <section class="draw">
        Tout dépend de l’utilisation de votre meuble de salle bain. Un meuble muni de peut de compartiments notamment sans tiroirs permet en un coup d’œil et d’une seule main d’atteindre le ou les objets recherchés. Cependant, une personne souhaitant avoir une salle de bain au style épurée sans désordre privilégiera un meuble avec de petits rangements et des tiroirs.
      </section>
    </div>
 </div>
            </div>
          </div>
        </div>

        
         <div class="container">
            <div class="glr-content">
            <h3>Galleries Images</h3>
           </div>
           <?php masterslider(1); ?>
         </div>
        

         <!--end-content-->

<?php get_footer(); ?>