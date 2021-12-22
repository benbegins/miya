<?php 
/* 
Template Name: Page Texte
*/

get_header();
?>

    <div class="page-texte">

        <!-- Title -->
        <section class="section-pad-top">
            <div class="container lg:w-1/2 lg:mx-auto">
                <h1 class="page-title-sm"><?php the_title(); ?></h1>
            </div>
        </section>

        <section class="section-pad">
            <div class="container main-content lg:w-1/2 lg:mx-auto">
                <?php 
                    while(have_posts()): the_post();
                        the_content(); 
                    endwhile;
                ?>
            </div>
        </section>


    </div>

<?php get_footer(); ?>