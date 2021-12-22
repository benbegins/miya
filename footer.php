    <!-- GUIDE DES TAILLES -->
    <?php get_template_part('template-parts/guide-des-tailles'); ?>

    <!-- INSTAGRAM -->
    <section class="instagram">
        <div class="container">
            <div>
                <h2 class="text-2xl font-extrabold font-title uppercase">Retrouvez Miya <br class="hidden lg:block">sur Instagram</h2>
                <a href="https://www.instagram.com/miya_sportfr/" target="_blank" class="btn-secondary">@Miya_sportfr</a>
            </div>
            <div class="mt-8">
                <?php echo do_shortcode(' [instagram-feed]'); ?>
            </div>
        </div>
        <div class="instagram__motif"></div>
    </section>
    
    <!-- FOOTER -->
    <footer class="site-footer">
        <section class="site-footer__main">
            <div class="container text-center md:flex md:justify-between md:items-center md:text-left">
                <ul class="site-footer__nav md:grid md:grid-rows-3 md:grid-flow-col md:gap-x-16 lg:grid-rows-2 lg:gap-x-24">
                    <?php 
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['footer'];
                        $primaryNav = wp_get_nav_menu_items($menuID);

                        foreach ( $primaryNav as $navItem ) {
                            echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                        }
                    ?>
                </ul>
                
                <div class="site-footer__logo">
                    <img class="my-20 mx-auto md:m-0" src="<?= get_template_directory_uri(  ); ?>/dist/img/logo-miya-footer.svg" alt="Logo Miya">
                </div>
            </div>
        </section>

        <section class="pb-10 text-xs opacity-75">
            <div class="container text-center md:flex md:justify-between md:items-center">
                <div class="md:flex">
                    <p class="py-1">Miya © 2021</p>
                    <p class="py-1 md:ml-6"><a href="<?= get_site_url(); ?>/mentions-legales-cgv" class="hover:underline">Mentions légales & CGV</a></p>
                </div>
                <div>
                    <p class="py-1">Conçu par <a class="hover:underline" href="https://bemy.studio" target="_blank">BEMY STUDIO</a></p>
                </div>
            </div>
        </section>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>