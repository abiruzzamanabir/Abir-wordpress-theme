<?php
/*
this template for displaying archive pages
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9"> 

            <div id="archive_title">
                <?php the_archive_title( '<h1 class="title">','</h1>') ?>
                <?php the_archive_description('<div class="description">','</div>') ?>
            </div>
                <?php get_template_part('template_part/blog_setup'); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>

</section>
<?php
/*
displaying footer
*/
get_footer(); ?>