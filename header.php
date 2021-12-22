<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header class="site-header">
        <div class="container flex justify-between items-center">

            <!-- Logo -->
            <div class="site-header__logo">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(  ); ?>/dist/img/logo-miya.svg" alt="Logo Miya">  
                </a>
            </div>

            <div>
                <!-- Burger -->
                <div class="site-header__burger" @click="menuActive = !menuActive" :class="{active: menuActive}">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>

                <nav class="site-header__nav" :class="{active: menuActive}">
                    <ul class="site-header__nav__list">

                        <?php 
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['main'];
                        $primaryNav = wp_get_nav_menu_items($menuID);

                        foreach ( $primaryNav as $navItem ) {
                            echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                        }
                        ?>

                        <div class="flex items-center mt-10 lg:mt-0">
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/miya_sportfr/" target="_blank" class="site-header__icon-instagram">Instagram</a> 
                            <!-- Panier -->
                            <?php 
                                $card_items = WC()->cart->get_cart_contents_count();
                            ?>
                            <a href="<?php echo wc_get_cart_url(); ?>" class="site-header__icon-card ml-6 lg:ml-10">
                                <?php 
                                    if($card_items > 0){
                                        echo $card_items;
                                    }
                                ?>
                            </a> 
                            <!-- <a href="<?php echo wc_get_cart_url(); ?>" class="site-header__icon-card ml-6 lg:ml-10"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></a>  -->
                        </div>
                        
                    </ul>
                </nav>
            </div>    

        </div>
    </header>