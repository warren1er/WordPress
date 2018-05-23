<?php get_header(); ?> <!-- ouvrir header -->
<!-- Loop WordPress -->
<div id="content"><?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?><div class="post" id="post-<?php the_ID(); ?>"> <!-- chaque article aura son propre id -->
<!-- Affichage du Titre de l'article -->
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <!-- infos sur qui a posté l'article -->
    <p class="postmetadata">  <?php the_time('j F Y') ?> par <?php the_author() ?> | Cat&eacute;gorie: <?php the_category(', ') ?> </p>
<div class="post_content">
<!-- Affichage du contenu des articles -->
<?php the_content();  ?>
 </div></div>
    <div class="comments-template"><?php comments_template(); ?></div>
    <?php endwhile; ?>
        <?php previous_post_link() ?> <?php next_post_link() ?>
        <?php else : ?> <p>Désolé, aucun article ne correspond à vos critères.</p>
    <?php endif; ?></div>

<!-- liaison du sidebar et de l'index -->
<?php get_footer(); ?>
</body></html>