<footder id="footer_area">
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-1' );?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-2' );?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-3' );?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-4' );?>
                    </div>
                </div>
            </div>
        </div>
        <section id="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo get_theme_mod('abir_copyright_section'); ?> <a href="<?php echo get_theme_mod('abir_copyright_section_link'); ?>"><?php echo get_theme_mod('abir_copyright_section_link_text'); ?></a></p>
                    </div>
                </div>
            </div>
        </section>
    </footder>

    <?php wp_footer(); ?>
</body>

</html>