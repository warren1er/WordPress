<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?><?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
        <?php wp_get_archives('type=monthly&format=link'); ?>
      
    </head>
    <body>

        <!-- balise php qui va chercher le nom du blog dans la base de données -->
                <header>
                    <section class="container">
                    <!-- header de la page -->
					<section class="main">
                            <h2 class="titre"><?php bloginfo('name'); ?></h2>
                             <nav class="navbar navbar-expand-md"><?php wp_nav_menu(); ?></nav>
                               <?php include(TEMPLATEPATH .'/searchform.php'); ?>
                        </section>
                       
                    </section>
        </header>
