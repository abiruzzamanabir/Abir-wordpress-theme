<?php
/*
displaying header
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="blog_area">
                            <div class="post_thumb">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnails'); ?></a>
                            </div>
                            <div class="post_details">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php the_excerpt(); ?>
                            </div>

                        </div>
                <?php
                    endwhile;
                else :
                    _e('No Post Found');
                endif;
                ?>
                <div id="page_nav">
                    <?php if ('abir_pagenav') {
                        abir_pagenav();
                    } else { ?>
                        <?php next_posts_link(); ?>
                        <?php previous_posts_link(); ?>
                    <?php
                    } ?></div>
            </div>
            <div class="col-md-3">
                <h2>This is Sidebar</h2>
            </div>
        </div>
    </div>

</section>
<?php
/*
displaying footer
*/
get_footer(); ?>