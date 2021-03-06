<?php get_header(); ?>

    <div>

        <!-- Title -->
        <section class="section-pad-top">
            <div class="container">
                <h1 class="page-title-sm"><?php the_title(); ?></h1>
            </div>
        </section>

        <section class="section-pad">
            <div class="container<?php if(is_cart() || is_checkout() || is_account_page()){echo ' woocommerce__container';} ?>">
                <?php 
                    while(have_posts()): the_post();
                        the_content(); 
                    endwhile;
                ?>
            </div>
        </section>


    </div>

<?php get_footer(); ?>