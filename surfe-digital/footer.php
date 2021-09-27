        <footer>

            <div class="container-fluid footer-container">
                <div class="row">

                <div class="col-lg col-sm-12 footer-logo-container">
                    <?php the_custom_logo(); ?>
                </div>

                <div class="col footer-group1">
                    <?php if (is_active_sidebar('group1')){
                        dynamic_sidebar( 'group1' );
                    } ?>
                </div>

                <div class="col footer-group2">
                    <?php if (is_active_sidebar('group2')){
                        dynamic_sidebar( 'group2' );
                    } ?>
                </div>

                <div class="col footer-contact">
                    
                    <?php if (is_active_sidebar('contact-info')){
                        dynamic_sidebar( 'contact-info' );
                    } ?>

                </div>

                <div class="col footer-social">
                    
                    <?php if (is_active_sidebar('social-media')){
                        dynamic_sidebar( 'social-media' );
                    } ?>

                </div>

                </div>
            </div>

        </footer>


    </body>

    <?php wp_footer(); ?>

</html>