<?php
/*
displaying header
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

</section>
<?php
/*
displaying footer
*/
get_footer(); ?>