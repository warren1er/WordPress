<?php get_header(); ?>
<section class="home">
    <article>
        <p class="text-center welcome">Bienvenue à Strasbourg, sur ce site vous trouverez les <a href="http://wordpress.web-morningstar.fr/actualites/">actualités</a> des activités sur <a href="http://wordpress.web-morningstar.fr/reset-password/plus-dinfos/">plus d'infos</a>, les <a href="http://wordpress.web-morningstar.fr/activites-du-mois/">activités du mois</a> et vous pouvez nous <a href=" http://wordpress.web-morningstar.fr/contact/">contacter</a>. </p>
    </article>
    <aside>
       <div class="last-news">
            <h2 class="info">Dernières News: </h2>
            <p> <a class="link-news"  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
        </div>
    </aside>
    
</section>
<?php get_footer(); ?>