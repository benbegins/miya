<?php get_header(); ?>

    <div class="pour-les-clubs">
        
        <!-- Title -->
        <section class="section-pad">
            <div class="container">
                <h1 class="page-title-sm lg:w-2/3 lg:ml-auto">Miya vous propose des designs personnalisés pour équiper votre club de foot avec style.</h1>
            </div>
        </section>

        <!-- Offre sur mesure -->
        <section class="sur-mesure">
            <div class="img-container">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="text-container mt-16 lg:mt-0">
                <h2 class="text-lg uppercase font-extrabold font-title leading-tight">01 - Offre sur mesure</h2>
                <p class="mt-4">Besoin d’un maillot aux couleurs de votre club ? Avec l’offre sur-mesure, Miya crée un visuel de maillot unique à vos couleurs. Nous produisons des équipements personnalisés haut de gamme, dédiés à votre sport, qui respectent l'environnement et préservent votre peau.</p>
                <p class="mt-2">Prenez soin de vos joueuses, laissez Miya vous équiper.</p>
                <a href="#devis" class="btn-primary mt-8">Obtenez un devis</a>
            </div>
        </section>

        <!-- Offre collection -->
        <section class="collection section-pad">
            <div class="text-container">
                <h2 class="text-lg uppercase font-extrabold font-title leading-tight">02 - Offre collection</h2>
                <p class="mt-4">Petit budget ou manque temps ? Choisissez un design parmi notre collection spéciale club et nous le mettrons aux couleurs de votre club !</p>
                <a href="#devis" class="btn-primary mt-8">Obtenez un devis</a>
            </div>
            <div class="collection__list swiper swiper-list-products mt-16 lg:mt-0">
                <div class="collection__list__wrapper swiper-wrapper">
                <?php
                while ( have_rows('collection') ) :
                    the_row();

                    $image = get_sub_field('design');
                    $nom = get_sub_field('nom_du_design');

                    if($image):
                ?>
                    <div class="collection__list__item swiper-slide">
                        <?= wp_get_attachment_image($image['ID'], $image['sizes']['large']); ?>
                        <p class="nom_du_design"><?= $nom; ?></p>
                    </div>
                <?php    
                    endif;
                endwhile;
                ?>  

                </div>
            </div>
        </section>

        <!-- Réassurance -->
        <section class="reassurance container">
            <ul class="reassurance__list">
                <li class="reassurance__item">Tous nos équipements sont conçus en France et produit en Europe.</li>
                <li class="reassurance__item">Nos tissus ont tous le label de qualité Oeko-tex, qui préserve votre peau  et l’environnement.</li>
                <li class="reassurance__item">Toutes nos coupes sont pensées pour les femmes et adaptées spécifiquement à votre sport.</li>
            </ul>
        </section>

        <!-- Devis -->
        <section class="devis section-pad relative" id="devis">
            <div class="container lg:grid lg:grid-cols-2">
                <div class="text-container lg:w-11/12">
                    <h2 class="page-title-sm">Obtenez un devis</h2>
                    <p class="mt-8">Merci de préciser la quantité de maillot par taille souhaitée si vous la connaissez, et vos disponibilités si vous souhaitez vous faire rappeler.</p>
                    <p class="mt-2">Nous vous répondrons dans les plus bref délais. </p>
                </div>
                <div class="form-container mt-16 lg:mt-0">
                    <?php 
                        $shortcode = get_field('formulaire_devis');
                        echo do_shortcode($shortcode); 
                    ?>
                    <?php get_template_part('template-parts/button-guide-des-tailles'); ?>
                </div>
            </div>
            <div class="deco-circle left lg:top-2/3"></div>
        </section>

    </div>

<?php get_footer(); ?>