<?php get_header(); ?> <!-- ouvrir header -->
<!-- Loop WordPress -->
    <div id="content" class="well content-page">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>"> <!-- chaque article aura son propre id -->
        <!-- Affichage du Titre de l'article -->
                <h2>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
        <div class="post_content">
        <!-- Affichage du contenu des articles -->
        <?php the_content();  ?>
         </div>
            </div>
            <?php endwhile; ?>
        <!--    </?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?> -->

            <?php endif; ?></div>

<!-- liaison du sidebar et de l'index -->

<?php get_footer(); ?>
</body></html>