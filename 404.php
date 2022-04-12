<?php
get_header();
?>
<!-- Start Error Area -->
<div class="error-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="error-content">
                    <h1><?php _e('404','shopgridx'); ?></h1>
                    <h2><?php _e('Oops! Page Not Found!','shopgirdx'); ?></h2>
                    <p><?php _e('The page you are looking for does not exist. It might have been moved or deleted.','shopgridx'); ?></p>
                    <div class="button">
                        <a href="<?php echo esc_url(site_url()); ?>" class="btn"><?php _e('Back to Home','shopgridx'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Error Area -->
<?php
get_footer();
?>