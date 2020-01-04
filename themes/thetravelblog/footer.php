        <footer>
        
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <?php dynamic_sidebar('footer_widget'); ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Follow Us</h3>
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'social_menu'
                            ));
                        
                        ?>
                    </div>
                </div>
            </div>
            <p class="text-center site-info">
                <?php bloginfo('name') ?> <?php echo date('Y'); ?>
            </p>

        </footer>
        <?php wp_footer(); ?>
    </body>
</html>