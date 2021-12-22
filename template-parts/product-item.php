<?php global $product; ?>

<a class="product-item swiper-slide" href="<?php the_permalink(); ?>">
    <div class="product-item__img-container">
        <?php the_post_thumbnail('xl'); ?>
    </div>
    <div class="product-item__infos">
        <p class="text-xs opacity-50 mt-4">
            <?php 
            $terms = get_the_terms( get_the_ID() , 'product_cat');

            foreach($terms as $term){
                $parent_term = get_term( $term->parent, 'product_cat' );
                if($parent_term->slug == 'type-dequipement'){
                   echo $term->name; 
                   break;
                }
            }
            ?>
        </p>
        <p class="product-item__infos__title text-sm font-extrabold uppercase font-title"><?php the_title(); ?></p>
        <p class="text-sm"><?php echo $product->get_price_html(); ?></p>
    </div>
</a>