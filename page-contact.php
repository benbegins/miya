<?php get_header(); ?>

    <div class="contact">
        
        <!-- Title -->
        <section class="section-pad">
            <div class="container">
                <h1 class="page-title-lg">Contact</h1>
            </div>
        </section>

        <section class="section-pad-bottom relative">
            <div class="container lg:grid lg:grid-cols-2">
                <div class="lg:w-5/6">
                    <p>Vous avez une question ? Un suggestion ? Vous vous reconnaissez dans les valeurs de MIYA et vous souhaitez en savoir plus et obtenir un rdv commercial ? Ici, nous répondrons à toutes vos demandes concernant la marque ou nos produits.</p>
                </div>
                <div class="mt-8 lg:mt-0">
                    <?php 
                        $shortcode = get_field('formulaire');
                        echo do_shortcode($shortcode);
                    ?>
                </div>
            </div>
            <div class="deco-circle left lg:top-2/3"></div>
        </section>

    </div>

<?php get_footer(); ?>