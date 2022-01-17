<?php get_header(); ?>

    <div class="home">

        <!-- HERO -->
        <section class="hero">
            <div class="relative md:grid md:grid-cols-2 lg:items-center">
                <!-- IMAGE -->
                <div class="hero__img-container md:order-2">
                    <?php the_post_thumbnail('xl', array('class' => 'hero__img')); ?> 
                    
                    <?php 
                    $caption = get_the_post_thumbnail_caption();
                    if($caption){
                        echo '<div class="hero__img-caption">' . $caption . '</div>';
                    }
                    ?>       
                </div>
                <!-- TEXT -->
                <div class="hero__text-content md:order-1">
                    <div>
                        <h1 class="hero__text-content__title">Équipementier<br class="sm:hidden"> sportif <br><span class="p100">100%</span><br><span class="feminin">féminin</span></h1>
                        <div class="hero__text-content__paragraph lg:w-3/4 lg:mx-auto xxl:w-2/3">
                            <p class="mt-8 mb-10">MIYA propose à toutes les femmes de s’équiper à la hauteur de leurs ambitions. Créée en France, fabriquée en Europe et conçue pour les femmes !</p>
                            <div class="text-right">
                                <a href="<?= get_site_url(); ?>/boutique" class="btn-primary">Voir la boutique</a>    
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="deco-circle left"></div>
        </section>

        <!-- PRODUITS -->
        <?php
        $args = array(
            'post_type'              => array( 'product' ),
            'posts_per_page'         => '3',
            'post_status'    => 'publish',
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
        ?>
        <section class="produits section-pad">
            <div class="lg:flex">
                <div class="swiper swiper-list-products">
                    <div class="swiper-wrapper">
                    <?php
                    while ( $query->have_posts() ) :
                        $query->the_post();                       
                        get_template_part('template-parts/product-item');
                    endwhile;
                    ?>  

                    </div>
                </div>
                <div class="produits__touslesproduits">
                    <p class="text-lg font-extrabold font-title uppercase leading-tight hidden lg:block">Découvrez tous nos équipements&nbsp;!</p>
                    <a href="<?= get_site_url(); ?>/boutique" class="btn-secondary mt-8">Tous les produits</a>
                </div>
            </div>
        </section>
        <?php
        endif;
        wp_reset_postdata();
        ?>


        <!-- HISTOIRE -->
        <section class="section-pad-bottom section-imgtext">
            <div class="container">
                <p class="intro">Débutantes ou confirmées, essayez nos tenues alliant confort, technicité et esthétisme.</p>
                <div class="img-container">
                    <img src="<?= get_template_directory_uri(  ); ?>/dist/img/home-histoire.jpg" alt="">
                    <div class="bloc-red"></div>
                </div>
                <p class="main-text">Nos équipements sont fièrement créés en France, fabriqués en Europe et respectent l’environnement.</p>
                <div class="text-center mt-8">
                    <a href="<?= get_site_url(); ?>/a-propos" class="btn-secondary">Découvrez notre histoire</a>
                </div>
            </div>
        </section>


        <!-- CITATION -->
        <section class="section-pad citation">
            <div class="container">
                <h2 class="citation__text">Je ne vois pas la montée du sport féminin comme un combat, mais comme une <span class="text-red">évidence.</span></h2>
                <p class="citation__auteur">Marie</p>
            </div>
        </section>


        <!-- POUR LES CLUBS -->
        <section class="section-pad clubs">
            <div class="container md:grid md:grid-cols-2 md:items-center md:gap-8">
                <div class="lg:w-5/6 lg:ml-auto">
                    <img src="<?= get_template_directory_uri(  ); ?>/dist/img/home-pourlesclubs.png" alt="Maillots Miya Sports">
                </div>
                <div class="mt-8 md:mt-0 lg:w-2/3 lg:mx-auto">
                    <h2 class="font-title font-bold uppercase text-sm">Pour les clubs</h2>
                    <p class="mt-4">MIYA est une marque à l’écoute de vos besoins, dans une logique d’évolution partagée. Commandez des jeux de tenues aux couleurs de votre club ou créez une gamme pour votre équipe avec un design sur mesure.</p>
                    <a href="<?= get_site_url(); ?>/pour-les-clubs" class="btn-primary mt-8">Voir l'offre</a>
                </div>
            </div>
            <div class="deco-circle right"></div>
        </section>

    </div>


<?php get_footer(); ?>