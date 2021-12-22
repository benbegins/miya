<?php get_header(); ?>

    <div>

        <!-- 404 -->
        <section class="section-pad">
            <div class="container md:grid md:grid-cols-2 md:gap-16 lg:gap-32">
                <div>
                    <img src="<?php echo get_template_directory_uri(  ); ?>/dist/img/404.jpg" alt="">
                </div>
                <div class="mt-16 md:mt-0 ">
                    <h1 class="page-title-lg mb-8">404</h1>
                    <p class="text-xl font-title font-extrabold uppercase leading-tight">Navré, il n’y a rien ici !</p>
                    <p class="text-sm">La page que vous recherchez a certainement été supprimée ou déplacée.</p>
                    <a href="<?= get_site_url(); ?>" class="btn-primary mt-4">Retour à l'accueil</a>   
                </div>
                
            </div>
        </section>

    </div>

<?php get_footer(); ?>