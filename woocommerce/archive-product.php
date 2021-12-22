<?php get_header(); ?>

    <div class="boutique">

        <section class="section-pad relative">
            <div class="container">
                <h1 class="page-title-lg">Collection</h1>
            </div>
            <div class="deco-circle right"></div>
        </section>

        <section class="section-pad-bottom">
            <div class="container lg:flex lg:items-start">
                <div class="lg:w-1/4">
                    <h2 class="text-lg font-title font-extrabold uppercase md:w-1/2 lg:w-5/6">Équipez-vous à la hauteur de vos ambitions</h2>
                </div>
                <div class="boutique__list-products mt-8 lg:mt-0 lg:w-3/4">
                    <?php
                    if(have_posts()):
                        while ( have_posts() ) :
                            the_post();
                            // global $product; 
                            
                            echo get_template_part('template-parts/product-item');
                        endwhile;
                    endif;
                    ?>  
                </div>
            </div>
        </section>

    </div>

<?php get_footer(); ?>