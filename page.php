<?php
get_header();
?>
    <!-- Start section area -->
    <section class="section">
        <div class="container">
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
        </div>
    </section>
    <!--/ End section area  -->
<?php
get_footer();
?>