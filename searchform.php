<form id="searchform" class=".search-button .form-control" method="get" action="<?php bloginfo('url'); ?>/">
    <input type="text" class="form-control" value="" name="s" id="search" <?php the_search_query(); ?> placeholder="Que recherchez-vous ?" required  />
    <span class="input-group-btn">
        <button class="btn btn-info" type="submit">Rechercher</button>
    </span>
</form>