<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="banner__video" autoplay muted loop poster>
                <source src="<?php echo esc_url(get_stylesheet_directory_uri() . '/video/Koukaki-hero.mp4'); ?>" type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="image bannière Fleurs d'oranger & chats errants">
            <div class="banner__logo" data-0="transform: translateY(0px);" data-500="transform: translateY(250px);">
                <img id="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="#story" class="story">
            <h2><span class="titleFade">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <?php get_template_part('partial-parts/characters'); ?>
            
            <article id="place">
                <div>
                    <h3><span class="titleFade">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="container_cloud" data-bottom= "left:760px" data-top= "left:460px">
                <img class="container_cloud__cloud1" src="<?php echo get_stylesheet_directory_uri() . '/new-image/big_cloud.png'; ?>" alt="image d'un gros nuage">
                <img class="container_cloud__cloud2" src="<?php echo get_stylesheet_directory_uri() . '/new-image/little_cloud.png'; ?>" alt="image d'un petit nuage">
                </div>

            </article>
        </section>

        <section id="studio">
            <h2><span class="titleFade">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

            <?php get_template_part('partial-parts/oscars'); ?>
            
    </main><!-- #main -->

<?php
get_footer();

