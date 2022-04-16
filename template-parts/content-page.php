<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShopgridX
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="contact-head">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                    the_content();
                ?>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->