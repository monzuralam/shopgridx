<aside class="">
    <div class="sidebar <?php (function_exists('is_woocommerce')) ? esc_attr_e('product-sidebar') : esc_attr_e('blog-grid-page');  ?>">
        <?php
        if (function_exists('is_woocommerce')) :
            if( is_active_sidebar( 'shop-sidebar' ) ):
                dynamic_sidebar( 'shop-sidebar' );
            endif;
        else :
            if( is_active_sidebar( 'sidebar' ) ):
                dynamic_sidebar( 'sidebar' );
            endif;
        endif;
        ?>
    </div>
</aside>