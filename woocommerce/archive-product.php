<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;
get_header('shop');
?>
<section class="product-grids section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12">
				<?php
				/**
				 * Hook: woocommerce_sidebar.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action('woocommerce_sidebar');
				?>
			</div>
			<div class="col-lg-9 col-12">
				<?php
				/**
				 * Hook: woocommerce_before_main_content.
				 *
				 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
				 * @hooked woocommerce_breadcrumb - 20
				 * @hooked WC_Structured_Data::generate_website_data() - 30
				 */
				do_action('woocommerce_before_main_content');
				?>
				<div class="product-grids-head">
					<div class="product-grid-topbar">
						<div class="row align-items-center">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="product-sorting">
									<label for="sorting">Sort by:</label>
									<select class="form-control" id="sorting">
										<option>Popularity</option>
										<option>Low - High Price</option>
										<option>High - Low Price</option>
										<option>Average Rating</option>
										<option>A - Z Order</option>
										<option>Z - A Order</option>
									</select>
									<h3 class="total-show-product">Showing: <span>1 - 12 items</span></h3>
								</div>
							</div>
							<div class="col-lg-5 col-md-4 col-12">
							</div>
						</div>
					</div>
					<div class="product-area">
						<div class="row">
							<?php
								if (woocommerce_product_loop()) {

									/**
									 * Hook: woocommerce_before_shop_loop.
									 *
									 * @hooked woocommerce_output_all_notices - 10
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 */
									do_action('woocommerce_before_shop_loop');
					
									woocommerce_product_loop_start();
					
									if (wc_get_loop_prop('total')) {
										while (have_posts()) {
											the_post();
					
											/**
											 * Hook: woocommerce_shop_loop.
											 */
											do_action('woocommerce_shop_loop');
					
											wc_get_template_part('content', 'product');
										}
									}
					
									woocommerce_product_loop_end();
					
									/**
									 * Hook: woocommerce_after_shop_loop.
									 *
									 * @hooked woocommerce_pagination - 10
									 */
									do_action('woocommerce_after_shop_loop');
								} else {
									/**
									 * Hook: woocommerce_no_products_found.
									 *
									 * @hooked wc_no_products_found - 10
									 */
									do_action('woocommerce_no_products_found');
								}
							?>
						</div>
					</div>
				</div>
				<?php
					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action('woocommerce_after_main_content');
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer('shop');