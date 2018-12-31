<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( comments_open() ){
			?>

			
			<h3 class="comment-nbr"><?php comments_number() ?></h3>;
			

			<?php 
          
           echo ' <ul class = " list-comm" >';
			$comments_arguments = array(

            'avatar_size' => 34

			);

			wp_list_comments($comments_arguments);
			
			echo '</ul>';
			echo "<hr>";
			//form comment----------
			comment_form();

		}else{

			echo "sorry comment is disabled";
			
		}

		 ?>

