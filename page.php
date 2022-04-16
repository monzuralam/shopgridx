<?php
get_header();
?>
    <!-- Start section area -->
    <section class="section">
        <div class="container">
            <?php 
            while(have_posts()):
                the_post();
                
                get_template_part('template-parts/content','page');

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                
            endwhile;
            ?>
        </div>
    </section>
    <!--/ End section area  -->
<?php
get_footer();
?>