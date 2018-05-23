<div class="sidebar well">
    <ul>
        <!-- pour pouvoir les widgets dans le sidebar -->
        
        <!-- barre de recherche -->
        <li class="list-unstyled" id="search"><?php include(TEMPLATEPATH .'/searchform.php'); ?></li>
        <!-- Calendrier par defaut de WordPress -->
        <li class="list-unstyled" id="calendar"><h2>Calendrier</h2> <?php get_calendar(); ?> </li>
        <!--Les catégories  -->
        <li class="list-unstyled"><h2>Categories</h2> <ul> <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?></ul></li>
        <!-- les pages -->
        <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
        <!-- les archives -->
        <li class="list-unstyled"><h2>Archives</h2>  <ul> <?php wp_get_archives('type=monthly'); ?> </ul></li>
        <!-- le blogroll -->
        <?php get_links_list(); ?>
        <!-- les infos et Meta et liens de validation -->
        <li class="list-unstyled">
            <h2>Infos Meta</h2>   
            <ul> <?php wp_register(); ?> 
                <li><?php wp_loginout(); ?></li> 
                <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">
                <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li> 
                <li><a href="http://wordpress-fr.net/" title="Communauté française de WordPress et WPmu.">WordPress Francophone</a></li> 
                <?php wp_meta(); ?>   
            </ul> 
        </li>
        <!-- flux rss -->
        <li class="list-unstyled"><h2>Abonnez-vous au blog !</h2>   <ul>   <li><a href="<?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles</a></li> <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires</a></li>   </ul> </li>
        
    </ul>
</div>