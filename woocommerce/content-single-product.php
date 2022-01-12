<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	

	<section class="hero">
		


		<div class="hero__gallery-container">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
			  
		</div>

		<div class="hero__text-container">
			<?php 
			$terms = get_the_terms( get_the_ID() , 'product_cat');

			foreach($terms as $term):
				$parent_term = get_term( $term->parent, 'product_cat' );
				if($parent_term->slug == 'type-dequipement'):
					$link = get_term_link($term);
					$name = $term->name;
			?>

			<a href="<?= $link; ?>" class="text-xs opacity-50 hover:opacity-100"><?= $name; ?></a>

			<?php
					break;
				endif;
			endforeach;
				?>
			<h1 class="page-title-sm"><?php the_title(); ?></h1>
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>

			<div class="text-center">
				<?php get_template_part('template-parts/button-guide-des-tailles'); ?>
			</div>
			
			<div class="description mt-16">
				<?php the_content(); ?>
				<a href="#infos-supplementaires" class="btn-secondary mt-2">En savoir plus</a>
			</div>
		</div>
	</section>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>

	
	<!-- REASSURANCE -->
	<section class="section-pad-top reassurance">
		<div class="container">
			<ul class="reassurance__list">
				<li class="reassurance__item">Payez avec Mastercard, Visa, AmeEx, PayPal</li>
				<li class="reassurance__item">Livraison dans toute la France</li>
				<li class="reassurance__item">Label Oeko-Tex, exempt de substance nocive pour l’environnement</li>
			</ul>
		</div>
	</section>


	<!-- Infos supplémentaires -->
	<section class="infos-supplementaires section-pad-top" id="infos-supplementaires">

		<!-- Qualité -->
		<?php 
		$qualite = get_field('qualite');
		if($qualite):
		?>
		<div class="qualite mb-16 lg:mb-24 lg:w-1/2">
			<div class="container">
				<h2 class="section-title">La qualité Miya</h2>
				<div class="mt-2">
					<?= $qualite; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<!-- Photo -->
		<?php 
			$images_ids = $product->get_gallery_image_ids();
			if($images_ids):
		?>
		<div class="photo-secondaire">
			<div class="img-container">
				<?= wp_get_attachment_image($images_ids[0], 'xl'); ?>	
			</div>
		</div>
		<?php endif; ?>


		<!-- Conception -->
		<?php 
		$conception = get_field('conception');
		if($conception):
		?>
		<div class="conception my-16 lg:my-24">
			<div class="container">
				<div class="lg:w-1/2 lg:mx-auto">
					<h2 class="section-title">Coupe et conception</h2>
					<div class="mt-2">
						<?= $conception; ?>
					</div>	
				</div>
				
			</div>
		</div>
		<?php endif; ?>


		<!-- Caracteristiques -->
		<div class="caracteristiques mt-16 lg:mt-24">
			<div class="container">
				<div class="md:grid md:grid-cols-2 md:gap-8 lg:w-8/12 lg:left-1/4 lg:relative">

					<?php 
					$caracteristiques = get_field('caracteristiques');
					if($caracteristiques):
					?>
					<div>
						<h2 class="section-title">Caractéristiques</h2>
						<div class="mt-2">
							<?= $caracteristiques; ?>
						</div>	
					</div>
					<?php endif; ?>	

					<div class="mt-16 md:mt-0">
						<p class="text-lg font-title font-extrabold uppercase leading-tight">Nos équipements sont fièrement créés en France, fabriqués en Europe et respectent l’environnement.</p>
					</div>	

				</div>
			</div>
		</div>
		

	</section>
	
	


	<!-- AUTRES PRODUITS -->
	<?php
	$args = array(
		'post_type'              => array( 'product' ),
		'posts_per_page'         => '3',
		'post_status'    => 'publish',
		'post__not_in'    		=> array($post->ID),
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
				<p class="text-lg font-extrabold font-title uppercase leading-tight hidden lg:block">Complétez votre équipements&nbsp;!</p>
				<a href="<?= get_site_url(); ?>/boutique" class="btn-secondary mt-8">Tous les produits</a>
			</div>
		</div>
	</section>
	<?php
	endif;
	wp_reset_postdata();
	?>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
