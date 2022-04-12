<?php
get_header();
?>
    <!-- Start Blog Singel Area -->
    <section class="section blog-section blog-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        <?php
                            if(have_posts()):
                                while(have_posts()): the_post();
                        ?>
                        <div class="col-lg-6 col-md-6 col-12">
                            <!-- Start Single Blog -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php 
                                            the_post_thumbnail('blog_thumb');
                                        ?>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <a class="category" href="javascript:void(0)">Electronic</a>
                                    <h4>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <div class="button">
                                        <a href="<?php the_permalink(); ?>" class="btn"><?php _e('Read More','shopgridx'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <?php 
                                endwhile;
                            endif;
                        ?>
                    </div>
                    <!-- Pagination -->
                    <div class="pagination left blog-grid-page">
                        <ul class="pagination-list">
                            <li><a href="javascript:void(0)">Prev</a></li>
                            <li class="active"><a href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">4</a></li>
                            <li><a href="javascript:void(0)">Next</a></li>
                        </ul>
                    </div>
                    <!--/ End Pagination -->
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <!-- End Blog Singel Area -->
<?php get_footer(); ?>