<?php
/*
this template for displaying search results
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9"> 

            <div id="search_title">
                <h1 class="title"><?php printf(__('Search Results For: %s','abiruzzaman'),get_search_query()) ;?></h1>
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