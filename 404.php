<?php
/*
displaying 404 Page
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <?php get_template_part('template_part/blog_setup'); ?>
                <p>404 Error - Page Not Found</p>
                <h1>Oopssss! Look Like Something Wrong</h1>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php echo home_url(); ?>" class="Homepage">Homepage</a>
            </div>
        </div>
    </div>

</section>
<?php
/*
displaying footer
*/
get_footer(); ?>