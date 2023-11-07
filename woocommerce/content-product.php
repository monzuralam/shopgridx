<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'col-lg-4 col-md-6 col-12', $product ); ?> >
	<!-- Start Single Product -->
	<div class="single-product">
		<div class="product-image">
			<?php the_post_thumbnail(); ?>
			<div class="button">
				<a href="<?php echo $product->add_to_cart_url() ?>" class="btn"><i class="lni lni-cart"></i> <?php _e('Add to Cart', 'shopgridx'); ?></a>
			</div>
		</div>
		<div class="product-info">
			<?php
				$terms = get_the_terms( $post->ID, 'product_cat' );
				if ( $terms && ! is_wp_error( $terms ) ) : 
					$cat_links = array();
					foreach ( $terms as $term ) {
							$cat_links[] = '<a class="label bg-terciary" href="/?product_cat='.$term->slug.'" title="'.$term->name.'">'.$term->name.'</a>';
					}
					$on_cat = join( " ", $cat_links );
			?>
			<span class="category"><?php echo $on_cat; ?></span>
			<?php endif; ?>

			<h4 class="title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h4>
			<ul class="review">
				<li><i class="lni lni-star-filled"></i></li>
				<li><i class="lni lni-star-filled"></i></li>
				<li><i class="lni lni-star-filled"></i></li>
				<li><i class="lni lni-star-filled"></i></li>
				<li><i class="lni lni-star"></i></li>
				<li><span>4.0 Review(s)</span></li>
			</ul>
			<div class="price">
				<?php
					$product = wc_get_product( get_the_ID() );
					echo $product->get_price_html();
				?>
			</div>
		</div>
	</div>
	<!-- End Single Product -->
</div>
